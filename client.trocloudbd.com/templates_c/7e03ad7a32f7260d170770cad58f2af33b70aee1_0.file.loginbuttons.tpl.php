<?php
/* Smarty version 3.1.36, created on 2024-08-19 19:14:51
  from '/home/trocloudbd/client.trocloudbd.com/modules/servers/cpanel/templates/loginbuttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c399ab4c0185_43114426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e03ad7a32f7260d170770cad58f2af33b70aee1' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/modules/servers/cpanel/templates/loginbuttons.tpl',
      1 => 1695224186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c399ab4c0185_43114426 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="clientarea.php" method="post" target="_blank">
    <input type="hidden" name="action" value="productdetails" />
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
" />
    <input type="hidden" name="dosinglesignon" value="1" />
    <input type="submit" value="<?php if ($_smarty_tpl->tpl_vars['producttype']->value == "hostingaccount") {
echo $_smarty_tpl->tpl_vars['LANG']->value['cpanellogin'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['cpanelwhmlogin'];
}?>" class="btn btn-primary modulebutton" />
    <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cpanelwebmaillogin'];?>
" onClick="window.open('http<?php if ($_smarty_tpl->tpl_vars['serversecure']->value) {?>s<?php }?>://<?php if ($_smarty_tpl->tpl_vars['serverhostname']->value) {
echo $_smarty_tpl->tpl_vars['serverhostname']->value;
} else {
echo $_smarty_tpl->tpl_vars['serverip']->value;
}?>:<?php if ($_smarty_tpl->tpl_vars['serversecure']->value) {?>2096<?php } else { ?>2095<?php }?>/')" class="btn btn-default modulebutton" />
</form>
<?php }
}
