<?php
/* Smarty version 3.1.36, created on 2024-08-19 16:26:44
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c3724403b1f8_81833853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1724084804,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c3724403b1f8_81833853 (Smarty_Internal_Template $_smarty_tpl) {
?>An order has received its first payment but the automatic provisioning has failed and requires you to manually check & resolve.


Client ID: <?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>

<?php if ($_smarty_tpl->tpl_vars['service_id']->value) {?>Service ID: <?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>

Product/Service: <?php echo $_smarty_tpl->tpl_vars['service_product']->value;?>

Domain: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;
} else { ?>Domain ID: <?php echo $_smarty_tpl->tpl_vars['domain_id']->value;?>

Registration Type: <?php echo $_smarty_tpl->tpl_vars['domain_type']->value;?>

Domain: <?php echo $_smarty_tpl->tpl_vars['domain_name']->value;
}?>
Error: <?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>



<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_link']->value;
}
}
