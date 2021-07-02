<?php /* Smarty version 3.1.27, created on 2021-06-28 11:28:21
         compiled from "/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:163702526460d9b2552fb836_98448548%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c94e42563b955e5599c2bb584b9d40ff3bb0877' => 
    array (
      0 => '/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/header.tpl',
      1 => 1609542521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163702526460d9b2552fb836_98448548',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60d9b255307d38_65531446',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60d9b255307d38_65531446')) {
function content_60d9b255307d38_65531446 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '163702526460d9b2552fb836_98448548';
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="google-site-verification" content="RyUdXUPCHphxqbMZXQ3jkvxCYpw0UwTsTQwmeTNwXrc" />
<link rel="shortcut icon" href="styles/images/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
<!-- font-family: 'Titillium Web', sans-serif; -->
<link href='styles/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='styles/animate.css' rel='stylesheet' type='text/css'>
<link href='styles/custom.css' rel='stylesheet' type='text/css'>
<?php echo '<script'; ?>
 src='styles/jquery.js' type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/wow.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/wow.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="styles/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/setting2.js" type='text/javascript'><?php echo '</script'; ?>
>

</head>
<body>
<!-- wrapper -->
<div class="wrapper">
  <div class="headerTopContainer">
    <div class="headerTopInner zoomIn wow">
      <div class="hdTop-row1">

        <p><img src="styles/images/hd-top3.png">E-mail: <span>support@crypto-scoot.com</span></p>
      </div>
      <div class="hdTop-row2">
          <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>   
	  <a href="?a=login" class="login">login</a> 
	  <a href="?a=signup" class="signup">signup</a>
	  	 <?php } else { ?>
	  	 
	  	   <a href="?a=account" class="login">dashboard</a> 
	  <a href="?a=logout" class="signup">logout</a>
	  	 <?php }?>
	  	  </div>
    </div>
  </div>
  <div class="headerContainer">
    <div class="headerInner fadeInLeft wow"> <a href="?a=home"><img src="images/logo1.png" width=266px></a>
      <div class="hdRight">
        <div class="mainNavRight">
          <div class="navbar">
            <div class="navbar-inner">
              <ul class="nav icon_style">
                <li><a href="?a=home">Home</a></li>
                <li><a href="?a=cust&page=about">About us</a></li>
                <li><a href="?a=cust&page=howto">Get Started</a></li>
                <li><a href="?a=faq">Faq</a></li>
                <li><a href="?a=cust&page=rating">Rate us</a></li>
                <li><a href="?a=support">Contact us </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }
}
?>