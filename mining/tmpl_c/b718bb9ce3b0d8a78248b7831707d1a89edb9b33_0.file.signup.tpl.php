<?php /* Smarty version 3.1.27, created on 2022-10-07 00:06:19
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1304903279633f6d7b567ef2_79922161%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b718bb9ce3b0d8a78248b7831707d1a89edb9b33' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/signup.tpl',
      1 => 1664187454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1304903279633f6d7b567ef2_79922161',
  'variables' => 
  array (
    'deny_registration' => 0,
    'settings' => 0,
    'referer' => 0,
    'errors' => 0,
    'account_errors' => 0,
    'err' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633f6d7b59c327_45641020',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633f6d7b59c327_45641020')) {
function content_633f6d7b59c327_45641020 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1304903279633f6d7b567ef2_79922161';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
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
                <h2 class="section-title">Welcome to <span class="base--color"> Hybridminers</span></h2>
                <p>Invest for Future in Stable Platform</p>
                 

                 <h2 class="page-title">REGISTER</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li> 
              </div>
              
              
<?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
 We are closed for new registrations now.
<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
 You  do not have a upline. Our system require a upline for each user.
<?php } else { ?>
 

 <?php echo '<script'; ?>
 language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>
 
  if (document.regform.address.value == '') {
    alert("Please enter your address!");
    document.regform.address.focus();
    return false;
  }
  if (document.regform.city.value == '') {
    alert("Please enter your city!");
    document.regform.city.focus();
    return false;
  }
  if (document.regform.state.value == '') {
    alert("Please enter your state!");
    document.regform.state.focus();
    return false;
  }
  if (document.regform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.regform.zip.focus();
    return false;
  }
  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.regform.country.focus();
    return false;
  }
 
 <?php }?>
 
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
 
  if (document.regform.transaction_code.value == '') {
    alert("Please enter your transaction code!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.regform.transaction_code2.focus();
    return false;
  }
 
 <?php }?>
 
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 <?php echo '</script'; ?>
>
 
 
 <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
  <ul style="color:red">
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'full_name') {?>
    <li>Please enter your full name!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'address') {?>
    <li>Please enter your address!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'city') {?>
    <li>Please enter your city!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'state') {?>
    <li>Please enter your state!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'zip') {?>
    <li>Please enter your zip!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'country') {?>
    <li>Please choose your country!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username') {?>
    <li>Please enter valid username! It should contains English letters and digits only.
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username_exists') {?>
    <li>Sorry, such user already exists! Please try another username. 
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email_exists') {?>
    <li>Sorry, such email already exists! Please try another email. 
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?> 
    <li>Please enter a password!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?>
    <li>Please check your password!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
    <li>The password you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?> 
    <li>Please enter the Transaction Code!
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?> 
    <li>Please check your Transaction Code!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
    <li>The Transaction Code you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?> 
    <li>The Transaction Code should differ from the Password!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?> 
    <li>Please enter your e-mail!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email2') {?> 
    <li>Please check your email!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'agree') {?>
    <li>You have to agree with the Terms and Conditions!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
    <li>Enter the verification code as it is shown in the corresponding box.
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'no_upline') {?>
    <li>The system requires an upline to register. <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>You have to be agreed to random one or found a referral link in the net.<?php }?>
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'ip_exists_in_database') {?>
    <li>Your IP already exists in our database. Sorry, but registration impossible.
   <?php }?>

   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_account_format') {?>
    <?php
$_from = $_smarty_tpl->tpl_vars['account_errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
    <li><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>

    <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
   <?php }?>

   <br> 
  <?php endfor; endif; ?>
  </ul>
 <?php }?> 
<form method=post onsubmit="return checkform()" name="regform">
<input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">
              <div class="account-card__body">
                <h3 class="text-center">Create an Account</h2>
                <form class="mt-4">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter full name" name=fullname value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['fullname'], ENT_QUOTES, 'UTF-8', true));?>
">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Enter username" name=username value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
">
                  </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter email address" name=email value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true));?>
">
                  </div>
                  <div class="form-group">
                    <label>Repeat Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter email address" name=email1 class=inpts  value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email1'], ENT_QUOTES, 'UTF-8', true));?>
">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter password" name=password class=inpts  value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['password'], ENT_QUOTES, 'UTF-8', true));?>
">
                  </div>
                  <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" class="form-control" placeholder="Repeat password" name=password2 class=inpts  value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['password2'], ENT_QUOTES, 'UTF-8', true));?>
">
                  </div>
                  <div class="form-row">
                    <div class="col-sm-6">
                      <div class="form-group form-check">
                        <input type=checkbox name=agree value=1 <?php if ($_smarty_tpl->tpl_vars['frm']->value['agree']) {?>checked<?php }?>>
                        <label class="form-check-label">I agree with <a href="<?php echo smarty_modifier_myescape(encurl("?a=rules"));?>
">Terms and conditions</a></label>
                      </div>
                    </div>
                    
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program']) {?>
<?php if ($_smarty_tpl->tpl_vars['referer']->value) {?>
<tr>
 <td>Your Upline:</td>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referer']->value['name']);?>
 (<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['referer']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
)</td>
</tr>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['force_upline']) {?>
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
  <tr>
   <td colspan=2>
    You do not have an upline. Our system requires an upline for each user. You'll have to agree to get a random one or find a referral link on the net.
    <input type=checkbox name="rand_ref" value=1>
   </td>
  </tr>
 <?php } else { ?>
  <tr>
   <td colspan=2>
    You do not have an upline. Our system requires an upline for each user.
   </td>
  </tr>
 <?php }?>
<?php }?>
<?php }?>
<?php }?>
                    <div class="col-sm-6 text-sm-right">
                      <p class="f-size-14">Have an account? <a href="?a=login" class="base--color">Login</a></p>
                    </div>
                  </div>
                  <div class="mt-3">
                    <button class="cmn-btn" type=submit value="Register">Register</button>
                  </div>
                </form>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- account section end -->

  </div> 
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