<?php
/* Smarty version 3.1.36, created on 2024-08-08 13:32:58
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/downloads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66b4c90a51fb42_99570483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc82fedd4c03d1d951bce649851c6c73107fc7ca' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/downloads.tpl',
      1 => 1670253128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4c90a51fb42_99570483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/trocloudbd/client.trocloudbd.com/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="p-lg-5 p-md-5 p-3 bg-gray-light tt-rounded mb-4">
    <form role="form" method="post" action="<?php echo routePath('download-search');?>
">
        <div class="input-group kb-search tt-kb-search">
            <div class="tt-search-field">
                <i class="far fa-search text-primary"></i>
                <input type="text" name="search" id="inputDownloadsSearch" class="form-control font-weight-light" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'downloadssearch'),$_smarty_tpl ) );?>
" />
            </div>
            <button type="submit" id="btnDownloadsSearch" class="btn btn-primary btn-input-padded-responsive">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );?>

            </button>
        </div>
    </form>
</div>

<?php if ($_smarty_tpl->tpl_vars['dlcats']->value) {?>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dlcats']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <div class="col-xl-6">
                <div class="card kb-category mb-4">
                    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['category']->value['id'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['category']->value['urlfriendlyname'];
$_prefixVariable2 = ob_get_clean();
echo routePath('download-by-cat',$_prefixVariable1,$_prefixVariable2);?>
" class="card-body">
                        <span class="h6 m-0">
                            <i class="far fa-folder fa-fw"></i>
                            <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>

                            <span class="badge bg-primary-light float-right">
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['kbcat']->value['numarticles'] != 1) {
echo "s";
}
$_prefixVariable3=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"downloads.numDownload".$_prefixVariable3,'num'=>$_smarty_tpl->tpl_vars['category']->value['numarticles']),$_smarty_tpl ) );?>

                            </span>
                        </span>
                        <p class="m-0 text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</p>
                    </a>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php } else { ?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'downloadsnone'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable4,'textcenter'=>true), 0, true);
}?>

<?php if ($_smarty_tpl->tpl_vars['mostdownloads']->value) {?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title m-0">
                <i class="fal fa-star fa-fw"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'downloadspopular'),$_smarty_tpl ) );?>

            </h3>
        </div>
        <div class="list-group list-group-flush">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mostdownloads']->value, 'download');
$_smarty_tpl->tpl_vars['download']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
$_smarty_tpl->tpl_vars['download']->do_else = false;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['download']->value['link'];?>
" class="list-group-item kb-article-item">
                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['download']->value['type'],'alt',' class="pr-1" alt');?>

                    <?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>

                    <?php if ($_smarty_tpl->tpl_vars['download']->value['clientsonly']) {?>
                        <div class="float-md-right">
                            <span class="label label-danger">
                                <i class="fas fa-lock fa-fw"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'restricted'),$_smarty_tpl ) );?>

                            </span>
                        </div>
                    <?php }?>
                    <small>
                        <?php echo $_smarty_tpl->tpl_vars['download']->value['description'];?>

                        <br>
                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'downloadsfilesize'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['download']->value['filesize'];?>
</strong>
                    </small>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
