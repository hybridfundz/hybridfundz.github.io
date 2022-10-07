<?php /* Smarty version 3.1.27, created on 2022-09-27 13:34:35
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/edit_account.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13930069416332fbebf32af6_23315503%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997cb875ae6dff85713f898178eff33f87a8b3c0' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/edit_account.tpl',
      1 => 1664204681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13930069416332fbebf32af6_23315503',
  'variables' => 
  array (
    'settings' => 0,
    'frm' => 0,
    'errors' => 0,
    'err' => 0,
    'userinfo' => 0,
    'countries' => 0,
    'c' => 0,
    'pay_accounts' => 0,
    'ps' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6332fbec025461_90156151',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6332fbec025461_90156151')) {
function content_6332fbec025461_90156151 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '13930069416332fbebf32af6_23315503';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Edit Account</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Private Info</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    
            <!-- how work section start -->
        <section class="pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-5.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Edit</span> <b class="base--color">Account</b> <span class="font-weight-normal">Details</span></h2>
                        </div></div>
                    </div>
                </div>
                <!-- row end -->

<section class="pb-120">             
<div class="container">               
<div class="row justify-content-center">                    
<div class="col-lg-10">                       
<div class="subscribe-wrapper bg_img" data-background="assets/images/bg/bg-5.jpg"> 
              
                   
    



<?php echo '<script'; ?>
 language=javascript>
function IsNumeric(sText) {
  var ValidChars = "0123456789.";
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

function checkform() {
  if (document.editform.fullname.value == '') {
    alert("Please type your full name!");
    document.editform.fullname.focus();
    return false;
  }

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>

  if (document.editform.address.value == '') {
    alert("Please enter your address!");
    document.editform.address.focus();
    return false;
  }
  if (document.editform.city.value == '') {
    alert("Please enter your city!");
    document.editform.city.focus();
    return false;
  }
  if (document.editform.state.value == '') {
    alert("Please enter your state!");
    document.editform.state.focus();
    return false;
  }
  if (document.editform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.editform.zip.focus();
    return false;
  }
  if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.editform.country.focus();
    return false;
  }

<?php }?>

  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.fullname.focus();
    return false;
  }

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>

  if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.editform.transaction_code2.focus();
    return false;
  }

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeemail'] == 1) {?>

  if (document.editform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.editform.email.focus();
    return false;
  }

<?php }?>


  for (i in document.editform.elements) {
    f = document.editform.elements[i];
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

  return true;
}
<?php echo '</script'; ?>
>


<h3>Your account:</h3><br><br>
<form action="" method=post onsubmit="return checkform()" name=editform>
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
<input type=hidden name=say value="">

<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'changed') {?>
Your account data has been updated successfully.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?><div class="error">Invalid turing image</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_transaction_code']) {?><div class="error">You have provided invalid Current Transaction Code</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['tfa_code']) {?><div class="error">Invalid 2FA code</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_fullname']) {?><div class="error">Please enter your full name</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['ip_exists_in_database']) {?><div class="error">Your IP already exists in our database. Sorry, but registration impossible</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_username']) {?><div class="error">Please enter valid username! It should contains English letters and digits only.</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['username_too_short']) {?><div class="error">Username should contains <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['username_too_short']);?>
 charaters at least</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['username_exists']) {?><div class="error">The Username is already taken. Please try another Username.</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['password_confirm']) {?><div class="error">Please correcty confirm your password</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['password_too_small']) {?><div class="error">The password you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['password_too_small']);?>
 characters!</div><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_email']) {?><div class="error">Please valid email address</div><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['errors']->value['email_confirm']) {?><div class="error">Please correcty confirm your email address</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['email_exists']) {?><div class="error">An account with this email is already exist</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_address']) {?><div class="error">Please enter your address</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_city']) {?><div class="error">Please enter your city</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_state']) {?><div class="error">Please enter your state</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_zip']) {?><div class="error">Please enter your zip</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_country']) {?><div class="error">Please enter your country</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_confirm']) {?><div class="error">Please correcty confirm your transaction code</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_too_small']) {?><div class="error">The transaction code you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['transaction_code_too_small']);?>
 characters!</div><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['errors']->value['transaction_code_vs_password']) {?><div class="error">The Transaction Code should not be equal to the Password you have defined</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_account_format']) {?>
 <?php
$_from = $_smarty_tpl->tpl_vars['errors']->value['invalid_account_format'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
 <div class="error"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>
</div>
 <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
<?php }?>
<?php }?>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Account Name:</td>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</td>
</tr><tr>
 <td>Registration date:</td>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['date_register']);?>
</td>
</tr><tr>
 <td>Your Full Name:</td>
 <td><input type=text name=fullname value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['fullname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['name'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']) {?>
<tr>
 <td>Your Address:</td>
 <td><input type=text name=address value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['address'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['address'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Your City:</td>
 <td><input type=text name=city value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['city'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['city'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Your State:</td>
 <td><input type=text name=state value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['state'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['state'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Your Zip:</td>
 <td><input type=text name=zip value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['zip'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['zip'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Your Country:</td>
 <td>
  <select name=country class=inpts>
<option value="">--SELECT--</option>
<?php
$_from = $_smarty_tpl->tpl_vars['countries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
<option <?php if (($_smarty_tpl->tpl_vars['frm']->value['country'] && $_smarty_tpl->tpl_vars['c']->value['name'] == $_smarty_tpl->tpl_vars['frm']->value['country']) || (!$_smarty_tpl->tpl_vars['frm']->value['country'] && $_smarty_tpl->tpl_vars['c']->value['name'] == $_smarty_tpl->tpl_vars['userinfo']->value['country'])) {?>selected<?php }?>><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</option>
<?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
  </select>
 </td>
</tr>
<?php }?>

<tr>
 <td>New Password:</td>
 <td><input type=password name=password value="" class=inpts size=30></td>
</tr><tr>
 <td>Retype Password:</td>
 <td><input type=password name=password2 value="" class=inpts size=30></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
  <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] != 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['transaction_code'] != '') {?>
    <tr>
     <td>Current Transaction Code:</td>
     <td><input type=password name=transaction_code_current value="" class=inpts size=30></td>
    </tr>
    <?php }?>
  <?php }?>
  <tr>
   <td>New Transaction Code:</td>
   <td><input type=password name=transaction_code value="" class=inpts size=30></td>
  </tr>
  <tr>
   <td>Retype Transaction Code:</td>
   <td><input type=password name=transaction_code2 value="" class=inpts size=30></td>
  </tr>
<?php }?>
<?php
$_from = $_smarty_tpl->tpl_vars['pay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
<tr>
 <td>Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
 acc no:</td>
 <td><?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc'] == 0 && $_smarty_tpl->tpl_vars['ps']->value['account'] != '') {
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));
} else { ?><input type=text class=inpts size=30 name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['pay_account'][$_smarty_tpl->tpl_vars['ps']->value['id']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ps']->value['account'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" data-validate="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
" data-validate-<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate'][$_smarty_tpl->tpl_vars['ps']->value['validate']['func']]);?>
" data-validate-notice="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['validate']['notification'], ENT_QUOTES, 'UTF-8', true));?>
"><?php }?></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
<?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
<tr>
 <td>Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
:</td>
 <td><?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc'] == 0 && $_smarty_tpl->tpl_vars['ps']->value['value'] != '') {
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));
} else { ?><input type=text class=inpts size=30 name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
][<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['pay_account'][$_smarty_tpl->tpl_vars['p']->value['id']][$_smarty_tpl->tpl_vars['ps']->value['name']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ps']->value['value'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
"><?php }?></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
<tr>
 <td>Your E-mail address:</td>
 <td><?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeemail'] == 1) {?><input type=text name=email value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['email'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['email'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30><?php } else {
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['email'], ENT_QUOTES, 'UTF-8', true));
}?></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_rcb']) {?>
<tr>
 <td>Your RCB Percent:</td>
 <td><?php if ($_smarty_tpl->tpl_vars['userinfo']->value['rcb_lock']) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['rcb']);?>
%<?php } else { ?><input type=text class=inpts size=30 name="rcb" value="<?php echo smarty_modifier_myescape(number_format((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['rcb'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['userinfo']->value['rcb'] : $tmp),2));?>
"><?php }?></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['admin_auto_pay_earning'] == 1) {?>
<tr>
 <td colspan=2><input type=checkbox name=user_auto_pay_earning value=1 <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['user_auto_pay_earning'] == 1) {?>checked<?php }?>> Receive earnings directly to e-currency account</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] == 1) {?>
<tr>
 <td>Current Transaction Code:</td>
 <td><input type=password name=transaction_code_current value="" class=inpts size=30></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['tfa_settings']['edit_account']) {?>
<tr>
 <td>2FA Code:</td>
 <td><input type="text" name="tfa_code" class=inpts size=15> <input type="hidden" name="tfa_time" id="tfa_time"></td>
</tr>

<?php echo '<script'; ?>
 language=javascript>
document.getElementById('tfa_time').value = (new Date()).getTime();
<?php echo '</script'; ?>
>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"edit_account"), 0);
?>


<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Update" class=sbmt></td>
</tr></table>
</form>
          </div></div> </div>         </section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>