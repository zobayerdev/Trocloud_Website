<?php
/* Smarty version 3.1.36, created on 2024-09-06 12:53:29
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/supportticketsubmit-steptwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dafb495945f4_22180330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcc13e7739a4bc44154ff79d0858d6a681e00082' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/supportticketsubmit-steptwo.tpl',
      1 => 1725559047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dafb495945f4_22180330 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?step=3" enctype="multipart/form-data" role="form">
    <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"createNewSupportRequest"),$_smarty_tpl ) );?>
</h3>

    <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>
    <?php }?>
<div class="card bg-gray-light tt-custom-card">
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="inputName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsclientname'),$_smarty_tpl ) );?>
</label>
                <input type="text" name="name" id="inputName" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled<?php }?>"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsclientemail'),$_smarty_tpl ) );?>
</label>
                <input type="email" name="email" id="inputEmail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled<?php }?>"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="inputDepartment"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsdepartment'),$_smarty_tpl ) );?>
</label>
                <select name="deptid" id="inputDepartment" class="form-control" onchange="refreshCustomFields(this)">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['department']->value['id'] == $_smarty_tpl->tpl_vars['deptid']->value) {?> selected="selected"<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>

                        </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['relatedservices']->value) {?>
                <div class="form-group col-md-4">
                    <label for="inputRelatedService"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'relatedservice'),$_smarty_tpl ) );?>
</label>
                    <select name="relatedservice" id="inputRelatedService" class="form-control">
                        <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'none'),$_smarty_tpl ) );?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['relatedservices']->value, 'relatedservice');
$_smarty_tpl->tpl_vars['relatedservice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['relatedservice']->value) {
$_smarty_tpl->tpl_vars['relatedservice']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['relatedservice']->value['id'] == $_smarty_tpl->tpl_vars['selectedservice']->value) {?> selected="selected"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['status'];?>
)
                            </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            <?php }?>
            <div class="form-group col-md-4">
                <label for="inputPriority"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketspriority'),$_smarty_tpl ) );?>
</label>
                <select name="urgency" id="inputPriority" class="form-control">
                    <option value="High"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "High") {?> selected="selected"<?php }?>>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketurgencyhigh'),$_smarty_tpl ) );?>

                    </option>
                    <option value="Medium"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "Medium" || !$_smarty_tpl->tpl_vars['urgency']->value) {?> selected="selected"<?php }?>>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketurgencymedium'),$_smarty_tpl ) );?>

                    </option>
                    <option value="Low"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "Low") {?> selected="selected"<?php }?>>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketurgencylow'),$_smarty_tpl ) );?>

                    </option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="inputSubject"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketsubject'),$_smarty_tpl ) );?>
</label>
                <input type="text" name="subject" id="inputSubject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <label for="inputMessage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contactmessage'),$_smarty_tpl ) );?>
</label>
            <textarea name="message" id="inputMessage" rows="12" class="form-control markdown-editor" data-auto-save-name="client_ticket_open"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
        </div>

        <div class="form-group">
            <label for="inputAttachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketattachments'),$_smarty_tpl ) );?>
</label>
            <div class="input-group mb-2 attachment-group">
                <div class="custom-file">
                    <span class="custom-file-label text-truncate" for="inputAttachment1" data-default="Choose file">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'chooseFile'),$_smarty_tpl ) );?>

                    </span>
                    <input type="file" class="form-control custom-file-input" name="attachments[]" id="inputAttachment1">
                </div>
                <div class="input-group-append">
                    <button class="btn btn-default btn-sm" type="button" id="btnTicketAttachmentsAdd">
                        <i class="fad fa-plus"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addmore'),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
            <div class="file-upload w-hidden">
                <div class="input-group mb-2 attachment-group">
                    <div class="custom-file">
                        <label class="custom-file-label text-truncate">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'chooseFile'),$_smarty_tpl ) );?>

                        </label>
                        <input type="file" class="form-control custom-file-input" name="attachments[]">
                    </div>
                </div>
            </div>
            <div id="fileUploadsContainer"></div>
            <div class="text-muted">
                <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsallowedextensions'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['allowedfiletypes']->value;?>
  (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"maxFileSize",'fileSize'=>((string)$_smarty_tpl->tpl_vars['uploadMaxFileSize']->value)),$_smarty_tpl ) );?>
)</small>
            </div>
        </div>

        <div id="customFieldsContainer">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/supportticketsubmit-customfields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>

        <div id="autoAnswerSuggestions" class="w-hidden"></div>

        <div class="margin-bottom">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tt/hostim/tt-captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>

        <div class="tt-submit-btns">
            <button type="submit" id="openTicketSubmit" class="mr-2 btn btn-primary disable-on-click<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketsubmit'),$_smarty_tpl ) );?>

            </button>
            <a href="supporttickets.php" class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cancel'),$_smarty_tpl ) );?>
</a>
        </div>

    </div>
</div>

</form>

<?php if ($_smarty_tpl->tpl_vars['kbsuggestions']->value) {?>
    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            getTicketSuggestions();
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
