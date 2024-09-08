<?php
/* Smarty version 3.1.36, created on 2024-09-08 03:29:37
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/orderforms/standard_cart/domaintransfer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dd1a219537e8_83202338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e439bbaf27dcbf412c3264323010c7e919bc6abb' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/orderforms/standard_cart/domaintransfer.tpl',
      1 => 1725559047,
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
function content_66dd1a219537e8_83202338 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['transferdomain'];?>

                </h1>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="text-center">
                <h2 class="font-size-30"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferToUs'),$_smarty_tpl ) );?>
</h2>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferExtend'),$_smarty_tpl ) );?>
*</p>
            </div>
            <br />

            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php" id="frmDomainTransfer">
                <input type="hidden" name="a" value="addDomainTransfer">

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 offset-sm-2">
                        <div class="panel card panel-default">
                            <div class="panel-heading card-header pb-0">
                                <h3 class="panel-title card-title font-size-24 mb-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.singleTransfer'),$_smarty_tpl ) );?>
</h3>
                            </div>
                            <div class="panel-body card-body">
                                <div class="form-group">
                                    <label for="inputTransferDomain"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainname'),$_smarty_tpl ) );?>
</label>
                                    <input type="text" class="form-control" name="domain" id="inputTransferDomain" value="<?php echo $_smarty_tpl->tpl_vars['lookupTerm']->value;?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'yourdomainplaceholder'),$_smarty_tpl ) );?>
.<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'yourtldplaceholder'),$_smarty_tpl ) );?>
" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.enterDomain'),$_smarty_tpl ) );?>
" />
                                </div>
                                <div class="form-group">
                                    <label for="inputAuthCode" style="width:100%;">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.authCode'),$_smarty_tpl ) );?>

                                        <a data-toggle="tooltip" data-placement="left" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.authCodeTooltip'),$_smarty_tpl ) );?>
" class="pull-right float-right"><i class="fas fa-question-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.help'),$_smarty_tpl ) );?>
</a>
                                    </label>
                                    <input type="text" class="form-control" name="epp" id="inputAuthCode" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.authCodePlaceholder'),$_smarty_tpl ) );?>
" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" />
                                </div>
                                <div id="transferUnavailable" class="alert alert-warning slim-alert text-center w-hidden"></div>
                                <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && !$_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isEnabled()) {?>
                                    <div class="captcha-container" id="captchaContainer">
                                        <div class="default-captcha">
                                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cartSimpleCaptcha"),$_smarty_tpl ) );?>
</p>
                                            <div>
                                                <img id="inputCaptchaImage" src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
includes/verifyimage.php" />
                                                <input id="inputCaptcha" type="text" name="code" maxlength="6" class="form-control input-sm" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" />
                                            </div>
                                        </div>
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isEnabled() && !$_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isInvisible()) {?>
                                    <div class="text-center">
                                        <div class="form-group recaptcha-container" id="captchaContainer"></div>
                                    </div>
                                <?php }?>
                            </div>

                            <div class="panel-footer card-footer text-right">
                                <button type="submit" id="btnTransferDomain" class="btn btn-primary btn-transfer<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
">
                                    <span class="loader w-hidden" id="addTransferLoader">
                                        <i class="fas fa-fw fa-spinner fa-spin"></i>
                                    </span>
                                    <span id="addToCart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.addToCart"),$_smarty_tpl ) );?>
</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

            <p class="text-center small">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.extendExclusions'),$_smarty_tpl ) );?>
</p>
        </div>
    </div>
</div>
<?php }
}
