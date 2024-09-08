<?php
/* Smarty version 3.1.36, created on 2024-08-03 18:49:55
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/tt/common/tt-logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae7bd3c3dc25_54029217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '441f1e241f65ec41e57fb210366140a0f8f77ed9' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/tt/common/tt-logo.tpl',
      1 => 1684020968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae7bd3c3dc25_54029217 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['tt_debug_mode']->value) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php" class="navbar-brand mr-3">
        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/includes/tt/hostim/img/logo-color.png" class="logo-img" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
">
    </a>
<?php } else { ?>   
    <a class="navbar-brand mr-3" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php">
        <?php if ($_smarty_tpl->tpl_vars['assetLogoPath']->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['assetLogoPath']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" class="logo-img">
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>

        <?php }?>
    </a>
<?php }
}
}
