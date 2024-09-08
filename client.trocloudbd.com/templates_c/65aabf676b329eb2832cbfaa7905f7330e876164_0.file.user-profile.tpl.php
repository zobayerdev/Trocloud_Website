<?php
/* Smarty version 3.1.36, created on 2024-09-08 10:05:16
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/user-profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dd76dc177435_93768093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65aabf676b329eb2832cbfaa7905f7330e876164' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/user-profile.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd76dc177435_93768093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'userProfile.profile'),$_smarty_tpl ) );?>
</h3>
<div class="card tt-custom-card bg-gray-light mb-4">
    <div class="card-body">
        <form method="post" action="<?php echo routePath('user-profile-save');?>
">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputFirstName" class="col-form-label">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareafirstname'),$_smarty_tpl ) );?>

                        </label>
                        <input
                            type="text"
                            name="firstname"
                            id="inputFirstName"
                            value="<?php echo $_smarty_tpl->tpl_vars['user']->value->firstName;?>
"
                            class="form-control"
                            <?php if (in_array('firstname',$_smarty_tpl->tpl_vars['uneditableFields']->value)) {?>disabled="disabled"<?php }?>
                        >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputLastName" class="col-form-label">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientarealastname'),$_smarty_tpl ) );?>

                        </label>
                        <input
                            type="text"
                            name="lastname"
                            id="inputLastName"
                            value="<?php echo $_smarty_tpl->tpl_vars['user']->value->lastName;?>
"
                            class="form-control"
                            <?php if (in_array('lastname',$_smarty_tpl->tpl_vars['uneditableFields']->value)) {?>disabled="disabled"<?php }?>
                        >
                    </div>
                </div>
            </div>
            <input class="btn btn-primary mr-2" type="submit" name="save" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>
" />
            <input class="btn btn-default" type="reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cancel'),$_smarty_tpl ) );?>
" />
        </form>

    </div>
</div>

<h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'userProfile.changeEmail'),$_smarty_tpl ) );?>
</h3>
<div class="card tt-custom-card bg-gray-light">
    <div class="card-body">
        <span>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->needsToCompleteEmailVerification()) {?>
                <span class="label label-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'userProfile.notVerified'),$_smarty_tpl ) );?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->emailVerified()) {?>
                <span class="label label-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'userProfile.verified'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </span>

        <form method="post" action="<?php echo routePath('user-profile-email-save');?>
">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEmail" class="col-form-label">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaemail'),$_smarty_tpl ) );?>

                        </label>
                        <input
                            type="email"
                            name="email"
                            id="inputEmail"
                            value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"
                            class="form-control"
                            <?php if (in_array('email',$_smarty_tpl->tpl_vars['uneditableFields']->value)) {?>disabled="disabled"<?php }?>
                        >
                    </div>
                </div>
            </div>
            <input class="btn btn-primary mr-2" type="submit" name="save" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>
" />
            <input class="btn btn-default" type="reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cancel'),$_smarty_tpl ) );?>
" />
        </form>

    </div>
</div>
<?php }
}
