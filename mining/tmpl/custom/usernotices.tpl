{assign var="allow" value="logged"}
{include file="header.tpl"}

{loaddata name="user_notices" limit=1 page=$frm.p var="notices" all=1 pages_var=paginator}

<table cellspacing=1 cellpadding=2 border=0 width=100%>
{foreach from=$notices item=n}
<tr>
 <td class=menutxt>{$n.title}</td>
 <td class=menutxt>{$n.text}</td>
 <td class=menutxt>{$n.date}</td>
</tr>
{/foreach}
</table>

{paginator col=$paginator.col cur=$paginator.cur url="?a=usernotices&p=%s"}

{include file="footer.tpl"}
