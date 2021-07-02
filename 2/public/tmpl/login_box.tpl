{if $userinfo.logged != 1}
{literal}
<script language=javascript>
function checklogin() {   
  if (document.loginform.username.value=='') {
    alert("Please enter your username!");
    document.loginform.username.focus();
    return false;
  }
  if (document.loginform.password.value=='') {
    alert("Please enter your password!");
    document.loginform.password.focus();
    return false;
  }
  return true;
}
</script>
{/literal}
<form method=post name=loginform onsubmit="return checklogin()">
<input type=hidden name=a value='do_login'>
<table cellspacing=0 cellpadding=2 border=0 width="100%">
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
 <th colspan=2 class=title>Member login</th>
 </tr>
<tr>
 <td class=menutxt>Username:</td>
 <td><input type=text name=username class=inpts size=15></td>
</tr>
<tr>
 <td class=menutxt>Password:</td>
 <td><input type=password name=password class=inpts size=15></td>
</tr>
{if $userinfo.validation_enabled == 1}
<tr>
 <td class=menutxt><img src="?a=show_validation_image&{$userinfo.session_name}={$userinfo.session_id}&rand={$userinfo.rand}"></td>
 <td><input type=text name=validation_number class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td class=menutxt>&nbsp;</td>
 <td><input type=submit value="Login" class=sbmt size=15></td>
</tr>
<tr>
 <td colspan=2 align=right><a href=?a=forgot_password class=menutxt>Password recovery</a>
</table>
</form>

{else}

<table cellspacing=0 cellpadding=2 border=0 width="100%">
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
 <th colspan=2 class=title>Navigation</th>
</tr><tr>
 <td class=menutxt><a href=? class=menutxt>Home</a></td>
</tr><tr>
 <td class=menutxt><br><a href=?a=account class=menutxt>Account</a></td>
</tr><tr>
 <td class=menutxt><br><a href=?a=deposit class=menutxt>Make Deposit</a></td>
</tr><tr>
{if $settings.use_add_funds}
 <td class=menutxt><a href=?a=add_funds class=menutxt>Make Deposit to Account</a></td>
</tr><tr>
{/if}
 <td class=menutxt><a href=?a=deposit_list class=menutxt>Your Deposits</a></td>
</tr><tr>
 <td class=menutxt><a href=?a=deposit_history class=menutxt>Deposits History</a></td>
</tr><tr>
 <td class=menutxt><br><a href=?a=earnings class=menutxt>Earnings History</a></td>
</tr>{if $settings.use_referal_program == 1}<tr>
 <td class=menutxt><a href=?a=earnings&type=commissions class=menutxt>Referrals History</a></td>
</tr>{/if}
<tr>
 <td class=menutxt><br><a href=?a=withdraw class=menutxt>Withdraw</a></td>
</tr><tr>
 <td class=menutxt><a href=?a=withdraw_history class=menutxt>Withdrawals History</a></td>
</tr><tr>
 <td class=menutxt><br><a href=?a=exchange class=menutxt>Currency Exchange</a></td>
{if $settings.internal_transfer_enabled}
</tr><tr>
 <td class=menutxt><br><a href=?a=internal_transfer class=menutxt>Internal Transfer</a></td>
{/if}
</tr><tr>
</tr>{if $settings.use_referal_program == 1}<tr>
 <td class=menutxt><br><a href=?a=referals class=menutxt>Your Referrals</a></td>
</tr><tr>
 <td class=menutxt><a href=?a=referallinks class=menutxt>Referral Links</a></td>
</tr>{/if}<tr>
 <td class=menutxt><br><a href=?a=edit_account class=menutxt>Edit Account</a></td>
</tr><tr>
 <td class=menutxt><br><a href=?a=logout class=menutxt>Logout</a></td>
</tr>
</table>


{/if}