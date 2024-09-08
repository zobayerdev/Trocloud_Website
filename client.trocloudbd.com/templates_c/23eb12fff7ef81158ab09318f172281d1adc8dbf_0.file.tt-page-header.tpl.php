<?php
/* Smarty version 3.1.36, created on 2024-09-05 17:57:56
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-page-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66d9f124ec6ca4_52393457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23eb12fff7ef81158ab09318f172281d1adc8dbf' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-page-header.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d9f124ec6ca4_52393457 (Smarty_Internal_Template $_smarty_tpl) {
if (!in_array($_smarty_tpl->tpl_vars['templatefile']->value,array('login','clientregister','password-reset-container','logout','store/ox/index','store/sitelockvpn/index','store/sitelock/index'))) {?>
    <section class="tt-page-header py-5 bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tt-page-header-info">
                        <h1 class="text-white mb-0 h3">
                            <?php if ($_smarty_tpl->tpl_vars['clientareaaction']->value === '' && $_smarty_tpl->tpl_vars['clientareaaction']->value !== NULL) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"myDashboard"),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['displayTitle']->value;?>

                            <?php }?>
                        </h1>
                        <?php if ($_smarty_tpl->tpl_vars['tagline']->value) {?> <p><?php echo $_smarty_tpl->tpl_vars['tagline']->value;?>
</p><?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value) {?>
                        <div class="tt-breadcrumb">
                            <span class="tt-triangle-right"></span>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }
}
}
