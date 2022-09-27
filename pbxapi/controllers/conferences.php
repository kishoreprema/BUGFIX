<?php
/* vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  +----------------------------------------------------------------------+
  | Issabel version 4.0                                                  |
  | http://www.issabel.org                                               |
  +----------------------------------------------------------------------+
  | Copyright (c) 2018 Issabel Foundation                                |
  +----------------------------------------------------------------------+
  | This program is free software: you can redistribute it and/or modify |
  | it under the terms of the GNU General Public License as published by |
  | the Free Software Foundation, either version 3 of the License, or    |
  | (at your option) any later version.                                  |
  |                                                                      |
  | This program is distributed in the hope that it will be useful,      |
  | but WITHOUT ANY WARRANTY; without even the implied warranty of       |
  | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        |
  | GNU General Public License for more details.                         |
  |                                                                      |
  | You should have received a copy of the GNU General Public License    |
  | along with this program.  If not, see <http://www.gnu.org/licenses/> |
  +----------------------------------------------------------------------+
  | The Initial Developer of the Original Code is Issabel LLC            |
  +----------------------------------------------------------------------+
  $Id: conferences.php, Tue 04 Sep 2018 09:52:52 AM EDT, nicolas@issabel.com
*/

class conferences extends rest {
    protected $table           = 'meetme';
    protected $id_field        = 'exten';
    protected $extension_field = 'exten';
    protected $name_field      = 'description';
    protected $search_field    = 'description';
    protected $initial_exten_n = '500';

    protected $provides_destinations = true;
    protected $context         = 'ext-meetme';
    protected $category        = 'Conferences';
    protected $required_fields = array('extension');

    protected $used_extensions = array();
    protected $get_all         = 0;

    protected $sql_preparation_queries = array(
        'ALTER TABLE meetme ADD PRIMARY KEY (exten)'
    );

    protected $options = array(
        'T' => 'talker_detection',
        'w' => 'wait_for_leader',
        'o' => 'talker_optimization',
        'q' => 'quiet_mode',
        'c' => 'announce_user_count',
        'i' => 'announce_user_join_leave',
        'M' => 'music_on_hold',
        's' => 'allow_menu',
        'r' => 'record',
        'm' => 'join_muted'
    );

    protected $field_map = array(
        'userpin'             => 'user_pin',
        'adminpin'            => 'admin_pin',
        'joinmsg_id'          => 'join_message_id',
        'users'               => 'max_participants',
        'music'               => 'music_on_hold_class'
    );

    protected $defaults = array(
        'admin_pin'        => '',
        'user_pin'         => '',
        'options'          => '',
        'music'            => 'inherit',
        'join_message_id'  => 0,
        'max_participants' => 10
    );

    public function get($f3, $from_child=0) {

        $db = $f3->get('DB');

        $original_results = parent::get($f3,1);

        foreach($original_results as $idx=>$data) {
            $curopt = str_split($original_results[$idx]['options']);
            unset($original_results[$idx]['options']);

            // default all options to no/disable
            foreach($this->options as $key=>$val) {
                $original_results[$idx]['options'][$val]='no';
            }

            foreach($curopt as $opt) {
                if(array_key_exists($opt,$this->options)) {
                    $original_results[$idx]['options'][$this->options[$opt]]='yes';
                }
            }
        }

        if(is_array($from_child)) {
            $this->outputSuccess($original_results);
        } else {
            return $original_results;
        }

    }

    public function put($f3,$from_child) {

        $errors = array();
        $db = $f3->get('DB');

        if($f3->get('PARAMS.id')=='') {
            $errors[]=array('status'=>'405','detail'=>'Unable to update. Missing record id');
            $this->dieWithErrors($errors);
        }
        $oneid = $f3->get('PARAMS.id');
        $this->data->load(array($this->id_field.'=?',$oneid));

        if ($this->data->dry()) {
            $errors[]=array('status'=>'404','detail'=>'Could not find a record to update');
            $this->dieWithErrors($errors);
        }

        $input = $this->parseInputData($f3);

        $newopts = $input['options'];
        unset($input['options']);
        $input['options'] = $this->setOptions($newopts);

        $input = $this->flatten($input);
        $input = $this->transformValues($f3,$input);
        $input = $this->validateValues($f3,$input);

        $field_map_reverse = array_flip($this->field_map);
        foreach($input as $key=>$val) {
            if(array_key_exists($key,$field_map_reverse)) {
                unset($input[$key]);
                $input[$field_map_reverse[$key]]=$val;
            }
        }

        $f3->set('INPUT',$input);

        try {
            $this->data->copyFrom('INPUT');
            $this->data->update();
        } catch(\PDOException $e) {
            $msg  = $e->getMessage();
            $code = $e->getCode();
            $errors[]=array('status'=>'400','detail'=>$msg,'code'=>$code);
            $this->dieWithErrors($errors);
        }

        $this->applyChanges($input);
    }

    function post($f3,$from_child) {

        $errors = array();
        $loc = $f3->get('REALM');

        if($f3->get('PARAMS.id')<>'') {
            $errors[]=array('status'=>'400','detail'=>'We refuse to insert a record if a resource id is passed. For update use the PUT method instead.');
            $this->dieWithErrors($errors);
        }

        $input = $this->parseInputData($f3);

        $this->checkRequiredFields($input);

        $this->dieExtensionDuplicate($f3,$input['extension']);

        $newopts = $input['options'];
        unset($input['options']);
        $input['options'] = $this->setOptions($newopts);

        $input = $this->flatten($input);

        // Transform values passed if needed
        $input = $this->transformValues($f3,$input);
        $input = $this->validateValues($f3,$input);

        // Set default values if not passed via request, defaults uses the mapped/human readable field name
        $input = $this->setDefaults($f3,$input);

        // Set real table field names
        $field_map_reverse = array_flip($this->field_map);
        foreach($input as $key=>$val) {
            if(array_key_exists($key,$field_map_reverse)) {
                unset($input[$key]);
                $input[$field_map_reverse[$key]]=$val;
            }
        }

        $f3->set('INPUT',$input);

        try {
            $this->data->copyFrom('INPUT');
            $this->data->save();

            if(isset($this->data->id)) {
                $mapid = $this->data->id;
            } else {
                $mapid = $this->data[$this->id_field];
            }

            $this->applyChanges($input);
            // 201 CREATED
            header("Location: $loc/$mapid", true, 201);
            die();

        } catch(\PDOException $e) {
            $err = $e->errorInfo;
            $msg = $e->getMessage();

            if ($e->getCode() != 23000) {
                // when trying to insert duplicate
                $errors[]=array('status'=>'409','detail'=>$msg);
            } else {
                // on other errors
                $errors[]=array('status'=>'400','detail'=>$msg);
            }
            $this->dieWithErrors($errors);
        }
    }

    protected function setOptions($newoptions) {
        if(!is_array($newoptions)) {
            return  '';
        }
        $roptions = array_flip($this->options);
        $curopt = str_split($this->data->options);
        $ret = '';
        foreach($newoptions as $key=>$val) {
            if(array_key_exists($key,$roptions)) {
                if($val=='yes') {
                    $curopt[]=$roptions[$key];
                } else {
                    $curopt = array_diff($curopt,array($roptions[$key]));
                }
            }
        }
        $ret = implode('',array_unique($curopt));
        return $ret;
    }

}
