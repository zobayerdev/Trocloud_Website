<?php
/* Smarty version 3.1.36, created on 2024-09-08 15:41:17
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/active-products-services-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ddc59d9c5a14_74756940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbfd8de9e37817aafae78a9fe730a4056773d095' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/includes/active-products-services-item.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ddc59d9c5a14_74756940 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="div-service-item" data-href="clientarea.php?action=productdetails&id=<?php echo $_smarty_tpl->tpl_vars['service']->value->id;?>
">
    <div class="div-service-status">
        <span class="label label-placeholder">
            <?php echo $_smarty_tpl->tpl_vars['statusProperties']->value[array_key_first($_smarty_tpl->tpl_vars['statusProperties']->value)]['translation'];?>

        </span>
        <span class="label label-<?php echo $_smarty_tpl->tpl_vars['statusProperties']->value[$_smarty_tpl->tpl_vars['service']->value->domainStatus]['modifier'];?>
"
              title="<?php echo $_smarty_tpl->tpl_vars['statusProperties']->value[$_smarty_tpl->tpl_vars['service']->value->domainStatus]['translation'];?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['statusProperties']->value[$_smarty_tpl->tpl_vars['service']->value->domainStatus]['translation'];?>

        </span>
    </div>
    <div class="div-service-name">
        <span class="font-weight-bold">
            <?php echo $_smarty_tpl->tpl_vars['service']->value->product->productGroup->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['service']->value->product->name;?>

        </span>
        <span class="text-domain"><?php echo $_smarty_tpl->tpl_vars['service']->value->domain;?>
</span>
    </div>
    <div class="div-service-buttons">
        <?php if (!empty($_smarty_tpl->tpl_vars['buttonData']->value)) {?>
            <div class="btn-group btn-group-sm btn-group-primary" role="group">
                <button type="button"
                        class="btn btn-sm btn-default dropdown-toggle"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                >
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttonData']->value, 'buttonDatum');
$_smarty_tpl->tpl_vars['buttonDatum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['buttonDatum']->value) {
$_smarty_tpl->tpl_vars['buttonDatum']->do_else = false;
?>
                        <li class="dropdown-item btn-custom-action<?php if (!$_smarty_tpl->tpl_vars['buttonDatum']->value['active']) {?> disabled<?php }?>"
                            data-serviceid="<?php echo $_smarty_tpl->tpl_vars['buttonDatum']->value['serviceid'];?>
"
                            data-identifier="<?php echo $_smarty_tpl->tpl_vars['buttonDatum']->value['identifier'];?>
"
                            data-active="<?php echo $_smarty_tpl->tpl_vars['buttonDatum']->value['active'];?>
"
                            <?php if (!$_smarty_tpl->tpl_vars['buttonDatum']->value['active']) {?>disabled="disabled"<?php }?>
                        >
                            <span class="loading hidden w-hidden">
                                <i class="fas fa-spinner fa-spin"></i>
                            </span>
                            <?php echo $_smarty_tpl->tpl_vars['buttonDatum']->value['display'];?>

                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['primaryServiceBtn']->value) {?>
                <div class="btn-group btn-group-sm btn-group-secondary" role="group">
                    <button class="btn btn-default btn-sm btn-custom-action<?php if (!$_smarty_tpl->tpl_vars['primaryServiceBtn']->value['active']) {?> disabled<?php }?>"
                            data-serviceid="<?php echo $_smarty_tpl->tpl_vars['primaryServiceBtn']->value['serviceid'];?>
"
                            data-identifier="<?php echo $_smarty_tpl->tpl_vars['primaryServiceBtn']->value['identifier'];?>
"
                            data-active="<?php echo $_smarty_tpl->tpl_vars['primaryServiceBtn']->value['active'];?>
"
                            <?php if (!$_smarty_tpl->tpl_vars['primaryServiceBtn']->value['active']) {?>disabled="disabled"<?php }?>
                    >
                        <span class="loading hidden w-hidden">
                            <i class="fas fa-spinner fa-spin"></i>
                        </span>
                        <?php echo $_smarty_tpl->tpl_vars['primaryServiceBtn']->value['display'];?>

                    </button>
                    <?php if ($_smarty_tpl->tpl_vars['secondaryButtons']->value) {?>
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button"
                                    class="btn btn-sm btn-default dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                            >
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondaryButtons']->value, 'secondaryButton');
$_smarty_tpl->tpl_vars['secondaryButton']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['secondaryButton']->value) {
$_smarty_tpl->tpl_vars['secondaryButton']->do_else = false;
?>
                                    <li class="dropdown-item btn-custom-action<?php if (!$_smarty_tpl->tpl_vars['secondaryButton']->value['active']) {?> disabled<?php }?>"
                                        data-serviceid="<?php echo $_smarty_tpl->tpl_vars['secondaryButton']->value['serviceid'];?>
"
                                        data-identifier="<?php echo $_smarty_tpl->tpl_vars['secondaryButton']->value['identifier'];?>
"
                                        data-active="<?php echo $_smarty_tpl->tpl_vars['secondaryButton']->value['active'];?>
"
                                        <?php if (!$_smarty_tpl->tpl_vars['secondaryButton']->value['active']) {?>disabled="disabled"<?php }?>
                                    >
                                        <span class="loading hidden w-hidden">
                                            <i class="fas fa-spinner fa-spin"></i>
                                        </span>
                                        <?php echo $_smarty_tpl->tpl_vars['secondaryButton']->value['display'];?>

                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
        <?php }?>
        <button class="btn btn-default btn-sm btn-view-details">
            <i aria-hidden="true" class="far fa-info-circle" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientareaviewdetails"),$_smarty_tpl ) );?>
"></i>
            <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientareaviewdetails"),$_smarty_tpl ) );?>
</span>
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientareaviewdetails"),$_smarty_tpl ) );?>
</span>
        </button>
    </div>
</div><?php }
}
