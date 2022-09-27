<?php
/* Smarty version 3.1.33, created on 2022-09-27 10:18:59
  from '/var/www/html/themes/tenant/_common/_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_633280bbabe695_55482823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3698e7b2c1c15d96ca05de924db009628be033a4' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/_menu.tpl',
      1 => 1664254029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633280bbabe695_55482823 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type='text/javascript'>
var themeName='elastixneo'; //nombre del tema
$(document).ready(function(){
    LblRegister = '<?php echo $_smarty_tpl->tpl_vars['Register']->value;?>
';
    $("#togglebookmark").click(function() {
        var imgBookmark = $("#togglebookmark").attr('src');
        if(/bookmarkon.png/.test(imgBookmark)) {
            $("#togglebookmark").attr('src',"web/themes/"+themeName+"/images/bookmark.png");
        } else {
            $("#togglebookmark").attr('src',"web/themes/"+themeName+"/images/bookmarkon.png");
        }
    });



    $("#export_button").hover(
      function () {
          $(this).addClass("exportBorder");
      },
      function () {
          $(this).removeClass("exportBorder");
          $(this).attr("aria-expanded","false");
          $(this).removeClass("exportBackground");
          $(".letranodec").css("color","#444444");
          $("#subMenuExport").addClass("neo-display-none");
      }
    );
    $("#neo-table-button-download-right").click(
      function () {
          if($(this).attr("aria-expanded") == "false"){
          var exportPosition = $('#export_button').position();
          var top = exportPosition.top + 41;
          var left = exportPosition.left - 3;
          $("#subMenuExport").css('top',top+"px");
          $("#subMenuExport").css('left',left+"px");
          $(this).attr("aria-expanded","true");
          $(this).addClass("exportBackground");
          $(".letranodec").css("color","#FFFFFF");
          $("#subMenuExport").removeClass("neo-display-none");
          }
          else{
          $(".letranodec").css("color","#444444");
          $("#subMenuExport").addClass("neo-display-none");
          $(this).removeClass("exportBackground");
          $(this).attr("aria-expanded","false");
          }
      }
    );

    $("#subMenuExport").hover(
      function () {
        $(this).removeClass("neo-display-none");
        $(".letranodec").css("color","#FFFFFF");
        $("#export_button").attr("aria-expanded","true");
        $("#export_button").addClass("exportBackground");
      },
      function () {
        $(this).addClass("neo-display-none");
        $(".letranodec").css("color","#444444");
        $("#export_button").removeClass("exportBackground");
        $("#export_button").attr("aria-expanded","false");
      }
    );

   $('#header_open_sidebar, a.chat-close').click(function (e) {
      $('div.page-container').toggleClass('chat-visible');
      toggle_sidebar_menu(true);
      e.stopPropagation();
   });

});

function removeNeoDisplayOnMouseOut(ref){
    $(ref).find('div').addClass('neo-display-none');
}

function removeNeoDisplayOnMouseOver(ref){
    $(ref).find('div').removeClass('neo-display-none');
}
<?php echo '</script'; ?>
>


<input type="hidden" id="lblRegisterCm"   value="<?php echo $_smarty_tpl->tpl_vars['lblRegisterCm']->value;?>
" />
<input type="hidden" id="lblRegisteredCm" value="<?php echo $_smarty_tpl->tpl_vars['lblRegisteredCm']->value;?>
" />
<input type="hidden" id="userMenuColor" value="<?php echo $_smarty_tpl->tpl_vars['MENU_COLOR']->value;?>
" />
<input type="hidden" id="toolTip_addBookmark" value="<?php echo $_smarty_tpl->tpl_vars['ADD_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_removeBookmark" value="<?php echo $_smarty_tpl->tpl_vars['REMOVE_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_addingBookmark" value="<?php echo $_smarty_tpl->tpl_vars['ADDING_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_removingBookmark" value="<?php echo $_smarty_tpl->tpl_vars['REMOVING_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_hideTab" value="<?php echo $_smarty_tpl->tpl_vars['HIDE_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_showTab" value="<?php echo $_smarty_tpl->tpl_vars['SHOW_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_hidingTab" value="<?php echo $_smarty_tpl->tpl_vars['HIDING_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_showingTab" value="<?php echo $_smarty_tpl->tpl_vars['SHOWING_IZQTAB']->value;?>
" />
<input type="hidden" id="amount_char_label" value="<?php echo $_smarty_tpl->tpl_vars['AMOUNT_CHARACTERS']->value;?>
" />
<input type="hidden" id="save_note_label" value="<?php echo $_smarty_tpl->tpl_vars['MSG_SAVE_NOTE']->value;?>
" />
<input type="hidden" id="get_note_label" value="<?php echo $_smarty_tpl->tpl_vars['MSG_GET_NOTE']->value;?>
" />
<input type="hidden" id="issabel_theme_name" value="<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
" />
<input type="hidden" id="lbl_no_description" value="<?php echo $_smarty_tpl->tpl_vars['LBL_NO_STICKY']->value;?>
" />

<!-- inicio del menú tipo acordeon-->
<div class="sidebar-menu">
    <header class="logo-env">
        <!-- logo -->
        <div class="logo">
            <a href="index.php">
                <img src="images/yavar_logo.jpg" width="120" alt="" />
            </a>
        </div>
        <!-- logo collapse icon -->
        <div class="sidebar-collapse">
            <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                <i class="entypo-menu"></i>
            </a>
        </div>
        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <!-- Search Bar -->
        <li id="search">
            <form method="get" action="">
                <input type="text" id="search_module_issabel" name="search_module_issabel" class="search-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['MODULES_SEARCH']->value;?>
"/>
                <button type="submit">
                    <i class="entypo-search"></i>
                </button>
            </form>
        </li>
        <!--recorremos el arreglo del menu nivel primario-->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrMainMenu']->value, 'menu', false, 'idMenu', 'menuMain', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['idMenu']->value => $_smarty_tpl->tpl_vars['menu']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['idMenu']->value == $_smarty_tpl->tpl_vars['idMainMenuSelected']->value) {?>
                <li class="active opened active">
            <?php } else { ?>
                <li>
            <?php }?>
                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idMenu']->value;?>
">
                         <i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value['icon'];?>
"></i>
			<!--<span><?php echo $_smarty_tpl->tpl_vars['idMenu']->value;?>
</span>-->
			<span><?php echo $_smarty_tpl->tpl_vars['menu']->value['Name'];?>
</span>
                    </a>
                    <ul>
                        <!--recorremos el arreglo del menu nivel secundario-->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['children'], 'subMenu', false, 'idSubMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['idSubMenu']->value => $_smarty_tpl->tpl_vars['subMenu']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['idSubMenu']->value == $_smarty_tpl->tpl_vars['idSubMenuSelected']->value) {?>
                                <li class="active opened active">
                            <?php } else { ?>
                                <li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['subMenu']->value['Type'] == "popup") {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['subMenu']->value['Link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['idSubMenu']->value;?>
">
                                    <span><?php echo $_smarty_tpl->tpl_vars['subMenu']->value['Name'];?>
</span>
                                </a>
                            <?php } else { ?>
                                <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idSubMenu']->value;?>
">
                                    <span><?php echo $_smarty_tpl->tpl_vars['subMenu']->value['Name'];?>
</span>
                                </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['subMenu']->value['children']) {?>
                                <ul>
                                    <!--recorremos el arreglo del menu de tercer nivel-->
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subMenu']->value['children'], 'subMenu2', false, 'idSubMenu2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['idSubMenu2']->value => $_smarty_tpl->tpl_vars['subMenu2']->value) {
?>
                                        <li>
                                            <?php if ($_smarty_tpl->tpl_vars['subMenu2']->value['Type'] == "popup") {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['subMenu2']->value['Link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['idSubMenu2']->value;?>
">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['subMenu2']->value['Name'];?>
</span>
                                                </a>
                                            <?php } else { ?>
                                                <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idSubMenu2']->value;?>
">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['subMenu2']->value['Name'];?>
</span>
                                                </a>
                                            <?php }?>
                                        </li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php }?>
                        </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php echo $_smarty_tpl->tpl_vars['SHORTCUT']->value;?>


    </ul>
</div>
<!-- fin del menú tipo acordeon-->

<!-- inicio del head principal-->
<div class="main-content">
<div style="height:83px;background-color:#373e4a;padding:15px;">
    <!-- Profile Info and Notifications -->
    <span style='float:right; text-align:right; padding:0px 5px 0px 0px; width:175px;' class="col-md-6 col-sm-8 clearfix">
        <ul style='float:right;' class="user-info pull-none-xsm">
            <!-- Profile Info -->
            <li class="profile-info dropdown pull-right"><!-- add class "pull-right" if you want to place this from right -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img  style="border:0px" src="index.php?menu=address_book&type=internal&action=getImage&idPhoto=<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value;?>
&rawmode=yes&thumbnail=yes" alt="" class="img-circle" width="44" />
                    <?php echo $_smarty_tpl->tpl_vars['USER_LOGIN']->value;?>

                </a>
                <!-- Reverse Caret -->
                <i style='font-size:15px;font-weight:bold;' class="fa fa-angle-down"></i>
                <!-- Profile sub-links -->
                <ul class="dropdown-menu">

                    <!-- Reverse Caret -->
                    <li class="caret"></li>

                    <!-- Profile sub-links -->
                    <li class="dropdown">
                        <a href="#" class="setadminpassword">
                            <i class="fa fa-user"></i>
                            <?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value;?>

                        </a>
                    </li>
                    <li class="dropdown">
                        <a  href="index.php?logout=yes" >
                            <i class="fa fa-sign-out"></i>
                            <?php echo $_smarty_tpl->tpl_vars['LOGOUT']->value;?>

                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </span>

    <!-- Raw Links -->
    <span style='float:right; width:400px;'>
        <ul style="padding-top:12px;" class="list-inline links-list pull-right neo-topbar-notification">

        <li id="header_registration_info" class="profile-info dropdown">
            <a data-toggle="dropdown" class="" href="#">
                <i class="fa fa-info-circle"></i>
            </a>
            <ul class="dropdown-menu">

                <!-- Reverse Caret -->
                <li class="caret"></li>

                <!-- Profile sub-links -->
                <li><a href="#" class="register_link"><?php echo $_smarty_tpl->tpl_vars['Registered']->value;?>
</a></li>
                <li><a href="#" id="viewDetailsRPMs"><i class="fa fa-cube"></i><?php echo $_smarty_tpl->tpl_vars['VersionDetails']->value;?>
</a></li>
                <li><a href="http://www.issabel.org" target="_blank"><i class="fa fa-external-link"></i>Issabel Website</a></li>
                <li><a href="#" id="dialogaboutissabel"><i class="fa fa-info-circle"></i><?php echo $_smarty_tpl->tpl_vars['ABOUT_ISSABEL2']->value;?>
</a></li>
            </ul>
        </li>

        <!--li id="header_notification_bar" class="dropdown">
            <a  class="" href="index.php?menu=addons">
                <i class="fa fa-cubes"></i>
            </a>
        </li-->

        <!-- notification dropdown start-->
        <!--li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="" href="#">
                <i class="fa fa-heartbeat"></i>
            </a>
        </li-->
        <!-- notification dropdown end -->
        <li id="header_notification_bar" class="profile-info dropdown pull-right notifications" style="float: none !important;">
            <a data-toggle="dropdown" class="" href="#">
                <i id='notibell' class="fa fa-bell-o <?php echo $_smarty_tpl->tpl_vars['ANIMATE_NOTIFICATION']->value;?>
"></i>
            </a>
            <ul class="dropdown-menu">

                <!-- Reverse Caret -->
                <li class="caret"></li>

                        <li><p><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['LBL_NOTIFICATION_SYSTEM'];?>
</p></li>
                <li>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['NOTIFICATIONS_PUBLIC'], 'NOTI');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NOTI']->value) {
?>
                            <li id='notiitem<?php echo $_smarty_tpl->tpl_vars['NOTI']->value['id'];?>
' class="<?php if ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "info") {?>notification-info<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "warning") {?>notification-warning<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "error") {?>notification-danger<?php }?>">
                                <a href="#" onclick='readNoti("<?php echo $_smarty_tpl->tpl_vars['NOTI']->value['id'];?>
")'><i class="<?php if ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "info") {?>fa fa-info<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "warning") {?>fa fa-warning<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "error") {?>fa fa-ban<?php }?>"></i><?php echo $_smarty_tpl->tpl_vars['NOTI']->value['content'];?>
</a>
                            </li>
                        <?php
}
} else {
?>
                            <li><p><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['TXT_NO_NOTIFICATIONS'];?>
</p></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
                        <li><p><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['LBL_NOTIFICATION_USER'];?>
</p></li>
                <li>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['NOTIFICATIONS_PRIVATE'], 'NOTI');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NOTI']->value) {
?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "info") {?>notification-info<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "warning") {?>notification-warning<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "error") {?>notification-danger<?php }?>">
                                <a href="#"><i class="<?php if ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "info") {?>fa fa-info<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "warning") {?>fa fa-warning<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level'] == "error") {?>fa fa-ban<?php }?>"></i><?php echo $_smarty_tpl->tpl_vars['NOTI']->value['content'];?>
</a>
                            </li>
                        <?php
}
} else {
?>
                            <li><p><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['TXT_NO_NOTIFICATIONS'];?>
</p></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
            </ul>
        </li>
<?php if ($_smarty_tpl->tpl_vars['ISSABEL_PANELS']->value) {?>
        <!-- SIDEBAR LIST -->
        <li id="header_open_sidebar">
            <a href="#" data-toggle="chat" data-collapse-sidebar="1"><i class="fa fa-th-list"></i></a>
        </li>
<?php }?>
        </ul>
    </span>


</div>

				<!-- Breadcrumb 3 -->
<ol class="breadcrumb bc-2">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMB']->value, 'value', false, NULL, 'menu', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['total'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['first'] : null)) {?>
             <li>
                <a href="/"> <i class="entypo-home"></i></a>
                <a href="#"> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
             </li>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['last'] : null)) {?>
            <li class="active"><strong><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</strong></li>
        <?php } else { ?>
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a></li>
        <?php }?>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   <li id="tenant-help">
    <a class="" href="#" onclick="popUp('help/?id_nodo=<?php if (!empty($_smarty_tpl->tpl_vars['idSubMenu2Selected']->value)) {
echo $_smarty_tpl->tpl_vars['idSubMenu2Selected']->value;?>
&name_nodo=<?php echo $_smarty_tpl->tpl_vars['nameSubMenu2Selected']->value;
} else {
echo $_smarty_tpl->tpl_vars['idSubMenuSelected']->value;?>
&name_nodo=<?php echo $_smarty_tpl->tpl_vars['nameSubMenuSelected']->value;
}?>','1000','460')"> 
	<!--a href="http://help.issabel.org" target="_bank"-->
        <i class="fa fa-support"></i>
    </a>
   </li>
   <li id="tenant-sticky" class="dropdown">
   	<a id="togglestickynote1" href="#">
   		<i class="fa fa-sticky-note"></i>
   	</a>
   </li>
</ol>

<!-- contenido del modulo-->
<div id="neo-contentbox">
    <div id="neo-contentbox-maincolumn">
        <input type="hidden" id="issabel_framework_module_id" value="<?php if (empty($_smarty_tpl->tpl_vars['idSubMenu2Selected']->value)) {
echo $_smarty_tpl->tpl_vars['idSubMenuSelected']->value;
} else {
echo $_smarty_tpl->tpl_vars['idSubMenu2Selected']->value;
}?>" />
        <input type="hidden" id="issabel_framework_webCommon" value="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
" />
        <div class="neo-module-content">




<?php }
}
