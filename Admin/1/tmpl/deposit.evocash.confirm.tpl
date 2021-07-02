{include file="header.tpl"}

{if $false_data != 1}
<h3>Please confirm your deposit:</h3><br><br>

<form name=spend method=post action="https://www.evocash.com/evoswift/index.cfm">
  Your Evocash account number <b>{$userinfo.evocash_account}</b><br>
Amount ($US): <b>{$amount_format}</b><br>

{if $use_compound}
{if $compound_min_percents == $compound_max_percents && !$compound_percents}
<input type=hidden name=compound value="{$compound_min_percents}">
{else}
<table cellspacing=0 cellpadding=2 border=0>
<tr><td nowrap width=1%>Compounding percent: </td>
  {if $compound_percents}
<td><select name='compound' class=inpts>
{section name=p loop=$compound_percents}<option value="{$compound_percents[p].percent}">{$compound_percents[p].percent}%</option>{/section}
</select></td>
  {else}
<td width=99%><input type=text name='compound' value="{$compound_min_percents}" class=inpts size=5></td></tr>
<tr><td nowrap colspan=2>(You can set any percent between <b>{$compound_min_percents}%</b> and <b>{$compound_max_percents}%</b>)</td>
  {/if}
</tr>
<!--tr><td colspan=2><small>Example: {$compounding}% of your earning will be accumulate on deposit.</small></td></tr-->
</table>
{/if}
{else}
<input type=hidden name=compound value="{$compounding}">
{/if}

<br>

<input type=hidden name=userid value="{$userinfo.id}">
<input type=hidden name=hyipid value={$h_id}>
<input type=hidden name=a value=checkpayment>
<INPUT type=hidden name=amount value="{$amount}">
<INPUT type=hidden name=receivingaccountid value="{$settings.def_payee_account_evocash}" >
<INPUT type=hidden name=merchant_check_url value="{$settings.site_url}/evocash_processing.php">
<INPUT type=hidden name=pay_yes_url value="{$settings.site_url}/index.php?a=return_egold&process=yes">
<INPUT type=hidden name=pay_yes_url_method value=POST>
<INPUT type=hidden name=pay_no_url  value="{$settings.site_url}/index.php?a=return_egold&process=no">
<INPUT type=hidden name=pay_no_url_method value=POST>
<INPUT type=hidden name=baggage_fields value="userid hyipid a compound">
<INPUT type=hidden value="Deposit to {$settings.site_name} User {$userinfo.username}" name=memo>
<br><input type=submit value="Process" class=sbmt> &nbsp;
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=account'">
</form>
{/if}
{include file="footer.tpl"}
