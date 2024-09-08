<?php
/* Smarty version 3.1.36, created on 2024-09-06 08:34:09
  from '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66dabe81d77bf3_51562439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63f3cdaccc46d9b1e1da88712a5a89958c3ec9ec' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/templates/hostim/contact.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dabe81d77bf3_51562439 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row align-items-center">
    <div class="col-lg-6">
        <div class="tt-contact-form ptb-60">
            <?php if ($_smarty_tpl->tpl_vars['sent']->value) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contactsent'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_prefixVariable1,'textcenter'=>true), 0, true);
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['sent']->value) {?>
                <form method="post" action="contact.php" role="form">
                    <input type="hidden" name="action" value="send" />

                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <label for="inputName" class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsclientname'),$_smarty_tpl ) );?>
</label>
                            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" id="inputName" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="inputEmail" class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsclientemail'),$_smarty_tpl ) );?>
</label>
                            <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control" id="inputEmail" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject" class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supportticketsticketsubject'),$_smarty_tpl ) );?>
</label>
                        <input type="text" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" class="form-control" id="inputSubject" />
                    </div>
                    <div class="form-group">
                        <label for="inputMessage" class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contactmessage'),$_smarty_tpl ) );?>
</label>
                        <textarea name="message" rows="7" class="form-control" id="inputMessage"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
                        <div class="margin-bottom">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tt/hostim/tt-captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                    <?php }?>

                    <button type="submit" class="btn btn-primary<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contactsend'),$_smarty_tpl ) );?>
</button>
                </form>

            <?php }?>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="tt-contact-info">
            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/tt-contact-us.svg" class="img-fluid" alt="support image">
        </div>
    </div>
</div>
<?php }
}
