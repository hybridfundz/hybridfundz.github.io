<?php /* Smarty version 3.1.27, created on 2022-09-26 08:33:08
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/referal.links.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:876819805633163c44da538_87228840%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9fda032733a93a7d02c2ec102766fb606433070' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/referal.links.tpl',
      1 => 1664181146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '876819805633163c44da538_87228840',
  'variables' => 
  array (
    'ab_formated' => 0,
    'settings' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633163c4526088_54467026',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633163c4526088_54467026')) {
function content_633163c4526088_54467026 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '876819805633163c44da538_87228840';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Referal Links</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- dashboard section start -->
    <div class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row mb-none-30">
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Account Balance</span>
                    <h4 class="currency-amount">$<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
 </h4>

                    <a href="/?a=deposit" class="cmn-btn btn-md mt-4"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/<?php echo smarty_modifier_myescape(encurl("?ref=".((string)$_smarty_tpl->tpl_vars['user']->value['username'])));?>
</a>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-dollar-sign"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
    <!-- inner hero end -->
<h3>Referral Links.</h3><br><br>

<a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/<?php echo smarty_modifier_myescape(encurl("?ref=".((string)$_smarty_tpl->tpl_vars['user']->value['username'])));?>
">
The best internet investment<br>
Earn a XXX% daily profit!
</a>

<br><br>
<textarea class=inpts cols=60 rows=4>
<a href=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/<?php echo smarty_modifier_myescape(encurl("?ref=".((string)$_smarty_tpl->tpl_vars['user']->value['username'])));?>
>
The best internet investment<br>
Earn a XXX% daily profit!
</a>
</textarea><br><br><br>


<a href=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/<?php echo smarty_modifier_myescape(encurl("?ref=".((string)$_smarty_tpl->tpl_vars['user']->value['username'])));?>
>
<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
.<br>
Easy. Safe. No risk.
</a>

<br><br>
<textarea class=inpts cols=60 rows=4>
<a href=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/<?php echo smarty_modifier_myescape(encurl("?ref=".((string)$_smarty_tpl->tpl_vars['user']->value['username'])));?>
>
<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
.<br>
Easy. Safe. No risk.
</a>
</textarea><br><br><br>


<a href=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/<?php echo smarty_modifier_myescape(encurl("?ref=".((string)$_smarty_tpl->tpl_vars['user']->value['username'])));?>
>
XX% daily for X weeks - total XX% guaranteed
</a>
<br><br>
<textarea class=inpts cols=60 rows=4>
<a href=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/<?php echo smarty_modifier_myescape(encurl("?ref=".((string)$_smarty_tpl->tpl_vars['user']->value['username'])));?>
>
XX% daily for X weeks - total XX% guaranteed
</a>
</textarea><br><br><br>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>