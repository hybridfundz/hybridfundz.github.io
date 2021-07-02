{include file="header.tpl"}
<title>Login | Crypto Scoot</title>

 <div class="bannerContainer insider">
    <div class="bannerInner">
      <div class="ctn-banner fadeInRight wow">
<body class="loginarea">

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
<div class="loginpage">
  <div class="inside_inner">
    <div class="loginwrappers">
      <div class="login_left">
        <div class="form-container login">
          <h3>user Login</h3>
{if $frm.say eq 'invalid_login'}
<h3>Login error:</h3><br><br>

Your login or password or turing image code is wrong. Please check this information.
{/if}

<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value='{$frm.follow}'>
<input type=hidden name=follow_id value='{$frm.follow_id}'>
<table width="100%" cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Username:</td>
 <td><input type=text name=username value='{$frm.username|escape:"html"}' class=inpts size=30 autofocus="autofocus"></td>
</tr><tr>
 <td>Password:</td>
 <td><input type=password name=password value='' class=inpts size=30></td>
</tr>
{include file="captcha.tpl" action="login"}
<tr>
 <td height="40" valign="middle"><span class="bunicon"><input type=submit value="Login" class=sbmt></span></td>
 <td align="right" valign="middle"><a href="?a=forgot_password" class="small_text">Retrieve Password</a></td>
</tr></table>
</form>
<br><br>
or <a href="{"?a=forgot_password"|encurl}">remember your login information</a>.
</div>
      </div>
            <div class="login_right"><img src="styles/images/about-btt5.png"></div>
    </div>
  </div>
</div>
<div class="loginyellowbottom">
<div class="inside_inner"><a href="?a=signup" class="loginnewuser">New User? <span>SignUp!</span></a></div>
</div>
</div>
</div>
{include file="footer.tpl"}
