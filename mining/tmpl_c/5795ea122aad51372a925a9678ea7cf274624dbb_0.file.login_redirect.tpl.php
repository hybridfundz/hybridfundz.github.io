<?php /* Smarty version 3.1.27, created on 2022-10-06 01:48:57
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1632149102633e3409ccd519_66656280%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5795ea122aad51372a925a9678ea7cf274624dbb' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/login_redirect.tpl',
      1 => 1664163335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1632149102633e3409ccd519_66656280',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633e3409cd2903_06361975',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633e3409cd2903_06361975')) {
function content_633e3409cd2903_06361975 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1632149102633e3409ccd519_66656280';
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    
    
<META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
">
    

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Hybridminers</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/css/vendor/dots.css">
  <!-- dashdoard main css -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>
  <body>
    <div class="preloader">
      <div class="preloader-container">
        <span class="animated-preloader"></span>
      </div>
    </div>
  
    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

  <div class="full-wh">
    <!-- STAR ANIMATION -->
    <div class="bg-animation">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='stars4'></div>
    </div><!-- / STAR ANIMATION -->
  </div>
  <div class="page-wrapper">

    <!-- account section start -->
    <div class="account-section bg_img" data-background="assets/images/bg/bg-5.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-7">
            <div class="account-card">
              <div class="account-card__header bg_img overlay--one" data-background="assets/images/bg/bg-6.jpg">
                <h2 class="section-title">LOADING <span class="base--color">DASHBOARD</span></h2>
                <p>Invest for Future in Stable Platform</p>
                 <h2 class="page-title"></h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
              </div>
    


<div class="account-card__body">

<center>
Hello <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
. You are redirecting to your 
<a href=?a=account>account</a> now.
</center>
</div>
          </div>
        </div>
        
      </div>
    </div>
    <!-- account section end -->

  </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
  <?php echo '<script'; ?>
 src="assets/js/vendor/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
  <!-- bootstrap js -->
  <?php echo '<script'; ?>
 src="assets/js/vendor/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <!-- slick slider js -->
  <?php echo '<script'; ?>
 src="assets/js/vendor/slick.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="assets/js/vendor/wow.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="assets/js/contact.js"><?php echo '</script'; ?>
>
  <!-- dashboard custom js -->
  <?php echo '<script'; ?>
 src="assets/js/app.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
?>