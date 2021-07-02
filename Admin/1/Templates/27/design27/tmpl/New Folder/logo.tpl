<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>{$settings.site_name}</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<center>


<DIV class=menupoint  align="center">

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
&nbsp; &nbsp;

</div>


<table width="760" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td valign=top>
      <table cellspacing=0 cellpadding=0 border=0 width=758>
	    <tr >
		  <td class=topheader bgcolor="#4D4D67"><img src="images/back.jpg" border=0 alt="" HEIGHT="137px"></td>
           </tr>
      </table>
    </td>
  </tr>
