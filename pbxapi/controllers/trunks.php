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
  $Id: trunks.php, Tue 04 Sep 2018 09:54:59 AM EDT, nicolas@issabel.com
*/

class trunks extends rest {
    protected $table      = "trunks";
    protected $id_field   = 'trunkid';
    protected $name_field = 'name';
    protected $list_fields = array('tech','channelid');
    protected $extension_field = '';

    protected $provides_destinations = true;
    protected $context               = 'ext-trunk';
    protected $category              = 'Trunks';

    protected $field_map = array(
        'tech'               => 'technology',
        'channelid'          => 'channel_name',
        'usercontext'        => 'user_context',
        'maxchans'           => 'maximum_channels',
        'outcid'             => 'outbound_callerid',
        'keepcid'            => 'callerid_options',
        'dialoutprefix'      => 'dialout_prefix',
        'continue'           => 'continue_if_busy'
    );

    protected $defaults = array(
        'technology' => 'sip',
        'callerid_options' => 'off',
        'user_context' => 'notneeded'
    );

    protected $transforms = array(
        'continue_if_busy'    => 'yesno',
        'disabled'            => 'yesno',
    );

    protected $presentationTransforms = array(
        'continue_if_busy'    => 'presentation_yesno',
        'disabled'            => 'presentation_yesno',
    );

    function __construct($f3, $ami_connect=0, $sql_mapper=1) {
        parent::__construct($f3,1,1);
    }

    public function get($f3, $from_child=0) {

        $db = $f3->get('DB');
        $ami = $f3->get('AMI');

        $original_results = parent::get($f3,1);

        // get ASTDB trunk dial options
        $res = $ami->DatabaseShow('TRUNK');
        $astdb = array();
        foreach($res as $key=>$val) {
            $partes = preg_split("/\//",$key);
            $astdb[$partes[3]][$partes[2]]=$val;
        }

        foreach($original_results as $idx=>$data) {
            // get sip trunk details
            $trunkid = $data['id'];
            if(isset($astdb['dialopts'][$trunkid])) {
                $original_results[$idx]['dial_options']=$astdb['dialopts'][$trunkid];
            }

            //get dial patters
            $query = "SELECT match_pattern_prefix,match_pattern_pass,prepend_digits,seq FROM trunk_dialpatterns WHERE trunkid=?";
            $rows = $db->exec($query,array($trunkid));
            foreach($rows as $idx2=>$datapattern) {
                foreach($datapattern as $key=>$val) {
                    $finalkey = isset($this->field_map[$key])?$this->field_map[$key]:$key;
                    unset($rows[$idx2][$key]);
                    $rows[$idx2][$finalkey]=$val;
                }
                unset($rows[$idx2]['trunkid']);
            }
            $original_results[$idx]['patterns']=count($rows)>0?$rows:array();

            if($data['technology']=='sip' || $data['technology']=='iax') {
                $peer = array();
                $user = array();
                $register = '';
                $query = "SELECT * FROM ".$data['technology']." WHERE id LIKE 'tr%-$trunkid'";
                $detrows = $this->db->exec($query);
                foreach($detrows as $row) {
                    if(preg_match("/^tr-peer/",$row['id'])) {
                        $peer[$row['keyword']]=$row['data'];
                    } else if (preg_match("/^tr-user/",$row['id'])) {
                        $user[$row['keyword']]=$row['data'];
                    } else if (preg_match("/^tr-reg/",$row['id'])) {
                        $register = $row['data'];
                    }
                }
                unset($peer['account']);
                unset($user['account']);
                $original_results[$idx]['peer']=$peer;
                $original_results[$idx]['user']=$user;
                if($register<>'') { $original_results[$idx]['register']=$register; } else { $original_results[$idx]['register']=""; }
            }

        }

        if(is_array($from_child)) {
            $this->outputSuccess($original_results);
        } else {
            return $original_results;
        }

    }

