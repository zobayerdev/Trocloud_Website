<?php
/* Smarty version 3.1.36, created on 2024-08-10 19:19:10
  from '/home/trocloudbd/client.trocloudbd.com/templates/orderforms/standard_cart/addons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66b7bd2e7530d9_23262912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7d95809ab39aaedabd9210e234071b05dde3f2b' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/orderforms/standard_cart/addons.tpl',
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
function content_66b7bd2e7530d9_23262912 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h1 class="font-size-36"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddons'];?>
</h1>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if (count($_smarty_tpl->tpl_vars['addons']->value) == 0) {?>
                <div id="noAddons" class="alert alert-warning text-center" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddonsnone'];?>

                </div>
                <p class="text-center">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php" class="btn btn-default">
                        <i class="fas fa-arrow-circle-left"></i>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['returnToClientArea'];?>

                    </a>
                </p>
            <?php }?>

            <div class="products">
                <div class="row row-eq-height">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon', false, 'num');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                    <div class="col-md-6">
                        <div class="product clearfix" id="product<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=add" class="form-inline">
                                <input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
" />
                                <header class="col-12">
                                    <span><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
                                </header>
                                <div class="product-desc product-desc-full-width">
                                    <p><?php echo nl2br($_smarty_tpl->tpl_vars['addon']->value['description']);?>
</p>
                                    <div class="form-group">
                                        <select name="productid" id="inputProductId<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="field form-control">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon']->value['productids'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['product']->value['domain']) {?> - <?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];
}?>
                                                </option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <footer class="col-12 text-right">
                                    <div class="product-pricing">
                                        <?php if ($_smarty_tpl->tpl_vars['addon']->value['free']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                        <?php } else { ?>
                                            <span class="price"><?php echo $_smarty_tpl->tpl_vars['addon']->value['recurringamount'];?>
 <?php echo $_smarty_tpl->tpl_vars['addon']->value['billingcycle'];?>
</span>
                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['setupfee']) {?><br />+ <?php echo $_smarty_tpl->tpl_vars['addon']->value['setupfee'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?>
                                        <?php }?>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fas fa-shopping-cart"></i>
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                                    </button>
                                </footer>
                            </form>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['num']->value%2 != 0) {?>
                </div>
                <div class="row row-eq-height">
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
