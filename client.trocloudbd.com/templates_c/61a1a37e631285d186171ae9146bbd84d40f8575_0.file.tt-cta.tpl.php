<?php
/* Smarty version 3.1.36, created on 2024-08-03 18:49:55
  from '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-cta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66ae7bd3dd0154_62290696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61a1a37e631285d186171ae9146bbd84d40f8575' => 
    array (
      0 => '/home/trocloudbd/client.trocloudbd.com/templates/hostim/includes/tt/hostim/tt-cta.tpl',
      1 => 1672509728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae7bd3dd0154_62290696 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="bg-white">
    <div class="container">
        <div class="row justify-content-lg-between align-items-end">
            <div class="col-lg-6">
                <div class="tt-cta-content ptb-60">
                    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ctatitle'];?>
</h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ctainfo'];?>
</p>

                    <ul class="tt-support-list list-unstyled mb-0">
                        <li class="list-inline-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/supporttickets.php" class="d-block tt-support-item tt-rounded bg-primary-light">
                                <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icon-support-1.svg" class="img-fluid mx-auto" alt="support image">
                                <span>Support Ticket</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="tel:+1-202-555-0173" class="d-block tt-support-item tt-rounded bg-danger-light">
                                <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icon-support-2.svg" class="img-fluid mx-auto" alt="support image">
                                <span>Call Us Now</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/contact.php" class="d-block tt-support-item tt-rounded bg-success-light">
                                <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/icon-support-3.svg" class="img-fluid mx-auto" alt="support image">
                                <span>Email Support</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/cta-img.png" class="tt-cta-img img-fluid" alt="support image">
            </div>
        </div>
    </div>
</section>
<?php }
}
