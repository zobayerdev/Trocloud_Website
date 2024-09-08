<?php
/* Smarty version 3.1.36, created on 2024-09-08 10:05:02
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/account-user-management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dd76ce546362_11092847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da8ab7ef7ee4314f989cb9eae4dba54cbb8d86a0' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/account-user-management.tpl',
      1 => 1725559047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd76ce546362_11092847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<h3 class="card-title mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"navUserManagement"),$_smarty_tpl ) );?>
</h3>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.usersFound",'count'=>$_smarty_tpl->tpl_vars['users']->value->count()),$_smarty_tpl ) );?>
</p>
<div class="tt-custom-card">
    <table class="table table-striped table-bordered">
        <tr>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.emailAddress"),$_smarty_tpl ) );?>
 / <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.lastLogin"),$_smarty_tpl ) );?>
</th>
            <th width="300"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.actions"),$_smarty_tpl ) );?>
</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value->pivot->owner) {?>
                        <span class="label label-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientOwner"),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->hasTwoFactorAuthEnabled()) {?>
                        <i class="fas fa-shield text-success" data-toggle="tooltip" data-placement="auto right" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twoFactor.enabled'),$_smarty_tpl ) );?>
"></i>
                    <?php } else { ?>
                        <i class="fas fa-shield text-grey" data-toggle="tooltip" data-placement="auto right" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twoFactor.disabled'),$_smarty_tpl ) );?>
"></i>
                    <?php }?>
                    <br>
                    <small>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.lastLogin"),$_smarty_tpl ) );?>
:
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->pivot->hasLastLogin()) {?>
                            <?php echo $_smarty_tpl->tpl_vars['user']->value->pivot->getLastLogin()->diffForHumans();?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'never'),$_smarty_tpl ) );?>

                        <?php }?>
                    </small>
                </td>
                <td>
                    <a href="<?php echo routePath('account-users-permissions',$_smarty_tpl->tpl_vars['user']->value->id);?>
" class="btn btn-default btn-sm btn-manage-permissions<?php if ($_smarty_tpl->tpl_vars['user']->value->pivot->owner) {?> disabled<?php }?>">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.managePermissions"),$_smarty_tpl ) );?>

                    </a>
                    <a href="#" class="btn btn-danger btn-sm btn-remove-user<?php if ($_smarty_tpl->tpl_vars['user']->value->pivot->owner) {?> disabled<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.removeAccess"),$_smarty_tpl ) );?>

                    </a>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['invites']->value->count() > 0) {?>
            <tr>
                <td colspan="3">
                    <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.pendingInvites"),$_smarty_tpl ) );?>
</strong>
                </td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invites']->value, 'invite');
$_smarty_tpl->tpl_vars['invite']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invite']->value) {
$_smarty_tpl->tpl_vars['invite']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['invite']->value->email;?>

                        <br>
                        <small>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.inviteSent"),$_smarty_tpl ) );?>
:
                            <?php echo $_smarty_tpl->tpl_vars['invite']->value->created_at->diffForHumans();?>

                        </small>
                    </td>
                    <td>
                        <form method="post" action="<?php echo routePath('account-users-invite-resend');?>
">
                            <input type="hidden" name="inviteid" value="<?php echo $_smarty_tpl->tpl_vars['invite']->value->id;?>
">
                            <button type="submit" class="btn btn-default btn-sm">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.resendInvite"),$_smarty_tpl ) );?>

                            </button>
                            <button type="button" class="btn btn-default btn-sm btn-cancel-invite" data-id="<?php echo $_smarty_tpl->tpl_vars['invite']->value->id;?>
">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.cancelInvite"),$_smarty_tpl ) );?>

                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </table>
    <p class="text-muted m-0">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.accountOwnerPermissionsInfo"),$_smarty_tpl ) );?>
</p>
</div>

<div class="card mb-4 tt-custom-card mt-4">
    <div class="card-body">
        <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.inviteNewUser"),$_smarty_tpl ) );?>
</h3>

        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.inviteNewUserDescription"),$_smarty_tpl ) );?>
</p>

        <form method="post" action="<?php echo routePath('account-users-invite');?>
">
            <div class="form-group">
                <input type="email" name="inviteemail" placeholder="name@example.com" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['formdata']->value['inviteemail'];?>
">
            </div>
            <div class="form-group">
                <label class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="permissions" value="all" checked="checked">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.allPermissions"),$_smarty_tpl ) );?>

                </label>
                <label class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="permissions" value="choose">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.choosePermissions"),$_smarty_tpl ) );?>

                </label>
            </div>
            <div class="well mb-3 w-hidden" id="invitePermissions">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'permission');
$_smarty_tpl->tpl_vars['permission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->do_else = false;
?>
                    <label class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="perms[<?php echo $_smarty_tpl->tpl_vars['permission']->value['key'];?>
]" value="1">
                        <?php echo $_smarty_tpl->tpl_vars['permission']->value['title'];?>

                        <span class="d-none d-md-inline">-</span>
                        <br class="d-md-none">
                        <span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['permission']->value['description'];?>
</span>
                    </label>
                    <br>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <button type="submit" class="btn btn-primary">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.sendInvite"),$_smarty_tpl ) );?>

            </button>
        </form>

    </div>
</div>

<form method="post" action="<?php echo routePath('user-accounts');?>
">
    <input type="hidden" name="id" value="" id="inputSwitchAcctId">
</form>

<form method="post" action="<?php echo routePath('account-users-remove');?>
">
    <input type="hidden" name="userid" id="inputRemoveUserId">
    <div class="modal fade" id="modalRemoveUser">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header card-header bg-primary text-light">
                    <h4 class="modal-title">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.removeAccess"),$_smarty_tpl ) );?>

                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.removeAccessSure"),$_smarty_tpl ) );?>
</p>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.removeAccessInfo"),$_smarty_tpl ) );?>
</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cancel"),$_smarty_tpl ) );?>

                    </button>
                    <button type="submit" class="btn btn-primary" id="btnRemoveUserConfirm">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"confirm"),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method="post" action="<?php echo routePath('account-users-invite-cancel');?>
">
    <input type="hidden" name="inviteid" id="inputCancelInviteId">
    <div class="modal fade" id="modalCancelInvite">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header card-header bg-primary text-light">
                    <h4 class="modal-title">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.cancelInvite"),$_smarty_tpl ) );?>

                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.cancelInviteSure"),$_smarty_tpl ) );?>
</p>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.cancelInviteInfo"),$_smarty_tpl ) );?>
</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cancel"),$_smarty_tpl ) );?>

                    </button>
                    <button type="submit" class="btn btn-primary" id="btnCancelInviteConfirm">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"confirm"),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        jQuery('input:radio[name=permissions]').change(function () {
            if (this.value === 'choose') {
                jQuery('#invitePermissions').slideDown();
            } else {
                jQuery('#invitePermissions').slideUp();
            }
        });
        jQuery('.btn-manage-permissions').click(function(e) {
            if (jQuery(this).attr('disabled')) {
                e.preventDefault();
            }
        });
        jQuery('.btn-remove-user').click(function(e) {
            e.preventDefault();
            if (jQuery(this).attr('disabled')) {
                return;
            }
            jQuery('#inputRemoveUserId').val(jQuery(this).data('id'));
            jQuery('#modalRemoveUser').modal('show');
        });
        jQuery('.btn-cancel-invite').click(function(e) {
            e.preventDefault();
            jQuery('#inputCancelInviteId').val(jQuery(this).data('id'));
            jQuery('#modalCancelInvite').modal('show');
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
