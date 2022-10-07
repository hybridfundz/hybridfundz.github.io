{include file="mheader.tpl"}

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
{if $settings.use_user_location == 1}
{literal}
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
{/literal}
{/if}
{literal}
  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.fullname.focus();
    return false;
  }
{/literal}
{if $settings.use_transaction_code}
{literal}
  if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.editform.transaction_code2.focus();
    return false;
  }
{/literal}
{/if}
{literal}
{/literal}
{if $settings.usercanchangeemail == 1}
{literal}
  if (document.editform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.editform.email.focus();
    return false;
  }
{/literal}
{/if}
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

<h3>Your account:</h3><br><br>
<form action="" method=post onsubmit="return checkform()" name=editform>
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
<input type=hidden name=say value="">

{if $frm.say eq 'changed'}
Your account data has been updated successfully.<br><br>
{/if}
{if $errors}
{if $errors.turing_image}<div class="error">Invalid turing image</div>{/if}
{if $errors.invalid_transaction_code}<div class="error">You have provided invalid Current Transaction Code</div>{/if}
{if $errors.tfa_code}<div class="error">Invalid 2FA code</div>{/if}
{if $errors.no_fullname}<div class="error">Please enter your full name</div>{/if}
{if $errors.ip_exists_in_database}<div class="error">Your IP already exists in our database. Sorry, but registration impossible</div>{/if}
{if $errors.invalid_username}<div class="error">Please enter valid username! It should contains English letters and digits only.</div>{/if}
{if $errors.username_too_short}<div class="error">Username should contains {$errors.username_too_short} charaters at least</div>{/if}
{if $errors.username_exists}<div class="error">The Username is already taken. Please try another Username.</div>{/if}
{if $errors.password_confirm}<div class="error">Please correcty confirm your password</div>{/if}
{if $errors.password_too_small}<div class="error">The password you provided is too small, please enter at least {$errors.password_too_small} characters!</div>{/if} 
{if $errors.invalid_email}<div class="error">Please valid email address</div>{/if} 
{if $errors.email_confirm}<div class="error">Please correcty confirm your email address</div>{/if}
{if $errors.email_exists}<div class="error">An account with this email is already exist</div>{/if}
{if $errors.no_address}<div class="error">Please enter your address</div>{/if}
{if $errors.no_city}<div class="error">Please enter your city</div>{/if}
{if $errors.no_state}<div class="error">Please enter your state</div>{/if}
{if $errors.no_zip}<div class="error">Please enter your zip</div>{/if}
{if $errors.no_country}<div class="error">Please enter your country</div>{/if}
{if $errors.transaction_code_confirm}<div class="error">Please correcty confirm your transaction code</div>{/if}
{if $errors.transaction_code_too_small}<div class="error">The transaction code you provided is too small, please enter at least {$errors.transaction_code_too_small} characters!</div>{/if} 
{if $errors.transaction_code_vs_password}<div class="error">The Transaction Code should not be equal to the Password you have defined</div>{/if}
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
 <td>{$userinfo.date_register}</td>
</tr><tr>
 <td>Your Full Name:</td>
 <td><input type=text name=fullname value="{$frm.fullname|default:$userinfo.name|escape:html}" class=inpts size=30>
</tr>
{if $settings.use_user_location}
<tr>
 <td>Your Address:</td>
 <td><input type=text name=address value="{$frm.address|default:$userinfo.address|escape:html}" class=inpts size=30></td>
</tr>
<tr>
 <td>Your City:</td>
 <td><input type=text name=city value="{$frm.city|default:$userinfo.city|escape:html}" class=inpts size=30></td>
</tr>
<tr>
 <td>Your State:</td>
 <td><input type=text name=state value="{$frm.state|default:$userinfo.state|escape:html}" class=inpts size=30></td>
</tr>
<tr>
 <td>Your Zip:</td>
 <td><input type=text name=zip value="{$frm.zip|default:$userinfo.zip|escape:html}" class=inpts size=30></td>
</tr>
<tr>
 <td>Your Country:</td>
 <td>
  <select name=country class=inpts>
<option value="">--SELECT--</option>
{foreach from=$countries item=c}
<option {if ($frm.country && $c.name == $frm.country) || (!$frm.country && $c.name == $userinfo.country)}selected{/if}>{$c.name|escape:html}</option>
{/foreach}
  </select>
 </td>
</tr>
{/if}

<tr>
 <td>New Password:</td>
 <td><input type=password name=password value="" class=inpts size=30></td>
</tr><tr>
 <td>Retype Password:</td>
 <td><input type=password name=password2 value="" class=inpts size=30></td>
</tr>
{if $settings.use_transaction_code}
  {if $settings.use_transaction_code_edit_account != 1}
    {if $userinfo.transaction_code != ''}
    <tr>
     <td>Current Transaction Code:</td>
     <td><input type=password name=transaction_code_current value="" class=inpts size=30></td>
    </tr>
    {/if}
  {/if}
  <tr>
   <td>New Transaction Code:</td>
   <td><input type=password name=transaction_code value="" class=inpts size=30></td>
  </tr>
  <tr>
   <td>Retype Transaction Code:</td>
   <td><input type=password name=transaction_code2 value="" class=inpts size=30></td>
  </tr>
{/if}
{foreach item=ps from=$pay_accounts}
<tr>
 <td>Your {$ps.name} acc no:</td>
 <td>{if $settings.usercanchangeegoldacc == 0 && $ps.account != ''}{$ps.account|escape:html}{else}<input type=text class=inpts size=30 name="pay_account[{$ps.id}]" value="{$frm.pay_account[$ps.id]|default:$ps.account|escape:html}" data-validate="{$ps.validate.func}" data-validate-{$ps.validate.func}="{$ps.validate[$ps.validate.func]}" data-validate-notice="{$ps.validate.notification|escape:html}">{/if}</td>
</tr>
{/foreach}
{foreach item=p from=$mpay_accounts}
{foreach item=ps from=$p.accounts}
<tr>
 <td>Your {$p.name} {$ps.name}:</td>
 <td>{if $settings.usercanchangeegoldacc == 0 && $ps.value != ''}{$ps.value|escape:html}{else}<input type=text class=inpts size=30 name="pay_account[{$p.id}][{$ps.name|escape:html}]" value="{$frm.pay_account[$p.id][$ps.name]|default:$ps.value|escape:html}">{/if}</td>
</tr>
{/foreach}
{/foreach}
<tr>
 <td>Your E-mail address:</td>
 <td>{if $settings.usercanchangeemail == 1}<input type=text name=email value="{$frm.email|default:$userinfo.email|escape:html}" class=inpts size=30>{else}{$userinfo.email|escape:html}{/if}</td>
</tr>
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
 <td><input type=submit value="Update" class=sbmt></td>
</tr></table>
</form>
          </div></div> </div>         </section>
{include file="mfooter.tpl"}