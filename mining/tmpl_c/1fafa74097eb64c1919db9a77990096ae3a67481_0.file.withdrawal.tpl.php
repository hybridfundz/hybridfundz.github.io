<?php /* Smarty version 3.1.27, created on 2022-09-28 00:23:50
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/withdrawal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:116875504563339416acc254_64023524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fafa74097eb64c1919db9a77990096ae3a67481' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/withdrawal.tpl',
      1 => 1664324613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116875504563339416acc254_64023524',
  'variables' => 
  array (
    'say' => 0,
    'batch' => 0,
    'fatals' => 0,
    'fatal' => 0,
    'settings' => 0,
    'errors' => 0,
    'currency_sign' => 0,
    'fees' => 0,
    'preview' => 0,
    'amount' => 0,
    'ec' => 0,
    'comment' => 0,
    'currency' => 0,
    'account' => 0,
    'converted' => 0,
    'to_withdraw' => 0,
    'userinfo' => 0,
    'ab_formated' => 0,
    'have_hold' => 0,
    'ps' => 0,
    'p' => 0,
    'have_available' => 0,
    'frm' => 0,
    'err' => 0,
    'pay_accounts' => 0,
    'mpay_accounts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63339416b002d6_52179733',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63339416b002d6_52179733')) {
function content_63339416b002d6_52179733 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '116875504563339416acc254_64023524';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Withdrawal </h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>History</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

<h2 class="section-title"><span class="font-weight-normal"></span> <b class="base--color"></b></h2>                 

<?php if ($_smarty_tpl->tpl_vars['say']->value == 'processed') {?>
<?php if ($_smarty_tpl->tpl_vars['batch']->value == '') {?>Withdrawal request has been successfully saved.<?php } else { ?> Withdrawal has been processed. Batch id: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['batch']->value);
}?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['fatals']->value) {?>
  <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'times_limit' || $_smarty_tpl->tpl_vars['fatals']->value['times_limit']) {?>
  <div class="msg">You can withdraw <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['limit_withdraw_period_times']);?>
 per <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['limit_withdraw_period_date']);?>
 only.</div>
  <?php }?>

<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'ec_forbidden' || $_smarty_tpl->tpl_vars['errors']->value['ec_forbidden']) {?>
Sorry, withdraw for this processing is temproary forbidden.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'on_hold' || $_smarty_tpl->tpl_vars['errors']->value['on_hold']) {?>
Sorry, this amount on hold now.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'zero' || $_smarty_tpl->tpl_vars['errors']->value['zero']) {?>
Sorry, you can't request a withdraw smaller than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
0.00 only<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'less_min' || $_smarty_tpl->tpl_vars['errors']->value['less_min']) {?>
Sorry, you can request not less than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['amount_min']);?>
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'greater_max' || $_smarty_tpl->tpl_vars['errors']->value['greater_max']) {?>
Sorry, you can request not greater than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['amount_max']);?>
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'daily_limit' || $_smarty_tpl->tpl_vars['errors']->value['daily_limit']) {?>
Sorry, you have exceeded a daily limit<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'not_enought' || $_smarty_tpl->tpl_vars['errors']->value['not_enought']) {?>
Sorry, you have requested the amount larger than the one on your balance.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_transaction_code' || $_smarty_tpl->tpl_vars['errors']->value['invalid_transaction_code']) {?>
You have entered the invalid transaction code.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_tfa_code' || $_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_code']) {?>
You have entered invalid 2FA code.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_deposits' || $_smarty_tpl->tpl_vars['errors']->value['no_deposits']) {?>
You have not done any deposits yet. Withdrawal function will be available after a deposit.
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_active_deposits' || $_smarty_tpl->tpl_vars['errors']->value['no_active_deposits']) {?>
You must have active deposit to withdraw.
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_account' || $_smarty_tpl->tpl_vars['errors']->value['no_account']) {?>
Please, provide your account to withdraw funds to first <a href="<?php echo smarty_modifier_myescape(encurl("?a=edit_account"));?>
">here</a>.
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['demo']) {?>
Withdraw is not available for demo account.
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?>Invalid turing image<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['account_suspended']) {?>Account is suspended<?php }?>

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>

<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=withdraw>
<input type=hidden name=amount value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>
>
<input type=hidden name=ec value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ec']->value);?>
>
<input type=hidden name=comment value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true));?>
">

<table cellspacing=0 cellpadding=2 border=0 class="form deposit_confirm">
<tr>
 <th>Payment System:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency']->value);?>
</td>
</tr>
<tr>
 <th>Account:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['account']->value);?>
</td>
</tr>
<tr>
 <th>Debit Amount:</th>
 <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['amount']->value,$_smarty_tpl->tpl_vars['ec']->value));?>
</td>
</tr>
<tr>
 <th>Withdrawal Fee:</th>
 <td>
<?php if ($_smarty_tpl->tpl_vars['fees']->value['fee'] > 0) {?>
  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fees']->value['percent']);?>
% + <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['fees']->value['add_amount'],$_smarty_tpl->tpl_vars['ec']->value));?>
 (min. <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['fees']->value['fee_min'],$_smarty_tpl->tpl_vars['ec']->value));?>
 max. <?php if ($_smarty_tpl->tpl_vars['fees']->value['fee_max']) {
echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['fees']->value['fee_max'],$_smarty_tpl->tpl_vars['ec']->value));
} else { ?>no<?php }?>)
<?php } else { ?>
We have no fee for this operation.
<?php }?>
</td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['converted']->value) {?>
<tr>
 <th>Credit Amount:</th>
 <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['converted']->value['amount'],$_smarty_tpl->tpl_vars['ec']->value));?>
</td>
</tr>
<tr>
 <th><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['converted']->value['fiat']);?>
 Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['to_withdraw']->value);?>
</td>
</tr>
<?php } else { ?>
<tr>
 <th>Credit Amount:</th>
 <td><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['to_withdraw']->value,$_smarty_tpl->tpl_vars['ec']->value));?>
</td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['comment']->value) {?>
<tr>
 <th>Note:</th>
 <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true));?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code'] && $_smarty_tpl->tpl_vars['userinfo']->value['transaction_code']) {?>
<tr>
 <th>Transaction Code:</th>
 <td><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"withdrawal"), 0);
?>

<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['tfa_settings']['withdraw']) {?>
<tr>
 <th>2FA Code:</th>
 <td><input type="text" name="tfa_code" class=inpts size=15> <input type="hidden" name="tfa_time" id="tfa_time"></td>
</tr>

<?php echo '<script'; ?>
 language=javascript>
document.getElementById('tfa_time').value = (new Date()).getTime();
<?php echo '</script'; ?>
>

<?php }?>
<tr>
 <td colspan=2><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>


<?php } else { ?>


<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=preview>
<input type=hidden name=say value="">

<div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="profit-calculator-wrapper">
                            <form class="profit-calculator">
                                <div class="row mb-none-30">
 <div class="col-lg-6 mb-30">
 <li> <label>Account Balance:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
 </label> </li>
  <li><label>Pending Withdrawals: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php if ($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending'] != 0) {
echo smarty_modifier_myescape(amount_smarty_format($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']));
}?> <label>
 </li>
  
  </div>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <th></th>
 <th>Processing</th>
 <th>Available</th>
<?php if ($_smarty_tpl->tpl_vars['have_hold']->value) {?>
 <th>On Hold</th>
<?php }?>
 <th>Pending</th>
 <th>Account</th>
</tr>
<?php $_smarty_tpl->tpl_vars["wfch"] = new Smarty_Variable(1, null, 0);?>

                                    <div class="col-lg-6 mb-30">
                                        <label>SELECT Withdrawal Method *</label>
                                        <select class="base--bg">
 <?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <option><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
 - <?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['available'],$_smarty_tpl->tpl_vars['p']->value['ec']));?>
</option><?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
                      
                    </select>
 </div>
<?php if ($_smarty_tpl->tpl_vars['have_available']->value) {?>
                     <div class="col-lg-6 mb-30">
<input type="text" name="amount"  value="<?php echo smarty_modifier_myescape((($tmp = @amount_smarty_format($_smarty_tpl->tpl_vars['frm']->value['amount']))===null||$tmp==='' ? "10.00" : $tmp));?>
" class="form-control base--bg">
                                    <label>Amount</label>
                                    </div>

 <td colspan=2><input type=submit value="Request" class="cmn-btn btn-md mt-4"></td>
      </div>
</tr></table>
<?php } else { ?>
<br><br>
You have no funds to withdraw.
<?php }?>
</form>

<?php }?>

<?php }?>
       
                        </div>
                        <!-- subscribe-wrapper end -->
                    </div>
                </div>
            </div>
        </section>


<h2 class="section-title"><span class="font-weight-normal"></span> <b class="base--color"></b></h2>         
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




       <!-- package section start -->
 <section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title"><span class="font-weight-normal">Wallet </span>-  <b class="base--color">Update </b></h2>
                    </div>
            </div>
        </div>
        <!-- row end -->
<h3>Your account:</h3><br><br>
<form action="" method=post onsubmit="return checkform()" name=editform>
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
<input type=hidden name=say value="">

<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'changed') {?>
Your account data has been updated successfully.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
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
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['name']);?>
</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
  <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] != 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['transaction_code'] != '') {?>
    <tr>
     <td>Current Transaction Code:</td>
     <td><input type=password name=transaction_code_current value="" class="form-control"></td>
    </tr>
    <?php }?>
  <?php }?>
  <tr>
   <td>New Transaction Code:</td>
   <td><input type=password name=transaction_code value="" class="form-control"></td>
  </tr>
  <tr>
   <td>Retype Transaction Code:</td>
   <td><input type=password name=transaction_code2 value="" class="form-control"></td>
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
} else { ?><input type=text class="form-control" name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
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
} else { ?><input type=text class="form-control" name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
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
 <td><input type=submit value="Update" class="cmn-btn btn-md mt-4"></td>
</tr></table>
</form>
         
                    </div>  </div></div> </div>         </section>

<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>