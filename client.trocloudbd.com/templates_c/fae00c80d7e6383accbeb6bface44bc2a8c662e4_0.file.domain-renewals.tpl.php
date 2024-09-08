<?php
/* Smarty version 3.1.36, created on 2024-08-18 04:49:56
  from '/home/trocloudbd/client.trocloudbd.com/templates/orderforms/standard_cart/domain-renewals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c17d7479ac85_71418673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fae00c80d7e6383accbeb6bface44bc2a8c662e4' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/orderforms/standard_cart/domain-renewals.tpl',
      1 => 1695224186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/standard_cart/common.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories-collapsed.tpl' => 1,
  ),
),false)) {
function content_66c17d7479ac85_71418673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="order-standard_cart">
    <div class="row">
        <div class="cart-sidebar">
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="cart-body">
            <div class="header-lined">
                <h1 class="font-size-36">
                    <?php if ($_smarty_tpl->tpl_vars['totalResults']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'navrenewdomains'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenew'),$_smarty_tpl ) );
}?>
                    <?php if ($_smarty_tpl->tpl_vars['totalResults']->value > 5) {?>
                        <div class="pull-right float-right">
                            <input id="domainRenewalFilter" type="search" class="domain-renewals-filter form-control input-inline-100" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'searchenterdomain'),$_smarty_tpl ) );?>
">
                        </div>
                    <?php }?>
                </h1>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['totalDomainCount']->value == 0) {?>
                <div id="no-domains" class="alert alert-warning text-center" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainRenewal']['noDomains'];?>

                </div>
                <p class="text-center">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php" class="btn btn-default">
                        <i class="fas fa-arrow-circle-left"></i>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['returnToClientArea'];?>

                    </a>
                </p>
            <?php } else { ?>
                <div class="row">

                    <div class="secondary-cart-body">
                        <?php if ($_smarty_tpl->tpl_vars['totalResults']->value < $_smarty_tpl->tpl_vars['totalDomainCount']->value) {?>
                            <div class="text-center">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.showingDomains','showing'=>$_smarty_tpl->tpl_vars['totalResults']->value,'totalCount'=>$_smarty_tpl->tpl_vars['totalDomainCount']->value),$_smarty_tpl ) );?>

                                <a id="linkShowAll" href="<?php echo routePath('cart-domain-renewals');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.showAll'),$_smarty_tpl ) );?>
</a>
                            </div>
                        <?php }?>

                        <div id="domainRenewals" class="domain-renewals">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['renewalsData']->value, 'renewalData');
$_smarty_tpl->tpl_vars['renewalData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['renewalData']->value) {
$_smarty_tpl->tpl_vars['renewalData']->do_else = false;
?>
                                <div class="domain-renewal" data-domain="<?php echo $_smarty_tpl->tpl_vars['renewalData']->value['domain'];?>
">
                                    <div class="pull-right float-right">
                                        <?php if (!$_smarty_tpl->tpl_vars['renewalData']->value['eligibleForRenewal']) {?>
                                            <span class="label label-info">
                                                <?php if ($_smarty_tpl->tpl_vars['renewalData']->value['freeDomainRenewal']) {?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.freeWithService'),$_smarty_tpl ) );?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.unavailable'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </span>
                                        <?php } elseif (($_smarty_tpl->tpl_vars['renewalData']->value['pastGracePeriod'] && $_smarty_tpl->tpl_vars['renewalData']->value['pastRedemptionGracePeriod'])) {?>
                                            <span class="label label-info">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenewalspastgraceperiod'),$_smarty_tpl ) );?>

                                            </span>
                                        <?php } elseif (!$_smarty_tpl->tpl_vars['renewalData']->value['beforeRenewLimit'] && $_smarty_tpl->tpl_vars['renewalData']->value['daysUntilExpiry'] > 0) {?>
                                            <span class="label label-<?php if ($_smarty_tpl->tpl_vars['renewalData']->value['daysUntilExpiry'] > 30) {?>success<?php } else { ?>warning<?php }?>">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.expiringIn','days'=>$_smarty_tpl->tpl_vars['renewalData']->value['daysUntilExpiry']),$_smarty_tpl ) );?>

                                            </span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['renewalData']->value['daysUntilExpiry'] === 0) {?>
                                            <span class="label label-grey">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'expiresToday'),$_smarty_tpl ) );?>

                                            </span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['renewalData']->value['beforeRenewLimit']) {?>
                                            <span class="label label-info">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.maximumAdvanceRenewal','days'=>$_smarty_tpl->tpl_vars['renewalData']->value['beforeRenewLimitDays']),$_smarty_tpl ) );?>

                                            </span>
                                        <?php } else { ?>
                                            <span class="label label-danger">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.expiredDaysAgo','days'=>$_smarty_tpl->tpl_vars['renewalData']->value['daysUntilExpiry']*-1),$_smarty_tpl ) );?>

                                            </span>
                                        <?php }?>
                                    </div>

                                    <h3 class="font-size-24"><?php echo $_smarty_tpl->tpl_vars['renewalData']->value['domain'];?>
</h3>

                                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareadomainexpirydate'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['renewalData']->value['expiryDate']->format('j M Y');?>
 (<?php echo $_smarty_tpl->tpl_vars['renewalData']->value['expiryDate']->diffForHumans();?>
)</p>
                                    <?php if ($_smarty_tpl->tpl_vars['renewalData']->value['freeDomainRenewal']) {?>
                                        <p class="domain-renewal-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.freeWithServiceDesc'),$_smarty_tpl ) );?>
</p>
                                    <?php }?>

                                    <?php if (($_smarty_tpl->tpl_vars['renewalData']->value['pastGracePeriod'] && $_smarty_tpl->tpl_vars['renewalData']->value['pastRedemptionGracePeriod']) || !count($_smarty_tpl->tpl_vars['renewalData']->value['renewalOptions'])) {?>
                                    <?php } else { ?>
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="renewalPricing<?php echo $_smarty_tpl->tpl_vars['renewalData']->value['id'];?>
" class="control-label col-md-5">
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.availablePeriods'),$_smarty_tpl ) );?>

                                                    <?php if ($_smarty_tpl->tpl_vars['renewalData']->value['inGracePeriod'] || $_smarty_tpl->tpl_vars['renewalData']->value['inRedemptionGracePeriod']) {?>
                                                        *
                                                    <?php }?>
                                                </label>
                                                <div class="col-sm-6">
                                                    <select class="form-control select-renewal-pricing" id="renewalPricing<?php echo $_smarty_tpl->tpl_vars['renewalData']->value['id'];?>
" data-domain-id="<?php echo $_smarty_tpl->tpl_vars['renewalData']->value['id'];?>
">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['renewalData']->value['renewalOptions'], 'renewalOption');
$_smarty_tpl->tpl_vars['renewalOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['renewalOption']->value) {
$_smarty_tpl->tpl_vars['renewalOption']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['renewalOption']->value['period'];?>
">
                                                                <?php echo $_smarty_tpl->tpl_vars['renewalOption']->value['period'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderyears'),$_smarty_tpl ) );?>
 @ <?php echo $_smarty_tpl->tpl_vars['renewalOption']->value['rawRenewalPrice'];?>

                                                                <?php if ($_smarty_tpl->tpl_vars['renewalOption']->value['gracePeriodFee'] && $_smarty_tpl->tpl_vars['renewalOption']->value['gracePeriodFee']->toNumeric() != 0.00) {?>
                                                                    + <?php echo $_smarty_tpl->tpl_vars['renewalOption']->value['gracePeriodFee'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.graceFee'),$_smarty_tpl ) );?>

                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['renewalOption']->value['redemptionGracePeriodFee'] && $_smarty_tpl->tpl_vars['renewalOption']->value['redemptionGracePeriodFee']->toNumeric() != 0.00) {?>
                                                                    + <?php echo $_smarty_tpl->tpl_vars['renewalOption']->value['redemptionGracePeriodFee'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.redemptionFee'),$_smarty_tpl ) );?>

                                                                <?php }?>
                                                            </option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    <?php }?>

                                    <div class="text-right">
                                        <?php if (!$_smarty_tpl->tpl_vars['renewalData']->value['eligibleForRenewal'] || $_smarty_tpl->tpl_vars['renewalData']->value['beforeRenewLimit'] || ($_smarty_tpl->tpl_vars['renewalData']->value['pastGracePeriod'] && $_smarty_tpl->tpl_vars['renewalData']->value['pastRedemptionGracePeriod'])) {?>
                                        <?php } else { ?>
                                            <button id="renewDomain<?php echo $_smarty_tpl->tpl_vars['renewalData']->value['id'];?>
" class="btn btn-default btn-sm btn-add-renewal-to-cart" data-domain-id="<?php echo $_smarty_tpl->tpl_vars['renewalData']->value['id'];?>
">
                                                <span class="to-add">
                                                    <i class="fas fa-fw fa-spinner fa-spin"></i>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addtocart'),$_smarty_tpl ) );?>

                                                </span>
                                                <span class="added"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincheckeradded'),$_smarty_tpl ) );?>
</span>
                                            </button>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>

                        <div class="text-center">
                            <small>
                                <?php if ($_smarty_tpl->tpl_vars['hasDomainsInGracePeriod']->value) {?>
                                    * <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.graceRenewalPeriodDescription'),$_smarty_tpl ) );?>

                                <?php }?>
                            </small>
                        </div>
                    </div>

                    <div class="secondary-cart-sidebar" id="scrollingPanelContainer">

                        <div id="orderSummary">
                            <div class="order-summary">
                                <div class="loader" id="orderSummaryLoader">
                                    <i class="fas fa-fw fa-sync fa-spin"></i>
                                </div>
                                <h2 class="font-size-30"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ordersummary'),$_smarty_tpl ) );?>
</h2>
                                <div class="summary-container" id="producttotal"></div>
                            </div>
                            <div class="text-center">
                                <a id="btnGoToCart" class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'viewcart'),$_smarty_tpl ) );?>

                                    <i class="far fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <form id="removeRenewalForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php">
        <input type="hidden" name="a" value="remove" />
        <input type="hidden" name="r" value="" id="inputRemoveItemType" />
        <input type="hidden" name="i" value="" id="inputRemoveItemRef" />
        <div class="modal fade modal-remove-item" id="modalRemoveItem" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header d-block">
                        <h4 class="modal-title">
                            <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.close'),$_smarty_tpl ) );?>
">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <i class="fas fa-times fa-3x"></i>
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.removeItem'),$_smarty_tpl ) );?>
</span>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cartremoveitemconfirm'),$_smarty_tpl ) );?>

                    </div>
                    <div class="modal-footer d-block">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'no'),$_smarty_tpl ) );?>
</button>
                        <button type="submit" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'yes'),$_smarty_tpl ) );?>
</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php echo '<script'; ?>
>recalculateRenewalTotals();<?php echo '</script'; ?>
>
<?php }
}
