{include file="header.tpl"}

{literal}
<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>
{/literal}

{if $frm.say eq 'invalid_login'}
<h3>Login error:</h3><br><br>

Your login or password or turing image code is wrong. Please check this information.
{/if}
<h3>Login:</h3>
<br>
<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value='do_login'>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Username:</td>
 <td><input type=text name=username value='{$frm.username|escape:"html"}' class=inpts size=30></td>
</tr><tr>
 <td>Password:</td>
 <td><input type=password name=password value='' class=inpts size=30></td>
</tr>
{if $userinfo.validation_enabled == 1}
<tr>
 <td class=menutxt><img src="?a=show_validation_image&{$userinfo.session_name}={$userinfo.session_id}&rand={$userinfo.rand}"></td>
 <td><input type=text name=validation_number class=inpts size=30></td>
</tr>
{/if}
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Login" class=sbmt></td>
</tr></table>
</form>
<br><br>
or <a href=?a=forgot_password >remember your login information</a>.

{include file="footer.tpl"}
