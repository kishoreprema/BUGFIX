<?php
  /* vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  Codificación: UTF-8
  +----------------------------------------------------------------------+
  | Issabel version 4.0                                                  |
  | http://www.issabel.org                                               |
  +----------------------------------------------------------------------+
  | Copyright (c) 2019 Issabel Foundation                                |
  +----------------------------------------------------------------------+
  $Id: default.conf.php,v 1.1 2019-12-03 03:12:28 German Venturino german@issabel.com Exp $ 
  */
    global $arrConf;
    global $arrConfModule;

    $arrConfModule['module_name']       = 'theme_designer';
    $arrConfModule['templates_dir']     = 'themes';
    $arrConfModule['dsn_conn_database'] = "sqlite3:///$arrConf[issabel_dbdir]/settings.db";
?>
