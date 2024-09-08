<?php
/* Smarty version 3.1.36, created on 2024-09-05 17:57:29
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66d9f109c2c1d8_85757797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68134ddd62e32b117241b87b5f45f6b0a66b6c63' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/navbar.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d9f109c2c1d8_85757797 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar']->value, 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->index++;
$_smarty_tpl->tpl_vars['item']->first = !$_smarty_tpl->tpl_vars['item']->index;
$__foreach_item_3_saved = $_smarty_tpl->tpl_vars['item'];
?>
    <li menuItemName="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" class="d-block<?php if ($_smarty_tpl->tpl_vars['item']->first) {?> no-collapse<?php }
if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?> dropdown no-collapse<?php }
if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
">
        <a class="<?php if (!(isset($_smarty_tpl->tpl_vars['rightDrop']->value)) || !$_smarty_tpl->tpl_vars['rightDrop']->value) {?>pr-4<?php }
if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?> dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"<?php } else { ?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getUri();?>
"<?php }
if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['item']->value->getAttribute('target');?>
"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
"></i>&nbsp;<?php }?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getBadge();?>
</span><?php }?>
        </a>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
            <ul class="dropdown-menu<?php if ((isset($_smarty_tpl->tpl_vars['rightDrop']->value)) && $_smarty_tpl->tpl_vars['rightDrop']->value) {?> dropdown-menu-right<?php }?>">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getChildren(), 'childItem');
$_smarty_tpl->tpl_vars['childItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass() && in_array($_smarty_tpl->tpl_vars['childItem']->value->getClass(),array('dropdown-divider','nav-divider'))) {?>
                    <div class="dropdown-divider"></div>
                <?php } else { ?>
                    <li menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();?>
" class="dropdown-item px-2 py-0"<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target');?>
"<?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span><?php }?>
                        </a>
                    </li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
    </li>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!(isset($_smarty_tpl->tpl_vars['rightDrop']->value)) || !$_smarty_tpl->tpl_vars['rightDrop']->value) {?>
    <li class="d-none dropdown collapsable-dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'more'),$_smarty_tpl ) );?>

        </a>
        <ul class="collapsable-dropdown-menu dropdown-menu" aria-labelledby="navbarDropdownMenu">
        </ul>
    </li>
<?php }
}
}
