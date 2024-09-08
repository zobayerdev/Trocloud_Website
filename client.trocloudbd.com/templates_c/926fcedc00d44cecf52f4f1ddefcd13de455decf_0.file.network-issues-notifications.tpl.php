<?php
/* Smarty version 3.1.36, created on 2024-08-03 18:49:55
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/network-issues-notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae7bd3c0ba99_30429967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '926fcedc00d44cecf52f4f1ddefcd13de455decf' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/network-issues-notifications.tpl',
      1 => 1672062102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae7bd3c0ba99_30429967 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['openNetworkIssueCounts']->value['open'] > 0) {?>
    <div class="alert alert-warning alert-dismissible network-issue-alert m-0">
        <div class="container">
            <i class="fas fa-exclamation-triangle fa-fw"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssuesAware'),$_smarty_tpl ) );?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/serverstatus.php" class="alert-link float-lg-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'learnmore'),$_smarty_tpl ) );?>

                <i class="far fa-arrow-right"></i>
            </a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fal fa-times"></i></span></button>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['openNetworkIssueCounts']->value['scheduled'] > 0) {?>
    <div class="alert alert-info alert-dismissible network-issue-alert m-0">
        <div class="container">
            <i class="fas fa-info-circle fa-fw"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssuesScheduled'),$_smarty_tpl ) );?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/serverstatus.php" class="alert-link float-lg-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'learnmore'),$_smarty_tpl ) );?>

                <i class="far fa-arrow-right"></i>
            </a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fal fa-times"></i></span></button>
        </div>
    </div>
<?php }
}
}
