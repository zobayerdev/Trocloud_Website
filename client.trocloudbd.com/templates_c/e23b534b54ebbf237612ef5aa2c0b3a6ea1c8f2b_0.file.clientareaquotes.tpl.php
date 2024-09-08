<?php
/* Smarty version 3.1.36, created on 2024-09-08 15:43:11
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareaquotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ddc60fe6dd35_69060546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e23b534b54ebbf237612ef5aa2c0b3a6ea1c8f2b' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareaquotes.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ddc60fe6dd35_69060546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"QuotesList",'noSortColumns'=>"5",'filterColumn'=>"4"), 0, true);
?>

<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        var table = jQuery('#tableQuotesList').show().DataTable();

        <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'id') {?>
            table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'date') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'validuntil') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'stage') {?>
            table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').hide();
    });
<?php echo '</script'; ?>
>

<div class="table-container clearfix">
    <table id="tableQuotesList" class="table table-list w-hidden">
        <thead>
            <tr>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quotenumber'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quotesubject'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quotedatecreated'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quotevaliduntil'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quotestage'),$_smarty_tpl ) );?>
</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quotes']->value, 'quote');
$_smarty_tpl->tpl_vars['quote']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quote']->value) {
$_smarty_tpl->tpl_vars['quote']->do_else = false;
?>
                <tr onclick="clickableSafeRedirect(event, 'viewquote.php?id=<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
', true)">
                    <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['subject'];?>
</td>
                    <td><span class="w-hidden"><?php echo $_smarty_tpl->tpl_vars['quote']->value['normalisedDateCreated'];?>
</span><?php echo $_smarty_tpl->tpl_vars['quote']->value['datecreated'];?>
</td>
                    <td><span class="w-hidden"><?php echo $_smarty_tpl->tpl_vars['quote']->value['normalisedValidUntil'];?>
</span><?php echo $_smarty_tpl->tpl_vars['quote']->value['validuntil'];?>
</td>
                    <td><span class="label status status-<?php echo $_smarty_tpl->tpl_vars['quote']->value['stageClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['quote']->value['stage'];?>
</span></td>
                    <td class="text-center">
                        <form method="post" action="dl.php">
                            <input type="hidden" name="type" value="q" />
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
" />
                            <button type="submit" class="btn btn-default btn-sm"><i class="fas fa-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quotedownload'),$_smarty_tpl ) );?>
</button>
                        </form>
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
