<?php
/* Smarty version 3.1.36, created on 2024-08-04 19:09:10
  from '/home/trocloudbd/client.trocloudbd.com/templates/orderforms/standard_cart/configureproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66afd1d6a76779_05851699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a36190da99c12fde8d546fbc486e924e2f42fc7' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/orderforms/standard_cart/configureproduct.tpl',
      1 => 1695224186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/standard_cart/common.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories.tpl' => 1,
    'file:orderforms/standard_cart/sidebar-categories-collapsed.tpl' => 1,
    'file:orderforms/standard_cart/recommendations-modal.tpl' => 1,
  ),
),false)) {
function content_66afd1d6a76779_05851699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
var _localLang = {
    'addToCart': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addToCart'], ENT_QUOTES, 'UTF-8', true);?>
',
    'addedToCartRemove': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addedToCartRemove'], ENT_QUOTES, 'UTF-8', true);?>
'
}
<?php echo '</script'; ?>
>

<div id="order-standard_cart">

    <div class="row">
        <div class="cart-sidebar">
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="cart-body">

            <div class="header-lined">
                <h1 class="font-size-36"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfigure'];?>
</h1>
            </div>

            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <form id="frmConfigureProduct">
                <input type="hidden" name="configure" value="true" />
                <input type="hidden" name="i" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" />

                <div class="row">
                    <div class="secondary-cart-body">

                        <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['configureDesiredOptions'];?>
</p>

                        <div class="product-info">
                            <p class="product-title"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value['name'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['productinfo']->value['description'];?>
</p>
                        </div>

                        <div class="alert alert-danger w-hidden" role="alert" id="containerProductValidationErrors">
                            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['correctErrors'];?>
:</p>
                            <ul id="containerProductValidationErrorsList"></ul>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['type'] == "recurring") {?>
                            <div class="field-container">
                                <div class="form-group">
                                    <label for="inputBillingcycle"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartchoosecycle'];?>
</label>
                                    <br>
                                    <select name="billingcycle" id="inputBillingcycle" class="form-control select-inline custom-select" onchange="updateConfigurableOptions(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, this.value); return false">
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['monthly']) {?>
                                            <option value="monthly"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "monthly") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['monthly'];?>

                                            </option>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['quarterly']) {?>
                                            <option value="quarterly"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "quarterly") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['quarterly'];?>

                                            </option>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['semiannually']) {?>
                                            <option value="semiannually"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "semiannually") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['semiannually'];?>

                                            </option>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['annually']) {?>
                                            <option value="annually"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "annually") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['annually'];?>

                                            </option>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['biennially']) {?>
                                            <option value="biennially"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "biennially") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['biennially'];?>

                                            </option>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['triennially']) {?>
                                            <option value="triennially"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "triennially") {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['pricing']->value['triennially'];?>

                                            </option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        <?php }?>

                        <?php if (count($_smarty_tpl->tpl_vars['metrics']->value) > 0) {?>
                            <div class="sub-heading">
                                <span class="primary-bg-color"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['title'];?>
</span>
                            </div>

                            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['explanation'];?>
</p>

                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metrics']->value, 'metric');
$_smarty_tpl->tpl_vars['metric']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['metric']->value) {
$_smarty_tpl->tpl_vars['metric']->do_else = false;
?>
                                    <li>
                                        <?php echo $_smarty_tpl->tpl_vars['metric']->value['displayName'];?>

                                        -
                                        <?php if (count($_smarty_tpl->tpl_vars['metric']->value['pricing']) > 1) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['startingFrom'];?>
 <?php echo $_smarty_tpl->tpl_vars['metric']->value['lowestPrice'];?>
 / <?php if ($_smarty_tpl->tpl_vars['metric']->value['unitName']) {
echo $_smarty_tpl->tpl_vars['metric']->value['unitName'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['unit'];
}?>
                                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modalMetricPricing-<?php echo $_smarty_tpl->tpl_vars['metric']->value['systemName'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['viewPricing'];?>

                                            </button>
                                        <?php } elseif (count($_smarty_tpl->tpl_vars['metric']->value['pricing']) == 1) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['metric']->value['lowestPrice'];?>
 / <?php if ($_smarty_tpl->tpl_vars['metric']->value['unitName']) {
echo $_smarty_tpl->tpl_vars['metric']->value['unitName'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['unit'];
}?>
                                            <?php if ($_smarty_tpl->tpl_vars['metric']->value['includedQuantity'] > 0) {?> (<?php echo $_smarty_tpl->tpl_vars['metric']->value['includedQuantity'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['includedNotCounted'];?>
)<?php }?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/usagebillingpricing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>

                            <br>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['productinfo']->value['type'] == "server") {?>
                            <div class="sub-heading">
                                <span class="primary-bg-color"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartconfigserver'];?>
</span>
                            </div>

                            <div class="field-container">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputHostname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverhostname'];?>
</label>
                                            <input type="text" name="hostname" class="form-control" id="inputHostname" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['hostname'];?>
" placeholder="servername.example.com">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputRootpw"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverrootpw'];?>
</label>
                                            <input type="password" name="rootpw" class="form-control" id="inputRootpw" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['rootpw'];?>
">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputNs1prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns1prefix'];?>
</label>
                                            <input type="text" name="ns1prefix" class="form-control" id="inputNs1prefix" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['ns1prefix'];?>
" placeholder="ns1">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputNs2prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns2prefix'];?>
</label>
                                            <input type="text" name="ns2prefix" class="form-control" id="inputNs2prefix" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['ns2prefix'];?>
" placeholder="ns2">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
                            <div class="sub-heading">
                                <span class="primary-bg-color"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfigpackage'];?>
</span>
                            </div>
                            <div class="product-configurable-options" id="productConfigurableOptions">
                                <div class="row">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configurableoptions']->value, 'configoption', false, 'num');
$_smarty_tpl->tpl_vars['configoption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 1) {?>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</label>
                                                <select name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" class="form-control">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoption']->value['options'], 'options', false, 'num2');
$_smarty_tpl->tpl_vars['options']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?> selected="selected"<?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['options']->value['name'];?>

                                                        </option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 2) {?>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</label>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoption']->value['options'], 'options', false, 'num2');
$_smarty_tpl->tpl_vars['options']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->do_else = false;
?>
                                                    <br />
                                                    <label>
                                                        <input type="radio" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?> checked="checked"<?php }?> />
                                                        <?php if ($_smarty_tpl->tpl_vars['options']->value['name']) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['options']->value['name'];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['enable'];?>

                                                        <?php }?>
                                                    </label>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 3) {?>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</label>
                                                <br />
                                                <label>
                                                    <input type="checkbox" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" value="1"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {?> checked<?php }?> />
                                                    <?php if ($_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name']) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name'];?>

                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['enable'];?>

                                                    <?php }?>
                                                </label>
                                            </div>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 4) {?>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</label>
                                                <?php if ($_smarty_tpl->tpl_vars['configoption']->value['qtymaximum']) {?>
                                                <?php if (!$_smarty_tpl->tpl_vars['rangesliderincluded']->value) {?>
                                                    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/ion.rangeSlider.min.js"><?php echo '</script'; ?>
>
                                                <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/ion.rangeSlider.css" rel="stylesheet">
                                                <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/ion.rangeSlider.skinModern.css" rel="stylesheet">
                                                    <?php $_smarty_tpl->_assignInScope('rangesliderincluded', true);?>
                                                <?php }?>
                                                    <input type="text" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?>" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" class="form-control" />
                                                    <?php echo '<script'; ?>
>
                                                        var sliderTimeoutId = null;
                                                        var sliderRangeDifference = <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtymaximum'];?>
 - <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
;
                                                        // The largest size that looks nice on most screens.
                                                        var sliderStepThreshold = 25;
                                                        // Check if there are too many to display individually.
                                                        var setLargerMarkers = sliderRangeDifference > sliderStepThreshold;

                                                        jQuery("#inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
").ionRangeSlider({
                                                            min: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
,
                                                            max: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtymaximum'];?>
,
                                                            grid: true,
                                                            grid_snap: setLargerMarkers ? false : true,
                                                            onChange: function() {
                                                                if (sliderTimeoutId) {
                                                                    clearTimeout(sliderTimeoutId);
                                                                }

                                                                sliderTimeoutId = setTimeout(function() {
                                                                    sliderTimeoutId = null;
                                                                    recalctotals();
                                                                }, 250);
                                                            }
                                                        });
                                                    <?php echo '</script'; ?>
>
                                                <?php } else { ?>
                                                    <div>
                                                        <input type="number" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?>" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" min="<?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
" onchange="recalctotals()" onkeyup="recalctotals()" class="form-control form-control-qty" />
                                                        <span class="form-control-static form-control-static-inline">
                                                                x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name'];?>

                                                            </span>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['num']->value%2 != 0) {?>
                                </div>
                                <div class="row">
                                    <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>

                            <div class="sub-heading pb-1">
                                <span class="primary-bg-color"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderadditionalrequiredinfo'];?>
<br><i><small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.requiredField'),$_smarty_tpl ) );?>
</small></i></span>
                            </div>

                            <div class="field-container">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
?>
                                    <div class="form-group">
                                        <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['customfield']->value['required'];?>
</label>
                                        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
                                            <span class="field-help-text">
                                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

                                            </span>
                                        <?php }?>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['addons']->value || count($_smarty_tpl->tpl_vars['addonsPromoOutput']->value) > 0) {?>

                            <div id="productAddonsContainer">
                                <div class="sub-heading">
                                    <span class="primary-bg-color"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartavailableaddons'];?>
</span>
                                </div>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addonsPromoOutput']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
                                    <div>
                                        <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <div class="row addon-products">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                                        <div class="col-sm-<?php if (count($_smarty_tpl->tpl_vars['addons']->value) > 1) {?>6<?php } else { ?>12<?php }?>">
                                            <div class="panel card panel-default panel-addon<?php if ($_smarty_tpl->tpl_vars['addon']->value['status']) {?> panel-addon-selected<?php }?>">
                                                <div class="panel-body card-body">
                                                    <label>
                                                        <input type="checkbox" name="addons[<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
]"<?php if ($_smarty_tpl->tpl_vars['addon']->value['status']) {?> checked<?php }?> />
                                                        <?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>

                                                    </label><br />
                                                    <?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>

                                                </div>
                                                <div class="panel-price">
                                                    <?php echo $_smarty_tpl->tpl_vars['addon']->value['pricing'];?>

                                                </div>
                                                <div class="panel-add">
                                                    <i class="fas fa-plus"></i>
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        <?php }?>

                        <div class="alert alert-warning info-text-sm">
                            <i class="fas fa-question-circle"></i>
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['haveQuestionsContact'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/contact.php" target="_blank" class="alert-link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['haveQuestionsClickHere'];?>
</a>
                        </div>

                    </div>
                    <div class="secondary-cart-sidebar" id="scrollingPanelContainer">

                        <div id="orderSummary">
                            <div class="order-summary">
                                <div class="loader" id="orderSummaryLoader">
                                    <i class="fas fa-fw fa-sync fa-spin"></i>
                                </div>
                                <h2 class="font-size-30"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersummary'];?>
</h2>
                                <div class="summary-container" id="producttotal"></div>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="btnCompleteProductConfig" class="btn btn-primary btn-lg">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>

                                    <i class="fas fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>recalctotals();<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:orderforms/standard_cart/recommendations-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
