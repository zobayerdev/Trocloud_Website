<?php
/* Smarty version 3.1.36, created on 2024-08-04 19:12:35
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66afd2a3797f67_86829610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54a4e1b2cf85a944b8d561d22192419d813ae90' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/announcements.tpl',
      1 => 1670265086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66afd2a3797f67_86829610 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"announcementstitle"),$_smarty_tpl ) );?>
</h2>

<div class="announcements tt-news-wrap bg-white rounded mb-3">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
        <div class="announcement tt-news-single p-4">
            <h2 class="h6">
                <a href="<?php echo routePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
">
                    <?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>

                </a>
                <?php if ($_smarty_tpl->tpl_vars['announcement']->value['editLink']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['editLink'];?>
" class="tt-read-more text-muted">
                        <i class="fad fa-pencil-alt fa-fw"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'edit'),$_smarty_tpl ) );?>

                    </a>
                <?php }?>
            </h2>

            <ul class="list-inline">
                <li class="list-inline-item text-muted pr-3">
                    <i class="fad fa-calendar-alt fa-fw"></i>
                    <?php echo $_smarty_tpl->tpl_vars['carbon']->value->createFromTimestamp($_smarty_tpl->tpl_vars['announcement']->value['timestamp'])->format('jS F Y');?>

                </li>
            </ul>

            <article>
                <?php if (strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text'])) < 350) {?>
                    <?php echo $_smarty_tpl->tpl_vars['announcement']->value['text'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['announcement']->value['summary'];?>

                <?php }?>
            </article>

            <a href="<?php echo routePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" class="tt-read-more">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"announcementscontinue"),$_smarty_tpl ) );?>

                <i class="fad fa-arrow-right"></i>
            </a>
        </div>
        <?php
}
if ($_smarty_tpl->tpl_vars['announcement']->do_else) {
?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noannouncements'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable1,'textcenter'=>false), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['prevpage']->value || $_smarty_tpl->tpl_vars['nextpage']->value) {?>
    <nav aria-label="Announcements navigation">
        <ul class="pagination">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <li class="page-item<?php if ($_smarty_tpl->tpl_vars['item']->value['disabled']) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['item']->value['active']) {?> active<?php }?>">
                    <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </nav>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
    <?php echo '<script'; ?>
>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'locale'),$_smarty_tpl ) );?>
/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    <?php echo '</script'; ?>
>
<?php }
}
}
