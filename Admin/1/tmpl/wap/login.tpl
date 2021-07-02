<?xml version="1.0"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">

<wml>
<card title="Login">

{if $frm.say eq 'invalid_login'}
<p>
<b>Login error:</b><br/><br/>


Your login or password is wrong. Please check this information and login again.
</p>
{/if}

<p>
<br/><br/>
<strong>Username</strong> <input name="Username" type="text" value=""/><br/>
<strong>Password</strong> <input name="Password" type="password" value="" /><br/>
</p>
<p>
<anchor title="Login">Login<go href="wap.php?username=$(Username)&amp;password=$(Password)&amp;a=do_login" method="post"/></anchor>
</p>

<do type="accept">
<go href="wap.php" method="post">
	<postfield name="username" value="$(Username)" />
	<postfield name="password" value="$(Password)" />
        <postfield name="a" value="do_login" />
	<postfield name="Login" value="true" />
</go>
</do>


</card>
</wml>
