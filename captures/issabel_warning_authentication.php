<?php
$theme         = isset($content['theme'])?$content['theme']:"tenant";
$size = "100%";
$styleBody = "";
$styleDiv = "";
switch($theme){
   case "issabelwave":
          $image = "/themes/issabelwave/images/logo_issabel.gif";
          break;
    case "default":
          $image = "/images/logo_issabel.png";
          break;
    case "tenant":
          $image = "/themes/tenant/images/issabel_logo_mini2.png";
          $size = "1270px";
          $styleBody = "style='background-image:url(/themes/tenant/images/bgbodytest.png);'";
          $styleDiv = "style='background:#FFFFFF; height:100%; width:1270px;'";
          break;
    default:
          $image = "/images/logo_issabel_new3.gif";
          break;
}
$theme         = "/themes/$theme";
$currentYear   = date("Y");
$msg           = isset($content['msg'])?$content['msg']:"";
$title         = isset($content['title'])?$content['title']:"";
?>

<html>
<head>
<title>Issabel - <?php echo $title; ?></title>
<link rel="stylesheet" href="<?php echo $theme; ?>/styles.css">
</head>

<body bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" <?php echo $styleBody; ?> >
  <table cellspacing="0" cellpadding="0" width="<?php echo $size; ?>" border="0" class="menulogo2" height="74">
    <tr>
       <td class="menulogo" valign="top">
           <a target="_blank" href="http://www.issabel.org">
               <img border="0" src="<?php echo $image; ?>"/>
           </a>
       </td>
    </tr>
  </table>
  <div align="center" <?php echo $styleDiv; ?> >
    <?php echo $msg; ?>
  <div/>
  <br /><br />
  <br />
</body>
</html>