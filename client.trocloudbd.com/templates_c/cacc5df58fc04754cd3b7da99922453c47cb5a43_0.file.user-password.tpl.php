<?php
/* Smarty version 3.1.36, created on 2024-09-06 13:53:17
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/user-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66db094d2a8c86_89593377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cacc5df58fc04754cd3b7da99922453c47cb5a43' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/user-password.tpl',
      1 => 1725559047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66db094d2a8c86_89593377 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sidebars.viewAccount.changePassword'),$_smarty_tpl ) );?>
</h3>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class="card tt-custom-card bg-gray-light">
    <div class="card-body">
        <form class="using-password-strength" method="post" action="<?php echo routePath('user-password');?>
" role="form">
            <input type="hidden" name="submit" value="true" />
            <div class="form-group">
                <label for="inputExistingPassword" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'existingpassword'),$_smarty_tpl ) );?>
</label>
                <input type="password" class="form-control" name="existingpw" id="inputExistingPassword" autocomplete="off" />
            </div>
            <div id="newPassword1" class="form-group has-feedback row">
                <div class="col-lg-8">
                    <label for="inputNewPassword1" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newpassword'),$_smarty_tpl ) );?>
</label>
                    <input type="password" class="form-control" name="newpw" id="inputNewPassword1" autocomplete="off" />
                </div>
                <div class="col-lg-4">
                    <label for="inputNewPassword1" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'generatePassword.btnLabel'),$_smarty_tpl ) );?>
</label>
                    <button type="button" class="btn btn-default btn-block generate-password" data-targetfields="inputNewPassword1,inputNewPassword2">
                        <i class="fad fa-lock text-primary mr-2"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'generatePassword.btnLabel'),$_smarty_tpl ) );?>

                    </button>
                </div>
                <div class="col-12">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
            <div id="newPassword2" class="form-group has-feedback">
                <label for="inputNewPassword2" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'confirmnewpassword'),$_smarty_tpl ) );?>
</label>
                <input type="password" class="form-control" name="confirmpw" id="inputNewPassword2" autocomplete="off" />
                <div id="inputNewPassword2Msg"></div>
            </div>
            <input class="btn btn-primary mr-2" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>
" />
            <input class="btn btn-default" type="reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cancel'),$_smarty_tpl ) );?>
" />
        </form>

    </div>
</div>
<?php }
}