    public function post($f3, $from_child=0) {

        $db = $f3->get('DB');
        $ami = $f3->get('AMI');

        $input = $this->parseInputData($f3);

        $this->check_required_fields($f3,$input);

        $trunkid = parent::post($f3,1);

        if($trunkid==0) {
            // original fpbx table is badly designed and lacks an auto increment primary key, we must
            // change the trunkid field after default insertion to the next available number
            // the real fix will be up update the trunks table schema settings autoincrement 
            $rows = $this->db->exec("SELECT MAX(trunkid) cnt FROM trunks");
            $trunkid = $rows[0]['cnt'];
            $trunkid++;

            $query = "UPDATE trunks SET trunkid=? WHERE trunkid=0";
            $db->exec($query,array($trunkid));
        }

        if(isset($input['patterns'])) {
            if(count($input['patterns'])>0) {
                $this->insert_patterns($f3,$input,$trunkid);
            }
        }

        $this->insert_user_peer($f3,$input,$trunkid);

        $amidb = array();

        if(isset($input['dial_options'])) {
            $amidb[] = "TRUNK/$trunkid:dialopts:${input['dial_options']}";
        }

        foreach($amidb as &$valor) {
            list ($family,$key,$value) = preg_split("/:/",$valor,3);
            $ami->DatabaseDel($family,$key);
            $ami->DatabasePut($family,$key,$value);
        }

        $this->applyChanges($input);

        $loc = $f3->get('REALM');
        header("Location: $loc/".$trunkid, true, 201);
        die();
    }

    public function put($f3,$from_child) {

        $db = $f3->get('DB');
        $ami = $f3->get('AMI');

        parent::put($f3,1);

        $input = $this->parseInputData($f3);

        $this->check_required_fields($f3,$input);

        $trunkid = $f3->get('PARAMS.id');

        if(isset($input['patterns'])) {
            if(count($input['patterns'])>0) {
                $this->insert_patterns($f3,$input,$trunkid);
            }
        }

        $this->insert_user_peer($f3,$input,$trunkid);

        $amidb = array();

        if(isset($input['dial_options'])) {
            $amidb[] = "TRUNK/$trunkid:dialopts:${input['dial_options']}";
        }

        foreach($amidb as &$valor) {
            list ($family,$key,$value) = preg_split("/:/",$valor,3);
            $ami->DatabaseDel($family,$key);
            $ami->DatabasePut($family,$key,$value);
        }

        $this->applyChanges($input);
    }

    public function delete($f3,$from_child) {

        $errors = array();
        $db = $f3->get('DB');
        $ami = $f3->get('AMI');

        parent::delete($f3,1);

        $allids = $f3->get('PARAMS.id');

        $arrids  = preg_split("/,/",$allids);
        $cuantos = count($arrids);

        $repl    = str_repeat('?,',$cuantos);
        $repl    = substr($repl,0,-1);

        $query = "DELETE FROM trunk_dialpatterns WHERE trunkid IN ($repl)";

        try {
            $db->exec($query,$arrids);
        } catch(\PDOException $e) {
            $msg  = $e->getMessage();
            $code = $e->getCode();
            $errors[]=array('status'=>'500','detail'=>$msg, 'code'=>$code);
            $this->dieWithErrors($errors);
        }

        foreach($arrids as $trunkid) {

            $rows = $this->db->exec("SELECT tech FROM trunks WHERE trunkid=?",array($trunkid));
            if($rows[0]['tech']=='sip' || $rows[0]['tech']=='iax') {
                $db->exec("DELETE FROM ".$rows[0]['tech']." WHERE id = ?",array("tr-user-$trunkid"));
                $db->exec("DELETE FROM ".$rows[0]['tech']." WHERE id = ?",array("tr-peer-$trunkid"));
                $db->exec("DELETE FROM ".$rows[0]['tech']." WHERE id = ?",array("tr-reg-$trunkid"));
            }
            $ami->DatabaseDel("TRUNK/$trunkid", 'dialopts');
        }

        $this->applyChanges($input);

    }

    public function getDestinations($f3) {
        $ret = array();
        if($this->provides_destinations == true) {
            $res = $this->get($f3,1);
            $entity = ($this->category<>'')?$this->category:get_class($this);
            foreach($res as $key=>$val) {
                $ext = ($this->extension_field<>'')?$val['extension']:$val['id'];
                $ret[$entity][]=array('name'=>$val['name'].' ('.$val['technology'].')', 'destination'=>$this->context.','.$ext.',1');
            }
        }
        return $ret;
    }


