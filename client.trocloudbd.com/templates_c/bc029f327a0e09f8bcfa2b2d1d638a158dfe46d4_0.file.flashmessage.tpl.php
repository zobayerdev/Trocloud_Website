<?php
/* Smarty version 3.1.36, created on 2024-08-04 14:19:01
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/flashmessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66af8dd5346a58_67027515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc029f327a0e09f8bcfa2b2d1d638a158dfe46d4' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/flashmessage.tpl',
      1 => 1667408342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66af8dd5346a58_67027515 (Smarty_Internal_Template $_smarty_tpl) {
$_prefixVariable1 = get_flash_message();
$_smarty_tpl->_assignInScope('message', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'success') {?>success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'warning') {?>warning<?php } else { ?>info<?php }
if ((isset($_smarty_tpl->tpl_vars['align']->value))) {?> text-<?php echo $_smarty_tpl->tpl_vars['align']->value;
}?>">
        <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>

    </div>
<?php }
}
}
