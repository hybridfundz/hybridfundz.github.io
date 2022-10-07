{include file="header.tpl"}

{loaddata name="last_members" limit=20 var=members}

<h3>Members Last 10</h3><br>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
 <td class=inheader>Username</td>
 <td class=inheader width=200>Reg. Date</td>
 <td class=inheader width=170>Referrer</td>
</tr>
{foreach from=$members item=m}
<tr>
 <td><b>{$m.username|escape:html}</b></td>
 <td><b>{$m.date}</b></td>
 <td><b>{$m.ref_name|escape:html}</b></td>
</tr>
{foreachelse}
<tr>
 <td colspan=3 align=center>No members found</td>
</tr>
{/foreach}
</table>


{include file="footer.tpl"}
