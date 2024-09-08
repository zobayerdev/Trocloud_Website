<?php
/* Smarty version 3.1.36, created on 2024-09-08 15:39:54
  from 'mailMessage:message' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ddc54a7bad51_18058251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '652e3de8ff57f412acf7c0a8dadc70dc1a7637b6' => 
    array (
      0 => 'mailMessage:message',
      1 => 1725809994,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ddc54a7bad51_18058251 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['company_domain']->value;?>
">
                                                    <?php if ($_smarty_tpl->tpl_vars['company_logo_url']->value) {?>
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['company_logo_url']->value;?>
" style="max-width:600px;padding:20px 20px 0 20px" id="headerImage" alt="<?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
" />
                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>

                                                    <?php }?>
                                                </a>
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
<!-- message header end --><p>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,</p>
<p>This is a payment receipt for Invoice <?php echo $_smarty_tpl->tpl_vars['invoice_num']->value;?>
 sent on <?php echo $_smarty_tpl->tpl_vars['invoice_date_created']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['invoice_html_contents']->value;?>
</p>
<p>Amount: <?php echo $_smarty_tpl->tpl_vars['invoice_last_payment_amount']->value;?>
<br />Transaction #: <?php echo $_smarty_tpl->tpl_vars['invoice_last_payment_transid']->value;?>
<br />Total Paid: <?php echo $_smarty_tpl->tpl_vars['invoice_amount_paid']->value;?>
<br />Remaining Balance: <?php echo $_smarty_tpl->tpl_vars['invoice_balance']->value;?>
<br />Status: <?php echo $_smarty_tpl->tpl_vars['invoice_status']->value;?>
</p>
<p>You may review your invoice history at any time by logging in to your client area.</p>
<p>Note: This email will serve as an official receipt for this payment.</p>
<p><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</p><!-- message footer start -->
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
                                                 <a href="<?php echo $_smarty_tpl->tpl_vars['company_domain']->value;?>
">visit our website</a>
                                                <span class="hide-mobile"> | </span>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
">log in to your account</a>
                                                <span class="hide-mobile"> | </span>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
submitticket.php">get support</a> <br />
                                                Copyright © <?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
, All rights reserved.
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
