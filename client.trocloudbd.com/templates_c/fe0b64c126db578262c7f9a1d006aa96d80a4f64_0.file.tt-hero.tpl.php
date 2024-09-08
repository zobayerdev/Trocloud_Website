<?php
/* Smarty version 3.1.36, created on 2024-08-03 18:49:55
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-hero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae7bd3d43331_94560424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe0b64c126db578262c7f9a1d006aa96d80a4f64' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-hero.tpl',
      1 => 1684022170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae7bd3d43331_94560424 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="bg-gradient">
    <div class="pt-60 tt-hero-two">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="tt-hero text-white">
                        <div class="tt-review-icon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/star-review-5.svg" alt="review">
                        </div>
                        <h1 class="text-white font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['homebeginTwo'];?>
</h1>
                        <p class="lead mt-3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['homebegininfo'];?>
</p>

                        <div class="tt-hero-btns">
                            <a href="#frmDomainHomepage" class="btn btn-primary mr-3 page-scroll">Get start now</a>
                            <a href="#pricingSection" class="btn btn-outline-light page-scroll">View Pricing</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tt-hero-img-wrap position-relative">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/hero-image.svg" class="hero-img" alt="support image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/tt-wp-logo.svg" class="tt-animation-icon-img" alt="wp logo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?php echo routePath('announcement-index');?>
" class="card-accent-teal d-block text-center p-4 bg-white tt-promo tt-rounded">
                        <figure class="ico-container">
                            <i class="fad fa-bullhorn"></i>
                        </figure>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'announcementstitle'),$_smarty_tpl ) );?>

                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <a href="serverstatus.php" class="card-accent-pomegranate d-block text-center p-4 bg-white tt-promo tt-rounded">
                        <figure class="ico-container">
                            <i class="fad fa-server"></i>
                        </figure>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkstatustitle'),$_smarty_tpl ) );?>

                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?php echo routePath('knowledgebase-index');?>
" class="card-accent-sun-flower d-block text-center p-4 bg-white tt-promo tt-rounded">
                        <figure class="ico-container">
                            <i class="fad fa-book"></i>
                        </figure>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'knowledgebasetitle'),$_smarty_tpl ) );?>

                    </a>
                </div>
                <div class="col-6 col-md-4 offset-md-2 offset-lg-0 col-lg">
                    <a href="<?php echo routePath('download-index');?>
" class="card-accent-asbestos d-block text-center p-4 bg-white tt-promo tt-rounded">
                        <figure class="ico-container">
                            <i class="fad fa-download"></i>
                        </figure>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'downloadstitle'),$_smarty_tpl ) );?>

                    </a>
                </div>
                <div class="col-6 offset-3 offset-md-0 col-md-4 col-lg">
                    <a href="submitticket.php" class="card-accent-green d-block text-center p-4 bg-white tt-promo tt-rounded">
                        <figure class="ico-container">
                            <i class="fad fa-life-ring"></i>
                        </figure>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'homepage.submitTicket'),$_smarty_tpl ) );?>

                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
}
