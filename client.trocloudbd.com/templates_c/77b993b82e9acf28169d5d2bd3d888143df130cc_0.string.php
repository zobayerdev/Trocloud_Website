<?php
/* Smarty version 3.1.36, created on 2024-08-03 18:40:18
  from '77b993b82e9acf28169d5d2bd3d888143df130cc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae799289f7e1_78641082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae799289f7e1_78641082 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wizard-transition-step">
    <div class="icon"><i class="far fa-lightbulb"></i></div>
    <div class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"wizard.welcome"),$_smarty_tpl ) );?>
</div>
    <div class="tag"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"wizard.intro"),$_smarty_tpl ) );?>
</div>
    <div class="greyout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"wizard.noTime"),$_smarty_tpl ) );?>
</div>
</div><?php }
}
