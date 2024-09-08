<?php
/* Smarty version 3.1.36, created on 2024-09-08 15:52:50
  from '/home/trocloudbd/public_html/client.trocloudbd.com/modules/servers/cpanel/templates/overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ddc852a431c4_31847122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bb06d467de550b06382772f831c7be082dcc240' => 
    array (
      0 => '/home/trocloudbd/public_html/client.trocloudbd.com/modules/servers/cpanel/templates/overview.tpl',
      1 => 1725559046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ddc852a431c4_31847122 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="modules/servers/cpanel/css/client.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="modules/servers/cpanel/js/client.js"><?php echo '</script'; ?>
>

<div class="row">
    <div class="col-md-6">

        <div class="panel panel-default card mb-3" id="cPanelPackagePanel">
            <div class="panel-heading card-header">
                <h3 class="panel-title card-title m-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'packageDomain'),$_smarty_tpl ) );?>
</h3>
            </div>
            <div class="panel-body card-body text-center">

                <div class="cpanel-package-details">
                    <em><?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
</em>
                    <h4 style="margin:0;"><?php echo $_smarty_tpl->tpl_vars['product']->value;?>
</h4>
                    <a href="http://<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" target="_blank">www.<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</a>
                </div>

                <p>
                    <a href="http://<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" class="btn btn-default btn-sm" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['visitwebsite'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['domainId']->value) {?>
                        <a href="clientarea.php?action=domaindetails&id=<?php echo $_smarty_tpl->tpl_vars['domainId']->value;?>
" class="btn btn-success btn-sm" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['managedomain'];?>
</a>
                    <?php }?>
                </p>

            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['availableAddonProducts']->value) {?>
            <div class="panel panel-default card mb-3" id="cPanelExtrasPurchasePanel">
                <div class="panel-heading card-header">
                    <h3 class="panel-title card-title m-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addonsExtras'),$_smarty_tpl ) );?>
</h3>
                </div>
                <div class="panel-body card-body text-center mx-auto">

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add" class="form-inline">
                        <input type="hidden" name="serviceid" value="<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
" />
                        <select name="aid" class="form-control custom-select w-100 input-sm form-control-sm mr-2">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableAddonProducts']->value, 'addonName', false, 'addonId');
$_smarty_tpl->tpl_vars['addonName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addonId']->value => $_smarty_tpl->tpl_vars['addonName']->value) {
$_smarty_tpl->tpl_vars['addonName']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['addonId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['addonName']->value;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <button type="submit" class="btn btn-default btn-sm btn-block mt-1">
                            <i class="fas fa-shopping-cart"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'purchaseActivate'),$_smarty_tpl ) );?>

                        </button>
                    </form>

                </div>
            </div>
        <?php }?>

    </div>
    <div class="col-md-6">

        <div class="panel card panel-default mb-3" id="cPanelUsagePanel">
            <div class="panel-heading card-header">
                <h3 class="panel-title card-title m-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'usageStats'),$_smarty_tpl ) );?>
</h3>
            </div>
            <div class="panel-body card-body text-center cpanel-usage-stats">

                <div class="row">
                    <div class="col-md-6" id="diskUsage">
                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'diskUsage'),$_smarty_tpl ) );?>
</strong>
                        <br /><br />
                        <input type="text" value="<?php echo substr($_smarty_tpl->tpl_vars['diskpercent']->value,0,-1);?>
" class="usage-dial" data-fgColor="#444" data-angleOffset="-125" data-angleArc="250" data-min="0" data-max="<?php if (substr($_smarty_tpl->tpl_vars['diskpercent']->value,0,-1) > 100) {
echo substr($_smarty_tpl->tpl_vars['diskpercent']->value,0,-1);
} else { ?>100<?php }?>" data-readOnly="true" data-width="100" data-height="80" />
                        <br /><br />
                        <?php echo $_smarty_tpl->tpl_vars['diskusage']->value;?>
 M / <?php echo $_smarty_tpl->tpl_vars['disklimit']->value;?>
 M
                    </div>
                    <div class="col-md-6" id="bandwidthUsage">
                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bandwidthUsage'),$_smarty_tpl ) );?>
</strong>
                        <br /><br />
                        <input type="text" value="<?php echo substr($_smarty_tpl->tpl_vars['bwpercent']->value,0,-1);?>
" class="usage-dial" data-fgColor="#d9534f" data-angleOffset="-125" data-angleArc="250" data-min="0" data-max="<?php if (substr($_smarty_tpl->tpl_vars['bwpercent']->value,0,-1) > 100) {
echo substr($_smarty_tpl->tpl_vars['bwpercent']->value,0,-1);
} else { ?>100<?php }?>" data-readOnly="true" data-width="100" data-height="80" />
                        <br /><br />
                        <?php echo $_smarty_tpl->tpl_vars['bwusage']->value;?>
 M / <?php echo $_smarty_tpl->tpl_vars['bwlimit']->value;?>
 M
                    </div>
                </div>
                <?php if (substr($_smarty_tpl->tpl_vars['bwpercent']->value,0,-1) > 75) {?>
                    <div class="text-danger limit-near">
                        <?php if (substr($_smarty_tpl->tpl_vars['bwpercent']->value,0,-1) > 100) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'usageStatsBwOverLimit'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'usageStatsBwLimitNear'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['packagesupgrade']->value) {?>
                            <a href="upgrade.php?type=package&id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
" class="btn btn-sm btn-danger">
                                <i class="fas fa-arrow-circle-up"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'usageUpgradeNow'),$_smarty_tpl ) );?>

                            </a>
                        <?php }?>
                    </div>
                <?php } elseif (substr($_smarty_tpl->tpl_vars['diskpercent']->value,0,-1) > 75) {?>
                    <div class="text-danger limit-near">
                        <?php if (substr($_smarty_tpl->tpl_vars['diskpercent']->value,0,-1) > 100) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'usageStatsDiskOverLimit'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'usageStatsDiskLimitNear'),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['packagesupgrade']->value) {?>
                            <a href="upgrade.php?type=package&id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
" class="btn btn-sm btn-danger">
                                <i class="fas fa-arrow-circle-up"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'usageUpgradeNow'),$_smarty_tpl ) );?>

                            </a>
                        <?php }?>
                    </div>
                <?php } else { ?>
                    <div class="text-info limit-near">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'usageLastUpdated'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['lastupdate']->value;?>

                    </div>
                <?php }?>

                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.knob.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 type="text/javascript">
                jQuery(function() {
                    jQuery(".usage-dial").knob({
                        'format': function (value) {
                            return value + '%';
                        }
                    });
                });
                <?php echo '</script'; ?>
>

            </div>
        </div>

    </div>
</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookOutput']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['systemStatus']->value == 'Active') {?>
    <?php if (count($_smarty_tpl->tpl_vars['wpInstances']->value) || $_smarty_tpl->tpl_vars['allowWpClientInstall']->value) {?>
        <div class="panel card panel-default mb-3" id="cPanelWordPress" data-service-id="<?php echo $_smarty_tpl->tpl_vars['serviceId']->value;?>
" data-wp-domain="<?php echo $_smarty_tpl->tpl_vars['wpDomain']->value;?>
">
            <div class="panel-heading card-header">
                <h3 class="panel-title card-title m-0">WordPress®</h3>
            </div>
            <div class="panel-body card-body">
                <div class="row<?php if (!$_smarty_tpl->tpl_vars['allowWpClientInstall']->value) {?> no-margin<?php }?>" id="wordpressInstanceRow" <?php if (!count($_smarty_tpl->tpl_vars['wpInstances']->value)) {?>style="display: none" <?php }?>>
                    <div class="col-md-4">
                        <select class="form-control" id="wordPressInstances">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wpInstances']->value, 'wpInstance');
$_smarty_tpl->tpl_vars['wpInstance']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wpInstance']->value) {
$_smarty_tpl->tpl_vars['wpInstance']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['wpInstance']->value['instanceUrl'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['wpInstance']->value['blogTitle'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['wpInstance']->value['path']) {?> (<?php echo $_smarty_tpl->tpl_vars['wpInstance']->value['path'];?>
)<?php }?>
                                </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-default btn-block" id="btnGoToWordPressHome">
                            <i class="fab fa-wordpress"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wptk.goToWebsite'),$_smarty_tpl ) );?>

                        </button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-default btn-block" id="btnGoToWordPressAdmin">
                            <i class="fas fa-users-cog"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wptk.goToAdmin'),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </div>
                <div class="row" <?php if (!$_smarty_tpl->tpl_vars['allowWpClientInstall']->value) {?>style="display: none"<?php }?>>
                    <div class="col-md-12">
                        <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wptk.createNew'),$_smarty_tpl ) );?>
</h5>
                        <p class="small" id="newWordPressFullUrlPreview">https://<?php echo $_smarty_tpl->tpl_vars['wpDomain']->value;?>
/</p>
                    </div>
                    <div class="col-md-12" id="wordPressInstallResultRow" style="display: none">
                        <div class="alert alert-success" style="display: none">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wptk.installationSuccess'),$_smarty_tpl ) );?>

                        </div>
                        <div class="alert alert-danger" style="display: none">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="wpNewBlogTitle" placeholder="New Blog Title" />
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="wpNewPath" placeholder="Path (optional)" />
                    </div>
                    <div class="col-md-3">
                        <input type="password" class="form-control" id="wpAdminPass" placeholder="Admin Password" />
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-default btn-block" id="btnInstallWordpress">
                            <i class="far fa-fw fa-plus"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wptk.installWordPressShort'),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>


    <div class="panel card panel-default mb-3" id="cPanelQuickShortcutsPanel">
        <div class="panel-heading card-header">
            <h3 class="panel-title card-title m-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quickShortcuts'),$_smarty_tpl ) );?>
</h3>
        </div>
        <div class="panel-body card-body text-center">

            <div class="row cpanel-feature-row">
                <div class="col-md-3 col-sm-4 col-xs-6 col-6" id="cPanelEmailAccounts">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=Email_Accounts" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/email_accounts.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['emailAccounts'];?>

                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 col-6" id="cPanelForwarders">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=Email_Forwarders" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/forwarders.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['forwarders'];?>

                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 col-6" id="cPanelAutoResponders">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=Email_AutoResponders" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/autoresponders.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['autoresponders'];?>

                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 col-6" id="cPanelFileManager">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=FileManager_Home" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/file_manager.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['fileManager'];?>

                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 col-6" id="cPanelBackup">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=Backups_Home" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/backup.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['backup'];?>

                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 col-6" id="cPanelSubdomains">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=Domains_SubDomains" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/subdomains.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['subdomains'];?>

                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 col-6" id="cPanelAddonDomains">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=Domains_AddonDomains" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/addon_domains.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['addonDomains'];?>

                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 col-6" id="cPanelCronJobs">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=Cron_Home" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/cron_jobs.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['cronJobs'];?>

                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 col-6" id="cPanelMySQLDatabases">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=Database_MySQL" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/mysql_databases.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['mysqlDatabases'];?>

                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 col-6" id="cPanelPhpMyAdmin">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=Database_phpMyAdmin" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/php_my_admin.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['phpMyAdmin'];?>

                    </a>
                </div>
                <div class="col-sm-3 col-xs-6" id="cPanelAwstats">
                    <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;dosinglesignon=1&amp;app=Stats_AWStats" target="_blank" class="d-block mb-3">
                        <img src="modules/servers/cpanel/img/awstats.png" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['awstats'];?>

                    </a>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['hasWPTDeluxe']->value) {?>
                    <div class="col-sm-3 col-xs-6" id="cPanelWptk">
                        <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
&amp;addonId=<?php echo $_smarty_tpl->tpl_vars['wptkDeluxeAddonId']->value;?>
&amp;doaddonsignon=1" target="_blank" class="d-block mb-3">
                            <img src="modules/servers/cpanel/img/wptk.png" />
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['wptk'];?>

                        </a>
                    </div>
                <?php }?>
            </div>

        </div>
    </div>

    <div class="panel card panel-default mb-3" id="cPanelQuickEmailPanel">
        <div class="panel-heading card-header">
            <h3 class="panel-title card-title m-0"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['createEmailAccount'];?>
</h3>
        </div>
        <div class="panel-body card-body">

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['cPanel']['emailAccountCreateSuccess'],'textcenter'=>true,'hide'=>true,'idname'=>"emailCreateSuccess",'additionalClasses'=>"email-create-feedback"), 0, true);
?>

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"danger",'msg'=>($_smarty_tpl->tpl_vars['LANG']->value['cPanel']['emailAccountCreateFailed']).(' <span id="emailCreateFailedErrorMsg"></span>'),'textcenter'=>true,'hide'=>true,'idname'=>"emailCreateFailed",'additionalClasses'=>"email-create-feedback"), 0, true);
?>

            <form id="frmCreateEmailAccount" onsubmit="doEmailCreate();return false">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['serviceid']->value;?>
" />
                <input type="hidden" name="email_quota" value="250" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="text" id="cpanel-email-prefix" name="email_prefix" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['usernamePlaceholder'];?>
">
                            <div class="input-group-addon input-group-append">
                                <span class="input-group-text">
                                    <small>@<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</small>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="password" id="cpanel-email-password" name="email_pw" class="form-control mb-1" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['passwordPlaceholder'];?>
">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-plus" id="btnCreateLoader"></i>
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['create'];?>

                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

<?php } else { ?>

    <div class="alert alert-warning text-center" role="alert" id="cPanelSuspendReasonPanel">
        <?php if ($_smarty_tpl->tpl_vars['suspendreason']->value) {?>
            <strong><?php echo $_smarty_tpl->tpl_vars['suspendreason']->value;?>
</strong><br />
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['packageNotActive'];?>
 <?php echo $_smarty_tpl->tpl_vars['status']->value;?>
.<br />
        <?php if ($_smarty_tpl->tpl_vars['systemStatus']->value == "Pending") {?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['statusPendingNotice'];?>

        <?php } elseif ($_smarty_tpl->tpl_vars['systemStatus']->value == "Suspended") {?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cPanel']['statusSuspendedNotice'];?>

        <?php }?>
    </div>

<?php }?>

<div class="panel card panel-default mb-3" id="cPanelBillingOverviewPanel">
    <div class="panel-heading card-header">
        <h3 class="panel-title card-title m-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'billingOverview'),$_smarty_tpl ) );?>
</h3>
    </div>
    <div class="panel-body card-body">

        <div class="row">
            <div class="col-md-5">
                <?php if ($_smarty_tpl->tpl_vars['firstpaymentamount']->value != $_smarty_tpl->tpl_vars['recurringamount']->value) {?>
                    <div class="row" id="firstPaymentAmount">
                        <div class="col-xs-6 col-6 text-right" >
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['firstpaymentamount'];?>

                        </div>
                        <div class="col-xs-6 col-6">
                            <?php echo $_smarty_tpl->tpl_vars['firstpaymentamount']->value;?>

                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value != $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'] && $_smarty_tpl->tpl_vars['billingcycle']->value != $_smarty_tpl->tpl_vars['LANG']->value['orderfree']) {?>
                    <div class="row" id="recurringAmount">
                        <div class="col-xs-6 col-6 text-right">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['recurringamount'];?>

                        </div>
                        <div class="col-xs-6 col-6">
                            <?php echo $_smarty_tpl->tpl_vars['recurringamount']->value;?>

                        </div>
                    </div>
                <?php }?>
                <div class="row" id="billingCycle">
                    <div class="col-xs-6 col-6 text-right">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderbillingcycle'];?>

                    </div>
                    <div class="col-xs-6 col-6">
                        <?php echo $_smarty_tpl->tpl_vars['billingcycle']->value;?>

                    </div>
                </div>
                <div class="row" id="paymentMethod">
                    <div class="col-xs-6 col-6 text-right">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>

                    </div>
                    <div class="col-xs-6 col-6">
                        <?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;?>

                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row" id="registrationDate">
                    <div class="col-xs-6 col-6 col-xl-5 text-right">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingregdate'];?>

                    </div>
                    <div class="col-xs-6 col-6 col-xl-7">
                        <?php echo $_smarty_tpl->tpl_vars['regdate']->value;?>

                    </div>
                </div>
                <div class="row" id="nextDueDate">
                    <div class="col-xs-6 col-6 col-xl-5 text-right">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>

                    </div>
                    <div class="col-xs-6 col-6 col-xl-7">
                        <?php echo $_smarty_tpl->tpl_vars['nextduedate']->value;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
    <div class="panel card panel-default mb-3" id="cPanelConfigurableOptionsPanel">
        <div class="panel-heading card-header">
            <h3 class="panel-title card-title m-0"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfigpackage'];?>
</h3>
        </div>
        <div class="panel-body card-body">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configurableoptions']->value, 'configoption');
$_smarty_tpl->tpl_vars['configoption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->do_else = false;
?>
                <div class="row">
                    <div class="col-md-5 col-xs-6 col-6 text-right">
                        <strong><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</strong>
                    </div>
                    <div class="col-md-7 col-xs-6 col-6 text-left">
                        <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 3) {
if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['yes'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['no'];
}
} elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 4) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];?>
 x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['selectedoption'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedoption'];
}?>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['metricStats']->value) {?>
    <div class="panel card panel-default mb-3" id="cPanelMetricStatsPanel">
        <div class="panel-heading card-header">
            <h3 class="panel-title card-title m-0"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['title'];?>
</h3>
        </div>
        <div class="panel-body card-body">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/clientareaproductusagebilling.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
    <div class="panel card panel-default mb-3" id="cPanelAdditionalInfoPanel">
        <div class="panel-heading card-header">
            <h3 class="panel-title card-title m-0"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['additionalInfo'];?>
</h3>
        </div>
        <div class="panel-body card-body">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                <div class="row">
                    <div class="col-md-5 col-xs-6 col-6 text-right">
                        <strong><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</strong>
                    </div>
                    <div class="col-md-7 col-xs-6 col-6 text-left">
                        <?php if (empty($_smarty_tpl->tpl_vars['field']->value['value'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['blankCustomField'];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>

                        <?php }?>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
