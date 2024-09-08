<?php
/* Smarty version 3.1.36, created on 2024-09-05 17:58:32
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66d9f148d13352_10111006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f6a7be5878040277621b2db9b3e74a3b5a5b8f3' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/login.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d9f148d13352_10111006 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="providerLinkingFeedback"></div>

<div class="tt-form-wrap">
    <form method="post" action="<?php echo routePath('login-validate');?>
" class="login-form" role="form">
        <div class="tt-form-container">
            <div class="tt-form-content">
                <div class="mb-4">

                    <h3 class="h4 mt-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loginbutton'),$_smarty_tpl ) );?>
</h3>
                    <p class="text-muted mb-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'userLogin.signInToContinue'),$_smarty_tpl ) );?>
</p>
                </div>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <div class="form-group">
                    <label for="inputEmail" class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaemail'),$_smarty_tpl ) );?>
</label>
                    <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fad fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" name="username" id="inputEmail" placeholder="name@example.com" autofocus>
                    </div>
                </div>
                <div class="form-group mb-4 focused">
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="inputPassword" class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareapassword'),$_smarty_tpl ) );?>
</label>
                        <div class="mb-2">
                            <a href="<?php echo routePath('password-reset-begin');?>
" class="small text-muted" tabindex="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotpw'),$_smarty_tpl ) );?>
</a>
                        </div>
                    </div>
                    <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fad fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control pw-input" name="password" id="inputPassword" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareapassword'),$_smarty_tpl ) );?>
" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn-reveal-pw" type="button" tabindex="-1">
                                <i class="fad fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled()) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tt/hostim/tt-captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php }?>
                <div class="d-flex align-items-center justify-content-between">
                    <button id="login" type="submit" class="btn btn-primary<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loginbutton'),$_smarty_tpl ) );?>

                    </button>
                    <label class="mb-0">
                        <input type="checkbox" class="form-check-input" name="rememberme" />
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loginrememberme'),$_smarty_tpl ) );?>

                    </label>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['linkableProviders']->value) {?>
                    <div class="tt-or-text tt-login-or mt-4">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orText'];?>

                    </div>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"login",'customFeedback'=>true), 0, true);
?>

                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <p class="mb-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'userLogin.notRegistered'),$_smarty_tpl ) );?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'userLogin.createAccount'),$_smarty_tpl ) );?>
</a></p>
                    <ul class="list-inline mb-0">
                        <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1 || $_smarty_tpl->tpl_vars['currencies']->value) {?>
                            <li class="list-inline-item">
                                <button type="button" class="btn p-0" data-toggle="modal" data-target="#modalChooseLanguage">
                                    <div class="d-inline-block align-middle">
                                        <div class="iti-flag <?php if ($_smarty_tpl->tpl_vars['activeLocale']->value['countryCode'] === 'GB') {?>us<?php } else {
echo mb_strtolower($_smarty_tpl->tpl_vars['activeLocale']->value['countryCode'], 'UTF-8');
}?>"></div>
                                    </div>
                                    <?php echo $_smarty_tpl->tpl_vars['activeLocale']->value['localisedName'];?>

                                    /
                                    <?php echo $_smarty_tpl->tpl_vars['activeCurrency']->value['prefix'];?>

                                    <?php echo $_smarty_tpl->tpl_vars['activeCurrency']->value['code'];?>

                                </button>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="tt-login-registration-testimonial" style="background: url('<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/tt-login-testimonial-bg.jpg')no-repeat center bottom / cover">
                <div class="tt-testimonial-slider">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tt/hostim/tt-login-register-testimonial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
        </div>
    </form>
</div>


<?php }
}
