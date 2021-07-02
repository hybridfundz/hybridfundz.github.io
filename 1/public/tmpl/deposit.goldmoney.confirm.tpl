{include file="header.tpl"}

{if $false_data != 1}
<h3>Please confirm your deposit:</h3><br><br>

<form action="https://secure.goldmoney.com/omi/omipmt.php" method="post"> 
Your GoldMoney account number <b>{$userinfo.goldmoney_account}</b><br>
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
<input type=hidden name=compound value="0">
{/if}

<br>

<input type=hidden name=userid value="{$userinfo.id}">
<input type=hidden name=hyipid value={$h_id}>
<input type=hidden name=a value=checkpayment>

<input type="hidden" name="OMI_MERCHANT_HLD_NO" value="{$settings.def_payee_account_goldmoney}"> 
<input type="hidden" name="OMI_CURRENCY_AMT" value="{$amount}"> 
<input type="hidden" name="OMI_CURRENCY_CODE" value="840"> 
<input type="hidden" name="OMI_MERCHANT_MEMO" value="Deposit to {$settings.site_name} User {$userinfo.username}"> 
<INPUT type="hidden" name="OMI_RESULT_URL" value="{$settings.site_url}/goldmoney_processing.php">
<INPUT type="hidden" name="OMI_SUCCESS_URL" value="{$settings.site_url}/index.php?a=return_egold&process=yes">
<INPUT type="hidden" name="OMI_SUCCESS_URL_METHOD" value=POST>
<INPUT type="hidden" name="OMI_FAIL_URL" value="{$settings.site_url}/index.php?a=return_egold&process=no">
<INPUT type="hidden" name="OMI_FAIL_URL_METHOD" value=POST>
<br><input type=submit value="Process" class=sbmt> &nbsp;
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=account'">
</form>
{/if}
{include file="footer.tpl"}
