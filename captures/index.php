<?php
include("/var/www/html/libs/misc.lib.php");
include("/var/www/html/configs/default.conf.php");
include("/var/www/html/libs/paloSantoACL.class.php");
include_once("/var/www/html/libs/paloSantoDB.class.php");

session_name("issabelSession");
session_start();
$pDB  = new paloDB($arrConf["issabel_dsn"]["acl"]);
$pACL = new paloACL($pDB);
if(isset($_SESSION["issabel_user"])) {
    $issabel_user = $_SESSION["issabel_user"];
} else {
    $issabel_user = "";
}
session_commit();

if(!$pACL->isUserAdministratorGroup($issabel_user)){
    $advice = _tr("Unauthorized");
    $msg1 = _tr("You are not authorized to access to this page");
    $msg2 = _tr("You need administrator privileges");
    $template['content']['theme'] = $arrConf['mainTheme'];
    $template['content']['title'] = _tr("Issabel Authentication");
    $template['content']['msg']   =  "<br /><b style='font-size:1.5em;'>$advice</b> <p>$msg1<br/>$msg2</p>";
    extract($template);
    if(file_exists("issabel_warning_authentication.php"))
        include("issabel_warning_authentication.php");
    exit;
}


?>

