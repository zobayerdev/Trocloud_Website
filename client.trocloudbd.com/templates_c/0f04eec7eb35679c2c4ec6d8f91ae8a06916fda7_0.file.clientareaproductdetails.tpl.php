<?php
/* Smarty version 3.1.36, created on 2024-09-08 15:52:50
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareaproductdetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ddc852b8a835_75296209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f04eec7eb35679c2c4ec6d8f91ae8a06916fda7' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareaproductdetails.tpl',
      1 => 1725559047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ddc852b8a835_75296209 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['modulecustombuttonresult']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['modulecustombuttonresult']->value == "success") {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'moduleactionsuccess'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable1,'textcenter'=>true,'idname'=>"alertModuleCustomButtonSuccess"), 0, true);
?>
    <?php } else { ?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'moduleactionfailed'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>($_prefixVariable2).(' ').($_smarty_tpl->tpl_vars['modulecustombuttonresult']->value),'textcenter'=>true,'idname'=>"alertModuleCustomButtonFailed"), 0, true);
?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['pendingcancellation']->value) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cancellationrequestedexplanation'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_prefixVariable3,'textcenter'=>true,'idname'=>"alertPendingCancellation"), 0, true);
}?>

<?php if ($_smarty_tpl->tpl_vars['unpaidInvoice']->value) {?>
    <div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['unpaidInvoiceOverdue']->value) {?>danger<?php } else { ?>warning<?php }?>" id="alert<?php if ($_smarty_tpl->tpl_vars['unpaidInvoiceOverdue']->value) {?>Overdue<?php } else { ?>Unpaid<?php }?>Invoice">
        <div class="float-right">
            <a href="viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['unpaidInvoice']->value;?>
" class="btn btn-xs btn-default">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'payInvoice'),$_smarty_tpl ) );?>

            </a>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['unpaidInvoiceMessage']->value;?>

    </div>
<?php }?>

<div class="tab-content margin-bottom">
    <div class="tab-pane fade show active" role="tabpanel" id="tabOverview">
        <?php if ($_smarty_tpl->tpl_vars['tplOverviewTabOutput']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['tplOverviewTabOutput']->value;?>

        <?php } else { ?>

        <div class="card">
            <div class="card-body">

                <div class="product-details">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="product-status product-status-<?php echo strtolower($_smarty_tpl->tpl_vars['rawstatus']->value);?>
 mb-3">
                                <div class="product-icon text-center">
                                    <span class="fa-stack fa-lg">
                                        <i class="fad fa-circle fa-stack-2x"></i>
                                        <i class="fad fa-<?php if ($_smarty_tpl->tpl_vars['type']->value == "hostingaccount" || $_smarty_tpl->tpl_vars['type']->value == "reselleraccount") {?>hdd<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "server") {?>database<?php } else { ?>archive<?php }?> fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['product']->value;?>
</h3>
                                    <h4><?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
</h4>
                                </div>
                                <div class="product-status-text">
                                    <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

                                </div>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['showcancelbutton']->value || $_smarty_tpl->tpl_vars['packagesupgrade']->value) {?>
                                <div class="row">
                                    <?php if ($_smarty_tpl->tpl_vars['packagesupgrade']->value) {?>
                                        <div class="col-<?php if ($_smarty_tpl->tpl_vars['showcancelbutton']->value) {?>6<?php } else { ?>12<?php }?>">
                                            <a href="upgrade.php?type=package&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-block btn-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'upgrade'),$_smarty_tpl ) );?>
</a>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['showcancelbutton']->value) {?>
                                        <div class="col-<?php if ($_smarty_tpl->tpl_vars['packagesupgrade']->value) {?>6<?php } else { ?>12<?php }?>">
                                            <a href="clientarea.php?action=cancel&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-block btn-danger <?php if ($_smarty_tpl->tpl_vars['pendingcancellation']->value) {?>disabled<?php }?>"><?php if ($_smarty_tpl->tpl_vars['pendingcancellation']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cancellationrequested'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareacancelrequestbutton'),$_smarty_tpl ) );
}?></a>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php }?>

                        </div>
                        <div class="col-md-6">

                            <h4 class="mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingregdate'),$_smarty_tpl ) );?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['regdate']->value;?>
</p>

                            <?php if ($_smarty_tpl->tpl_vars['firstpaymentamount']->value != $_smarty_tpl->tpl_vars['recurringamount']->value) {?>
                                <h4 class="mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'firstpaymentamount'),$_smarty_tpl ) );?>
</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['firstpaymentamount']->value;?>
</p>
                            <?php }?>

                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderpaymenttermonetime'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderfree'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
if ($_smarty_tpl->tpl_vars['billingcycle']->value != $_prefixVariable4 && $_smarty_tpl->tpl_vars['billingcycle']->value != $_prefixVariable5) {?>
                                <h4 class="mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'recurringamount'),$_smarty_tpl ) );?>
</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['recurringamount']->value;?>
</p>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['quantitySupported']->value && $_smarty_tpl->tpl_vars['quantity']->value > 1) {?>
                                <h4 class="mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quantity'),$_smarty_tpl ) );?>
</h4>
                               <p> <?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
</p>
                            <?php }?>

                            <h4 class="mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderbillingcycle'),$_smarty_tpl ) );?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['billingcycle']->value;?>
</p>

                            <h4 class="mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingnextduedate'),$_smarty_tpl ) );?>
</h4>
                           <p> <?php echo $_smarty_tpl->tpl_vars['nextduedate']->value;?>
</p>

                            <h4 class="mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderpaymentmethod'),$_smarty_tpl ) );?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;?>
</p>

                            <?php if ($_smarty_tpl->tpl_vars['suspendreason']->value) {?>
                                <h4 class="mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'suspendreason'),$_smarty_tpl ) );?>
</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['suspendreason']->value;?>
</p>
                            <?php }?>

                        </div>
                    </div>

                </div>
            </div>
        </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookOutput']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if ($_smarty_tpl->tpl_vars['domain']->value || $_smarty_tpl->tpl_vars['moduleclientarea']->value || $_smarty_tpl->tpl_vars['configurableoptions']->value || $_smarty_tpl->tpl_vars['customfields']->value || $_smarty_tpl->tpl_vars['lastupdate']->value) {?>

                <ul class="nav nav-tabs responsive-tabs-sm">
                    <?php if ($_smarty_tpl->tpl_vars['domain']->value) {?>
                        <li class="nav-item">
                            <a href="#domain" data-toggle="tab" class="nav-link active"><i class="fas fa-globe fa-fw"></i> <?php if ($_smarty_tpl->tpl_vars['type']->value == "server") {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslserverinfo'),$_smarty_tpl ) );
} elseif (($_smarty_tpl->tpl_vars['type']->value == "hostingaccount" || $_smarty_tpl->tpl_vars['type']->value == "reselleraccount") && $_smarty_tpl->tpl_vars['serverdata']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'hostingInfo'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingdomain'),$_smarty_tpl ) );
}?></a>
                        </li>
                    <?php } elseif ($_smarty_tpl->tpl_vars['moduleclientarea']->value) {?>
                        <li class="nav-item">
                            <a href="#manage" data-toggle="tab" class="nav-link active"><i class="fas fa-globe fa-fw"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manage'),$_smarty_tpl ) );?>
</a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
                        <li class="nav-item">
                            <a href="#configoptions" data-toggle="tab" class="nav-link<?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['moduleclientarea']->value) {?> active<?php }?>"><i class="fas fa-cubes fa-fw"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderconfigpackage'),$_smarty_tpl ) );?>
</a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['metricStats']->value) {?>
                        <li class="nav-item">
                            <a href="#metrics" data-toggle="tab" class="nav-link<?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['moduleclientarea']->value && !$_smarty_tpl->tpl_vars['configurableoptions']->value) {?> active<?php }?>"><i class="fas fa-chart-line fa-fw"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'metrics.title'),$_smarty_tpl ) );?>
</a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                        <li class="nav-item">
                            <a href="#additionalinfo" data-toggle="tab" class="nav-link<?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['moduleclientarea']->value && !$_smarty_tpl->tpl_vars['metricStats']->value && !$_smarty_tpl->tpl_vars['configurableoptions']->value) {?> active<?php }?>"><i class="fas fa-info fa-fw"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'additionalInfo'),$_smarty_tpl ) );?>
</a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lastupdate']->value) {?>
                        <li class="nav-item">
                            <a href="#resourceusage" data-toggle="tab" class="nav-link<?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['moduleclientarea']->value && !$_smarty_tpl->tpl_vars['configurableoptions']->value && !$_smarty_tpl->tpl_vars['customfields']->value) {?> active<?php }?>"><i class="fas fa-inbox fa-fw"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'resourceUsage'),$_smarty_tpl ) );?>
</a>
                        </li>
                    <?php }?>
                </ul>
                <div class="responsive-tabs-sm-connector"><div class="channel"></div><div class="bottom-border"></div></div>
                <div class="tab-content bg-white product-details-tab-container">
                    <?php if ($_smarty_tpl->tpl_vars['domain']->value) {?>
                        <div class="tab-pane fade show active text-center" role="tabpanel" id="domain">
                            <?php if ($_smarty_tpl->tpl_vars['type']->value == "server") {?>
                                <div class="row">
                                    <div class="col-sm-5 text-right">
                                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'serverhostname'),$_smarty_tpl ) );?>
</strong>
                                    </div>
                                    <div class="col-sm-7 text-left">
                                        <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>

                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['dedicatedip']->value) {?>
                                    <div class="row">
                                        <div class="col-sm-5 text-right">
                                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'primaryIP'),$_smarty_tpl ) );?>
</strong>
                                        </div>
                                        <div class="col-sm-7 text-left">
                                            <?php echo $_smarty_tpl->tpl_vars['dedicatedip']->value;?>

                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['assignedips']->value) {?>
                                    <div class="row">
                                        <div class="col-sm-5 text-right">
                                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'assignedIPs'),$_smarty_tpl ) );?>
</strong>
                                        </div>
                                        <div class="col-sm-7 text-left">
                                            <?php echo nl2br($_smarty_tpl->tpl_vars['assignedips']->value);?>

                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['ns1']->value || $_smarty_tpl->tpl_vars['ns2']->value) {?>
                                    <div class="row">
                                        <div class="col-sm-5 text-right">
                                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainnameservers'),$_smarty_tpl ) );?>
</strong>
                                        </div>
                                        <div class="col-sm-7 text-left">
                                            <?php echo $_smarty_tpl->tpl_vars['ns1']->value;?>
<br /><?php echo $_smarty_tpl->tpl_vars['ns2']->value;?>

                                        </div>
                                    </div>
                                <?php }?>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['domain']->value) {?>
                                    <div class="row">
                                        <div class="col-sm-5 text-right">
                                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderdomain'),$_smarty_tpl ) );?>
</strong>
                                        </div>
                                        <div class="col-sm-7 text-left">
                                            <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>

                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['username']->value) {?>
                                    <div class="row">
                                        <div class="col-sm-5 text-right">
                                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'serverusername'),$_smarty_tpl ) );?>
</strong>
                                        </div>
                                        <div class="col-sm-7 text-left">
                                            <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['serverdata']->value) {?>
                                    <div class="row">
                                        <div class="col-sm-5 text-right">
                                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'servername'),$_smarty_tpl ) );?>
</strong>
                                        </div>
                                        <div class="col-sm-7 text-left">
                                            <?php echo $_smarty_tpl->tpl_vars['serverdata']->value['hostname'];?>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 text-right">
                                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregisternsip'),$_smarty_tpl ) );?>
</strong>
                                        </div>
                                        <div class="col-sm-7 text-left">
                                            <?php echo $_smarty_tpl->tpl_vars['serverdata']->value['ipaddress'];?>

                                        </div>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['serverdata']->value['nameserver1'] || $_smarty_tpl->tpl_vars['serverdata']->value['nameserver2'] || $_smarty_tpl->tpl_vars['serverdata']->value['nameserver3'] || $_smarty_tpl->tpl_vars['serverdata']->value['nameserver4'] || $_smarty_tpl->tpl_vars['serverdata']->value['nameserver5']) {?>
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainnameservers'),$_smarty_tpl ) );?>
</strong>
                                            </div>
                                            <div class="col-sm-7 text-left">
                                                <?php if ($_smarty_tpl->tpl_vars['serverdata']->value['nameserver1']) {
echo $_smarty_tpl->tpl_vars['serverdata']->value['nameserver1'];?>
 (<?php echo $_smarty_tpl->tpl_vars['serverdata']->value['nameserver1ip'];?>
)<br /><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['serverdata']->value['nameserver2']) {
echo $_smarty_tpl->tpl_vars['serverdata']->value['nameserver2'];?>
 (<?php echo $_smarty_tpl->tpl_vars['serverdata']->value['nameserver2ip'];?>
)<br /><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['serverdata']->value['nameserver3']) {
echo $_smarty_tpl->tpl_vars['serverdata']->value['nameserver3'];?>
 (<?php echo $_smarty_tpl->tpl_vars['serverdata']->value['nameserver3ip'];?>
)<br /><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['serverdata']->value['nameserver4']) {
echo $_smarty_tpl->tpl_vars['serverdata']->value['nameserver4'];?>
 (<?php echo $_smarty_tpl->tpl_vars['serverdata']->value['nameserver4ip'];?>
)<br /><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['serverdata']->value['nameserver5']) {
echo $_smarty_tpl->tpl_vars['serverdata']->value['nameserver5'];?>
 (<?php echo $_smarty_tpl->tpl_vars['serverdata']->value['nameserver5ip'];?>
)<br /><?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['domain']->value && $_smarty_tpl->tpl_vars['sslStatus']->value) {?>
                                    <div class="row">
                                        <div class="col-sm-5 text-right">
                                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.sslStatus'),$_smarty_tpl ) );?>
</strong>
                                        </div>
                                        <div class="col-sm-7 text-left<?php if ($_smarty_tpl->tpl_vars['sslStatus']->value->isInactive()) {?> ssl-inactive<?php }?>">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->getImagePath();?>
" width="12" data-type="service" data-domain="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" data-showlabel="1" class="<?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->getClass();?>
"/>
                                            <span id="statusDisplayLabel">
                                                <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync()) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->getStatusDisplayLabel();?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </span>
                                        </div>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['sslStatus']->value->isActive() || $_smarty_tpl->tpl_vars['sslStatus']->value->needsResync()) {?>
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.startDate'),$_smarty_tpl ) );?>
</strong>
                                            </div>
                                            <div class="col-sm-7 text-left" id="ssl-startdate">
                                                <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync() || $_smarty_tpl->tpl_vars['sslStatus']->value->startDate) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->startDate->toClientDateFormat();?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.expiryDate'),$_smarty_tpl ) );?>
</strong>
                                            </div>
                                            <div class="col-sm-7 text-left" id="ssl-expirydate">
                                                <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync() || $_smarty_tpl->tpl_vars['sslStatus']->value->expiryDate) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->expiryDate->toClientDateFormat();?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.issuerName'),$_smarty_tpl ) );?>
</strong>
                                            </div>
                                            <div class="col-sm-7 text-left" id="ssl-issuer">
                                                <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync() || $_smarty_tpl->tpl_vars['sslStatus']->value->issuerName) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->issuerName;?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php }?>
                                <br>
                                <p>
                                    <a href="http://<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" class="btn btn-default" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'visitwebsite'),$_smarty_tpl ) );?>
</a>
                                    <?php if ($_smarty_tpl->tpl_vars['domainId']->value) {?>
                                        <a href="clientarea.php?action=domaindetails&id=<?php echo $_smarty_tpl->tpl_vars['domainId']->value;?>
" class="btn btn-default" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'managedomain'),$_smarty_tpl ) );?>
</a>
                                    <?php }?>
                                </p>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['moduleclientarea']->value) {?>
                                <div class="text-center module-client-area">
                                    <?php echo $_smarty_tpl->tpl_vars['moduleclientarea']->value;?>

                                </div>
                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['sslStatus']->value) {?>
                            <div class="tab-pane fade text-center" role="tabpanel" id="ssl-info">
                                <?php if ($_smarty_tpl->tpl_vars['sslStatus']->value->isActive()) {?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslActive','expiry'=>$_smarty_tpl->tpl_vars['sslStatus']->value->expiryDate->toClientDateFormat()),$_smarty_tpl ) );?>

                                    </div>
                                <?php } else { ?>
                                    <div class="alert alert-warning ssl-required" role="alert">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslInactive'),$_smarty_tpl ) );?>

                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['moduleclientarea']->value) {?>
                        <div class="tab-pane fade<?php if (!$_smarty_tpl->tpl_vars['domain']->value) {?> show active<?php }?> text-center" role="tabpanel" id="manage">
                            <?php if ($_smarty_tpl->tpl_vars['moduleclientarea']->value) {?>
                                <div class="text-center module-client-area">
                                    <?php echo $_smarty_tpl->tpl_vars['moduleclientarea']->value;?>

                                </div>
                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
                        <div class="tab-pane fade<?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['moduleclientarea']->value) {?> show active<?php }?> text-center" role="tabpanel" id="configoptions">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configurableoptions']->value, 'configoption');
$_smarty_tpl->tpl_vars['configoption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->do_else = false;
?>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <strong><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</strong>
                                    </div>
                                    <div class="col-sm-7 text-left">
                                        <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 3) {
if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'yes'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'no'),$_smarty_tpl ) );
}
} elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 4) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];?>
 x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['selectedoption'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedoption'];
}?>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['metricStats']->value) {?>
                        <div class="tab-pane fade<?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['moduleclientarea']->value && !$_smarty_tpl->tpl_vars['configurableoptions']->value) {?> show active<?php }?>" role="tabpanel" id="metrics">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/clientareaproductusagebilling.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                        <div class="tab-pane fade<?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['moduleclientarea']->value && !$_smarty_tpl->tpl_vars['configurableoptions']->value && !$_smarty_tpl->tpl_vars['metricStats']->value) {?> show active<?php }?> text-center" role="tabpanel" id="additionalinfo">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <strong><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</strong>
                                    </div>
                                    <div class="col-sm-7 text-left">
                                        <?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>

                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['lastupdate']->value) {?>
                        <div class="tab-pane fade text-center" role="tabpanel" id="resourceusage">
                            <div class="row">
                                <div class="col-sm-10 offset-sm-1">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'diskSpace'),$_smarty_tpl ) );?>
</h4>
                                            <input type="text" value="<?php echo substr($_smarty_tpl->tpl_vars['diskpercent']->value,0,-1);?>
" class="dial-usage" data-width="100" data-height="100" data-min="0" data-readOnly="true" />
                                            <p><?php echo $_smarty_tpl->tpl_vars['diskusage']->value;?>
MB / <?php echo $_smarty_tpl->tpl_vars['disklimit']->value;?>
MB</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bandwidth'),$_smarty_tpl ) );?>
</h4>
                                            <input type="text" value="<?php echo substr($_smarty_tpl->tpl_vars['bwpercent']->value,0,-1);?>
" class="dial-usage" data-width="100" data-height="100" data-min="0" data-readOnly="true" />
                                            <p><?php echo $_smarty_tpl->tpl_vars['bwusage']->value;?>
MB / <?php echo $_smarty_tpl->tpl_vars['bwlimit']->value;?>
MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted mb-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientarealastupdated'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['lastupdate']->value;?>
</p>
                            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.knob.js"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
>
                                jQuery(function() {
                                    jQuery(".dial-usage").knob({
                                        'format': function(v) {
                                            alert(v);
                                        }
                                    });
                                });
                            <?php echo '</script'; ?>
>
                        </div>

                    <?php }?>
                </div>
            <?php }?>

        <?php }?>

    </div>
    <div class="tab-pane fade" role="tabpanel" id="tabDownloads">

        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'downloadstitle'),$_smarty_tpl ) );?>
</h3>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientAreaProductDownloadsAvailable"),$_smarty_tpl ) );
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable6,'textcenter'=>true), 0, true);
?>

        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['downloads']->value, 'download');
$_smarty_tpl->tpl_vars['download']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
$_smarty_tpl->tpl_vars['download']->do_else = false;
?>
                <div class="col-10 offset-1">
                    <h4><?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>
</h4>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['download']->value['description'];?>

                    </p>
                    <p>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['download']->value['link'];?>
" class="btn btn-default"><i class="fas fa-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'downloadname'),$_smarty_tpl ) );?>
</a>
                    </p>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    </div>
    <div class="tab-pane fade" id="tabAddons">

        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingaddons'),$_smarty_tpl ) );?>
</h3>

        <?php if ($_smarty_tpl->tpl_vars['addonsavailable']->value) {?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientAreaProductAddonsAvailable"),$_smarty_tpl ) );
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable7,'textcenter'=>true), 0, true);
?>
        <?php }?>

        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                <div class="col-10 offset-1">
                    <div class="card bg-default card-accent-blue">
                        <div class="card-header">
                            <?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>

                            <div class="float-right label status-<?php echo strtolower($_smarty_tpl->tpl_vars['addon']->value['rawstatus']);?>
"><?php echo $_smarty_tpl->tpl_vars['addon']->value['status'];?>
</div>
                        </div>
                        <div class="row card-body">
                            <div class="col-md-6">
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['addon']->value['pricing'];?>

                                </p>
                                <p>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registered'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['addon']->value['regdate'];?>

                                </p>
                                <p>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingnextduedate'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['addon']->value['nextduedate'];?>

                                </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?php echo $_smarty_tpl->tpl_vars['addon']->value['managementActions'];?>

                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    </div>
    <div class="tab-pane fade" id="tabChangepw">

        <div class="card">
            <div class="card-body">
                <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'serverchangepassword'),$_smarty_tpl ) );?>
</h3>

                <?php if ($_smarty_tpl->tpl_vars['modulechangepwresult']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['modulechangepwresult']->value == "success") {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['modulechangepasswordmessage']->value,'textcenter'=>true), 0, true);
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['modulechangepwresult']->value == "error") {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['modulechangepasswordmessage']->value),'textcenter'=>true), 0, true);
?>
                    <?php }?>
                <?php }?>

                <form class="using-password-strength" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=productdetails#tabChangepw" role="form">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                    <input type="hidden" name="modulechangepassword" value="true" />

                    <div id="newPassword1" class="form-group row has-feedback">
                        <label for="inputNewPassword1" class="col-xl-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newpassword'),$_smarty_tpl ) );?>
</label>
                        <div class="col-xl-5">
                            <input type="password" class="form-control" id="inputNewPassword1" name="newpw" autocomplete="off" />
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                        <div class="col-xl-3">
                            <button type="button" class="btn btn-default btn-block generate-password" data-targetfields="inputNewPassword1,inputNewPassword2">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'generatePassword.btnLabel'),$_smarty_tpl ) );?>

                            </button>
                        </div>
                    </div>
                    <div id="newPassword2" class="form-group row has-feedback">
                        <label for="inputNewPassword2" class="col-xl-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'confirmnewpassword'),$_smarty_tpl ) );?>
</label>
                        <div class="col-xl-5">
                            <input type="password" class="form-control" id="inputNewPassword2" name="confirmpw" autocomplete="off" />
                            <div id="inputNewPassword2Msg">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-xl-4 col-xl-6">
                            <input class="btn btn-primary" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>
" />
                            <input class="btn" type="reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cancel'),$_smarty_tpl ) );?>
" />
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<?php }
}
