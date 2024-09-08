<?php
/* Smarty version 3.1.36, created on 2024-09-05 17:57:29
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66d9f109d049a9_75536895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dc246884020543d294e1b49f6018787de260c1f' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-services.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d9f109d049a9_75536895 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="bg-white ptb-100 tt-services-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tt-section-heading text-center mb-4">
                    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientHomePanels.productsAndServices'),$_smarty_tpl ) );?>
</h2>
                </div>
            </div>
        </div>
        <div class="row row-equal-height justify-content-center">
            <?php if (!empty($_smarty_tpl->tpl_vars['productGroups']->value) || $_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroups']->value, 'productGroup');
$_smarty_tpl->tpl_vars['productGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productGroup']->value) {
$_smarty_tpl->tpl_vars['productGroup']->do_else = false;
?>
                    <div class="col-lg-4 col-md-6">
                        <div class="tt-service-single mb-4">
                            <div class="tt-service-info">
                                <h3 class="h5 mb-3">
                                    <?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>

                                </h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->tagline;?>
</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['productGroup']->value->getRoutePath();?>
" class="tt-read-more">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'browseProducts'),$_smarty_tpl ) );?>
 <i class="fad fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>
</section>
<?php }
}
