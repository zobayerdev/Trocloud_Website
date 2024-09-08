<?php
/* Smarty version 3.1.36, created on 2024-09-06 12:53:29
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/supportticketsubmit-customfields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dafb495e89b9_23139039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb3f4874802ae733f7f54f18ec51ee8551b507fc' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/supportticketsubmit-customfields.tpl',
      1 => 1725559047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dafb495e89b9_23139039 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
?>
    <div class="form-group">
        <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
            <p class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</p>
        <?php }?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
