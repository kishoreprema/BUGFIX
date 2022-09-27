<?php
/* Smarty version 3.1.33, created on 2022-09-26 20:00:49
  from '/var/www/html/modules/applet_admin/themes/default/applet_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6331b7995d7486_22374388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ec2eb96748633462186435c271d7dfba4f7ddb' => 
    array (
      0 => '/var/www/html/modules/applet_admin/themes/default/applet_admin.tpl',
      1 => 1637330690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6331b7995d7486_22374388 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
 $('.checkall').click(function () {
     $(".letra12").find(':checkbox').prop('checked', $(this).is(':checked'));
 });


});
<?php echo '</script'; ?>
>

<table width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr class="letra12">
        <td align="left">
            <input class="button" type="submit" name="save_new" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="99%" border="0">
    <tr>
        <td class="letra12" colspan=2 style="font-weight:bold; text-decoration: underline"> <input name="checkall" class="checkall" type="checkbox"> <?php echo $_smarty_tpl->tpl_vars['checkall']->value;?>
 </td>
    </tr>
    <tr class="letra12">
        <td align="left" width="20%"><b><?php echo $_smarty_tpl->tpl_vars['Applet']->value;?>
</b></td>
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['Activated']->value;?>
</b></td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applets']->value, 'applet', false, 'q', 'appletrow', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['q']->value => $_smarty_tpl->tpl_vars['applet']->value) {
?>
        <tr class="letra12">
            <td align="left">
                <b><?php echo $_smarty_tpl->tpl_vars['applet']->value['name'];?>
:</b>
            </td>
            <td align="left">
                <input name="chkdau_<?php echo $_smarty_tpl->tpl_vars['applet']->value['id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['applet']->value['activated']) {?> checked="checked" <?php }?>>
            </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
