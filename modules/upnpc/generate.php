<?php 
/* vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  +----------------------------------------------------------------------+
  | Copyright 2020 - Issabel Guru                                        |
  +----------------------------------------------------------------------+
*/
$module_name=basename(getcwd());
$documentRoot = $_SERVER["DOCUMENT_ROOT"];
include_once "$documentRoot/libs/paloSantoDB.class.php";
include_once "$documentRoot/libs/paloSantoACL.class.php";
session_name("issabelSession");
session_start();
$issabel_user = (isset($_SESSION["issabel_user"]))?$_SESSION["issabel_user"]:null;
$pDB = new paloDB("sqlite3:////var/www/db/acl.db");
$pACL = new paloACL($pDB);
$isUserAuth = $pACL->isUserAuthorized($issabel_user,"access",$module_name);
unset($_SESSION);
session_commit();
if(!$isUserAuth) { die('Unauthorized'); }

if ($_REQUEST){

    if($_REQUEST['send'] == "test") {
        $args = escapeshellarg("--test");            
        $cmd = "/usr/bin/issabel-helper upnp_control --test";
    } else if($_REQUEST['send'] == 'add' && isset($_REQUEST['localport']) && isset($_REQUEST['externalport'])) {
        $localport = escapeshellarg($_REQUEST['localport']);
        $externalport =escapeshellarg($_REQUEST['externalport']);
        $protocol = $_REQUEST['protocol'];
        $cmd = "/usr/bin/issabel-helper upnp_control --add $protocol -l $localport -e $externalport";            
        //echo '<script type="text/javascript">alert("' . $cmd . '")</script>';
    } else if($_REQUEST['send'] == 'del' && isset($_REQUEST['externalport'])) {
        $externalport =escapeshellarg($_REQUEST['externalport']);
        $protocol = $_REQUEST['protocol'];
        $cmd = "/usr/bin/issabel-helper upnp_control --del $protocol -e $externalport";
    }else{
        //
    }
        
    $cmd .= " || echo \"err_flag\"";
    //echo $cmd . "<br>";
    $file = popen($cmd,"r");
        while(!feof($file)) {
            $line = fgets($file);
            if($line == "err_flag\n") {
                $error = true;
                break;
            }
            echo $line."<br>";
            
            ob_flush();
            flush();
        }
        pclose($file);

}

?>
