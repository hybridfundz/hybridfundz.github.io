<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>{$settings.site_name}</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body link="#666699" vlink="#666699" alink="#666699" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >



<DIV class=menupoint align="center">

<b>
<a href=?a=home class=toplink>Home</a> &middot; 
<a href=?a=faq class=toplink>FAQ</a> &middot; 
<a href=?a=rules class=toplink>Rules</a> &middot; 
{if $userinfo.logged != 1}
<a href=?a=signup class=toplink>Sign up</a> &middot; 
<a href=?a=login class=toplink>Login</a> &middot; 
{else}
<a href=?a=logout class=toplink>Logout</a> &middot; 
{/if}
<a href=?a=support class=toplink>Support</a></b>
</div>


<table width="760" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign=top>
      <table cellspacing=0 cellpadding=0 border=0 width=758>
	    <tr >
		  <td bgcolor=#8A9DA4><img src="images/back.jpg" border=0 alt="" width=760 height=221></td>
           </tr>
      </table>
    </td>
  </tr>

