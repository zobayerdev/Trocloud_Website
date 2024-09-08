<?php
/* Smarty version 3.1.36, created on 2024-08-03 18:40:15
  from '/home/trocloudbd/client.trocloudbd.com/templates/twenty-one/includes/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae798fbf3156_64146858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a07315ca8e21ee69bd48aac2ff645d2dea18d41' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/twenty-one/includes/breadcrumb.tpl',
      1 => 1695224186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae798fbf3156_64146858 (Smarty_Internal_Template $_smarty_tpl) {
?><ol class="breadcrumb">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_3_saved = $_smarty_tpl->tpl_vars['item'];
?>
        <li class="breadcrumb-item<?php if ($_smarty_tpl->tpl_vars['item']->last) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['item']->last) {?> aria-current="page"<?php }?>>
            <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php }?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

            <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?></a><?php }?>
        </li>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>
<?php }
}
