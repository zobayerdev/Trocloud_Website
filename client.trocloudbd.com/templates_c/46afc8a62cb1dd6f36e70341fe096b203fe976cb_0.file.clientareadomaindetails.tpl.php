<?php
/* Smarty version 3.1.36, created on 2024-08-17 04:52:28
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/clientareadomaindetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c02c8cbf1207_47075772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46afc8a62cb1dd6f36e70341fe096b203fe976cb' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/clientareadomaindetails.tpl',
      1 => 1670680066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c02c8cbf1207_47075772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/trocloudbd/client.trocloudbd.com/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['registrarcustombuttonresult']->value == "success") {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'moduleactionsuccess'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable1,'textcenter'=>false), 0, true);
} elseif ($_smarty_tpl->tpl_vars['registrarcustombuttonresult']->value) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'moduleactionfailed'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_prefixVariable2,'textcenter'=>false), 0, true);
}?>

<?php if ($_smarty_tpl->tpl_vars['unpaidInvoice']->value) {?>
    <div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['unpaidInvoiceOverdue']->value) {?>danger<?php } else { ?>warning<?php }?>" id="alert<?php if ($_smarty_tpl->tpl_vars['unpaidInvoiceOverdue']->value) {?>Overdue<?php } else { ?>Unpaid<?php }?>Invoice">
        <div class="float-right">
            <a href="viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['unpaidInvoice']->value;?>
" class="btn btn-sm btn-default">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'payInvoice'),$_smarty_tpl ) );?>

            </a>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['unpaidInvoiceMessage']->value;?>

    </div>
<?php }?>

<div class="tab-content margin-bottom">
    <div class="tab-pane fade show active" id="tabOverview">
        <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'overview'),$_smarty_tpl ) );?>
</h3>
        <div class="card tt-custom-card">
            <div class="card-body tt-overview">
                <?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alerts']->value, 'alert');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['alert']->value['type'],'msg'=>"<strong>".((string)$_smarty_tpl->tpl_vars['alert']->value['title'])."</strong><br>".((string)$_smarty_tpl->tpl_vars['alert']->value['description']),'textcenter'=>false), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['systemStatus']->value != 'Active') {?>
                    <div class="alert alert-warning text-center" role="alert">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainCannotBeManagedUnlessActive'),$_smarty_tpl ) );?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['lockstatus']->value == "unlocked") {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "domainUnlockedMsg", null, null);?><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincurrentlyunlocked'),$_smarty_tpl ) );?>
</strong><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincurrentlyunlockedexp'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'domainUnlockedMsg')), 0, true);
?>
                <?php }?>

                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingdomain'),$_smarty_tpl ) );?>
:</h5>
                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</a>
                    </div>
                    <div class="col-lg-6">
                        <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'firstpaymentamount'),$_smarty_tpl ) );?>
:</h5>
                        <span><?php echo $_smarty_tpl->tpl_vars['firstpaymentamount']->value;?>
</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingregdate'),$_smarty_tpl ) );?>
:</h5>
                        <span><?php echo $_smarty_tpl->tpl_vars['registrationdate']->value;?>
</span>
                    </div>
                    <div class="col-lg-6">
                        <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'recurringamount'),$_smarty_tpl ) );?>
:</h5>
                        <?php echo $_smarty_tpl->tpl_vars['recurringamount']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'every'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['registrationperiod']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderyears'),$_smarty_tpl ) );?>

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingnextduedate'),$_smarty_tpl ) );?>
:</h5>
                        <?php echo $_smarty_tpl->tpl_vars['nextduedate']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderpaymentmethod'),$_smarty_tpl ) );?>
:</h5>
                        <?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;?>

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareastatus'),$_smarty_tpl ) );?>
:</h5>
                        <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['sslStatus']->value) {?>
                    <div class="row mb-3">
                        <div class="col-lg-6<?php if ($_smarty_tpl->tpl_vars['sslStatus']->value->isInactive()) {?> ssl-inactive<?php }?>">
                            <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.sslStatus'),$_smarty_tpl ) );?>
</h5>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->getImagePath();?>
" width="16" data-type="domain" data-domain="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
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
                        <?php if ($_smarty_tpl->tpl_vars['sslStatus']->value->isActive() || $_smarty_tpl->tpl_vars['sslStatus']->value->needsResync()) {?>
                            <div class="col-lg-6">
                                <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.startDate'),$_smarty_tpl ) );?>
</h5>
                                <span id="ssl-startdate">
                                    <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync() || $_smarty_tpl->tpl_vars['sslStatus']->value->startDate) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->startDate->toClientDateFormat();?>

                                    <?php } else { ?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                                    <?php }?>
                                </span>
                            </div>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['sslStatus']->value->isActive() || $_smarty_tpl->tpl_vars['sslStatus']->value->needsResync()) {?>
                        <div class="row">
                            <div class="col-lg-6">
                                <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.issuerName'),$_smarty_tpl ) );?>
</h5>
                                <span id="ssl-issuer">
                                    <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync() || $_smarty_tpl->tpl_vars['sslStatus']->value->issuerName) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->issuerName;?>

                                    <?php } else { ?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                                    <?php }?>
                                </span>
                            </div>
                            <div class="col-lg-6">
                                <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.expiryDate'),$_smarty_tpl ) );?>
</h5>
                                <span id="ssl-expirydate">
                                    <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync() || $_smarty_tpl->tpl_vars['sslStatus']->value->expiryDate) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->expiryDate->toClientDateFormat();?>

                                    <?php } else { ?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                                    <?php }?>
                                </span>
                            </div>
                        </div>
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['registrarclientarea']->value) {?>
                    <div class="moduleoutput">
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['registrarclientarea']->value,'modulebutton','btn');?>

                    </div>
                <?php }?>

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

                <br />

                <?php if ($_smarty_tpl->tpl_vars['canDomainBeManaged']->value && ($_smarty_tpl->tpl_vars['managementoptions']->value['nameservers'] || $_smarty_tpl->tpl_vars['managementoptions']->value['contacts'] || $_smarty_tpl->tpl_vars['managementoptions']->value['locking'] || $_smarty_tpl->tpl_vars['renew']->value)) {?>
                        
                    <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'doToday'),$_smarty_tpl ) );?>
</h3>

                    <ul>
                        <?php if ($_smarty_tpl->tpl_vars['systemStatus']->value == 'Active' && $_smarty_tpl->tpl_vars['managementoptions']->value['nameservers']) {?>
                            <li>
                                <a class="tabControlLink" data-toggle="tab" href="#tabNameservers">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changeDomainNS'),$_smarty_tpl ) );?>

                                </a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['systemStatus']->value == 'Active' && $_smarty_tpl->tpl_vars['managementoptions']->value['contacts']) {?>
                            <li>
                                <a href="clientarea.php?action=domaincontacts&domainid=<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'updateWhoisContact'),$_smarty_tpl ) );?>

                                </a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['systemStatus']->value == 'Active' && $_smarty_tpl->tpl_vars['managementoptions']->value['locking']) {?>
                            <li>
                                <a class="tabControlLink" data-toggle="tab" href="#tabReglock">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changeRegLock'),$_smarty_tpl ) );?>

                                </a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['renew']->value) {?>
                            <li>
                                <a href="<?php echo routePath('domain-renewal',$_smarty_tpl->tpl_vars['domain']->value);?>
">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'renewYourDomain'),$_smarty_tpl ) );?>

                                </a>
                            </li>
                        <?php }?>
                    </ul>

                <?php }?>

            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="tabAutorenew">
        <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenew'),$_smarty_tpl ) );?>
</h3>
        <div class="card tt-custom-card">
            <div class="card-body">

                <?php if ($_smarty_tpl->tpl_vars['changeAutoRenewStatusSuccessful']->value) {?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changessavedsuccessfully'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable3,'textcenter'=>false), 0, true);
?>
                <?php }?>

                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenewexp'),$_smarty_tpl ) );?>
</p>

                <h4 class="h6 mb-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainautorenewstatus'),$_smarty_tpl ) );?>
: <span class="label label-<?php if ($_smarty_tpl->tpl_vars['autorenew']->value) {?>success<?php } else { ?>danger<?php }?>"><?php if ($_smarty_tpl->tpl_vars['autorenew']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenewenabled'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenewdisabled'),$_smarty_tpl ) );
}?></span></h4>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domaindetails#tabAutorenew">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
">
                    <input type="hidden" name="sub" value="autorenew" />
                    <?php if ($_smarty_tpl->tpl_vars['autorenew']->value) {?>
                        <input type="hidden" name="autorenew" value="disable">
                        <button type="submit" class="btn btn-lg btn-danger">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenewdisable'),$_smarty_tpl ) );?>

                        </button>
                    <?php } else { ?>
                        <input type="hidden" name="autorenew" value="enable">
                        <button type="submit" class="btn btn-lg btn-success">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenewenable'),$_smarty_tpl ) );?>

                        </button>
                    <?php }?>
                </form>

            </div>
        </div>

    </div>
    <div class="tab-pane fade" id="tabNameservers">
        <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainnameservers'),$_smarty_tpl ) );?>
</h3>
        <div class="card tt-custom-card">
            <div class="card-body">

                <?php if ($_smarty_tpl->tpl_vars['nameservererror']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['nameservererror']->value,'textcenter'=>false), 0, true);
?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['subaction']->value == "savens") {?>
                    <?php if ($_smarty_tpl->tpl_vars['updatesuccess']->value) {?>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changessavedsuccessfully'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable4,'textcenter'=>false), 0, true);
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['error']->value,'textcenter'=>false), 0, true);
?>
                    <?php }?>
                <?php }?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainnsexp'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable5), 0, true);
?>

                <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domaindetails#tabNameservers">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
" />
                    <input type="hidden" name="sub" value="savens" />
                    <div class="form-check">
                        <label>
                            <input type="radio" class="form-check-input" name="nschoice" value="default" onclick="disableFields('domnsinputs',true)"<?php if ($_smarty_tpl->tpl_vars['defaultns']->value) {?> checked<?php }?> /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nschoicedefault'),$_smarty_tpl ) );?>

                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <label>
                            <input type="radio" class="form-check-input" name="nschoice" value="custom" onclick="disableFields('domnsinputs',false)"<?php if (!$_smarty_tpl->tpl_vars['defaultns']->value) {?> checked<?php }?> /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nschoicecustom'),$_smarty_tpl ) );?>

                        </label>
                    </div>

                    <?php
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['num']->step = 1;$_smarty_tpl->tpl_vars['num']->total = (int) ceil(($_smarty_tpl->tpl_vars['num']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['num']->step));
if ($_smarty_tpl->tpl_vars['num']->total > 0) {
for ($_smarty_tpl->tpl_vars['num']->value = 1, $_smarty_tpl->tpl_vars['num']->iteration = 1;$_smarty_tpl->tpl_vars['num']->iteration <= $_smarty_tpl->tpl_vars['num']->total;$_smarty_tpl->tpl_vars['num']->value += $_smarty_tpl->tpl_vars['num']->step, $_smarty_tpl->tpl_vars['num']->iteration++) {
$_smarty_tpl->tpl_vars['num']->first = $_smarty_tpl->tpl_vars['num']->iteration === 1;$_smarty_tpl->tpl_vars['num']->last = $_smarty_tpl->tpl_vars['num']->iteration === $_smarty_tpl->tpl_vars['num']->total;?>
                        <div class="form-group row">
                            <label for="inputNs<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="col-sm-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareanameserver'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</label>
                            <div class="col-md-7">
                                <input type="text" name="ns<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="form-control domnsinputs" id="inputNs<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['nameservers']->value[$_smarty_tpl->tpl_vars['num']->value]['value'];?>
" />
                            </div>
                        </div>
                    <?php }
}
?>

                    <div class="row">
                        <div class="col-sm-8 offset-sm-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changenameservers'),$_smarty_tpl ) );?>

                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <div class="tab-pane fade" id="tabReglock">
        <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainregistrarlock'),$_smarty_tpl ) );?>
</h3>
        <div class="card tt-custom-card">
            <div class="card-body">

                <?php if ($_smarty_tpl->tpl_vars['subaction']->value == "savereglock") {?>
                    <?php if ($_smarty_tpl->tpl_vars['updatesuccess']->value) {?>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changessavedsuccessfully'),$_smarty_tpl ) );
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable6,'textcenter'=>false), 0, true);
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['error']->value,'textcenter'=>false), 0, true);
?>
                    <?php }?>
                <?php }?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainlockingexp'),$_smarty_tpl ) );
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable7), 0, true);
?>

                <br />

                <h2 class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreglockstatus'),$_smarty_tpl ) );?>
: <span class="label label-<?php if ($_smarty_tpl->tpl_vars['lockstatus']->value == "locked") {?>success<?php } else { ?>danger<?php }?>"><?php if ($_smarty_tpl->tpl_vars['lockstatus']->value == "locked") {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenewenabled'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenewdisabled'),$_smarty_tpl ) );
}?></span></h2>

                <br />
                <br />

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domaindetails#tabReglock">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
">
                    <input type="hidden" name="sub" value="savereglock" />
                    <?php if ($_smarty_tpl->tpl_vars['lockstatus']->value == "locked") {?>
                        <p class="text-center">
                            <button type="submit" class="btn btn-lg btn-danger">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreglockdisable'),$_smarty_tpl ) );?>

                            </button>
                        </p>
                    <?php } else { ?>
                        <p class="text-center">
                            <button type="submit" class="btn btn-lg btn-success" name="reglock" value="1" />
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreglockenable'),$_smarty_tpl ) );?>

                            </button>
                        </p>
                    <?php }?>
                </form>

            </div>
        </div>

    </div>
    <div class="tab-pane fade" id="tabRelease">
        <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrelease'),$_smarty_tpl ) );?>
</h3>
        <div class="card tt-custom-card">
            <div class="card-body">



                <?php if ($_smarty_tpl->tpl_vars['releaseDomainSuccessful']->value) {?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changessavedsuccessfully'),$_smarty_tpl ) );
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable8,'textcenter'=>"false"), 0, true);
?>
                <?php } elseif (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>((string)$_smarty_tpl->tpl_vars['error']->value),'textcenter'=>"false"), 0, true);
?>
                <?php }?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreleasedescription'),$_smarty_tpl ) );
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable9), 0, true);
?>

                <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=domaindetails#tabRelease">
                    <input type="hidden" name="sub" value="releasedomain">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
">

                    <div class="form-group row">
                        <label for="inputReleaseTag" class="col-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreleasetag'),$_smarty_tpl ) );?>
</label>
                        <div class="col-6 col-sm-5">
                            <input type="text" class="form-control" id="inputReleaseTag" name="transtag" />
                        </div>
                    </div>

                    <p class="text-left">
                        <button type="submit" class="btn btn-primary">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrelease'),$_smarty_tpl ) );?>

                        </button>
                    </p>
                </form>

            </div>
        </div>

    </div>
    <div class="tab-pane fade" id="tabAddons">
        <h3 class="card-title mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainaddons'),$_smarty_tpl ) );?>
</h3>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainaddonsinfo'),$_smarty_tpl ) );?>
</p>
        <div class="card tt-custom-card">
            <div class="card-body">

                <?php if ($_smarty_tpl->tpl_vars['addons']->value['idprotection']) {?>
                    <div class="row mb-3">
                        <div class="col-3 col-md-2 text-center">
                            <i class="fas fa-shield-alt fa-3x"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainidprotection'),$_smarty_tpl ) );?>
</strong><br />
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainaddonsidprotectioninfo'),$_smarty_tpl ) );?>
<br />
                            <form action="clientarea.php?action=domainaddons" method="post">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
"/>
                                <?php if ($_smarty_tpl->tpl_vars['addonstatus']->value['idprotection']) {?>
                                    <input type="hidden" name="disable" value="idprotect"/>
                                    <button type="submit" class="btn btn-danger">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'disable'),$_smarty_tpl ) );?>

                                    </button>
                                <?php } else { ?>
                                    <input type="hidden" name="buy" value="idprotect"/>
                                    <button type="submit" class="btn btn-success">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainaddonsbuynow'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['addonspricing']->value['idprotection'];?>

                                    </button>
                                <?php }?>
                            </form>
                        </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['addons']->value['dnsmanagement']) {?>
                    <div class="row margin-bottom">
                        <div class="col-3 col-md-2 text-center">
                            <i class="fas fa-cloud fa-3x"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainaddonsdnsmanagement'),$_smarty_tpl ) );?>
</strong><br />
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainaddonsdnsmanagementinfo'),$_smarty_tpl ) );?>
<br />
                            <form action="clientarea.php?action=domainaddons" method="post" class="mt-3">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
"/>
                                <?php if ($_smarty_tpl->tpl_vars['addonstatus']->value['dnsmanagement']) {?>
                                    <input type="hidden" name="disable" value="dnsmanagement"/>
                                    <a class="btn btn-success" href="clientarea.php?action=domaindns&domainid=<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manage'),$_smarty_tpl ) );?>
</a>
                                    <button type="submit" class="btn btn-danger">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'disable'),$_smarty_tpl ) );?>

                                    </button>
                                <?php } else { ?>
                                    <input type="hidden" name="buy" value="dnsmanagement"/>
                                    <button type="submit" class="btn btn-success">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainaddonsbuynow'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['addonspricing']->value['dnsmanagement'];?>

                                    </button>
                                <?php }?>
                            </form>
                        </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['addons']->value['emailforwarding']) {?>
                    <div class="row mb-3">
                        <div class="col-3 col-md-2 text-center">
                            <i class="fas fa-envelope fa-3x">&nbsp;</i><i class="fas fa-share fa-2x"></i>
                        </div>
                        <div class="col-9 col-md-10">
                            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainemailforwarding'),$_smarty_tpl ) );?>
</strong><br />
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainaddonsemailforwardinginfo'),$_smarty_tpl ) );?>
<br />
                            <form action="clientarea.php?action=domainaddons" method="post" class="mt-3">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
"/>
                                <?php if ($_smarty_tpl->tpl_vars['addonstatus']->value['emailforwarding']) {?>
                                    <input type="hidden" name="disable" value="emailfwd"/>
                                    <a class="btn btn-success" href="clientarea.php?action=domainemailforwarding&domainid=<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'manage'),$_smarty_tpl ) );?>
</a>
                                    <button type="submit" class="btn btn-danger">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'disable'),$_smarty_tpl ) );?>

                                    </button>
                                <?php } else { ?>
                                    <input type="hidden" name="buy" value="emailfwd"/>
                                    <button type="submit" class="btn btn-success">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainaddonsbuynow'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['addonspricing']->value['emailforwarding'];?>

                                    </button>
                                <?php }?>
                            </form>
                        </div>
                    </div>
                <?php }?>

            </div>
        </div>
    </div>
</div>

<?php }
}
