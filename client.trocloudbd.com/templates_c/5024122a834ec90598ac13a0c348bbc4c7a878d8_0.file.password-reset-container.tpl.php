<?php
/* Smarty version 3.1.36, created on 2024-08-08 12:26:26
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/password-reset-container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66b4b9728b91c1_82577411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5024122a834ec90598ac13a0c348bbc4c7a878d8' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/password-reset-container.tpl',
      1 => 1675537376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b9728b91c1_82577411 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-center">
    <div class="col-lg-7 col-12">
        <div class="card tt-custom-radius">
            <div class="card-body p-4 p-lg-5">
                <?php if ($_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['innerTemplate']->value) {?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noPasswordResetWhenLoggedIn'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_prefixVariable1,'textcenter'=>true), 0, true);
?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['successMessage']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['successTitle']->value,'textcenter'=>true), 0, true);
?>
                        <p><?php echo $_smarty_tpl->tpl_vars['successMessage']->value;?>
</p>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['innerTemplate']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/password-reset-".((string)$_smarty_tpl->tpl_vars['innerTemplate']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?>
                    <?php }?>
                <?php }?>

                <div class="auth-footer mt-20"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notAccount'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</a> </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
