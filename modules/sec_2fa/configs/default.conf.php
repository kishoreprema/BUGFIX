<?php
/* vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  Codificación: UTF-8
  +----------------------------------------------------------------------+
  | Issabel version 4.0                                                  |
  | http://www.issabel.org                                               |
  +----------------------------------------------------------------------+
  | Copyright (c) 2019 Issabel Guru                                      |
  +----------------------------------------------------------------------+
  $Id: default.conf.php,v 1.0 2019-12-19 02:12:12 Nicolas Gudino nicolas@issabel.guru Exp $ 
*/

global $arrConfModule, $arrConf;
$arrConfModule['module_name'] = 'sec_2fay';
$arrConfModule['templates_dir'] = 'templates';
$arrConfModule['dsn_conn_database'] = "sqlite3:///$arrConf[issabel_dbdir]/acl.db";

