<?php
/* Smarty version 3.1.33, created on 2022-09-27 10:18:59
  from '/var/www/html/themes/tenant/_common/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_633280bbb1c5f4_42578495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12f8e456b7965cbe6019ffb03d260f7a784ff071' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/index.tpl',
      1 => 1664254029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633280bbb1c5f4_42578495 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>YAVAR</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-core.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-theme.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-forms.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/custom.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/widgets.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/header.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/content.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/applet.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
libs/js/sticky_note/sticky_note.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/table.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/rightbar.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/purple.css">

    <?php echo $_smarty_tpl->tpl_vars['HEADER_LIBS_JQUERY']->value;?>

    <?php echo '<script'; ?>
 src="libs/js/base.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="libs/js/sticky_note/sticky_note.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="libs/js/iframe.js"><?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['HEADER_MODULES']->value;?>

    </head>
    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="mainBody page-body" <?php echo $_smarty_tpl->tpl_vars['BODYPARAMS']->value;?>
>
    <div class="page-container">

        <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
 <!-- Viene del tpl menu.tlp-->
                    <?php if (!empty($_smarty_tpl->tpl_vars['mb_message']->value)) {?>
                    <div class="div_msg_errors" id="message_error">
                    <?php if (!empty($_smarty_tpl->tpl_vars['mb_title']->value)) {?>
                        <div class="div_msg_errors_title">
                            <b style="color:red;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mb_title']->value;?>
</b>
                        </div>
                    <?php }?>
                        <div class="div_msg_errors_dismiss"><i class="fa fa-lg fa-remove" onclick="hide_message_error();"></i></div>
                        <div class="div_msg_errors_content" <?php if (empty($_smarty_tpl->tpl_vars['mb_title']->value)) {?>style="margin-left: 0;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mb_message']->value;?>
</div>
                    </div>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

                </div>
            </div>
        </div><!-- neo-contentbox -->

        <!-- Footer -->
        <footer class="main" style="margin-left:16px;">
        </footer>

                </div><!-- main-content -->

        <div id="neo-sticky-note">
            <div id="neo-sticky-note-text"></div>
            <div id="neo-sticky-note-text-edit">
                <textarea id="neo-sticky-note-textarea"></textarea>
                <div id="neo-sticky-note-text-char-count"></div>
                <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['SAVE_NOTE']->value;?>
" id="neo-submit-button" />
                <div id="auto-popup">AutoPopUp <input type="checkbox" id="neo-sticky-note-auto-popup" value="1" /></div>
            </div>
            <div id="neo-sticky-note-text-edit-delete"></div>
        </div>
<?php if ($_smarty_tpl->tpl_vars['AUTO_POPUP']->value == '1') {
echo '<script'; ?>
 type='text/javascript'>
$(document).ready(function(e) {
    $("#neo-sticky-note-auto-popup").prop('checked', true);
    $('#togglestickynote1').click();
});
<?php echo '</script'; ?>
>
<?php }?>

        <!-- Neo Progress Bar -->
        <div class="neo-modal-issabel-popup-box">
            <div class="neo-modal-issabel-popup-title"></div>
            <div class="neo-modal-issabel-popup-close"></div>
            <div class="neo-modal-issabel-popup-content"></div>
        </div>
        <div class="neo-modal-issabel-popup-blockmask"></div>
<?php if ($_smarty_tpl->tpl_vars['ISSABEL_PANELS']->value) {?>
        <div id="chat" class="fixed">
            <div class="chat-inner">
                <h2 class="chat-header">
                    <a href="#" class="chat-close"><i class="entypo-cancel"></i></a>
                    <i class="entypo-users"></i>
                                        <span id="panel-header-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_ISSABEL_PANELS_SIDEBAR']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </h2>
                <div id="issabel-panels" class="panel-group joined">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ISSABEL_PANELS']->value, 'paneldata', false, 'panelname', 'issabelpanel', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['panelname']->value => $_smarty_tpl->tpl_vars['paneldata']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_issabelpanel']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_issabelpanel']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_issabelpanel']->value['index'];
?>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#issabel-panels" href="#issabel-panel-<?php echo $_smarty_tpl->tpl_vars['panelname']->value;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['paneldata']->value['iconclass']) {?>
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['paneldata']->value['iconclass'];?>
"></i>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['paneldata']->value['icon']) {?>
                                    <div style="display: inline-block; min-width: 15px; min-height: 15px; padding-right: 5px;">
                                    <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['paneldata']->value['icon'];?>
" width="15" />
                                    </div>
                                    <?php } else { ?>
                                    <i class="fa fa-file-o"></i>
                                    <?php }?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paneldata']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </h4>
                        </div>
                        <div id="issabel-panel-<?php echo $_smarty_tpl->tpl_vars['panelname']->value;?>
" class="panel-collapse collapse<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_issabelpanel']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_issabelpanel']->value['first'] : null)) {?> in<?php }?>">
                            <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['paneldata']->value['content'];?>
</div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
<?php }?>
        <!-- Bottom Scripts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/gsap/main-gsap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/joinable.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/resizeable.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-api.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-login.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-custom.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-demo.js"><?php echo '</script'; ?>
>
    </div>
</body>
</html>
<?php }
}
