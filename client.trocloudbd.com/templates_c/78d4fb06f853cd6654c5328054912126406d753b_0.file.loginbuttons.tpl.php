<?php
/* Smarty version 3.1.36, created on 2024-09-08 15:52:50
  from '/home/trocloudbd/public_html/client.trocloudbd.com/modules/servers/cpanel/templates/loginbuttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ddc8529fdf00_30939978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78d4fb06f853cd6654c5328054912126406d753b' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/modules/servers/cpanel/templates/loginbuttons.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ddc8529fdf00_30939978 (Smarty_Internal_Template $_smarty_tpl) {
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
