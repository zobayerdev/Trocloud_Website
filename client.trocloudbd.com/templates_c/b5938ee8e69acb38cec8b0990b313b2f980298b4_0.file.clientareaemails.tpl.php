<?php
/* Smarty version 3.1.36, created on 2024-09-08 10:04:54
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareaemails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dd76c634e097_80295322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5938ee8e69acb38cec8b0990b313b2f980298b4' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareaemails.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd76c634e097_80295322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"EmailsList",'noSortColumns'=>"-1"), 0, true);
?>

<?php echo '<script'; ?>
>
    jQuery(document).ready(function () {
        var table = jQuery('#tableEmailsList').show().DataTable();

        <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'date') {?>
            table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'subject') {?>
            table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').hide();
    });
<?php echo '</script'; ?>
>

<div class="table-container clearfix">
    <table id="tableEmailsList" class="table table-list w-hidden">
        <thead>
            <tr>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaemailsdate'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaemailssubject'),$_smarty_tpl ) );?>
</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emails']->value, 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
                <tr onclick="popupWindow('viewemail.php?id=<?php echo $_smarty_tpl->tpl_vars['email']->value['id'];?>
', 'emailWin', '800', '600')">
                    <td class="text-center"><span class="w-hidden"><?php echo $_smarty_tpl->tpl_vars['email']->value['normalisedDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['email']->value['date'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['email']->value['subject'];
if ($_smarty_tpl->tpl_vars['email']->value['attachmentCount'] > 0) {?> <i class="fal fa-paperclip"></i><?php }?></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-info btn-sm text-nowrap" onclick="popupWindow('viewemail.php?id=<?php echo $_smarty_tpl->tpl_vars['email']->value['id'];?>
', 'emailWin', '800', '600', 'scrollbars=1,')">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailviewmessage'),$_smarty_tpl ) );?>

                        </button>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <div class="text-center" id="tableLoading">
        <p><i class="fas fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'loading'),$_smarty_tpl ) );?>
</p>
    </div>
</div>
<?php }
}
