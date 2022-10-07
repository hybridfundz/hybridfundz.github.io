<?php /* Smarty version 3.1.27, created on 2022-10-06 01:49:24
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/mheader.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1091523778633e3424471d04_78719009%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02ddcced84a1e7b447d4d751a4ec3f675f464f5c' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/mheader.tpl',
      1 => 1664203828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1091523778633e3424471d04_78719009',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633e3424472459_14985800',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633e3424472459_14985800')) {
function content_633e3424472459_14985800 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1091523778633e3424471d04_78719009';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dahboard | Cloud Mining 2.0</title>
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
      <!-- header-section start  -->
  <header class="header">
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="/"><img src="assets/images/logo.png" alt="site-logo"></a>
          <ul class="account-menu mobile-acc-menu">
            <li class="?a=account"><i class="las la-user"></i></a>
            </li>
          </ul> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu m-auto">
              
   <li><a href="/?a=account">Account</a> </li>

 <li class="menu_has_children"><a href="#0">Deposit</a>
   <ul class="sub-menu"> 
   <li><a href="/?a=deposit">Deposit</a> </li>

 <li><a href="/?a=deposit_history">deposit history</a> </li>
</ul>
       </li>

    <li><a href="/?a=earnings">earnings</a> </li>


     <li><a href="/?a=referals">Referal</a> </li>
      
      
      <li class="menu_has_children"><a href="#0">Withdraw</a>
   <ul class="sub-menu">    
     <li><a href="/?a=withdraw">Withdraw</a> </li>
     <li><a href="/?a=withdraw_history">Withdraw history</a> </li>
     </ul>
       </li>
       
      <li class="menu_has_children"><a href="#0">Edit Account</a>
   <ul class="sub-menu">  
   <li><a href="/?a=edit_account">Edit Account</a> </li>                
     <li><a href="/?a=security">Security</a> </li>   
     </ul>
       </li>             
      <li><a href="/?a=logout">LOGOUT</a> </li>                
    
               
                              
    
                </ul> <div class="nav-right">
                                <ul class="account-menu ml-3">
                                    <li class="icon">
                                      <div id="ytWidget">
      </div><?php echo '<script'; ?>
 src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"><?php echo '</script'; ?>
>
        </div></li>
                                </ul>
                               
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- header__bottom end -->
        </header>
        <!-- header-section end  -->

  <?php }
}
?>