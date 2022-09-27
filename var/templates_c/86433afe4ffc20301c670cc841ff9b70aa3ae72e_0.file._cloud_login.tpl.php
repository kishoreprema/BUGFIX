<?php
/* Smarty version 3.1.33, created on 2022-09-26 12:59:29
  from '/var/www/html/modules/registration/themes/default/_cloud_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_633154d94ec370_39667030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86433afe4ffc20301c670cc841ff9b70aa3ae72e' => 
    array (
      0 => '/var/www/html/modules/registration/themes/default/_cloud_login.tpl',
      1 => 1638368363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633154d94ec370_39667030 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/themes/default/css/styles.css" rel="stylesheet" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/lottie.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var baseurl = '';

$(document).ready(function() {
    var anim;
    var animData = {
        container: document.getElementById('animIssabel'),
        renderer: 'svg',
        loop: false,
        autoplay: true,
        rendererSettings: {
            progressiveLoad: false
        },
        path: '<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/images/animIssabel.json'
    };
    setTimeout(function(){
        anim = bodymovin.loadAnimation(animData);
        anim.setSpeed(2);
    }, 500);
});
<?php echo '</script'; ?>
>

<div onKeyPress="return checkSubmit(event)">
<div id="moduleContainer" style="overflow-y:hidden;overflow-x:hidden">
    
    <div class="div_content_style" style="width:99%;margin:auto;">
    <div class="title_login_register"><?php echo $_smarty_tpl->tpl_vars['registration_server']->value;?>
</div>
    <div class="text_info_registration">
        <?php echo $_smarty_tpl->tpl_vars['INFO_REGISTER']->value;?>

        <div class="close_info" onclick="hideInfoRegistration()">x</div>
    </div>
	
    <div class="info_registration" onclick="showInfoRegistration()">?</div>
        <div id='cloud-login-content' style="width:98%;margin:auto;">
            <div id="animIssabel" style='width:90px; height:90px; margin:auto;'></div>
            </br>
            <div class="cloud-login-line">
                <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/icon_user.png" height="18px" alt="issabel log" class="cloud-login-img-input"/>
                <input type="text" id="input_user" name="input_user" class="cloud-login-input" defaultVal="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
"/>
            </div>
            <div class="cloud-login-line">
                <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/icon_password.png" alt="issabel log" class="cloud-login-img-input"/>
                <input type="password" id="input_pass" name="input_pass" class="cloud-login-input" defaultVal="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
"/>
            </div>
            <div class="cloud-login-line action_register_button" >                
                <input type="button" name="input_signup" class="cloud-signup-button" onclick="showPopupCloudRegister('<?php echo $_smarty_tpl->tpl_vars['registration']->value;?>
',540,405)" value="<?php echo $_smarty_tpl->tpl_vars['SIGNUP_ACTION']->value;?>
" style="margin-left:20px" />
                <input type="button" name="input_register" class="cloud-login-button" onclick="registrationByAccount();" value="<?php echo $_smarty_tpl->tpl_vars['REGISTER_ACTION']->value;?>
"/>
                <input type="hidden" name="msgtmp" id="msgtmp" value="<?php echo $_smarty_tpl->tpl_vars['sending']->value;?>
" />
            </div>
            <div style="height:15px;" id="msnTextErr" align="center"></div>
            <div class="cloud-login-line" >
                <a class="cloud-link_subscription" href="https://my.issabel.com/forgot.php" ><?php echo $_smarty_tpl->tpl_vars['FORGET_PASSWORD']->value;?>
</a>
                </br>
                <?php echo $_smarty_tpl->tpl_vars['REGISTER_RECOMMENDATION']->value;?>

            </div>
            <div style="height:20px;" class="cloud-login-line" >
                <div class="btn-shine" style="width:98%;margin:auto;">
                  <?php echo $_smarty_tpl->tpl_vars['PATREON_LEGEND']->value;?>

                </div>
            </div>
            <div class="cloud-login-line">
                <?php echo $_smarty_tpl->tpl_vars['PATREON']->value;?>

            </div>
            <div class="cloud-footernote" style="width:95%;margin:auto;"><a href="http://www.issabel.org" style="text-decoration: none;" target='_blank'>Issabel</a> <?php echo $_smarty_tpl->tpl_vars['ISSABEL_LICENSED']->value;?>
 <a href="http://www.opensource.org/licenses/gpl-license.php" style="text-decoration: none;" target='_blank'>GPL</a>. 2006 - <?php echo $_smarty_tpl->tpl_vars['currentyear']->value;?>
.</div>
             
        </div>
    </div>
</div>
</div>

<?php echo '<script'; ?>
 src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/themes/default/js/javascript.js" type="text/javascript"><?php echo '</script'; ?>
>



<?php }
}
