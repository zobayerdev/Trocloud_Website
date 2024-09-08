<?php
/* Smarty version 3.1.36, created on 2024-08-03 18:40:14
  from '/home/trocloudbd/client.trocloudbd.com/admin/templates/blend/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae798e01cf35_61217489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1e3a631020838128e6b08439c3bc70bf934a8a3' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/admin/templates/blend/header.tpl',
      1 => 1695224186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae798e01cf35_61217489 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="referrer" content="same-origin">

    <title>WHMCS - <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>

    <?php echo \WHMCS\View\Asset::fontCssInclude('open-sans-family.css');?>

    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/all.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" />
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/theme.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet" />
    <link href="<?php echo \WHMCS\Utility\Environment\WebHelper::getBaseUrl();?>
/assets/css/fontawesome-all.min.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/vendor.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var datepickerformat = "<?php echo $_smarty_tpl->tpl_vars['datepickerformat']->value;?>
",
            csrfToken="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
",
            adminBaseRoutePath = "<?php echo \WHMCS\Admin\AdminServiceProvider::getAdminRouteBase();?>
",
            whmcsBaseUrl = "<?php echo \WHMCS\Utility\Environment\WebHelper::getBaseUrl();?>
";

        <?php if ($_smarty_tpl->tpl_vars['jquerycode']->value) {?>
            $(document).ready(function(){
                <?php echo $_smarty_tpl->tpl_vars['jquerycode']->value;?>

            });
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['jscode']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>

        <?php }?>
    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>
<body class="<?php if (empty($_smarty_tpl->tpl_vars['sidebar']->value)) {?>no-sidebar<?php }
if (!empty($_smarty_tpl->tpl_vars['globalAdminWarningMsg']->value)) {?> has-warning-banner<?php }?>" data-phone-cc-input="<?php if (!empty($_smarty_tpl->tpl_vars['phoneNumberInputStyle']->value)) {
echo $_smarty_tpl->tpl_vars['phoneNumberInputStyle']->value;
}?>">

    <?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


    <div class="alert alert-warning global-admin-warning">
        <?php echo $_smarty_tpl->tpl_vars['globalAdminWarningMsg']->value;?>

    </div>

    <div class="navigation">
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>

    <div class="sidebar<?php if ($_smarty_tpl->tpl_vars['minsidebar']->value) {?> minimized<?php }?>" id="sidebar">
        <a href="#" class="sidebar-collapse-expand" id="sidebarCollapseExpand">
            <i class="fa fa-chevron-down"></i>
        </a>
        <div class="sidebar-collapse">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    </div>
    <a href="#" class="sidebar-opener<?php if ($_smarty_tpl->tpl_vars['minsidebar']->value) {?> minimized<?php }?>" id="sidebarOpener">
        <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['openSidebar'];?>

    </a>

    <div class="<?php echo $_smarty_tpl->tpl_vars['contentAreaClasses']->value;?>
" id="contentarea">
        <div style="float:left;width:100%;">
            <h1<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value == $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['hometitle']) {?> class="pull-left"<?php }?>><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>
<?php }
}
