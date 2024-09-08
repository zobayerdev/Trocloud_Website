<?php
/* Smarty version 3.1.36, created on 2024-08-21 15:23:34
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/supportticketslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c6067646c4c0_01705704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bafaae442793b180888932e1aea44148e53e42f' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/supportticketslist.tpl',
      1 => 1667408342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c6067646c4c0_01705704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"TicketsList",'filterColumn'=>"2"), 0, true);
?>

<?php echo '<script'; ?>
>
    jQuery(document).ready(function () {
        var table = jQuery('#tableTicketsList').show().DataTable();
        <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'did' || $_smarty_tpl->tpl_vars['orderby']->value == 'dept') {?>
            table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'subject' || $_smarty_tpl->tpl_vars['orderby']->value == 'title') {?>
            table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'status') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'lastreply') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').hide();
    });
<?php echo '</script'; ?>
>

<div class="table-container clearfix">
    <table id="tableTicketsList" class="table table-list w-hidden">
        <thead>
            <tr>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsdepartment'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketssubject'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsstatus'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketlastupdated'),$_smarty_tpl ) );?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'ticket');
$_smarty_tpl->tpl_vars['ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->do_else = false;
?>
                <tr onclick="window.location='viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['c'];?>
'">
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value['department'];?>

                    </td>
                    <td>
                        <a href="viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['c'];?>
" class="border-left">
                            <span class="ticket-number">#<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
</span>
                            <span class="ticket-subject<?php if ($_smarty_tpl->tpl_vars['ticket']->value['unread']) {?> unread<?php }?>"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['subject'];?>
</span>
                        </a>
                    </td>
                    <td>
                        <span class="label status <?php if (is_null($_smarty_tpl->tpl_vars['ticket']->value['statusColor'])) {?>status-<?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusClass'];?>
"<?php } else { ?>status-custom" style="background-color:<?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusColor'];?>
"<?php }?>>
                            <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['ticket']->value['status']);?>

                        </span>
                    </td>
                    <td class="text-center">
                        <span class="w-hidden"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['normalisedLastReply'];?>
</span>
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value['lastreply'];?>

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
