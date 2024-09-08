<?php
/* Smarty version 3.1.36, created on 2024-08-22 10:43:07
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c7163b4fc7b7_09800685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1724323387,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c7163b4fc7b7_09800685 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['newTicket']->value) {?>
    Ticket #<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
supporttickets.php?action=viewticket&id=<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>
 has been opened by <?php echo $_smarty_tpl->tpl_vars['changer']->value;?>
.


    
        Client: <?php echo $_smarty_tpl->tpl_vars['client_name']->value;
if ($_smarty_tpl->tpl_vars['client_id']->value) {?> #<?php echo $_smarty_tpl->tpl_vars['client_id']->value;
}?>
        Department: <?php echo $_smarty_tpl->tpl_vars['ticket_department']->value;?>

        Subject: <?php echo $_smarty_tpl->tpl_vars['ticket_subject']->value;?>

        Priority: <?php echo $_smarty_tpl->tpl_vars['ticket_priority']->value;?>

    


    
        <?php echo $_smarty_tpl->tpl_vars['newTicket']->value;?>

    
<?php } else { ?>
    Ticket #<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
supporttickets.php?action=viewticket&id=<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['newReply']->value || $_smarty_tpl->tpl_vars['newNote']->value) {?>has had a new <?php if ($_smarty_tpl->tpl_vars['newReply']->value) {?>reply<?php } else { ?>note<?php }?> posted by<?php } else { ?>has been updated by<?php }?> <?php echo $_smarty_tpl->tpl_vars['changer']->value;?>
.



    <?php if ($_smarty_tpl->tpl_vars['changes']->value) {?>
        
            
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['changes']->value, 'change');
$_smarty_tpl->tpl_vars['change']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['change']->key => $_smarty_tpl->tpl_vars['change']->value) {
$_smarty_tpl->tpl_vars['change']->do_else = false;
$__foreach_change_1_saved = $_smarty_tpl->tpl_vars['change'];
?>
                    
                        <?php echo $_smarty_tpl->tpl_vars['change']->key;?>
:
                        
                            <?php echo $_smarty_tpl->tpl_vars['change']->value['old'];?>

                             
                            <?php echo $_smarty_tpl->tpl_vars['change']->value['new'];?>

                        
                    
                <?php
$_smarty_tpl->tpl_vars['change'] = $__foreach_change_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
        
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['newReply']->value) {?>
        
            <?php echo $_smarty_tpl->tpl_vars['newReply']->value;?>

        
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['newNote']->value) {?>
        
            <?php echo $_smarty_tpl->tpl_vars['newNote']->value;?>

        
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['newAttachments']->value) {
echo $_smarty_tpl->tpl_vars['newAttachments']->value;
}
}?>

    You can respond to this ticket by simply replying to this email or through the admin area at the url below.

    
        <?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
supporttickets.php?action=viewticket&id=<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;
}
}
