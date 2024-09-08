<?php
/* Smarty version 3.1.36, created on 2024-09-05 18:01:34
  from '/home/trocloudbd/public_html/client.trocloudbd.com/admin/templates/blend/client-paymethods-rows.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66d9f1fec7d8d5_26234885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ab30f2d734a911f80d791e4005ea2a8c6c50611' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/admin/templates/blend/client-paymethods-rows.tpl',
      1 => 1725559045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d9f1fec7d8d5_26234885 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payMethods']->value, 'payMethod', false, 'i');
$_smarty_tpl->tpl_vars['payMethod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['payMethod']->value) {
$_smarty_tpl->tpl_vars['payMethod']->do_else = false;
?>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['i']->value%2) {?>altrow<?php }?>">
        <td class="client-paymethod<?php if ($_smarty_tpl->tpl_vars['payMethod']->value['isUsingInactiveGateway']) {?> gateway-inactive<?php }?>">
            <a id="btnPayMethodDetails<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['id'];?>
"
               href="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['url'];?>
"
               data-modal-title="Pay Method Details"
               data-btn-submit-id="savePaymentMethod"
               data-btn-submit-label="<?php echo AdminLang::trans('global.savechanges');?>
"
               data-role="edit-paymethod"
               onclick="return false;"
               <?php if ($_smarty_tpl->tpl_vars['payMethod']->value['isUsingInactiveGateway']) {?>
               title="<?php echo AdminLang::trans('clientsummary.payMethodGatewayInactive');?>
"
               <?php }?>
               class="paymethod-description open-modal">
                <i class="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['iconClass'];?>
"></i>
                &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['payMethod']->value['description'];?>

                <?php if ($_smarty_tpl->tpl_vars['payMethod']->value['isDefault']) {?><i class="pull-right fal fa-user-check">&nbsp;&nbsp;</i><?php }?>
            </a>
        </td>
    </tr>
    <?php
}
if ($_smarty_tpl->tpl_vars['payMethod']->do_else) {
?>
    <tr>
        <td align="center">No Pay Methods</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
