<?php
/* Smarty version 3.1.36, created on 2024-08-03 19:00:15
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae7e3f15c738_80341401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acb483c88a615defaf28e6b36c2a76cb43d92018' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/footer.tpl',
      1 => 1722711033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae7e3f15c738_80341401 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if (!in_array($_smarty_tpl->tpl_vars['templatefile']->value,array('login','clientregister','password-reset-container','logout'))) {?>
    </div>

                        </div>
                        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
                            <div class="d-lg-none sidebar sidebar-secondary">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0, true);
?>
                            </div>
                        <?php }?>
                    <div class="clearfix"></div>
                </div>
            </div>
    <?php } else { ?>
        </div>
    </div>
    <?php }?>
    </section>

    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tt/hostim/tt-cta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>


    <footer id="footer" class="footer py-0 bg-dark tt-footer">
        <div class="tt-footer-top ptb-60">
            <div class="container">
               <div class="row">
                   <div class="col-lg-3 col-md-6">
                       <div class="tt-footer-widget">
                           </div>
               </div>
            </div>
        </div>
        <div class="tt-footer-bottom py-3">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-7">
                        <p class="copyright text-left mb-0 mt-0">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"copyrightFooterNotice",'year'=>$_smarty_tpl->tpl_vars['date_year']->value,'company'=>$_smarty_tpl->tpl_vars['companyname']->value),$_smarty_tpl ) );?>

                        </p>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-inline mb-0 float-lg-right">
                            <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1 || $_smarty_tpl->tpl_vars['currencies']->value) {?>
                                <li class="list-inline-item">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#modalChooseLanguage">
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
            </div>
        </div>
    </footer>

    <div id="fullpage-overlay" class="w-hidden">
        <div class="outer-wrapper">
            <div class="inner-wrapper">
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/overlay-spinner.svg" alt="">
                <br>
                <span class="msg"></span>
            </div>
        </div>
    </div>

    <div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'close'),$_smarty_tpl ) );?>
</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                </div>
                <div class="modal-footer">
                    <div class="float-left loader">
                        <i class="fas fa-circle-notch fa-spin"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>

                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'close'),$_smarty_tpl ) );?>

                    </button>
                    <button type="button" class="btn btn-primary modal-submit">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'submit'),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
        </div>
    </div>

    <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
">
        <div class="modal modal-localisation" id="modalChooseLanguage" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body p-4">
                        <div class="d-flex align-items-center justify-content-between pb-3">
                            <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'chooselanguage'),$_smarty_tpl ) );?>
</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                            </button>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1) {?>

                            <div class="row item-selector">
                                <input type="hidden" name="language" data-current="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" />
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locales']->value, 'locale');
$_smarty_tpl->tpl_vars['locale']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->do_else = false;
?>
                                    <div class="col-6 col-lg-3">
                                        <a href="#" class="item<?php if ($_smarty_tpl->tpl_vars['language']->value == $_smarty_tpl->tpl_vars['locale']->value['language']) {?> active<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>

                                        </a>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['currencies']->value) {?>
                            <h5 class="h5 mt-4 text-dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'choosecurrency'),$_smarty_tpl ) );?>
</h5>
                            <div class="row item-selector">
                                <input type="hidden" name="currency" data-current="<?php echo $_smarty_tpl->tpl_vars['activeCurrency']->value['id'];?>
" value="">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'selectCurrency');
$_smarty_tpl->tpl_vars['selectCurrency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['selectCurrency']->value) {
$_smarty_tpl->tpl_vars['selectCurrency']->do_else = false;
?>
                                    <div class="col-6 col-lg-3">
                                        <a href="#" class="item<?php if ($_smarty_tpl->tpl_vars['activeCurrency']->value['id'] == $_smarty_tpl->tpl_vars['selectCurrency']->value['id']) {?> active<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['selectCurrency']->value['id'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['selectCurrency']->value['prefix'];?>
 <?php echo $_smarty_tpl->tpl_vars['selectCurrency']->value['code'];?>

                                        </a>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>

                        <button type="submit" class="btn btn-primary mt-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'Apply Now'),$_smarty_tpl ) );?>
</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['adminLoggedIn']->value) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1" class="btn btn-return-to-admin" data-toggle="tooltip" data-placement="bottom" title="<?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'adminmasqueradingasclient'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logoutandreturntoadminarea'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'adminloggedin'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'returntoadminarea'),$_smarty_tpl ) );
}?>">
            <i class="fas fa-redo-alt"></i>
            <span class="d-none d-md-inline-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"admin.returnToAdmin"),$_smarty_tpl ) );?>
</span>
        </a>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/generate-password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/swiper-bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/jquery.easing.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/custom.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
</body>
</htm


<?php }
}
