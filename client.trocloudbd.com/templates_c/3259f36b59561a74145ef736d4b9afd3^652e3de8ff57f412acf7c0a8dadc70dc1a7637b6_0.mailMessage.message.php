<?php
/* Smarty version 3.1.36, created on 2024-08-22 10:43:07
  from 'mailMessage:message' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c7163b4f7c52_94665021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '652e3de8ff57f412acf7c0a8dadc70dc1a7637b6' => 
    array (
      0 => 'mailMessage:message',
      1 => 1724323387,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c7163b4f7c52_94665021 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>[Ticket ID: <?php echo $_smarty_tpl->tpl_vars['ticket_tid']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['ticket_subject']->value;?>
</title>
        <style type="text/css">
            [EmailCSS]
        </style>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
                                        <tr>
                                            <td valign="top" class="headerContent">
                                                <img src="https://client.trocloudbd.com/assets/img/logo.png" style="max-width:600px;padding:20px 20px 0 20px" id="headerImage" alt="Trocloud BD" />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContent">
                                                <?php if ($_smarty_tpl->tpl_vars['newTicket']->value) {?>
    <p>Ticket #<a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
supporttickets.php?action=viewticket&id=<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['ticket_tid']->value;?>
</strong></a> has been opened by <strong><?php echo $_smarty_tpl->tpl_vars['changer']->value;?>
</strong>.</p>
    <p>
        Client: <?php echo $_smarty_tpl->tpl_vars['client_name']->value;
if ($_smarty_tpl->tpl_vars['client_id']->value) {?> #<?php echo $_smarty_tpl->tpl_vars['client_id']->value;
}?><br />
        Department: <?php echo $_smarty_tpl->tpl_vars['ticket_department']->value;?>
<br />
        Subject: <?php echo $_smarty_tpl->tpl_vars['ticket_subject']->value;?>
<br />
        Priority: <?php echo $_smarty_tpl->tpl_vars['ticket_priority']->value;?>

    </p>
    <div class="quoted-content">
        <?php echo $_smarty_tpl->tpl_vars['newTicket']->value;?>

    </div>
<?php } else { ?>
    <p>Ticket #<a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
supporttickets.php?action=viewticket&id=<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['ticket_tid']->value;?>
</strong></a> <?php if ($_smarty_tpl->tpl_vars['newReply']->value || $_smarty_tpl->tpl_vars['newNote']->value) {?>has had a new <?php if ($_smarty_tpl->tpl_vars['newReply']->value) {?>reply<?php } else { ?>note<?php }?> posted by<?php } else { ?>has been updated by<?php }?> <strong><?php echo $_smarty_tpl->tpl_vars['changer']->value;?>
</strong>.</p>

    <?php if ($_smarty_tpl->tpl_vars['changes']->value) {?>
        <table class="keyvalue-table" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['changes']->value, 'change');
$_smarty_tpl->tpl_vars['change']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['change']->key => $_smarty_tpl->tpl_vars['change']->value) {
$_smarty_tpl->tpl_vars['change']->do_else = false;
$__foreach_change_0_saved = $_smarty_tpl->tpl_vars['change'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['change']->key;?>
:</td>
                        <td>
                            <span style="background-color:#ffe7e7;text-decoration:line-through;"><?php echo $_smarty_tpl->tpl_vars['change']->value['old'];?>
</span>
                            &nbsp;
                            <span style="background-color:#ddfade;"><?php echo $_smarty_tpl->tpl_vars['change']->value['new'];?>
</span>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['change'] = $__foreach_change_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['newReply']->value) {?>
        <div class="quoted-content">
            <?php echo $_smarty_tpl->tpl_vars['newReply']->value;?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['newNote']->value) {?>
        <div class="quoted-content">
            <?php echo $_smarty_tpl->tpl_vars['newNote']->value;?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['newAttachments']->value) {
echo $_smarty_tpl->tpl_vars['newAttachments']->value;
}
}?>
<p>
    You can respond to this ticket by simply replying to this email or through the admin area at the url below.
</p>
<p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
supporttickets.php?action=viewticket&id=<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
supporttickets.php?action=viewticket&id=<?php echo $_smarty_tpl->tpl_vars['ticket_id']->value;?>

    </a>
</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
                                        <tr>
                                            <td valign="top" class="footerContent">
                                                <a href="https://www.whmcs.com/"><img src="https://cdn.whmcs.com/images/whmcs_email_footer.png" id="footerImage" alt="WHMCS" /></a>
                                                This notification was automatically generated by WHMCS<br />
                                                &nbsp;<a href="http://client.trocloudbd.com/">http://client.trocloudbd.com/</a>
                                                <span class="hide-mobile"> | </span>
                                                <a href="https://client.trocloudbd.com/admin/">log in to the admin area</a>&nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html><?php }
}
