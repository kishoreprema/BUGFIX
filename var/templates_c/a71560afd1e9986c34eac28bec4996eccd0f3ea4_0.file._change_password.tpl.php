<?php
/* Smarty version 3.1.33, created on 2022-09-26 19:33:52
  from '/var/www/html/modules/_issabelutils/themes/default/_change_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6331b14819d5b6_59817999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a71560afd1e9986c34eac28bec4996eccd0f3ea4' => 
    array (
      0 => '/var/www/html/modules/_issabelutils/themes/default/_change_password.tpl',
      1 => 1638368363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6331b14819d5b6_59817999 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type='text/javascript' src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/themes/default/js/change_password.js"><?php echo '</script'; ?>
>
<table class='tabForm' width='100%' >
    <tr class='letra12'>
        <td align='left'><b><?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD']->value;?>
</b></td>
        <td align='left'><input type='password' id='curr_pass' name='curr_pass' value='' /></td>
    </tr>
    <tr class='letra12'>
        <td align='left'><b><?php echo $_smarty_tpl->tpl_vars['NEW_PASSWORD']->value;?>
</b></td>
        <td align='left'><input type='password' id='curr_pass_new' name='curr_pass_new' value='' /></td>
    </tr>
    <tr class='letra12'>
        <td align='left'><b><?php echo $_smarty_tpl->tpl_vars['RETYPE_PASSWORD']->value;?>
</b></td>
        <td align='left'><input type='password' id='curr_pass_renew' name='curr_pass_renew' value='' /></td>
    </tr>
    <tr class='letra12'>
        <td align='center' colspan='2'><input type='button' id='sendChanPass' name='sendChanPss' value='<?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD_BTN']->value;?>
' /></td>
    </tr>
</table>
<input type="hidden" id="lblCurrentPassAlert" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD_ALERT']->value;?>
" />
<input type="hidden" id="lblNewRetypePassAlert"   value="<?php echo $_smarty_tpl->tpl_vars['NEW_RETYPE_PASSWORD_ALERT']->value;?>
" />
<input type="hidden" id="lblPassNoTMatchAlert" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORDS_NOT_MATCH']->value;?>
" />
<?php }
}
