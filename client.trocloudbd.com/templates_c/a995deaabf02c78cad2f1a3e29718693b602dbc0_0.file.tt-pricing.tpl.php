<?php
/* Smarty version 3.1.36, created on 2024-08-03 18:49:55
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae7bd3d5c522_97597929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a995deaabf02c78cad2f1a3e29718693b602dbc0' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-pricing.tpl',
      1 => 1684023306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae7bd3d5c522_97597929 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ptb-100" id="pricingSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tt-section-heading m-4">
                    <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingheader'];?>
</h2>
                </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['tt_selectedProductList']->value) {?>
        <div class="row justify-content-center">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tt_selectedProductList']->value, 'tt_selectedProduct');
$_smarty_tpl->tpl_vars['tt_selectedProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tt_selectedProduct']->value) {
$_smarty_tpl->tpl_vars['tt_selectedProduct']->do_else = false;
?>
            <div class="col-lg-3 col-md-6">
                <div class="tt-price-single tt-rounded text-center p-4 mt-4 bg-white">
                    <?php if ($_smarty_tpl->tpl_vars['tt_selectedProduct']->value['is_featured'] == '1') {?>
                        <div class="position-absolute tt-popular-badge"> <span class="badge color-1 color-1-bg"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['featuredProduct'], 'UTF-8');?>
</span></div>
                    <?php }?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tt_selectedProduct']->value['tt_product_icon'];?>
" width="65" class="img-fluid" alt="support image">

                    <div class="tt-price-wrap my-4">
                        <h2 class="mb-4 h5"><?php echo $_smarty_tpl->tpl_vars['tt_selectedProduct']->value['name'];?>
</h2>
                        <span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['fromOnlyText'];?>
</span>
                        <h3 class="h4 font-weight-bold tt-price">
                            <?php echo $_smarty_tpl->tpl_vars['tt_selectedProduct']->value['prefix'];
echo $_smarty_tpl->tpl_vars['tt_selectedProduct']->value['tt_product_product_price'];?>

                        </h3>
                        <span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['tt_selectedProduct']->value['tt_product_billing_cycle'];?>
</span>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['tt_selectedProduct']->value['short_description']) {?>
                        <p><?php echo $_smarty_tpl->tpl_vars['tt_selectedProduct']->value['short_description'];?>
</p>
                    <?php }?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&pid=<?php echo $_smarty_tpl->tpl_vars['tt_selectedProduct']->value['id'];?>
" class="mt-4 btn btn-block <?php if ($_smarty_tpl->tpl_vars['tt_selectedProduct']->value['is_featured'] == '1') {?>btn-primary <?php } else { ?> btn-default <?php }?>">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                    </a>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['productGroups']->value) || $_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
            <div class="row">
                <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                    <div class="col-lg-6">
                        <div class="bg-white p-4 d-flex align-items-center justify-content-between tt-rounded mt-4">
                            <div class="tt-rt-info mr-3">
                                <h5 class="card-title pricing-card-title">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderregisterdomain'),$_smarty_tpl ) );?>

                                </h5>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'secureYourDomain'),$_smarty_tpl ) );?>
</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&domain=register" class="tt-read-more">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'navdomainsearch'),$_smarty_tpl ) );?>
 <i class="fad fa-arrow-right"></i>
                                </a>
                            </div>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icon-domain-1.svg" width="65" class="img-fluid" alt="support image">
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                    <div class="col-lg-6">
                        <div class="bg-white p-4 d-flex align-items-center justify-content-between tt-rounded mt-4">
                            <div class="tt-rt-info mr-3">
                                <h5 class="card-title pricing-card-title">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'transferYourDomain'),$_smarty_tpl ) );?>

                                </h5>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'transferExtend'),$_smarty_tpl ) );?>
</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&domain=transfer" class="tt-read-more">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'transferYourDomain'),$_smarty_tpl ) );?>
 <i class="fad fa-arrow-right"></i>
                                </a>
                            </div>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icon-domain-2.svg" width="65" class="img-fluid" alt="support image">
                        </div>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    </div>
</section>
<?php }
}
