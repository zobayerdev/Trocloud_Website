<?php
/* Smarty version 3.1.36, created on 2024-09-05 17:57:29
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/common/tt-logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66d9f109c1c659_88402146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99a749ae19a99ddabf013b0892d699ab3dec5e12' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/tt/common/tt-logo.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d9f109c1c659_88402146 (Smarty_Internal_Template $_smarty_tpl) {
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
