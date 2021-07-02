<?xml version="1.0"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">

<wml>
<card title="{$settings.site_name}">


<p>
Our program is intended for people willing to achieve their financial freedom but unable to do so because they're not financial experts.<br/>

{$settings.site_name} is a long term high yield private loan program, backed up by Forex market trading, and investing in various funds and activities. 
Profits from these Minings are used to enhance our program and increase its stability for the long term.<br/><br/>
</p>

<p>
{if $userinfo.logged == 0}
<a href="wap.php?a=login">Login</a><br/>
{/if}
{if $userinfo.logged == 1}
<a href="wap.php?a=logout">Logout</a><br/>
{/if}
</p>

</card>
</wml>
