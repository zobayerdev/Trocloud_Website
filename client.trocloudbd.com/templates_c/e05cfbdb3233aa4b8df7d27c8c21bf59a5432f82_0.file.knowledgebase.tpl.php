<?php
/* Smarty version 3.1.36, created on 2024-08-04 19:12:43
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/knowledgebase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66afd2ab29c465_86175254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e05cfbdb3233aa4b8df7d27c8c21bf59a5432f82' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/knowledgebase.tpl',
      1 => 1670253050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66afd2ab29c465_86175254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/trocloudbd/client.trocloudbd.com/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="p-lg-5 p-md-5 p-3 bg-gray-light tt-rounded mb-4">
    <form role="form" method="post" action="<?php echo routePath('knowledgebase-search');?>
">
        <div class="input-group kb-search tt-kb-search">
            <div class="tt-search-field">
                <i class="far fa-search text-primary"></i>
                <input type="text" id="inputKnowledgebaseSearch" name="search" class="form-control font-weight-light" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientHomeSearchKb'),$_smarty_tpl ) );?>
" />
            </div>
            <button type="submit" id="btnKnowledgebaseSearch" class="btn btn-primary btn-input-padded-responsive">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'search'),$_smarty_tpl ) );?>

            </button>
        </div>
    </form>
</div>

<?php if ($_smarty_tpl->tpl_vars['kbcats']->value) {?>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kbcats']->value, 'category');
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
echo routePath('knowledgebase-category-view',$_prefixVariable1,$_prefixVariable2);?>
" class="card-body" data-id="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                        <span class="h6 m-0">
                            <span class="badge bg-primary-light float-right">
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['category']->value['numarticles'] != 1) {
echo "s";
}
$_prefixVariable3=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"knowledgebase.numArticle".$_prefixVariable3,'num'=>$_smarty_tpl->tpl_vars['category']->value['numarticles']),$_smarty_tpl ) );?>

                            </span>
                            <i class="far fa-folder fa-fw"></i>
                            <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>

                            <?php if ($_smarty_tpl->tpl_vars['category']->value['editLink']) {?>
                                <button class="tt-read-more show-on-card-hover" id="btnEditCategory-<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['category']->value['editLink'];?>
" type="button">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"edit"),$_smarty_tpl ) );?>

                                </button>
                            <?php }?>
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
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'knowledgebasenoarticles'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable4,'textcenter'=>true), 0, true);
}?>

<?php if ($_smarty_tpl->tpl_vars['kbmostviews']->value) {?>
    <div class="card">
        <div class="card-body">
            <h3 class="m-0 h5">
                <i class="far fa-star fa-fw"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'knowledgebasepopular'),$_smarty_tpl ) );?>

            </h3>
        </div>
        <div class="list-group list-group-flush">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kbmostviews']->value, 'kbarticle');
$_smarty_tpl->tpl_vars['kbarticle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kbarticle']->value) {
$_smarty_tpl->tpl_vars['kbarticle']->do_else = false;
?>
                <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['urlfriendlytitle'];
$_prefixVariable6 = ob_get_clean();
echo routePath('knowledgebase-article-view',$_prefixVariable5,$_prefixVariable6);?>
" class="list-group-item kb-article-item" data-id="<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];?>
">
                    <i class="fad fa-file-alt fa-fw text-black-50"></i>
                    <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>

                    <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['editLink']) {?>
                        <button class="tt-read-more show-on-card-hover" id="btnEditArticle-<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['editLink'];?>
" type="button">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"edit"),$_smarty_tpl ) );?>

                        </button>
                    <?php }?>
                    <small><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['kbarticle']->value['article'],100,"...");?>
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
