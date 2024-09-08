<?php
/* Smarty version 3.1.36, created on 2024-08-03 18:49:55
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae7bd3eb86b4_20981162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9593ed92dca16d8eb883859413057281cdc8ebb4' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-announcements.tpl',
      1 => 1669485486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae7bd3eb86b4_20981162 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['twitterusername']->value) {?>

    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['twitterlatesttweets'];?>
</h2>

    <div id="twitterFeedOutput">
        <p class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/loading.gif" /></p>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'twitter.js'),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>

<?php } elseif ($_smarty_tpl->tpl_vars['announcements']->value) {?>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="section-heading mb-4">
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ourlatestnews'];?>
</h2>
                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['announcementsdescription'];?>
</p>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->index = -1;
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
$_smarty_tpl->tpl_vars['announcement']->index++;
$__foreach_announcement_11_saved = $_smarty_tpl->tpl_vars['announcement'];
?>
            <?php if ($_smarty_tpl->tpl_vars['announcement']->index < 3) {?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tt-announcement-single tt-rounded">
                        <div class="tt-article-heading">
                            <h3>
                                <a href="<?php echo routePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</a>
                            </h3>
                            <div class="tt-date mb-3 text-muted">
                                <i class="fad fa-calendar-alt"></i>
                                <?php echo $_smarty_tpl->tpl_vars['carbon']->value->translatePassedToFormat($_smarty_tpl->tpl_vars['announcement']->value['rawDate'],'jS M Y');?>

                            </div>
                        </div>
                        <p>
                            <?php if (strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text'])) < 250) {?>
                                <?php echo $_smarty_tpl->tpl_vars['announcement']->value['text'];?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['announcement']->value['summary'];?>
</br>
                            <?php }?>
                        </p>
                        <hr>
                        <a href="<?php echo routePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" class="tt-read-more"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['readmore'];?>
 <i class="fad fa-arrow-right"></i></a>

                        <?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
                            <?php echo '<script'; ?>
>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) {
                                        return;
                                    }
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            <?php echo '</script'; ?>
>
                            <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                            <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['announcement'] = $__foreach_announcement_11_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
