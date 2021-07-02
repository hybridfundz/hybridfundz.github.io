{include file="header.tpl"}

{if $false_data != 1}
<h3>Please confirm your deposit:</h3><br><br>


<form method="post" action="https://www.stormpay.com/stormpay/handle_gen.php"> 
  <input type="hidden" name="product_name" value="Deposit to {$settings.site_name} User {$userinfo.username}"> 
  <input type="hidden" name="amount" value="{$amount}"> 
  <input type="hidden" name="payee_email" value="{$settings.def_payee_account_stormpay}">

  <input type="hidden" name="require_IPN" value="1">
  <input type="hidden" name="return_URL" value="{$settings.site_url}/index.php?a=return_egold&process=yes"> 
  <input type="hidden" name="cancel_URL" value="{$settings.site_url}/index.php?a=return_egold&process=no"> 
  <input type=hidden name=user1 value="{$userinfo.id}">
  <input type=hidden name=user2 value={$h_id}>
  <input type=hidden name=user3 value=checkpayment>

Your stormpay account <b>{$userinfo.stormpay_account}</b><br>
Amount ($US): <b>{$amount_format}</b><br>
{if $use_compound}
{if $compound_min_percents == $compound_max_percents && !$compound_percents}
<input type=hidden name=user4 value="{$compound_min_percents}">
{else}
<table cellspacing=0 cellpadding=2 border=0>
<tr><td nowrap width=1%>Compounding percent: </td>
  {if $compound_percents}
<td><select name='user4' class=inpts>
{section name=p loop=$compound_percents}<option value="{$compound_percents[p].percent}">{$compound_percents[p].percent}%</option>{/section}
</select></td>
  {else}
<td width=99%><input type=text name='user4' value="{$compound_min_percents}" class=inpts size=5></td></tr>
<tr><td nowrap colspan=2>(You can set any percent between <b>{$compound_min_percents}%</b> and <b>{$compound_max_percents}%</b>)</td>
  {/if}
</tr>
</table>
{/if}
{else}
<input type=hidden name=user4 value="0">
{/if}


{if $settings.dec_stormpay_fee == 1}
   Your deposit will be decreased at 6.9% and $0.69 (StormPay fee)<br><br>

You will receive ${$amount-$amount*6.9/100-0.69|string_format:"%.2f"} if you invest ${$amount}<br>
You will have to invest ${$amount*100/93.1+69/93.1|string_format:"%.2f"} if you want to receive ${$amount}<br>

{/if}


<br>

<br><input type=submit value="Process" class=sbmt> &nbsp;
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=account'">
</form>
{/if}
{include file="footer.tpl"}
