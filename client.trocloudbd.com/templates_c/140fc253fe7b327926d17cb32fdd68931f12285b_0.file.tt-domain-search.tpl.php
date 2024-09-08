<?php
/* Smarty version 3.1.36, created on 2024-09-05 17:57:29
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-domain-search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66d9f109cf8ea5_28712682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '140fc253fe7b327926d17cb32fdd68931f12285b' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-domain-search.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d9f109cf8ea5_28712682 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="domainchecker.php" id="frmDomainHomepage">
    <div class="home-domain-search bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-lg-5 p-md-5 p-4 tt-domain-search-wrap">
                        <h2 class="text-center text-white mb-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"secureYourDomainShort"),$_smarty_tpl ) );?>
</h2>
                        <input type="hidden" name="transfer" />
                        <div class="input-group-wrapper">
                            <div class="input-group">
                                <input type="text" class="form-control" name="domain" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"exampledomain"),$_smarty_tpl ) );?>
" autocapitalize="none">
                                <span class="input-group-append d-none d-sm-block">
                            <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                                <button type="submit" class="btn btn-primary<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
" id="btnDomainSearch">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"search"),$_smarty_tpl ) );?>

                                </button>
                            <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                                        <button type="submit" id="btnTransfer" data-domain-action="transfer" class="btn btn-success<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainstransfer"),$_smarty_tpl ) );?>

                                </button>
                                    <?php }?>
                        </span>
                            </div>
                        </div>
                        <div class="row d-sm-none">
                            <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
 btn-block" id="btnDomainSearch2">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"search"),$_smarty_tpl ) );?>

                                    </button>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                                <div class="col-6">
                                    <button type="submit" id="btnTransfer2" data-domain-action="transfer" class="btn btn-success<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
 btn-block">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainstransfer"),$_smarty_tpl ) );?>

                                    </button>
                                </div>
                            <?php }?>
                        </div>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        <div class="d-flex justify-content-between align-items-center">
                            <?php if ($_smarty_tpl->tpl_vars['featuredTlds']->value) {?>
                                <ul class="tld-logos list-inline tt-domain-list text-white mb-0 d-none d-lg-block d-xl-block">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featuredTlds']->value, 'tldinfo', false, 'num');
$_smarty_tpl->tpl_vars['tldinfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['tldinfo']->value) {
$_smarty_tpl->tpl_vars['tldinfo']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['num']->value < 3) {?>
                                            <li class="list-inline-item">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/tld_logos/<?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['tldNoDots'];?>
.png">
                                                <span>
                                                    <?php if (is_object($_smarty_tpl->tpl_vars['tldinfo']->value['register'])) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['register']->toFull();?>

                                                    <?php } else { ?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>

                                                    <?php }?>
                                                </span>
                                            </li>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['pricetable']->value && count($_smarty_tpl->tpl_vars['pricetable']->value) > 0) {?>
                                    <ul class="list-inline tt-domain-list text-white mb-0 d-none d-lg-block d-xl-block">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pricetable']->value, 'price');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['price']->value['extension'] == '.com') {?>
                                                <li class="list-inline-item"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/com.png" alt="com" width="65" class="img-fluid"> <span><?php echo $_smarty_tpl->tpl_vars['price']->value['prefix'];
echo $_smarty_tpl->tpl_vars['price']->value['msetupfee'];?>
</span></li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['price']->value['extension'] == '.net') {?>
                                                <li class="list-inline-item"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/net.png" alt="net" width="65" class="img-fluid"> <span><?php echo $_smarty_tpl->tpl_vars['price']->value['prefix'];
echo $_smarty_tpl->tpl_vars['price']->value['msetupfee'];?>
</span></li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['price']->value['extension'] == '.org') {?>
                                                <li class="list-inline-item"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/org.png" alt="org" width="65" class="img-fluid"> <span><?php echo $_smarty_tpl->tpl_vars['price']->value['prefix'];
echo $_smarty_tpl->tpl_vars['price']->value['msetupfee'];?>
</span></li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['price']->value['extension'] == '.store') {?>
                                                <li class="list-inline-item"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/store.png" alt="store" width="65" class="img-fluid"> <span><?php echo $_smarty_tpl->tpl_vars['price']->value['prefix'];
echo $_smarty_tpl->tpl_vars['price']->value['msetupfee'];?>
</span></li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['price']->value['extension'] == '.online') {?>
                                                <li class="list-inline-item"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/online.png" alt="online" width="65" class="img-fluid"> <span><?php echo $_smarty_tpl->tpl_vars['price']->value['prefix'];
echo $_smarty_tpl->tpl_vars['price']->value['msetupfee'];?>
</span></li>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>
                            <?php }?>
                            <a href="<?php echo routePath('domain-pricing');?>
" class="tt-read-more float-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'viewAllPricing'),$_smarty_tpl ) );?>
 <i class="fad fa-arrow-right"></i></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</form><?php }
}
