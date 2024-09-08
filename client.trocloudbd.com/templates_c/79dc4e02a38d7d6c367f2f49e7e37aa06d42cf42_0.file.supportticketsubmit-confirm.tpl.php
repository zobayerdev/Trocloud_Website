<?php
/* Smarty version 3.1.36, created on 2024-08-22 10:43:07
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/supportticketsubmit-confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c7163beebac3_02825948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79dc4e02a38d7d6c367f2f49e7e37aa06d42cf42' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/supportticketsubmit-confirm.tpl',
      1 => 1670178534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c7163beebac3_02825948 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"createNewSupportRequest"),$_smarty_tpl ) );?>
</h3>
<div class="card tt-custom-card bg-success-light">
    <div class="card-body p-5">
        <div class="text-center">
            <p><i class="fad fa-check-circle text-success h2"></i></p>
            <strong>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketcreated'),$_smarty_tpl ) );?>

                <a id="ticket-number" href="viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" class="alert-link">#<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
</a>
            </strong>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketcreateddesc'),$_smarty_tpl ) );?>
</p>

            <a href="viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" class="btn btn-primary">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'continue'),$_smarty_tpl ) );?>

                <i class="fad fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<?php }
}
