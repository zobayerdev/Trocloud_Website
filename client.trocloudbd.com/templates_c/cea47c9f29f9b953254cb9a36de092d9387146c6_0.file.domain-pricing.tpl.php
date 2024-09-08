<?php
/* Smarty version 3.1.36, created on 2024-09-06 17:15:57
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/domain-pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66db38cda284b9_25546839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea47c9f29f9b953254cb9a36de092d9387146c6' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/domain-pricing.tpl',
      1 => 1725559047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66db38cda284b9_25546839 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="domain-pricing">
    <?php if ($_smarty_tpl->tpl_vars['featuredTlds']->value) {?>
        <div class="featured-tlds-container">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featuredTlds']->value, 'tldinfo', false, 'num');
$_smarty_tpl->tpl_vars['tldinfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['tldinfo']->value) {
$_smarty_tpl->tpl_vars['tldinfo']->do_else = false;
?>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="featured-tld">
                            <div class="img-container">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/tld_logos/<?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['tldNoDots'];?>
.png">
                            </div>
                            <div class="price <?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['tldNoDots'];?>
">
                                <?php if (is_object($_smarty_tpl->tpl_vars['tldinfo']->value['register'])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['register']->toPrefixed();
if ($_smarty_tpl->tpl_vars['tldinfo']->value['period'] > 1) {
ob_start();
echo $_smarty_tpl->tpl_vars['tldinfo']->value['period'];
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.shortPerYears",'years'=>$_prefixVariable1),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.shortPerYear",'years'=>''),$_smarty_tpl ) );
}?>
                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>

                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['currencies']->value) {?>
        <form method="post" action="" class="float-right">
            <select name="currency" class="form-control currency-selector" onchange="submit()">
                <option>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"changeCurrency"),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['activeCurrency']->value['prefix'];?>
 <?php echo $_smarty_tpl->tpl_vars['activeCurrency']->value['code'];?>
)
                </option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['currency']->value['prefix'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>

                    </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </form>
    <?php }?>

    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.browseExtByCategory'),$_smarty_tpl ) );?>
</h4>

    <div class="tld-filters">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tldCategories']->value, 'count', false, 'category');
$_smarty_tpl->tpl_vars['count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['count']->value) {
$_smarty_tpl->tpl_vars['count']->do_else = false;
?>
            <a href="#" data-category="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" class="badge badge-secondary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainTldCategory.".((string)$_smarty_tpl->tpl_vars['category']->value),'defaultValue'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"DomainPricing",'noOrdering'=>true), 0, true);
?>
    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            var table = jQuery('#tableDomainPricing').show().DataTable();

            <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'date') {?>
                table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
            <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'subject') {?>
                table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
            <?php }?>
            table.draw();
            jQuery('#tableLoading').hide();
            jQuery('.tld-filters a').unbind();
            jQuery('.tld-filters a').click(function(e) {
                e.preventDefault();
                if (jQuery(this).hasClass('badge-success')) {
                    jQuery('#tableDomainPricing_wrapper input[type="search"]').val('').trigger('keyup');
                    jQuery('.tld-filters a').removeClass('badge-success');
                } else {
                    jQuery('#tableDomainPricing_wrapper input[type="search"]').val(jQuery(this)
                        .data('category'))
                        .trigger('keyup');
                    jQuery('.tld-filters a').removeClass('badge-success');
                    jQuery(this).addClass('badge-success');
                }
            });
        });
    <?php echo '</script'; ?>
>

    <div class="table-container clearfix overflow-auto">
        <table class="table table-list hidden" id="tableDomainPricing">
            <thead>
            <tr>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaintld'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'category'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.register'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.transfer'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.renewal'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gracePeriod'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'redemptionPeriod'),$_smarty_tpl ) );?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pricing']->value, 'data', false, 'extension');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extension']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['extension']->value;?>

                        <?php if ($_smarty_tpl->tpl_vars['data']->value['group']) {?>
                            <span class="tld-sale-group tld-sale-group-<?php echo $_smarty_tpl->tpl_vars['data']->value['group'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['group'];?>
!
                            </span>
                        <?php }?>
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['categories'][0];?>

                        <span class="w-hidden">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['categories'], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <?php echo $_smarty_tpl->tpl_vars['category']->value;?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </span>
                    </td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['register'], 'price', false, 'years');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['years']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['price']->value >= 0) {?>
                                <?php echo $_smarty_tpl->tpl_vars['price']->value;?>

                                <small><?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['years']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                            <?php } else { ?>
                                <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>
</small>
                            <?php }?>
                        </td>
                        <?php break 1;?>
                    <?php
}
if ($_smarty_tpl->tpl_vars['price']->do_else) {
?>
                        <td>-</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['transfer'], 'price', false, 'years');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['years']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['price']->value >= 0) {?>
                                <?php echo $_smarty_tpl->tpl_vars['price']->value;?>

                                <small><?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['years']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                            <?php } else { ?>
                                <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>
</small>
                            <?php }?>
                        </td>
                        <?php break 1;?>
                    <?php
}
if ($_smarty_tpl->tpl_vars['price']->do_else) {
?>
                        <td>-</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['renew'], 'price', false, 'years');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['years']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['price']->value >= 0) {?>
                                <?php echo $_smarty_tpl->tpl_vars['price']->value;?>

                                <small><?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['years']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                            <?php } else { ?>
                                <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainregnotavailable"),$_smarty_tpl ) );?>
</small>
                            <?php }?>
                        </td>
                        <?php break 1;?>
                    <?php
}
if ($_smarty_tpl->tpl_vars['price']->do_else) {
?>
                        <td>-</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <td>
                        <?php if (is_null($_smarty_tpl->tpl_vars['data']->value['grace_period'])) {?>
                            -
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['grace_period']['days'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenewalsdays'),$_smarty_tpl ) );?>

                            <small>(<?php echo $_smarty_tpl->tpl_vars['data']->value['grace_period']['price'];?>
)</small>
                        <?php }?>
                    </td>
                    <td>
                        <?php if (is_null($_smarty_tpl->tpl_vars['data']->value['redemption_period'])) {?>
                            -
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['redemption_period']['days'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenewalsdays'),$_smarty_tpl ) );?>

                            <small>(<?php echo $_smarty_tpl->tpl_vars['data']->value['redemption_period']['price'];?>
)</small>
                        <?php }?>
                    </td>
                </tr>
            <?php
}
if ($_smarty_tpl->tpl_vars['data']->do_else) {
?>
                <tr>
                    <td colspan="7"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"pricing.noExtensionsDefined"),$_smarty_tpl ) );?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <div class="text-center" id="tableLoading">
            <p><i class="fas fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>
</p>
        </div>
    </div>

</div>
<?php }
}
