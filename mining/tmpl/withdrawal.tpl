{include file="mheader.tpl"}

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

{if $say eq 'processed'}
{if $batch eq ''}Withdrawal request has been successfully saved.{else} Withdrawal has been processed. Batch id: {$batch}{/if}

{/if}

{if $fatals}
  {if $fatal == 'times_limit' || $fatals.times_limit}
  <div class="msg">You can withdraw {$settings.limit_withdraw_period_times} per {$settings.limit_withdraw_period_date} only.</div>
  {/if}

{else}
{if $say eq 'ec_forbidden' || $errors.ec_forbidden}
Sorry, withdraw for this processing is temproary forbidden.<br><br>
{/if}
{if $say eq 'on_hold' || $errors.on_hold}
Sorry, this amount on hold now.<br><br>
{/if}
{if $say eq 'zero' || $errors.zero}
Sorry, you can't request a withdraw smaller than {$currency_sign}0.00 only<br><br>
{/if}
{if $say eq 'less_min' || $errors.less_min}
Sorry, you can request not less than {$currency_sign}{*$settings.min_withdrawal_amount*}{$fees.amount_min}<br><br>
{/if}
{if $say eq 'greater_max' || $errors.greater_max}
Sorry, you can request not greater than {$currency_sign}{*$settings.max_withdrawal_amount*}{$fees.amount_max}<br><br>
{/if}
{if $say eq 'daily_limit' || $errors.daily_limit}
Sorry, you have exceeded a daily limit<br><br>
{/if}
{if $say eq 'not_enought' || $errors.not_enought}
Sorry, you have requested the amount larger than the one on your balance.<br><br>
{/if}
{if $say eq 'invalid_transaction_code' || $errors.invalid_transaction_code}
You have entered the invalid transaction code.<br><br>
{/if}
{if $say eq 'invalid_tfa_code' || $errors.invalid_tfa_code}
You have entered invalid 2FA code.<br><br>
{/if}
{if $say eq 'no_deposits' || $errors.no_deposits}
You have not done any deposits yet. Withdrawal function will be available after a deposit.
<br><br>
{/if}
{if $say eq 'no_active_deposits' || $errors.no_active_deposits}
You must have active deposit to withdraw.
{/if}
{if $say eq 'no_account' || $errors.no_account}
Please, provide your account to withdraw funds to first <a href="{"?a=edit_account"|encurl}">here</a>.
{/if}
{if $errors.demo}
Withdraw is not available for demo account.
{/if}
{if $errors.turing_image}Invalid turing image{/if}
{if $errors.account_suspended}Account is suspended{/if}

{if $preview}

<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=withdraw>
<input type=hidden name=amount value={$amount}>
<input type=hidden name=ec value={$ec}>
<input type=hidden name=comment value="{$comment|escape:html}">

<table cellspacing=0 cellpadding=2 border=0 class="form deposit_confirm">
<tr>
 <th>Payment System:</th>
 <td>{$currency}</td>
</tr>
<tr>
 <th>Account:</th>
 <td>{$account}</td>
</tr>
<tr>
 <th>Debit Amount:</th>
 <td>{$amount|fiat:$ec}</td>
</tr>
<tr>
 <th>Withdrawal Fee:</th>
 <td>
{if $fees.fee > 0}
  {$fees.percent}% + {$fees.add_amount|fiat:$ec} (min. {$fees.fee_min|fiat:$ec} max. {if $fees.fee_max}{$fees.fee_max|fiat:$ec}{else}no{/if})
{else}
We have no fee for this operation.
{/if}
</td>
</tr>

{if $converted}
<tr>
 <th>Credit Amount:</th>
 <td>{$converted.amount|fiat:$ec}</td>
</tr>
<tr>
 <th>{$converted.fiat} Amount:</th>
 <td>{$to_withdraw}</td>
</tr>
{else}
<tr>
 <th>Credit Amount:</th>
 <td>{$to_withdraw|fiat:$ec}</td>
</tr>
{/if}

{if $comment}
<tr>
 <th>Note:</th>
 <td>{$comment|escape:html}</td>
</tr>
{/if}
{if $settings.use_transaction_code && $userinfo.transaction_code}
<tr>
 <th>Transaction Code:</th>
 <td><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
{/if}
{include file="captcha.tpl" action="withdrawal"}
{if $userinfo.tfa_settings.withdraw}
<tr>
 <th>2FA Code:</th>
 <td><input type="text" name="tfa_code" class=inpts size=15> <input type="hidden" name="tfa_time" id="tfa_time"></td>
</tr>
{literal}
<script language=javascript>
document.getElementById('tfa_time').value = (new Date()).getTime();
</script>
{/literal}
{/if}
<tr>
 <td colspan=2><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>


{else}


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
 <li> <label>Account Balance:{$currency_sign}{$ab_formated.total} </label> </li>
  <li><label>Pending Withdrawals: {$currency_sign}<b>{if $ab_formated.withdraw_pending != 0}{$ab_formated.withdraw_pending|amount_format}{/if} <label>
 </li>
  
  </div>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <th></th>
 <th>Processing</th>
 <th>Available</th>
{if $have_hold}
 <th>On Hold</th>
{/if}
 <th>Pending</th>
 <th>Account</th>
