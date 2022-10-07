{include file="header.tpl"}

{if $frm.say == 'success'}
<b style=color:green>Your review has been saved. It will be published after admin approval.</b>
{/if}

<h3>Reviews</h3>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
{loaddata name="video_testimonials" var=reviews page=$frm.p limit=20 pages_var=pages}
{foreach from=$reviews item=r}
<tr>
 <td align=justify><i>{$r.review|escape:htmlall}</i><br>
  {$r.uname|escape:html} - {$r.date}<br>
 </td>
</tr>
{foreachelse}
<tr>
 <td colspan=3 align=center>No reviews found</td>
</tr>
{/foreach}
</table>

<center>
{paginator col=$pages.col cur=$pages.cur url="?a=video_testimonials&p=%s"|encurl}
</center>


<form method=post>
<input type=hidden name=a value=video_testimonials>
<input type=hidden name=action value=post>
<h3>Leave Review:</h3>
{if $errors}
<ul style="color:red">
 {if $errors.uname}
    <li>Please enter your name</li>
 {/if}
 {if $errors.email}
    <li>Please enter your email</li>
 {/if}
 {if $errors.video_url}
    <li>Please enter your video testimonial yourtube url.</li>
 {/if}
</ul>
{/if}
<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <td>Your name:</td>
 <td><input type=text name=uname value="{$frm.uname|default:$userinfo.name|escape:htmlall}" class=inpts></td>
</tr>
<tr>
 <td>Your email:</td>
 <td><input type=text name=email value="{$frm.email|default:$userinfo.email|escape:htmlall}" class=inpts></td>
</tr>
<tr>
 <td>Vide URL:</td>
 <td><input type=text name=video_url value="{$frm.video_url|escape:htmlall}" class=inpts></td>
</tr>
<tr>
 <td>Your review:</td>
 <td><textarea name=review class=inpts style="width:100%">{$frm.review|escape:html}</textarea></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit class=sbmt value="Leave Review"></td>
</tr>
</table>
</form>
<br>


{include file="footer.tpl"}
