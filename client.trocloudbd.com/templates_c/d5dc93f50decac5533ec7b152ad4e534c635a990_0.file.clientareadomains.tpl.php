<?php
/* Smarty version 3.1.36, created on 2024-09-06 13:52:59
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareadomains.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66db093b4a7e34_57104906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5dc93f50decac5533ec7b152ad4e534c635a990' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareadomains.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66db093b4a7e34_57104906 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['warnings']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>$_smarty_tpl->tpl_vars['warnings']->value,'textcenter'=>true), 0, true);
}?>
<div class="tab-content">
    <div class="tab-pane fade show active" id="tabOverview">
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"DomainsList",'noSortColumns'=>"0, 1",'startOrderCol'=>"2",'filterColumn'=>"5"), 0, true);
?>
        <?php echo '<script'; ?>
>
            jQuery(document).ready(function () {
                var table = jQuery('#tableDomainsList').show().DataTable();

                <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'domain') {?>
                    table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'regdate' || $_smarty_tpl->tpl_vars['orderby']->value == 'registrationdate') {?>
                    table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'nextduedate') {?>
                    table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'autorenew') {?>
                    table.order(5, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'status') {?>
                    table.order(6, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php }?>
                table.draw();
                jQuery('#tableLoading').hide();
            });
        <?php echo '</script'; ?>
>
        <form id="domainForm" method="post" action="clientarea.php?action=bulkdomain">
            <input id="bulkaction" name="update" type="hidden" />

            <div class="btn-group btn-group-sm mb-3 tt-button-group" role="group">
                <button type="button" class="btn btn-default setBulkAction" id="nameservers">
                    <i class="fal fa-globe fa-fw"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainmanagens'),$_smarty_tpl ) );?>

                </button>
                <button type="button" class="btn btn-default setBulkAction" id="contactinfo">
                    <i class="fal fa-user"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactinfoedit'),$_smarty_tpl ) );?>

                </button>
                <?php if ($_smarty_tpl->tpl_vars['allowrenew']->value) {?>
                    <button type="button" class="btn btn-default setBulkAction" id="renewDomains">
                        <i class="fal fa-sync"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainmassrenew'),$_smarty_tpl ) );?>

                    </button>
                <?php }?>
                <div class="btn-group btn-group-sm" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"more"),$_smarty_tpl ) );?>
...
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <a class="dropdown-item setBulkAction" href="#" id="autorenew"><i class="fal fa-sync"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainautorenewstatus'),$_smarty_tpl ) );?>
</a>
                      <a class="dropdown-item setBulkAction" href="#" id="reglock"><i class="fal fa-lock"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreglockstatus'),$_smarty_tpl ) );?>
</a>
                    </div>
                  </div>
            </div>

            <div class="table-container clearfix">
                <table id="tableDomainsList" class="table table-list w-hidden">
                    <thead>
                        <tr>
                            <th class="width-fixed-20"></th>
                            <th></th>
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderdomain'),$_smarty_tpl ) );?>
</th>
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingregdate'),$_smarty_tpl ) );?>
</th>
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareahostingnextduedate'),$_smarty_tpl ) );?>
</th>
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainstatus'),$_smarty_tpl ) );?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'domain');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                        <tr onclick="clickableSafeRedirect(event, 'clientarea.php?action=domaindetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
', false)">
                            <td>
                                <input type="checkbox" name="domids[]" class="domids stopEventBubble" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
" />
                            </td>
                            <td class="text-center ssl-info" data-element-id="<?php echo $_smarty_tpl->tpl_vars['domain']->value['id'];?>
" data-type="domain" data-domain="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['domain']->value['sslStatus']) {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value['sslStatus']->getImagePath();?>
" width="25" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['domain']->value['sslStatus']->getTooltipContent();?>
" class="<?php echo $_smarty_tpl->tpl_vars['domain']->value['sslStatus']->getClass();?>
" width="25">
                                <?php } elseif (!$_smarty_tpl->tpl_vars['domain']->value['isActive']) {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/ssl/ssl-inactive-domain.png" width="25" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.sslInactiveDomain'),$_smarty_tpl ) );?>
" width="25">
                                <?php }?>
                            </td>
                            <td>
                                <a href="http://<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
</a>
                                <br>
                                <small>
                                    <?php if ($_smarty_tpl->tpl_vars['domain']->value['autorenew']) {?>
                                        <i class="fas fa-fw fa-check text-success"></i>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenew'),$_smarty_tpl ) );?>

                                    <?php } else { ?>
                                        <i class="fas fa-fw fa-times text-danger"></i>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenew'),$_smarty_tpl ) );?>

                                    <?php }?>
                                </small>
                            </td>
                            <td><span class="w-hidden"><?php echo $_smarty_tpl->tpl_vars['domain']->value['normalisedRegistrationDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['domain']->value['registrationdate'];?>
</td>
                            <td><span class="w-hidden"><?php echo $_smarty_tpl->tpl_vars['domain']->value['normalisedNextDueDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['domain']->value['nextduedate'];?>
</td>
                            <td>
                                <span class="label status status-<?php echo $_smarty_tpl->tpl_vars['domain']->value['statusClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['domain']->value['statustext'];?>
</span>
                                <span class="w-hidden">
                                    <?php if ($_smarty_tpl->tpl_vars['domain']->value['expiringSoon']) {?><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"domainsExpiringSoon"),$_smarty_tpl ) );?>
</span><?php }?>
                                </span>
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
        </form>
    </div>
</div>
<?php }
}
