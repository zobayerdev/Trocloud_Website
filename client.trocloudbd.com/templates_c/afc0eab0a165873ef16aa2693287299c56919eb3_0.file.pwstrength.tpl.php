<?php
/* Smarty version 3.1.36, created on 2024-08-19 19:14:51
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/pwstrength.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66c399ab626843_79869679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afc0eab0a165873ef16aa2693287299c56919eb3' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/pwstrength.tpl',
      1 => 1670180486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:six/includes/alert.tpl' => 1,
  ),
),false)) {
function content_66c399ab626843_79869679 (Smarty_Internal_Template $_smarty_tpl) {
?><br />

<div class="progress mb-3" id="passwordStrengthBar">
    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pwstrengthrating'),$_smarty_tpl ) );?>
: 0%</span>
    </div>
</div>

<?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl")) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'passwordtips'),$_smarty_tpl ) );
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>"<small><i class='fa fa-info-circle fa-fw'></i> ".$_prefixVariable8."</small>"), 0, true);
} elseif (file_exists("templates/six/includes/alert.tpl")) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'passwordtips'),$_smarty_tpl ) );
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:six/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>"<small><i class='fa fa-info-circle fa-fw'></i> ".$_prefixVariable9."</small>"), 0, false);
}?>

<?php echo '<script'; ?>
>
    jQuery("#inputNewPassword1").keyup(function() {
        var pwStrengthErrorThreshold = <?php if ((isset($_smarty_tpl->tpl_vars['pwStrengthErrorThreshold']->value))) {
echo $_smarty_tpl->tpl_vars['pwStrengthErrorThreshold']->value;
} else { ?>50<?php }?>,
            pwStrengthWarningThreshold = <?php if ((isset($_smarty_tpl->tpl_vars['pwStrengthWarningThreshold']->value))) {
echo $_smarty_tpl->tpl_vars['pwStrengthWarningThreshold']->value;
} else { ?>75<?php }?>,
            progressBar = jQuery("#passwordStrengthBar .progress-bar"),
            pw = jQuery("#inputNewPassword1").val(),
            pwlength = (pw.length);
        if (pwlength > 5) {
            pwlength = 5;
        }
        var numnumeric = pw.replace(/[0-9]/g,""),
            numeric = (pw.length - numnumeric.length);
        if (numeric > 3) {
            numeric = 3;
        }
        var symbols = pw.replace(/\W/g,""),
            numsymbols = (pw.length-symbols.length);
        if (numsymbols > 3) {
            numsymbols = 3;
        }
        var numupper = pw.replace(/[A-Z]/g,""),
            upper = (pw.length - numupper.length);
        if (upper > 3) {
            upper = 3;
        }
        var pwstrength = ((pwlength * 10) - 20) + (numeric * 10) + (numsymbols * 15) + (upper * 10);
        if (pwstrength < 0) {
            pwstrength = 0;
        }
        if (pwstrength > 100) {
            pwstrength = 100;
        }

        jQuery(this).removeClass('is-invalid is-warning is-valid');
        progressBar.removeClass("bg-danger bg-warning bg-success").css("width", pwstrength + "%").attr('aria-valuenow', pwstrength);
        jQuery("#passwordStrengthBar .progress-bar .sr-only").html('<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pwstrengthrating'),$_smarty_tpl ) ));?>
: ' + pwstrength + '%');
        if (pwstrength < pwStrengthErrorThreshold) {
            jQuery(this).addClass('is-invalid');
            progressBar.addClass("bg-danger");
        } else if (pwstrength < pwStrengthWarningThreshold) {
            jQuery(this).addClass('is-warning');
            progressBar.addClass("bg-warning");
        } else {
            jQuery(this).addClass('is-valid');
            progressBar.addClass("bg-success");
        }
        validatePassword2();
});

function validatePassword2() {
    var password1 = jQuery("#inputNewPassword1").val(),
        password2Input = jQuery("#inputNewPassword2"),
        password2 = password2Input.val();

    if (password2 && password1 !== password2) {
        password2Input.removeClass('is-valid')
            .addClass('is-invalid');
        jQuery("#inputNewPassword2Msg").html(
            '<p class="form-text text-muted" id="nonMatchingPasswordResult"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pwdoesnotmatch'),$_smarty_tpl ) );
$_prefixVariable10=ob_get_clean();
echo htmlspecialchars($_prefixVariable10, ENT_QUOTES, 'UTF-8', true);?>
</p>'
        );
        <?php if (!(isset($_smarty_tpl->tpl_vars['noDisable']->value))) {?>
            jQuery('input[type="submit"]').attr('disabled', 'disabled');
        <?php }?>
    } else {
        if (password2) {
            password2Input.removeClass('is-invalid')
                .addClass('is-valid');
            <?php if (!(isset($_smarty_tpl->tpl_vars['noDisable']->value))) {?>jQuery('.primary-content input[type="submit"]').removeAttr('disabled');<?php }?>
        } else {
            password2Input.removeClass('is-valid is-invalid');
        }
        jQuery("#inputNewPassword2Msg").html('');
    }
}

    jQuery(document).ready(function() {
        <?php if (!(isset($_smarty_tpl->tpl_vars['noDisable']->value))) {?>
        jQuery('.using-password-strength input[type="submit"]').attr('disabled', 'disabled');
        <?php }?>
        jQuery("#inputNewPassword2").keyup(function() {
            validatePassword2();
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
