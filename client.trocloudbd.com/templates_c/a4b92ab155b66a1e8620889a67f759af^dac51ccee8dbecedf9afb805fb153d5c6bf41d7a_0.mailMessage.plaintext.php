<?php
/* Smarty version 3.1.36, created on 2024-08-27 09:00:19
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66cd95a315aae2_70842750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1724749219,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cd95a315aae2_70842750 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,


This is a notice that invoice #<?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
 which was originally generated on <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
 has been updated.


Your payment method is: <?php echo $_smarty_tpl->tpl_vars['invoice_payment_method']->value;?>




    Invoice #<?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>

    Amount Due: <?php echo $_smarty_tpl->tpl_vars['invoice_balance']->value;?>

    Due Date: <?php echo $_smarty_tpl->tpl_vars['invoice_date_due']->value;?>




Invoice Items



    <?php echo $_smarty_tpl->tpl_vars['invoice_html_contents']->value;?>

    ------------------------------------------------------



You can login to our client area to view and pay the invoice at <?php echo $_smarty_tpl->tpl_vars['invoice_link']->value;?>



<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
