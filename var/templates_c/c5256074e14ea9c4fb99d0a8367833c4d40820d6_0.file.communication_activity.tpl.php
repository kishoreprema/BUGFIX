<?php
/* Smarty version 3.1.33, created on 2022-09-26 12:59:29
  from '/var/www/html/modules/dashboard/applets/CommunicationActivity/tpl/communication_activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_633154d978bf83_76231315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5256074e14ea9c4fb99d0a8367833c4d40820d6' => 
    array (
      0 => '/var/www/html/modules/dashboard/applets/CommunicationActivity/tpl/communication_activity.tpl',
      1 => 1637330690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633154d978bf83_76231315 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" media="screen" type="text/css" href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/CommunicationActivity/tpl/css/styles.css" />
<?php echo '<script'; ?>
 type='text/javascript' src='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/CommunicationActivity/js/javascript.js'><?php echo '</script'; ?>
>
<div class='tabFormTable'>
    <div class='infoActivity'>
        <div class='typeActivity'>
            <b><?php echo $_smarty_tpl->tpl_vars['LABEL_TOTAL_CALLS']->value;?>
: </b>
        </div>
        <div align='left' class='detailText'>
            <?php echo $_smarty_tpl->tpl_vars['LABEL_CALLS']->value;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
)</b> :
            <font color='green'>(<?php echo $_smarty_tpl->tpl_vars['internal']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_INTERNAL_CALLS']->value;?>
)</font>
            <font color='red'> (<?php echo $_smarty_tpl->tpl_vars['external']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_EXTERNAL_CALLS']->value;?>
)</font>
        </div>
        <div class='typeActivity'>
            <b><?php echo $_smarty_tpl->tpl_vars['LABEL_TOTAL_CHANNELS']->value;?>
: </b>
        </div>
        <div align='left' class='detailActivity'><?php echo $_smarty_tpl->tpl_vars['channel']->value;?>
</div>
        <div class='typeActivity'>
            <b><?php echo $_smarty_tpl->tpl_vars['LABEL_QUEUES_WAITING']->value;?>
: </b>
        </div>
        <div align='left' class='detailActivity'><?php echo $_smarty_tpl->tpl_vars['totalQueues']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_WAITING']->value;?>
</div>
        <div class='typeActivity'><b><?php echo $_smarty_tpl->tpl_vars['LABEL_EXTENSIONS']->value;?>
: </b></div>
        <div class='detailText'><?php echo $_smarty_tpl->tpl_vars['LABEL_SIP_EXTENSIONS']->value;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['total_sip_Ext']->value;?>
) </b>:
            <font color='green'>(<?php echo $_smarty_tpl->tpl_vars['sip_Ext_ok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_OK']->value;?>
)</font>
            <font color='red'>(<?php echo $_smarty_tpl->tpl_vars['sip_Ext_nok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_NO_OK']->value;?>
)</font>
        </div>
        <div class='typeActivity'></div>
        <div class='detailText'><?php echo $_smarty_tpl->tpl_vars['LABEL_PJSIP_EXTENSIONS']->value;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['total_pjsip_Ext']->value;?>
) </b>:
            <font color='green'>(<?php echo $_smarty_tpl->tpl_vars['pjsip_Ext_ok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_OK']->value;?>
)</font>
            <font color='red'>(<?php echo $_smarty_tpl->tpl_vars['pjsip_Ext_nok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_NO_OK']->value;?>
)</font>
        </div>
        <div class='typeActivity'></div>
        <div class='detailText'><?php echo $_smarty_tpl->tpl_vars['LABEL_IAX_EXTENSIONS']->value;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['total_iax_Ext']->value;?>
) </b>:
            <font color='green'>(<?php echo $_smarty_tpl->tpl_vars['iax_Ext_ok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_OK']->value;?>
)</font>
            <font color='red'>(<?php echo $_smarty_tpl->tpl_vars['iax_Ext_nok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_NO_OK']->value;?>
)</font>
        </div>
        <div class='typeActivity'><b><?php echo $_smarty_tpl->tpl_vars['LABEL_TRUNKS']->value;?>
 (SIP/IAX): </b></div>
        <div class='detailText'><?php echo $_smarty_tpl->tpl_vars['LABEL_TRUNKS']->value;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['total_trunks']->value;?>
) </b>:
            <font color='green'>(<?php echo $_smarty_tpl->tpl_vars['total_trunks_ok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_OK']->value;?>
)</font>
            <font color='red'>(<?php echo $_smarty_tpl->tpl_vars['total_trunks_nok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_NO_OK']->value;?>
)</font>
            <font color='gray'>(<?php echo $_smarty_tpl->tpl_vars['total_trunks_unk']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_UNKNOWN']->value;?>
)</font>
        </div>
        <div class='typeActivity'><b><?php echo $_smarty_tpl->tpl_vars['LABEL_NETWORK_TRAFFIC']->value;?>
: </b></div>
        <div class='detailText'><?php echo $_smarty_tpl->tpl_vars['LABEL_BYTES']->value;?>

            <b>(<span id='communication_activity_rx_bytes'><?php echo $_smarty_tpl->tpl_vars['rx_bytes']->value;?>
</span>kB/s)</b> <= RX | TX => <b>(<span id='communication_activity_tx_bytes'><?php echo $_smarty_tpl->tpl_vars['tx_bytes']->value;?>
</span>kB/s)</b>
        </div>
    </div>
</div>
<?php }
}
