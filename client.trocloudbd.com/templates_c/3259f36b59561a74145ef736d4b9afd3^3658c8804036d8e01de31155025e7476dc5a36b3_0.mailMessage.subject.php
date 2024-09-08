<?php
/* Smarty version 3.1.36, created on 2024-08-22 10:43:07
  from 'mailMessage:subject' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c7163b4e9ba8_99121734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3658c8804036d8e01de31155025e7476dc5a36b3' => 
    array (
      0 => 'mailMessage:subject',
      1 => 1724323387,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c7163b4e9ba8_99121734 (Smarty_Internal_Template $_smarty_tpl) {
?>[Ticket ID: <?php echo $_smarty_tpl->tpl_vars['ticket_tid']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['ticket_subject']->value;
}
}
