<?php
/* Smarty version 3.1.36, created on 2024-09-08 10:04:41
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/serverstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dd76b99586c8_10298635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f439eee72c3df06e2ad7f666986657e48690a448' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/serverstatus.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd76b99586c8_10298635 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['opencount']->value == 0) {?>
    <div class="alert alert-success">
        <i class="fas fa-check fa-fw"></i>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkstatusnone'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkissuesstatusopen'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
echo sprintf($_prefixVariable1,$_prefixVariable2);?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['scheduledcount']->value > 0) {?>
    <div class="alert alert-info">
        <i class="fas fa-exclamation-triangle fa-fw"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssues.scheduled','count'=>$_smarty_tpl->tpl_vars['scheduledcount']->value),$_smarty_tpl ) );?>

        <a href="serverstatus.php?view=scheduled" class="alert-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'learnmore'),$_smarty_tpl ) );?>
...</a>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['servers']->value) {?>
    <div class="card">
        <div class="card-body">
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'serverstatustitle'),$_smarty_tpl ) );?>
</h3>

            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'serverstatusheadingtext'),$_smarty_tpl ) );?>
</p>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'servername'),$_smarty_tpl ) );?>
</th>
                            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssues.http'),$_smarty_tpl ) );?>
</th>
                            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssues.ftp'),$_smarty_tpl ) );?>
</th>
                            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssues.pop3'),$_smarty_tpl ) );?>
</th>
                            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'serverstatusphpinfo'),$_smarty_tpl ) );?>
</th>
                            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'serverstatusserverload'),$_smarty_tpl ) );?>
</th>
                            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'serverstatusuptime'),$_smarty_tpl ) );?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servers']->value, 'server', false, 'num');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['server']->value['name'];?>
</td>
                                <td class="text-center" id="port80_<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
">
                                    <span class="fas fa-spinner fa-spin"></span>
                                </td>
                                <td class="text-center" id="port21_<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
">
                                    <span class="fas fa-spinner fa-spin"></span>
                                </td>
                                <td class="text-center" id="port110_<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
">
                                    <span class="fas fa-spinner fa-spin"></span>
                                </td>
                                <td class="text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['server']->value['phpinfourl'];?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'serverstatusphpinfo'),$_smarty_tpl ) );?>
</a></td>
                                <td class="text-center" id="load<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
">
                                    <span class="fas fa-spinner fa-spin"></span>
                                </td>
                                <td class="text-center" id="uptime<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
">
                                    <span class="fas fa-spinner fa-spin"></span>
                                    <?php echo '<script'; ?>
>
                                    jQuery(document).ready(function() {
                                        checkPort(<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
, 80);
                                        checkPort(<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
, 21);
                                        checkPort(<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
, 110);
                                        getStats(<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
);
                                    });
                                    <?php echo '</script'; ?>
>
                                </td>
                            </tr>
                        <?php
}
if ($_smarty_tpl->tpl_vars['server']->do_else) {
?>
                            <tr>
                                <td colspan="7"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'serverstatusnoservers'),$_smarty_tpl ) );?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issues']->value, 'issue');
$_smarty_tpl->tpl_vars['issue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['issue']->value) {
$_smarty_tpl->tpl_vars['issue']->do_else = false;
?>
    <div class="card">
        <div class="card-header">
            <?php echo $_smarty_tpl->tpl_vars['issue']->value['title'];?>

            (<?php echo $_smarty_tpl->tpl_vars['issue']->value['status'];?>
)
            <span id="issuePriorityLabel" class="badge badge-<?php if ($_smarty_tpl->tpl_vars['issue']->value['rawPriority'] == 'Critical') {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['issue']->value['rawPriority'] == 'High') {?>warning<?php } elseif ($_smarty_tpl->tpl_vars['issue']->value['rawPriority'] == 'Low') {?>success<?php } else { ?>info<?php }?> float-md-right"><?php echo $_smarty_tpl->tpl_vars['issue']->value['priority'];?>
</span>
        </div>
        <div class="card-body">
            <?php if ($_smarty_tpl->tpl_vars['issue']->value['server'] || $_smarty_tpl->tpl_vars['issue']->value['affecting']) {?>
                <p class="h5">
                    <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkissuesaffecting'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['issue']->value['type'];?>
</strong>
                    -
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkissuestypeserver'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
if ($_smarty_tpl->tpl_vars['issue']->value['type'] == $_prefixVariable3) {?>
                        <?php echo $_smarty_tpl->tpl_vars['issue']->value['server'];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['issue']->value['affecting'];?>

                    <?php }?>
                </p>
            <?php }?>
            <ul class="list-inline">
                <li class="list-inline-item pr-3">
                    <i class="far fa-calendar-alt fa-fw"></i>
                    <?php echo $_smarty_tpl->tpl_vars['issue']->value['startdate'];?>

                    <?php if ($_smarty_tpl->tpl_vars['issue']->value['enddate']) {?> - <?php echo $_smarty_tpl->tpl_vars['issue']->value['enddate'];
}?>
                </li>
                <li class="list-inline-item pr-3">
                    <i class="far fa-clock fa-fw"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkissueslastupdated'),$_smarty_tpl ) );?>
</strong> <?php echo $_smarty_tpl->tpl_vars['issue']->value['lastupdate'];?>

                </li>
            </ul>
            <?php if ($_smarty_tpl->tpl_vars['issue']->value['clientaffected']) {?>
                <div class="alert alert-warning p-1 text-center">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssues.affectingYou'),$_smarty_tpl ) );?>

                </div>
            <?php }?>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['issue']->value['description'];?>

            </p>
        </div>
    </div>
<?php
}
if ($_smarty_tpl->tpl_vars['issue']->do_else) {
?>
    <p><?php echo $_smarty_tpl->tpl_vars['noissuesmsg']->value;?>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<nav aria-label="Network issues navigation">
    <ul class="pagination">
        <li class="page-item<?php if (!$_smarty_tpl->tpl_vars['prevpage']->value) {?> disabled<?php }?>"><a class="page-link" href="?<?php if ($_smarty_tpl->tpl_vars['view']->value) {?>view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
&amp;<?php }?>page=<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'previouspage'),$_smarty_tpl ) );?>
</a></li>
        <li class="page-item<?php if (!$_smarty_tpl->tpl_vars['nextpage']->value) {?> disabled<?php }?>"><a class="page-link" href="?<?php if ($_smarty_tpl->tpl_vars['view']->value) {?>view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
&amp;<?php }?>page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nextpage'),$_smarty_tpl ) );?>
</a></li>
    </ul>
</nav>
<?php }
}
