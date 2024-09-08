<?php
/* Smarty version 3.1.36, created on 2024-09-05 17:57:29
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-single-navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66d9f109c17031_59142352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16019df754a6e961b19489064cd15fe78df3d435' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-single-navbar.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d9f109c17031_59142352 (Smarty_Internal_Template $_smarty_tpl) {
?><header id="header" class="header tt-header">
    <div class="overlay"></div>
    <div class="navbar navbar-light">
        <div class="container">

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tt/common/tt-logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <div class="navbar navbar-expand-xl main-navbar-wrapper tt-main-header offcanvas-collapse">
                <div class="" id="mainNavbar">
                    <form method="post" action="<?php echo routePath('knowledgebase-search');?>
" class="d-xl-none">
                        <div class="input-group search w-100 mb-2">
                            <div class="input-group-prepend">
                                <button class="btn btn-default" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <input class="form-control prepended-form-control" type="text" name="search" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"searchOurKnowledgebase"),$_smarty_tpl ) );?>
...">
                        </div>
                    </form>
                    <ul id="nav" class="navbar-nav mr-auto">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0, true);
?>
                    </ul>
                </div>
            </div>

            <div class="tt-main-header tt-toolbar-wrap">
                <ul class="navbar-nav toolbar tt-toolbar-wrap tt-secondary-list">

                    <li class="nav-item dropdown d-none d-lg-none d-xl-block">
                        <a href="javascript:void(0)" id="dropdownMenuButton" class="position-relative mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fal fa-search fa-fw"></i>
                        </a>
                        <form method="post" action="<?php echo routePath('knowledgebase-search');?>
" class="position-absolute form-inline dropdown-menu dropdown-menu-right p-4 bg-gray-light border-0" aria-labelledby="dropdownMenuButton">
                            <div class="input-group search d-none d-xl-flex">
                                <div class="input-group-prepend">
                                    <button class="btn-default border-0" type="submit">
                                        <i class="fal fa-search"></i>
                                    </button>
                                </div>
                                <input class="form-control appended-form-control font-weight-light" type="text" name="search" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"searchOurKnowledgebase"),$_smarty_tpl ) );?>
...">
                            </div>
                        </form>
                    </li>
                    <!--currency dropdown start-->
                    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['multiCurrency']->value && count($_smarty_tpl->tpl_vars['multiCurrency']->value) > 1) {?>
                        <li class="dropdown" id="currency-dropdown">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['multiCurrency']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['currency']->value['id'] == $_smarty_tpl->tpl_vars['selectedCurrency']->value) {?>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <img alt="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currency']->value['flag'];?>
" class="tt-country-flag">
                                        <span><?php echo $_smarty_tpl->tpl_vars['currency']->value['prefix'];?>
</span> <b class="caret"></b>
                                    </a>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['multiCurrency']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['currency']->value['id'] != $_smarty_tpl->tpl_vars['selectedCurrency']->value) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['isQueryExist']->value == true) {?>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlForCurrentcy']->value;?>
&currency=<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currency']->value['flag'];?>
" class="tt-country-flag"><span><?php echo $_smarty_tpl->tpl_vars['currency']->value['prefix'];?>
</span></a></li>
                                        <?php } else { ?>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlForCurrentcy']->value;?>
?currency=<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currency']->value['flag'];?>
" class="tt-country-flag"><span><?php echo $_smarty_tpl->tpl_vars['currency']->value['prefix'];?>
</span></a></li>
                                        <?php }?>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </li>
                    <?php }?>
                    <!--currency dropdown end-->
                    <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                        <li class="tt-nav-item tt-notification">
                            <button type="button" data-toggle="popover" id="accountNotifications" data-placement="bottom">
                                <i class="fal fa-bell"></i>
                                <span class="tt-circle"></span>
                            </button>
                            <div id="accountNotificationsContent" class="w-hidden">
                                <ul class="client-alerts">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientAlerts']->value, 'alert');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLink();?>
">
                                                <i class="far fa-fw fa-<?php if ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'danger') {?>exclamation-circle<?php } elseif ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'warning') {?>exclamation-triangle<?php } elseif ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'info') {?>info-circle<?php } else { ?>check-circle<?php }?>"></i>
                                                <div class="message"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>
</div>
                                            </a>
                                        </li>
                                        <?php
}
if ($_smarty_tpl->tpl_vars['alert']->do_else) {
?>
                                        <li class="none">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notificationsnone'),$_smarty_tpl ) );?>

                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </div>
                        </li>

                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value,'rightDrop'=>true), 0, true);
?>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['allowClientRegistration']) {?>
                            <li class="nav-item">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php" class="btn-sm"><i class="fal fa-user"></i> <span class="tt-hide-sm ml-1"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</span></a>
                            </li>
                        <?php }?>
                        <li class="nav-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php" class="btn-sm"><i class="fal fa-sign-in"></i> <span class="tt-hide-sm ml-1"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</span></a>
                        </li>
                    <?php }?>
                    <li class="nav-item">
                        <a class="btn nav-link cart-btn" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view">
                            <i class="fal fa-shopping-bag fa-fw"></i>
                            <span id="cartItemCount" class="tt-cart-badge rounded-circle"><?php echo $_smarty_tpl->tpl_vars['cartitemcount']->value;?>
</span>
                            <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"carttitle"),$_smarty_tpl ) );?>
</span>
                        </a>
                    </li>
                    <li class="nav-item ml-2 d-xl-none">
                        <button class="btn nav-link" type="button" data-toggle="offcanvas">
                            <span class="far fa-bars fa-fw"></span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header><?php }
}
