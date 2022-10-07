{include file="header.tpl"}

<h3>Referrers Top 20</h3>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
    <td class=inheader>#</td>
    <td class=inheader>Username</td>
    <td class=inheader width=200><b>Active</b></td>
    <td class=inheader width=170><b>Total</b></td>
</tr>
{loaddata name="top_referrals" order="refs_add_funds1" start_date=$settings.refs10_start_date limit=20 var="stats"}

{if $stats}
{foreach from=$stats item=s name=ref}
<tr>
 <td align=center><b>{$smarty.foreach.ref.index+1}</b></td>
 <td><b>{$s.username|escape:html}</b></td>
 <td align=right><b>{$s.active_col}</b></td>
 <td align=right><b>{$s.col}</b></td>
</tr>
{/foreach}
{else}
<tr>
 <td colspan=4 align=center>No referrers found</td>
</tr>
{/if}
</table>

{include file="footer.tpl"}
