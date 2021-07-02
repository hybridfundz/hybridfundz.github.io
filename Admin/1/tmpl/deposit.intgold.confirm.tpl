{include file="header.tpl"}

{if $false_data != 1}
<h3>Please confirm your deposit:</h3><br><br>

<form name=spend method=post action="https://intgold.com/cgi-bin/webshoppingcart.cgi">
  Your INTGold account number <b>{$userinfo.intgold_account}</b><br>
Amount ($US): <b>{$amount_format}</b><br>
{if $use_compound}
{if $compound_min_percents == $compound_max_percents && !$compound_percents}
<input type=hidden name=CUSTOM4 value="{$compound_min_percents}">
{else}
<table cellspacing=0 cellpadding=2 border=0>
<tr><td nowrap width=1%>Compounding percent: </td>
  {if $compound_percents}
<td><select name='CUSTOM4' class=inpts>
{section name=p loop=$compound_percents}<option value="{$compound_percents[p].percent}">{$compound_percents[p].percent}%</option>{/section}
</select></td>
  {else}
<td width=99%><input type=text name='CUSTOM4' value="{$compound_min_percents}" class=inpts size=5></td></tr>
<tr><td nowrap colspan=2>(You can set any percent between <b>{$compound_min_percents}%</b> and <b>{$compound_max_percents}%</b>)</td>
  {/if}
</tr>
<!--tr><td colspan=2><small>Example: {$compounding}% of your earning will be accumulate on deposit.</small></td></tr-->
</table>
{/if}
{else}
<input type=hidden name=CUSTOM4 value="{$compounding}">
{/if}
<br>

<input type="hidden" name="cmd" value="_xclick">
<input type=hidden name=CUSTOM1 value="{$userinfo.id}">
<input type=hidden name=CUSTOM2 value={$h_id}>
<input type=hidden name=CUSTOM3 value=checkpayment>
<INPUT type=hidden name=AMOUNT value="{$amount}">
<INPUT type=hidden name=SELLERACCOUNTID value="{$settings.def_payee_account_intgold}" >
<input type="hidden" name="POSTURLNUM" value="{$settings.intgold_posturl}">
<!--INPUT type=hidden name=POSTURL value="{$settings.site_url}/intgold_processing.php"-->
<INPUT type=hidden name=RETURNURL value="{$settings.site_url}/index.php?a=return_egold&process=yes">
<INPUT type=hidden name=CANCEL_RETURN value="{$settings.site_url}/index.php?a=return_egold&process=no">
<input type="hidden" name="METHOD" value="POST">
<input type="hidden" name="RETURNPAGE" value="CGI">
<input type="hidden" name="ITEM_NUMBER" value="{$userinfo.id}">

<INPUT type=hidden value="Deposit to {$settings.site_name} User {$userinfo.username}" name=ITEM_NAME>
<br><input type=submit value="Process" class=sbmt> &nbsp;
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=account'">
</form>
{/if}
{include file="footer.tpl"}
