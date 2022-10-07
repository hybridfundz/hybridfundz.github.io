{include file="header.tpl"}

{loaddata name="top_investors" limit=10 var=members}

<h3>Investors Top 10</h3><br>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
 <td class=inheader>Username</td>
 <td class=inheader width=200>Reg. Date</td>
 <td class=inheader width=170>Deposit</td>
</tr>
{foreach from=$members item=m}
<tr>
 <td><b>{$m.username}</b></td>
 <td><b>{$m.reg_date}</b></td>
 <td align=right><b>{$m.amount|fiat}</b></td>
</tr>
{foreachelse}
<tr>
 <td colspan=3 align=center>No investors found</td>
</tr>
{/foreach}
</table>

{include file="footer.tpl"}
