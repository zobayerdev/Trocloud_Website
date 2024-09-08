<?php
/* Smarty version 3.1.36, created on 2024-08-04 18:03:57
  from '/home/trocloudbd/client.trocloudbd.com/templates/orderforms/standard_cart/domainregister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66afc28d029b38_95722984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e90a82e486cfc024c167ad769ba4cc395e99560' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/orderforms/standard_cart/domainregister.tpl',
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
function content_66afc28d029b38_95722984 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>

                </h1>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['findNewDomain'];?>
</p>

            <div class="domain-checker-container">
                <div class="domain-checker-bg clearfix">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php" id="frmDomainChecker">
                        <input type="hidden" name="a" value="checkDomain">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 offset-md-2 col-xs-10 col-xs-offset-1 col-10 offset-1">
                                <div class="input-group input-group-lg input-group-box">
                                    <input type="text" name="domain" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lookupTerm']->value;?>
" id="inputDomain" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainOrKeyword'),$_smarty_tpl ) );?>
" />
                                    <span class="input-group-btn input-group-append">
                                        <button type="submit" id="btnCheckAvailability" class="btn btn-primary domain-check-availability<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</button>
                                    </span>
                                </div>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value) && !$_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isInvisible()) {?>
                                <div class="col-md-8 col-md-offset-2 offset-md-2 col-xs-10 col-xs-offset-1 col-10 offset-1">
                                    <div class="captcha-container" id="captchaContainer">
                                        <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?>
                                            <br>
                                            <div class="text-center">
                                                <div class="form-group recaptcha-container"></div>
                                            </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['captcha']->value != "recaptcha") {?>
                                            <div class="default-captcha default-captcha-register-margin">
                                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cartSimpleCaptcha"),$_smarty_tpl ) );?>
</p>
                                                <div>
                                                    <img id="inputCaptchaImage" src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
includes/verifyimage.php" align="middle" />
                                                    <input id="inputCaptcha" type="text" name="code" maxlength="6" class="form-control input-sm" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" />
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </form>
                </div>
            </div>

            <div id="DomainSearchResults" class="w-hidden">
                <div id="searchDomainInfo" class="domain-checker-result-headline">
                    <p id="primaryLookupSearching" class="domain-lookup-loader domain-lookup-primary-loader domain-searching"><i class="fas fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.searching'),$_smarty_tpl ) );?>
...</p>
                    <div id="primaryLookupResult" class="domain-lookup-result w-hidden">
                        <p class="domain-invalid domain-checker-invalid"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainLetterOrNumber'),$_smarty_tpl ) );?>
<span class="domain-length-restrictions"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainLengthRequirements'),$_smarty_tpl ) );?>
</span></p>
                        <p class="domain-unavailable domain-checker-unavailable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainIsUnavailable'),$_smarty_tpl ) );?>
</p>
                        <p class="domain-tld-unavailable domain-checker-unavailable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainHasUnavailableTld'),$_smarty_tpl ) );?>
</p>
                        <p class="domain-available domain-checker-available"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailablemessage'];?>
</p>
                        <a class="domain-contact-support btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainContactUs'];?>
</a>
                        <div id="idnLanguageSelector" class="form-group idn-language-selector w-hidden">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 offset-sm-1 offset-lg-2">
                                    <div class="margin-10 text-center">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.idnLanguageDescription'),$_smarty_tpl ) );?>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-lg-6 col-sm-offset-2 col-lg-offset-3 offset-sm-2 offset-lg-3">
                                    <select name="idnlanguage" class="form-control">
                                        <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.idnLanguage'),$_smarty_tpl ) );?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['idnLanguages']->value, 'idnLanguage', false, 'idnLanguageKey');
$_smarty_tpl->tpl_vars['idnLanguage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idnLanguageKey']->value => $_smarty_tpl->tpl_vars['idnLanguage']->value) {
$_smarty_tpl->tpl_vars['idnLanguage']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['idnLanguageKey']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>('idnLanguage.').($_smarty_tpl->tpl_vars['idnLanguageKey']->value)),$_smarty_tpl ) );?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="field-error-msg">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.selectIdnLanguageForRegister'),$_smarty_tpl ) );?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="domain-price">
                            <span class="price"></span>
                            <button class="btn btn-primary btn-add-to-cart" data-whois="0" data-domain="">
                                <span class="to-add"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>
</span>
                                <span class="loading">
                                    <i class="fas fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                                </span>
                                <span class="added"><i class="far fa-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'checkout'),$_smarty_tpl ) );?>
</span>
                                <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                            </button>
                        </p>
                        <p class="domain-error domain-checker-unavailable"></p>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['spotlightTlds']->value) {?>
                    <div id="spotlightTlds" class="spotlight-tlds clearfix">
                        <div class="spotlight-tlds-container">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spotlightTlds']->value, 'data', false, 'key');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                <div class="spotlight-tld-container spotlight-tld-container-<?php echo count($_smarty_tpl->tpl_vars['spotlightTlds']->value);?>
">
                                    <div id="spotlight<?php echo $_smarty_tpl->tpl_vars['data']->value['tldNoDots'];?>
" class="spotlight-tld">
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['group']) {?>
                                            <div class="spotlight-tld-<?php echo $_smarty_tpl->tpl_vars['data']->value['group'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['groupDisplayName'];?>
</div>
                                        <?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['tld'];?>

                                        <span class="domain-lookup-loader domain-lookup-spotlight-loader">
                                            <i class="fas fa-spinner fa-spin"></i>
                                        </span>
                                        <div class="domain-lookup-result">
                                            <button type="button" class="btn unavailable w-hidden" disabled="disabled">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainunavailable'),$_smarty_tpl ) );?>

                                            </button>
                                            <button type="button" class="btn invalid w-hidden" disabled="disabled">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainunavailable'),$_smarty_tpl ) );?>

                                            </button>
                                            <span class="available price w-hidden"><?php echo $_smarty_tpl->tpl_vars['data']->value['register'];?>
</span>
                                            <button type="button" class="btn btn-add-to-cart w-hidden" data-whois="0" data-domain="">
                                                <span class="to-add"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.add'),$_smarty_tpl ) );?>
</span>
                                                <span class="loading">
                                                    <i class="fas fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                                                </span>
                                                <span class="added"><i class="far fa-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'checkout'),$_smarty_tpl ) );?>
</span>
                                                <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                                            </button>
                                            <button type="button" class="btn btn-primary domain-contact-support w-hidden">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainChecker.contactSupport'),$_smarty_tpl ) );?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                <?php }?>

                <div class="suggested-domains<?php if (!$_smarty_tpl->tpl_vars['showSuggestionsContainer']->value) {?> w-hidden<?php }?>">
                    <div class="panel-heading card-header">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.suggestedDomains'),$_smarty_tpl ) );?>

                    </div>
                    <div id="suggestionsLoader" class="panel-body card-body domain-lookup-loader domain-lookup-suggestions-loader">
                        <i class="fas fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.generatingSuggestions'),$_smarty_tpl ) );?>

                    </div>
                    <div id="domainSuggestions" class="domain-lookup-result list-group w-hidden">
                        <div class="domain-suggestion list-group-item w-hidden">
                            <span class="domain"></span><span class="extension"></span>
                            <span class="promo w-hidden">
                                <span class="sales-group-hot w-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainCheckerSalesGroup.hot'),$_smarty_tpl ) );?>
</span>
                                <span class="sales-group-new w-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainCheckerSalesGroup.new'),$_smarty_tpl ) );?>
</span>
                                <span class="sales-group-sale w-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainCheckerSalesGroup.sale'),$_smarty_tpl ) );?>
</span>
                            </span>
                            <div class="actions">
                                <span class="price"></span>
                                <button type="button" class="btn btn-add-to-cart" data-whois="1" data-domain="">
                                    <span class="to-add"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>
</span>
                                    <span class="loading">
                                        <i class="fas fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                                    </span>
                                    <span class="added"><i class="far fa-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'checkout'),$_smarty_tpl ) );?>
</span>
                                    <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                                </button>
                                <button type="button" class="btn btn-primary domain-contact-support w-hidden">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainChecker.contactSupport'),$_smarty_tpl ) );?>

                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer card-footer more-suggestions text-center w-hidden">
                        <a id="moreSuggestions" href="#" onclick="loadMoreSuggestions();return false;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsmoresuggestions'),$_smarty_tpl ) );?>
</a>
                        <span id="noMoreSuggestions" class="no-more small w-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincheckernomoresuggestions'),$_smarty_tpl ) );?>
</span>
                    </div>
                    <div class="text-center text-muted domain-suggestions-warning">
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainssuggestionswarnings'),$_smarty_tpl ) );?>
</p>
                    </div>
                </div>

            </div>

            <div class="domain-pricing">

                <?php if ($_smarty_tpl->tpl_vars['featuredTlds']->value) {?>
                    <div class="featured-tlds-container">
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featuredTlds']->value, 'tldinfo', false, 'num');
$_smarty_tpl->tpl_vars['tldinfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['tldinfo']->value) {
$_smarty_tpl->tpl_vars['tldinfo']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['num']->value%3 == 0 && (count($_smarty_tpl->tpl_vars['featuredTlds']->value)-$_smarty_tpl->tpl_vars['num']->value < 3)) {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['featuredTlds']->value)-$_smarty_tpl->tpl_vars['num']->value == 2) {?>
                                        <div class="col-sm-2"></div>
                                    <?php } else { ?>
                                        <div class="col-sm-4"></div>
                                    <?php }?>
                                <?php }?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="featured-tld">
                                        <div class="img-container">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/tld_logos/<?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['tldNoDots'];?>
.png">
                                        </div>
                                        <div class="price <?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['tldNoDots'];?>
">
                                            <?php if (is_object($_smarty_tpl->tpl_vars['tldinfo']->value['register'])) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['register']->toPrefixed();
if ($_smarty_tpl->tpl_vars['tldinfo']->value['period'] > 1) {
ob_start();
echo $_smarty_tpl->tpl_vars['tldinfo']->value['period'];
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.shortPerYears",'years'=>$_prefixVariable1),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.shortPerYear",'years'=>''),$_smarty_tpl ) );
}?>
                                            <?php } else { ?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>

                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                <?php }?>

                <h4 class="font-size-18"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.browseExtByCategory'),$_smarty_tpl ) );?>
</h4>

                <div class="tld-filters">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriesWithCounts']->value, 'count', false, 'category');
$_smarty_tpl->tpl_vars['count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['count']->value) {
$_smarty_tpl->tpl_vars['count']->do_else = false;
?>
                        <a href="#" data-category="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" class="badge badge-secondary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainTldCategory.".((string)$_smarty_tpl->tpl_vars['category']->value),'defaultValue'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                <div class="bg-white">
                    <div class="row no-gutters tld-pricing-header text-center">
                        <div class="col-md-4 tld-column"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderdomain'),$_smarty_tpl ) );?>
</div>
                        <div class="col-md-8">
                            <div class="row no-gutters">
                                <div class="col-xs-4 col-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.register'),$_smarty_tpl ) );?>
</div>
                                <div class="col-xs-4 col-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.transfer'),$_smarty_tpl ) );?>
</div>
                                <div class="col-xs-4 col-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.renewal'),$_smarty_tpl ) );?>
</div>
                            </div>
                        </div>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pricing']->value['pricing'], 'price', false, 'tld');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tld']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                        <div class="row no-gutters tld-row" data-category="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value['categories'], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>|<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
|<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
                            <div class="col-md-4 two-row-center px-4">
                                <strong>.<?php echo $_smarty_tpl->tpl_vars['tld']->value;?>
</strong>
                                <?php if ($_smarty_tpl->tpl_vars['price']->value['group']) {?>
                                    <span class="tld-sale-group tld-sale-group-<?php echo $_smarty_tpl->tpl_vars['price']->value['group'];?>
">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>('domainCheckerSalesGroup.').($_smarty_tpl->tpl_vars['price']->value['group'])),$_smarty_tpl ) );?>

                                    </span>
                                <?php }?>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-xs-4 col-4 text-center">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['price']->value['register'])) && current($_smarty_tpl->tpl_vars['price']->value['register']) > 0) {?>
                                            <?php echo current($_smarty_tpl->tpl_vars['price']->value['register']);?>
<br>
                                            <small><?php echo key($_smarty_tpl->tpl_vars['price']->value['register']);?>
 <?php if (key($_smarty_tpl->tpl_vars['price']->value['register']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['price']->value['register'])) && current($_smarty_tpl->tpl_vars['price']->value['register']) == 0) {?>
                                            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderfree'),$_smarty_tpl ) );?>
</small>
                                        <?php } else { ?>
                                            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'na'),$_smarty_tpl ) );?>
</small>
                                        <?php }?>
                                    </div>
                                    <div class="col-xs-4 col-4 text-center">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['price']->value['transfer'])) && current($_smarty_tpl->tpl_vars['price']->value['transfer']) > 0) {?>
                                            <?php echo current($_smarty_tpl->tpl_vars['price']->value['transfer']);?>
<br>
                                            <small><?php echo key($_smarty_tpl->tpl_vars['price']->value['transfer']);?>
 <?php if (key($_smarty_tpl->tpl_vars['price']->value['register']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['price']->value['transfer'])) && current($_smarty_tpl->tpl_vars['price']->value['transfer']) == 0) {?>
                                            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderfree'),$_smarty_tpl ) );?>
</small>
                                        <?php } else { ?>
                                            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'na'),$_smarty_tpl ) );?>
</small>
                                        <?php }?>
                                    </div>
                                    <div class="col-xs-4 col-4 text-center">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['price']->value['renew'])) && current($_smarty_tpl->tpl_vars['price']->value['renew']) > 0) {?>
                                            <?php echo current($_smarty_tpl->tpl_vars['price']->value['renew']);?>
<br>
                                            <small><?php echo key($_smarty_tpl->tpl_vars['price']->value['renew']);?>
 <?php if (key($_smarty_tpl->tpl_vars['price']->value['register']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['price']->value['renew'])) && current($_smarty_tpl->tpl_vars['price']->value['renew']) == 0) {?>
                                            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderfree'),$_smarty_tpl ) );?>
</small>
                                        <?php } else { ?>
                                            <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'na'),$_smarty_tpl ) );?>
</small>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="row tld-row no-tlds">
                        <div class="col-xs-12 col-12 text-center">
                            <br>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.selectExtCategory'),$_smarty_tpl ) );?>

                            <br><br>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="<?php if ($_smarty_tpl->tpl_vars['domainTransferEnabled']->value) {?>col-md-6<?php } else { ?>col-md-8 col-md-offset-2 offset-md-2<?php }?>">
                    <div class="domain-promo-box">

                        <div class="clearfix">
                            <i class="fas fa-server fa-4x"></i>
                            <h3 class="font-size-24 no-wrap"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.addHosting'),$_smarty_tpl ) );?>
</h3>
                            <p class="font-bold text-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.chooseFromRange'),$_smarty_tpl ) );?>
</p>
                        </div>

                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.packagesForBudget'),$_smarty_tpl ) );?>
</p>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php" class="btn btn-warning">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.exploreNow'),$_smarty_tpl ) );?>

                        </a>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['domainTransferEnabled']->value) {?>
                    <div class="col-md-6">
                        <div class="domain-promo-box">

                            <div class="clearfix">
                                <i class="fas fa-globe fa-4x"></i>
                                <h3 class="font-size-22"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferToUs'),$_smarty_tpl ) );?>
</h3>
                                <p class="font-bold text-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferExtend'),$_smarty_tpl ) );?>
*</p>
                            </div>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&domain=transfer" class="btn btn-primary">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferDomain'),$_smarty_tpl ) );?>

                            </a>

                            <p class="small">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.extendExclusions'),$_smarty_tpl ) );?>
</p>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
jQuery(document).ready(function() {
    jQuery('.tld-filters a:first-child').click();
<?php if ($_smarty_tpl->tpl_vars['lookupTerm']->value && !$_smarty_tpl->tpl_vars['captchaError']->value && !$_smarty_tpl->tpl_vars['invalid']->value) {?>
    jQuery('#btnCheckAvailability').click();
<?php }
if ($_smarty_tpl->tpl_vars['invalid']->value) {?>
    jQuery('#primaryLookupSearching').toggle();
    jQuery('#primaryLookupResult').children().toggle();
    jQuery('#primaryLookupResult').toggle();
    jQuery('#DomainSearchResults').toggle();
    jQuery('.domain-invalid').toggle();
<?php }?>
});
<?php echo '</script'; ?>
>
<?php }
}
