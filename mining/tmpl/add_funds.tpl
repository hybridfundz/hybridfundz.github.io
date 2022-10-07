{include file="mheader.tpl"}

{if $frm.say eq 'deposit_success'}
<h3>The deposit has been successfully saved.</h3>
<br><br>
{/if}

{if $frm.say eq 'deposit_saved'}
<h3>The deposit has been saved. It will became active when the administrator checks statistics.</h3><br><br>
{/if}

<h3>Deposit to Account:</h3>
<br>
<form method=post>
<input type=hidden name=a value=deposit>
<input type=hidden name=h_id value=-1>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <th>Processing</th>
 <th>Topup</th>
 <th>Balance</th>
</tr>
{foreach from=$ps item=p}
<tr>
 <td><img src="images/{$p.id}.gif" width="44" height="17" align="absmiddle"> {$p.name}:</td>
 <td><input type=radio name=type value="process_{$p.id}" data-fiat="{$p.fiat}"></td>
 <td>{$p.available|fiat:$p.id}</td>
</tr>
{/foreach}
</table>
<br>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Amount to Spend ({fiat}):</td>
 <td align=right><input type=text name=amount value='10.00' class=inpts size=15 style="text-align:right;"></td>
</tr>
<tr>
 <td colspan=2><input type=submit value="Spend" class=sbmt></td>
</tr></table>
</form>

{include file="footer.tpl"}