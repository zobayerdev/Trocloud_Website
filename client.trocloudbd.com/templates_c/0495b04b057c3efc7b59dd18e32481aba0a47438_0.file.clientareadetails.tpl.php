<?php
/* Smarty version 3.1.36, created on 2024-09-08 10:04:59
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareadetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dd76cb70c654_32644962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0495b04b057c3efc7b59dd18e32481aba0a47438' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/clientareadetails.tpl',
      1 => 1725559047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd76cb70c654_32644962 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['successful']->value) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changessavedsuccessfully'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable1,'textcenter'=>false), 0, true);
}?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
}?>

<?php if (in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>
    <?php echo '<script'; ?>
>
        var stateNotRequired = true;
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>

<form method="post" action="?action=details" role="form">
    <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareanavdetails'),$_smarty_tpl ) );?>
</h3>
    <div class="card mb-4 bg-gray-light tt-custom-card">
        <div class="card-body">
            <div class="row d-md-block">
                <div class="col-md-6 float-md-left">

                    <div class="form-group">
                        <label for="inputFirstName" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareafirstname'),$_smarty_tpl ) );?>
</label>
                        <input type="text" name="firstname" id="inputFirstName" value="<?php echo $_smarty_tpl->tpl_vars['clientfirstname']->value;?>
"<?php if (in_array('firstname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="inputLastName" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientarealastname'),$_smarty_tpl ) );?>
</label>
                        <input type="text" name="lastname" id="inputLastName" value="<?php echo $_smarty_tpl->tpl_vars['clientlastname']->value;?>
"<?php if (in_array('lastname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="inputCompanyName" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareacompanyname'),$_smarty_tpl ) );?>
</label>
                        <input type="text" name="companyname" id="inputCompanyName" value="<?php echo $_smarty_tpl->tpl_vars['clientcompanyname']->value;?>
"<?php if (in_array('companyname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaemail'),$_smarty_tpl ) );?>
</label>
                        <input type="email" name="email" id="inputEmail" value="<?php echo $_smarty_tpl->tpl_vars['clientemail']->value;?>
"<?php if (in_array('email',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
                    </div>

                </div>
                <div class="col-md-6 col-12 float-md-right">

                    <div class="form-group">
                        <label for="inputAddress1" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaaddress1'),$_smarty_tpl ) );?>
</label>
                        <input type="text" name="address1" id="inputAddress1" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress1']->value;?>
"<?php if (in_array('address1',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="inputAddress2" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaaddress2'),$_smarty_tpl ) );?>
</label>
                        <input type="text" name="address2" id="inputAddress2" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress2']->value;?>
"<?php if (in_array('address2',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="inputCity" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareacity'),$_smarty_tpl ) );?>
</label>
                        <input type="text" name="city" id="inputCity" value="<?php echo $_smarty_tpl->tpl_vars['clientcity']->value;?>
"<?php if (in_array('city',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="inputState" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareastate'),$_smarty_tpl ) );?>
</label>
                        <input type="text" name="state" id="inputState" value="<?php echo $_smarty_tpl->tpl_vars['clientstate']->value;?>
"<?php if (in_array('state',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="inputPostcode" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareapostcode'),$_smarty_tpl ) );?>
</label>
                        <input type="text" name="postcode" id="inputPostcode" value="<?php echo $_smarty_tpl->tpl_vars['clientpostcode']->value;?>
"<?php if (in_array('postcode',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> class="form-control" />
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="country"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareacountry'),$_smarty_tpl ) );?>
</label>
                        <?php echo $_smarty_tpl->tpl_vars['clientcountriesdropdown']->value;?>

                    </div>

                    <div class="form-group">
                        <label for="inputPhone" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaphonenumber'),$_smarty_tpl ) );?>
</label>
                        <input type="tel" name="phonenumber" id="inputPhone" value="<?php echo $_smarty_tpl->tpl_vars['clientphonenumber']->value;?>
"<?php if (in_array('phonenumber',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled=""<?php }?> class="form-control" />
                    </div>

                </div>
                <div class="col-md-6 col-12 float-md-left">

                    <div class="form-group">
                        <label for="inputPaymentMethod" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'paymentmethod'),$_smarty_tpl ) );?>
</label>
                        <select name="paymentmethod" id="inputPaymentMethod" class="form-control custom-select">
                            <option value="none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'paymentmethoddefault'),$_smarty_tpl ) );?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paymentmethods']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['method']->value['sysname'];?>
"<?php if ($_smarty_tpl->tpl_vars['method']->value['sysname'] == $_smarty_tpl->tpl_vars['defaultpaymentmethod']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['method']->value['name'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputBillingContact" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'defaultbillingcontact'),$_smarty_tpl ) );?>
</label>
                        <select name="billingcid" id="inputBillingContact" class="form-control custom-select">
                            <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'usedefaultcontact'),$_smarty_tpl ) );?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['contact']->value['id'] == $_smarty_tpl->tpl_vars['billingcid']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputLanguage" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientarealanguage'),$_smarty_tpl ) );?>
</label>
                        <select name="accountLanguage" id="inputAccountLanguage" class="form-control custom-select"
                            <?php if (in_array('language',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?>>
                            <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'default'),$_smarty_tpl ) );?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value == $_smarty_tpl->tpl_vars['clientLanguage']->value) {?> selected="selected"<?php }?>
                                    ><?php echo ucfirst($_smarty_tpl->tpl_vars['language']->value);?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['showTaxIdField']->value) {?>
                        <div class="form-group">
                            <label for="inputTaxId" class="col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>$_smarty_tpl->tpl_vars['taxIdLabel']->value),$_smarty_tpl ) );?>
</label>
                            <input type="text" name="tax_id" id="inputTaxId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientTaxId']->value;?>
"<?php if (in_array('tax_id',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?> />
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
?>
                            <div class="form-group">
                                <label class="col-form-label" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
                                <div class="control">
                                    <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>
 <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>

                </div>

            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['emailPreferencesEnabled']->value) {?>
        <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareacontactsemails'),$_smarty_tpl ) );?>
</h3>
        <div class="card mb-4 bg-gray-light tt-custom-card">
            <div class="card-body">
                <div class="controls form-check">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emailPreferences']->value, 'value', true, 'emailType');
$_smarty_tpl->tpl_vars['value']->iteration = 0;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['emailType']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->iteration++;
$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
$__foreach_value_4_saved = $_smarty_tpl->tpl_vars['value'];
?>
                        <label>
                            <input type="hidden" name="email_preferences[<?php echo $_smarty_tpl->tpl_vars['emailType']->value;?>
]" value="0">
                            <input type="checkbox" class="form-check-input" name="email_preferences[<?php echo $_smarty_tpl->tpl_vars['emailType']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['emailType']->value;?>
Emails" value="1"<?php if ($_smarty_tpl->tpl_vars['value']->value) {?> checked="checked"<?php }?> />
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>("emailPreferences.").($_smarty_tpl->tpl_vars['emailType']->value)),$_smarty_tpl ) );?>

                        </label><?php if (!($_smarty_tpl->tpl_vars['value']->last)) {?><br /><?php }?>
                    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['showMarketingEmailOptIn']->value) {?>
        <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailMarketing.joinOurMailingList'),$_smarty_tpl ) );?>
</h3>
        <div class="card mb-4 bg-gray-light tt-custom-card">
            <div class="card-body">
                <p><?php echo $_smarty_tpl->tpl_vars['marketingEmailOptInMessage']->value;?>
</p>
                <input type="checkbox" name="marketingoptin" value="1"<?php if ($_smarty_tpl->tpl_vars['marketingEmailOptIn']->value) {?> checked<?php }?> class="no-icheck toggle-switch-success form-check-input" data-size="small" data-on-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'yes'),$_smarty_tpl ) );?>
" data-off-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'no'),$_smarty_tpl ) );?>
">
            </div>
        </div>
    <?php }?>

    <div class="form-group">
        <input class="btn btn-primary mr-2" type="submit" name="save" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>
" />
        <input class="btn btn-default" type="reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cancel'),$_smarty_tpl ) );?>
" />
    </div>

</form>
<?php }
}
