<?php
/* Smarty version 3.1.33, created on 2022-09-26 12:59:28
  from '/var/www/html/modules/dashboard/applets/IssabelNetwork/tpl/issabelnetwork.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_633154d8c55626_32708208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a2a348f2023c15b4f24c6f7be5185a81474f08' => 
    array (
      0 => '/var/www/html/modules/dashboard/applets/IssabelNetwork/tpl/issabelnetwork.tpl',
      1 => 1589120338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633154d8c55626_32708208 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" media="screen" type="text/css" href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/IssabelNetwork/tpl/css/toastr.min.css" />
<link rel="stylesheet" media="screen" type="text/css" href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/IssabelNetwork/tpl/css/issabelnetwork.css" />
<?php echo '<script'; ?>
 type='text/javascript' src='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/IssabelNetwork/js/javascript.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/IssabelNetwork/js/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      
      toastr.options.timeOut = 12000; // How long the toast will display without user interaction
      toastr.options.extendedTimeOut = 12000; // How long the toast will display after a user hovers over it
      toastr.options.hideMethod = 'slideUp';
      //toastr.options.closeMethod = 'slideDown';
      toastr.options.onclick = function() { toastr.clear(); }
      toastr.options.progressBar = true;
      //toastr.options.preventDuplicates = true;
      toastr.options.newestOnTop = false;
      
   <?php echo '</script'; ?>
>
<table style="width:100%">
<tr>
<td>
<div style='width:50%;'>
  <p id="text_remote"><b><?php echo $_smarty_tpl->tpl_vars['LABEL_REMOTE']->value;?>
</b></p>
</div>
<div style='float:left;'>
<div class="wrapper" id="remoteadmintog">
  <input id="remoteadmin" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['REMOTE_CHECKED']->value;?>
 /><label class="toggle" for="remoteadmin"><span class="toggle--handler"></span></label>
</div>
</div>
</td>
</tr>
<tr>
<td colspan=2>
<div class="containerled">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['part']->value, 'servicio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['servicio']->value) {
?>
  <div class="led-box">
    <?php echo '<script'; ?>
 type="text/javascript">
      <?php ob_start();
echo $_smarty_tpl->tpl_vars['servicio']->value['led'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "led-red") {?>
        toastr.error("<?php echo $_smarty_tpl->tpl_vars['servicio']->value['status'];?>
", 'Issabel Network - ' + "<?php echo $_smarty_tpl->tpl_vars['servicio']->value['name'];?>
");
      <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['servicio']->value['led'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "led-yellow") {?>
        toastr.warning("<?php echo $_smarty_tpl->tpl_vars['servicio']->value['status'];?>
", 'Issabel Network - ' + "<?php echo $_smarty_tpl->tpl_vars['servicio']->value['name'];?>
");
      <?php }}?>
    <?php echo '</script'; ?>
>
    <div id="led_<?php echo $_smarty_tpl->tpl_vars['servicio']->value['name'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['servicio']->value['led'];?>
"></div>
    <p id="text_<?php echo $_smarty_tpl->tpl_vars['servicio']->value['name'];?>
" ><?php echo $_smarty_tpl->tpl_vars['servicio']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['servicio']->value['status'];?>
)</p>
  </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</td>
</tr>
</table>
<?php }
}
