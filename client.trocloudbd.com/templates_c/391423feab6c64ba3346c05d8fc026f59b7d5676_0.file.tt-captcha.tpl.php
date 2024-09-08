<?php
/* Smarty version 3.1.36, created on 2024-09-06 08:34:09
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dabe81d82368_14361253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391423feab6c64ba3346c05d8fc026f59b7d5676' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-captcha.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dabe81d82368_14361253 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value)) {?>
    <div class="tt-captcha-wrapper">
        <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
            <div class="domainchecker-homepage-captcha">
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?>
            <div id="google-recaptcha-domainchecker" class="form-group recaptcha-container mx-auto"></div>
        <?php } elseif (!in_array($_smarty_tpl->tpl_vars['captcha']->value,array('invisible','recaptcha'))) {?>
            <div class="tt-captcha-info">
                <div id="default-captcha-domainchecker" class="<?php if ($_smarty_tpl->tpl_vars['filename']->value == 'domainchecker') {?>input-group input-group-box <?php }?>pb-3">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"captchaverify"),$_smarty_tpl ) );?>
</p>

                    <div class="d-flex align-items-center">
                        <img id="inputCaptchaImage" data-src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
includes/verifyimage.php" src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
includes/verifyimage.php" align="left" />
                        <input id="inputCaptcha" type="text" name="code" maxlength="6" class="ml-2 form-control <?php if ($_smarty_tpl->tpl_vars['filename']->value == 'register') {?>float-left<?php }?>"
                               data-toggle="tooltip" data-placement="right" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
"/>
                    </div>
                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
            </div>
        <?php }?>
    </div>
<?php }
}
}