    private function insert_user_peer($f3,$input,$trunkid) {

        $db = $f3->get('DB');

        if(!isset($input['technology'])) {
             $rows = $this->db->exec("SELECT tech FROM trunks WHERE trunkid=?",array($trunkid));
             $input['technology']=$rows[0]['tech'];
        }

        if($input['technology']<>'sip' && $input['technology']<>'iax') { return; }

        if(isset($input['user'])) {
            $tid = "tr-user-".intval($trunkid);
            $pid = $input['channel_name'];
            $db->exec("DELETE FROM ".$input['technology']." WHERE id=?",array($tid)); 
            $db->exec("INSERT INTO ".$input['technology']." (id,keyword,data) VALUES (?,?,?)",array($tid,'account',$pid));
            foreach($input['user'] as $key=>$val) {
                if($key=='account') continue;
                $query = "INSERT INTO ".$input['technology']." (id,keyword,data) VALUES (?,?,?)";
                $db->exec($query,array($tid,$key,$val));
            }
        } 

        if(isset($input['peer'])) {
            $tid = "tr-peer-".intval($trunkid);
            $pid = $input['channel_name'];
            $db->exec("DELETE FROM ".$input['technology']." WHERE id=?",array($tid));
            $db->exec("INSERT INTO ".$input['technology']." (id,keyword,data) VALUES (?,?,?)",array($tid,'account',$pid));
            foreach($input['peer'] as $key=>$val) {
                if($key=='account') continue;
                $query = "INSERT INTO ".$input['technology']." (id,keyword,data) VALUES (?,?,?)";
                $db->exec($query,array($tid,$key,$val));
            }
        }

        if(isset($input['register'])) {
            $tid = "tr-reg-".intval($trunkid);
            $db->exec("DELETE FROM ".$input['technology']." WHERE id=?",array($tid));
            if($input['register']<>'') {
                $db->exec("INSERT INTO ".$input['technology']." (id,keyword,data) VALUES (?,?,?)",array($tid,'register',$input['register']));
            }
        }
     
    }

    private function insert_patterns($f3,$input,$trunkid) {

        $db = $f3->get('DB');

        $defaults = array ( 
           'match_pattern_prefix' => '',
           'match_pattern_pass' => '',
           'prepend_digits' => '',
           'seq' =>  -1
        );

        $query = "DELETE FROM trunk_dialpatterns WHERE trunkid=?";
        $db->exec($query,array($trunkid));

        $cnt=1;
        foreach($input['patterns'] as $idx=>$data) {

            $fields = array();
            $vals   = array();
            $marks  = array();

            $fields[] = 'trunkid';
            $vals[]   = $trunkid;
            $marks[]  = '?';
            foreach($defaults as $key=>$val) {
                $final_key = isset($this->field_map[$key])?$this->field_map[$key]:$key;
                $final_val = isset($data[$final_key])?$data[$final_key]:$val;

                if($key=='seq') { $final_val=$cnt; } 
                $fields[] = $key;
                $marks[]  = '?';
                $vals[]   = $final_val;

            }
            $query = "INSERT INTO trunk_dialpatterns (`".implode("`,`",$fields)."`) VALUES (".implode(",",$marks).")"; 
            $db->exec($query,$vals);
            $cnt++;
        }
    }

    private function check_required_fields($f3,$input) {

        $errors = array();
        $db = $f3->get('DB');

        if(!isset($input['channel_name'])) {
            $errors[]=array('status'=>'422','source'=>'channel_name','detail'=>'Required field missing');
        }

        // reject patterns that are non numeric
        if(isset($input['patterns'])) {
            if(count($input['patterns'])>0) {
                $fields = array('prepend_digits');
                foreach($input['patterns'] as $idx=>$element) {
                    foreach($fields as $field) {
                        if(isset($input['patterns'][$idx][$field])) {
                            $without_digits = preg_replace("/[^0-9]/", "", $input['patterns'][$idx][$field]);
                            if($input['patterns'][$idx][$field]<>$without_digits) {
                                $errors[]=array('status'=>'422','source'=>'patterns.pattern','detail'=>'Incorrect format. Only digits allowed');
                            }
                        }
                    }
                }
                $fields = array('match_pattern_pass', 'match_pattern_prefix');
                foreach($input['patterns'] as $idx=>$element) {
                    foreach($fields as $field) {
                        if(isset($input['patterns'][$idx][$field])) {
                            $without_digits = preg_replace("/[^0-9]XZN\]\[\./i", "", $input['patterns'][$idx][$field]);
                            if($input['patterns'][$idx][$field]<>$without_digits) {
                                $errors[]=array('status'=>'422','source'=>'patterns.'.$field,'detail'=>'Incorrect format.');
                            }
                        }
                    }
                }
            }
        }
        if(count($errors)>0) {
            $this->dieWithErrors($errors);
        }
    }

    protected function yesno($data) {
        if($data=='no') { return 'off'; } else { return 'on'; }
    }

    protected function presentation_yesno($data) {
        if($data=='off') { return 'no'; } else { return 'yes'; }
    }

}