</tr>
{assign var="wfch" value=1}

                                    <div class="col-lg-6 mb-30">
                                        <label>SELECT Withdrawal Method *</label>
                                        <select class="base--bg">
 {foreach from=$ps item=p} <option>{$p.name|escape:html} - {$p.available|fiat:$p.ec}</option>{/foreach}
                      
                    </select>
 </div>
{if $have_available}
                     <div class="col-lg-6 mb-30">
<input type="text" name="amount"  value="{$frm.amount|amount_format|default:"10.00"}" class="form-control base--bg">
                                    <label>Amount</label>
                                    </div>

 <td colspan=2><input type=submit value="Request" class="cmn-btn btn-md mt-4"></td>
      </div>
</tr></table>
{else}
<br><br>
You have no funds to withdraw.
{/if}
</form>

{/if}

{/if}
       
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
              
                   
    
{literal}


<script language=javascript>
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
{/literal}

{literal}

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
</script>
{/literal}



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

{if $frm.say eq 'changed'}
Your account data has been updated successfully.<br><br>
{/if}
{if $errors}
{if $errors.invalid_account_format}
 {foreach from=$errors.invalid_account_format item=err}
 <div class="error">{$err}</div>
 {/foreach}
{/if}
{/if}
 
           
       
       

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Account Name:</td>
 <td>{$userinfo.username}</td>
</tr><tr>
 <td>Registration date:</td>
 <td>{$userinfo.name}</td>
</tr>
{if $settings.use_transaction_code}
  {if $settings.use_transaction_code_edit_account != 1}
    {if $userinfo.transaction_code != ''}
    <tr>
     <td>Current Transaction Code:</td>
     <td><input type=password name=transaction_code_current value="" class="form-control"></td>
    </tr>
    {/if}
  {/if}
  <tr>
   <td>New Transaction Code:</td>
   <td><input type=password name=transaction_code value="" class="form-control"></td>
  </tr>
  <tr>
   <td>Retype Transaction Code:</td>
   <td><input type=password name=transaction_code2 value="" class="form-control"></td>
  </tr>
{/if}
{foreach item=ps from=$pay_accounts}
<tr>
 <td>Your {$ps.name} acc no:</td>
 <td>{if $settings.usercanchangeegoldacc == 0 && $ps.account != ''}{$ps.account|escape:html}{else}<input type=text class="form-control" name="pay_account[{$ps.id}]" value="{$frm.pay_account[$ps.id]|default:$ps.account|escape:html}" data-validate="{$ps.validate.func}" data-validate-{$ps.validate.func}="{$ps.validate[$ps.validate.func]}" data-validate-notice="{$ps.validate.notification|escape:html}">{/if}</td>
</tr>
{/foreach}
{foreach item=p from=$mpay_accounts}
{foreach item=ps from=$p.accounts}
<tr>
 <td>Your {$p.name} {$ps.name}:</td>
 <td>{if $settings.usercanchangeegoldacc == 0 && $ps.value != ''}{$ps.value|escape:html}{else}<input type=text class="form-control" name="pay_account[{$p.id}][{$ps.name|escape:html}]" value="{$frm.pay_account[$p.id][$ps.name]|default:$ps.value|escape:html}">{/if}</td>
</tr>
{/foreach}
{/foreach}
{if $settings.use_rcb}
<tr>
 <td>Your RCB Percent:</td>
 <td>{if $userinfo.rcb_lock}{$userinfo.rcb}%{else}<input type=text class=inpts size=30 name="rcb" value="{$frm.rcb|default:$userinfo.rcb|number_format:2}">{/if}</td>
</tr>
{/if}
{if $userinfo.admin_auto_pay_earning == 1}
<tr>
 <td colspan=2><input type=checkbox name=user_auto_pay_earning value=1 {if $userinfo.user_auto_pay_earning == 1}checked{/if}> Receive earnings directly to e-currency account</td>
</tr>
{/if}
{if $settings.use_transaction_code_edit_account == 1}
<tr>
 <td>Current Transaction Code:</td>
 <td><input type=password name=transaction_code_current value="" class=inpts size=30></td>
</tr>
{/if}
{if $userinfo.tfa_settings.edit_account}
<tr>
 <td>2FA Code:</td>
 <td><input type="text" name="tfa_code" class=inpts size=15> <input type="hidden" name="tfa_time" id="tfa_time"></td>
</tr>
{literal}
<script language=javascript>
document.getElementById('tfa_time').value = (new Date()).getTime();
</script>
{/literal}
{/if}
{include file="captcha.tpl" action="edit_account"}

<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Update" class="cmn-btn btn-md mt-4"></td>
</tr></table>
</form>
         
                    </div>  </div></div> </div>         </section>

{include file="mfooter.tpl"}
