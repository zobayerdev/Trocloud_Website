<?php
/* Smarty version 3.1.36, created on 2024-08-17 08:02:07
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/bulkdomainmanagement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c058ff5f96d2_02918996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '523cca8efe9e04c7b5655f34e927c5d984c28056' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/bulkdomainmanagement.tpl',
      1 => 1680021622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c058ff5f96d2_02918996 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-body">

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=bulkdomain">
            <input type="hidden" name="update" value="<?php echo $_smarty_tpl->tpl_vars['update']->value;?>
">
            <input type="hidden" name="save" value="1">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domainids']->value, 'domainid');
$_smarty_tpl->tpl_vars['domainid']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domainid']->value) {
$_smarty_tpl->tpl_vars['domainid']->do_else = false;
?>
                <input type="hidden" name="domids[]" value="<?php echo $_smarty_tpl->tpl_vars['domainid']->value;?>
" />
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if ($_smarty_tpl->tpl_vars['update']->value == "nameservers") {?>
                <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changenameservers'),$_smarty_tpl ) );?>
</h3>

                <?php if ($_smarty_tpl->tpl_vars['save']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                    <div class="alert alert-error">
                        <p class="bold">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaerrors'),$_smarty_tpl ) );?>

                        </p>
                        <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                    <?php } else { ?>
                    <div class="alert alert-success">
                        <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changessavedsuccessfully'),$_smarty_tpl ) );?>

                        </p>
                    </div>
                    <?php }?>
                <?php }?>

                <p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainbulkmanagementchangesaffect'),$_smarty_tpl ) );?>

                </p>

                <ul class="list-group mb-3">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'domain');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <div class="form-check form-check-inline">
                    <input id="nsChoiceDefault" type="radio" class="form-check-input" name="nschoice" value="default" onclick="disableFields('domnsinputs',true)" checked />
                    <label for="nsChoiceDefault" class="full col-form-label form-check-label">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nschoicedefault'),$_smarty_tpl ) );?>

                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input id="nsChoiceCustom" type="radio" class="form-check-input" name="nschoice" value="custom" onclick="disableFields('domnsinputs', '')" checked />
                    <label for="nsChoiceCustom" class="full col-form-label form-check-label">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nschoicecustom'),$_smarty_tpl ) );?>

                    </label>
                </div>

                <?php
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['num']->step = 1;$_smarty_tpl->tpl_vars['num']->total = (int) ceil(($_smarty_tpl->tpl_vars['num']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['num']->step));
if ($_smarty_tpl->tpl_vars['num']->total > 0) {
for ($_smarty_tpl->tpl_vars['num']->value = 1, $_smarty_tpl->tpl_vars['num']->iteration = 1;$_smarty_tpl->tpl_vars['num']->iteration <= $_smarty_tpl->tpl_vars['num']->total;$_smarty_tpl->tpl_vars['num']->value += $_smarty_tpl->tpl_vars['num']->step, $_smarty_tpl->tpl_vars['num']->iteration++) {
$_smarty_tpl->tpl_vars['num']->first = $_smarty_tpl->tpl_vars['num']->iteration === 1;$_smarty_tpl->tpl_vars['num']->last = $_smarty_tpl->tpl_vars['num']->iteration === $_smarty_tpl->tpl_vars['num']->total;?>
                    <div class="form-group row">
                        <label for="inputNs<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="col-sm-4 col-form-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareanameserver'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</label>
                        <div class="col-sm-7">
                            <input type="text" name="ns<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="form-control domnsinputs" id="inputNs<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" />
                        </div>
                    </div>
                <?php }
}
?>

                <div class="row">
                    <div class="col-sm-8 offset-sm-4">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changenameservers'),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </div>

            <?php } elseif ($_smarty_tpl->tpl_vars['update']->value == "autorenew") {?>

                <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainautorenewstatus'),$_smarty_tpl ) );?>
</h3>

                <?php if ($_smarty_tpl->tpl_vars['save']->value) {?>
                    <div class="alert alert-success">
                        <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changessavedsuccessfully'),$_smarty_tpl ) );?>

                        </p>
                    </div>
                <?php }?>

                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainautorenewinfo'),$_smarty_tpl ) );?>
</p>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainautorenewrecommend'),$_smarty_tpl ) );?>
</p>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainbulkmanagementchangeaffect'),$_smarty_tpl ) );?>
</p>

                <ul class="list-group mb-3">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'domain');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <button type="submit" name="enable" class="btn btn-success btn-lg">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenewenable'),$_smarty_tpl ) );?>

                </button>
                <button type="submit" name="disable" class="btn btn-danger btn-lg">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsautorenewdisable'),$_smarty_tpl ) );?>

                </button>

            <?php } elseif ($_smarty_tpl->tpl_vars['update']->value == "reglock") {?>

                <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreglockstatus'),$_smarty_tpl ) );?>
</h3>

                <?php if ($_smarty_tpl->tpl_vars['save']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                    <div class="alert alert-error">
                        <p class="bold">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaerrors'),$_smarty_tpl ) );?>

                        </p>
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                    <?php } else { ?>
                    <div class="alert alert-success">
                        <p>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changessavedsuccessfully'),$_smarty_tpl ) );?>

                        </p>
                    </div>
                    <?php }?>
                <?php }?>

                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreglockinfo'),$_smarty_tpl ) );?>
</p>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreglockrecommend'),$_smarty_tpl ) );?>
</p>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainbulkmanagementchangeaffect'),$_smarty_tpl ) );?>
</p>

                <ul class="list-group mb-3">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'domain');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <button type="submit" name="enable" class="btn btn-success btn-lg">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreglockenable'),$_smarty_tpl ) );?>

                </button>
                <button type="submit" name="disable" class="btn btn-danger btn-lg">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainreglockdisable'),$_smarty_tpl ) );?>

                </button>

            <?php } elseif ($_smarty_tpl->tpl_vars['update']->value == "contactinfo") {?>

                <h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactinfoedit'),$_smarty_tpl ) );?>
</h3>

                <?php if ($_smarty_tpl->tpl_vars['save']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                        <div class="alert alert-error">
                            <p class="bold">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaerrors'),$_smarty_tpl ) );?>

                            </p>
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-success">
                            <p>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'changessavedsuccessfully'),$_smarty_tpl ) );?>

                            </p>
                        </div>
                    <?php }?>
                <?php }?>

                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainbulkmanagementchangesaffect'),$_smarty_tpl ) );?>
</p>

                <ul class="list-group mb-3">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'domain');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <ul class="nav nav-tabs responsive-tabs-sm" role="tablist">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contactdetails']->value, 'values', false, 'contactdetail');
$_smarty_tpl->tpl_vars['values']->index = -1;
$_smarty_tpl->tpl_vars['values']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contactdetail']->value => $_smarty_tpl->tpl_vars['values']->value) {
$_smarty_tpl->tpl_vars['values']->do_else = false;
$_smarty_tpl->tpl_vars['values']->index++;
$_smarty_tpl->tpl_vars['values']->first = !$_smarty_tpl->tpl_vars['values']->index;
$__foreach_values_8_saved = $_smarty_tpl->tpl_vars['values'];
?>
                        <li class="nav-item">
                            <a class="nav-link<?php if ($_smarty_tpl->tpl_vars['values']->first) {?> active<?php }?>" id="tabSelector<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
" data-toggle="tab" href="#tab<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
" role="tab"><?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
</a>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['values'] = $__foreach_values_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <div class="responsive-tabs-sm-connector"><div class="channel"></div><div class="bottom-border"></div></div>
                <div class="tab-content p-4">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contactdetails']->value, 'values', false, 'contactdetail');
$_smarty_tpl->tpl_vars['values']->index = -1;
$_smarty_tpl->tpl_vars['values']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contactdetail']->value => $_smarty_tpl->tpl_vars['values']->value) {
$_smarty_tpl->tpl_vars['values']->do_else = false;
$_smarty_tpl->tpl_vars['values']->index++;
$_smarty_tpl->tpl_vars['values']->first = !$_smarty_tpl->tpl_vars['values']->index;
$__foreach_values_9_saved = $_smarty_tpl->tpl_vars['values'];
?>
                        <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['values']->first) {?> show active<?php }?>" id="tab<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
" role="tabpanel">

                            <div class="form-check">
                                <label>
                                    <input type="radio" class="form-check-input" name="wc[<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
1" value="contact" onclick="useDefaultWhois(this.id)" />
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactusexisting'),$_smarty_tpl ) );?>

                                </label>
                            </div>

                            <div class="row">
                                <div class="offset-1 col-10">
                                    <div class="form-group">
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactchoose'),$_smarty_tpl ) );?>
</label>
                                        <input type="hidden" name="sel[<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
]" value="">
                                        <select id="<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
3" class="form-control custom-select <?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
defaultwhois" name="sel[<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
]" disabled>
                                            <option value="u<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['userid'];?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactprimary'),$_smarty_tpl ) );?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                                                <option value="c<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check">
                                <label>
                                    <input type="radio" class="form-check-input" name="wc[<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
2" value="custom" onclick="useCustomWhois(this.id)" checked />
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincontactusecustom'),$_smarty_tpl ) );?>

                                </label>
                            </div>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                <div class="form-group">
                                    <label><?php echo $_smarty_tpl->tpl_vars['contactdetailstranslations']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</label>
                                    <input type="text" name="contactdetails[<?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" data-original-value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class="form-control <?php echo $_smarty_tpl->tpl_vars['contactdetail']->value;?>
customwhois<?php if ((isset($_smarty_tpl->tpl_vars['irtpFields']->value[$_smarty_tpl->tpl_vars['contactdetail']->value])) && in_array($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['irtpFields']->value[$_smarty_tpl->tpl_vars['contactdetail']->value])) {?> irtp-field<?php }?>" />
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['values'] = $__foreach_values_9_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareasavechanges'),$_smarty_tpl ) );?>

                    </button>
                </div>

            <?php }?>

        </form>

    </div>
</div>

<a href="clientarea.php?action=domains" class="btn btn-default">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareabacklink'),$_smarty_tpl ) );?>

</a>

<?php echo '<script'; ?>
 type="text/javascript">
    var disableInternalTabSelection = true;
<?php echo '</script'; ?>
>
<?php }
}
