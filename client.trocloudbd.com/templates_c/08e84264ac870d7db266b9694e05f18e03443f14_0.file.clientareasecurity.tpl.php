<?php
/* Smarty version 3.1.36, created on 2024-09-08 10:04:58
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareasecurity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dd76ca458a79_25892455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e84264ac870d7db266b9694e05f18e03443f14' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareasecurity.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd76ca458a79_25892455 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['showSsoSetting']->value) {?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sso.title'),$_smarty_tpl ) );?>
</h3>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sso.summary'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable1), 0, true);
?>

            <form id="frmSingleSignOn">
                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
                <input type="hidden" name="action" value="security" />
                <input type="hidden" name="toggle_sso" value="1" />
                <div class="p-2">
                    <input type="checkbox" name="allow_sso" class="toggle-switch-success" id="inputAllowSso"<?php if ($_smarty_tpl->tpl_vars['isSsoEnabled']->value) {?> checked<?php }?>>
                    &nbsp;
                    <span id="ssoStatusTextEnabled"<?php if (!$_smarty_tpl->tpl_vars['isSsoEnabled']->value) {?> style="display: none;"<?php }?>>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sso.enabled'),$_smarty_tpl ) );?>

                    </span>
                    <span id="ssoStatusTextDisabled"<?php if ($_smarty_tpl->tpl_vars['isSsoEnabled']->value) {?> style="display: none;"<?php }?>>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sso.disabled'),$_smarty_tpl ) );?>

                    </span>
                </div>
            </form>

            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sso.disablenotice'),$_smarty_tpl ) );?>
</p>
        </div>
    </div>
<?php }
}
}