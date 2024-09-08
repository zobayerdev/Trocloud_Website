<?php
/* Smarty version 3.1.36, created on 2024-08-03 18:49:55
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae7bd3bc77d6_84756725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7596d7e49fe01b6ae72ccb1213b19ac518257dd' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/header.tpl',
      1 => 1684021146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae7bd3bc77d6_84756725 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>

</head>
<body class="tt-body-wrapper <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>primary-bg-color bg-gray-light<?php }?>">

<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tt/hostim/tt-homepage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<section id="main-body" class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>ptb-100 <?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['templatefile']->value,array('login','clientregister','password-reset-container','logout'))) {?>tt-auth-wrap<?php }?>">
    <div class="<?php if (!$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>container<?php }?>">
        <?php if (!in_array($_smarty_tpl->tpl_vars['templatefile']->value,array('login','clientregister','password-reset-container','logout'))) {?>
        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="sidebar">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>
                </div>
                <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
                    <div class="d-none d-lg-block sidebar">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0, true);
?>
                    </div>
                <?php }?>
            </div>
            <?php }?>
            <div class="<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>col-lg-8 col-xl-9<?php }?> primary-content">
                <?php } else { ?>
                <div class="row justify-content-center">
                    <div class="col-lg-10 primary-content">
<?php }
}
}
