{include file="header.tpl"}

<h3>Ask for withdrawal:</h3><br>

{if $say eq 'on_hold'}
Sorry, this amount on hold now.<br><br>
{/if}
{if $say eq 'zero'}
Sorry, you can request more than $0.00 only<br><br>
{/if}
{if $say eq 'less_min'}
Sorry, you can request not less than ${$settings.min_withdrawal_amount}<br><br>
{/if}
{if $say eq 'daily_limit'}
Sorry, you have exceeded a daily limit<br><br>
{/if}
{if $say eq 'processed'}
{if $batch eq ''}
Withdrawal request saved.<br><br>
{else} Withdrawal processed, batch_id: {$batch}<br>
<br>
{/if}
{/if}
{if $say eq 'not_enought'}
Sorry, you have requested the amount larger than the one on your balance.<br><br>
{/if} {if $say eq 'invalid_transaction_code'} You have entered the invalid transaction 
code.<br>
<br>
{/if}

{if $say eq 'no_deposits'}
You have not done any deposits yet. Withdrawal function will be available after a deposit.
<br><br>
{/if}


{if $preview}

<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=withdraw>
<input type=hidden name=amount value={$amount}>
<input type=hidden name=ec value={$ec}>
<input type=hidden name=comment value="{$comment|escape:html}">

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2>You are withdrawing <b>${$amount}</b> of {$currency}. 
{if $settings.withdrawal_fee > 0 || $settings.withdrawal_fee_min > 0} Our fee is 
{if $settings.withdrawal_fee > 0}<b>{$settings.withdrawal_fee}%</b>{/if}
{if $settings.withdrawal_fee > 0 && $settings.withdrawal_fee_min > 0} or {/if}
{if $settings.withdrawal_fee_min > 0} <b>${$settings.withdrawal_fee_min}</b>{if $settings.withdrawal_fee > 0} as a minimum{/if}{/if}
.
{else}
We have no fee for this operation. 
{/if}
</td>
</tr>
<tr>
 <td colspan=2>Actually you will acquire the total of <b>${$to_withdraw}</b> on your {$currency} account {if $account}{$account}{/if}.</td>
</tr>
{if $comment}
<tr>
 <td colspan=2>Your comments: {$comment|escape:html}</td>
</tr>
{/if}
{if $settings.use_transaction_code && $userinfo.transaction_code}
<tr>
 <td colspna=2>&nbsp;</td>
</tr>
<tr>
 <td width=1% nowrap>Transaction Code:</td>
 <td width=99%><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>


{else}


<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=preview>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Account Balance:</td>
 <td>$<b>{$ab_formated.total}</b></td>
</tr>
<tr><td>&nbsp;</td>
 <td> <small>
{section name=p loop=$ps}
   {if $ps[p].balance > 0}${$ps[p].balance} of {$ps[p].name}{if $hold[p].amount > 0} / ${$hold[p].amount} on hold{/if}<br>{/if}
{/section}
 </td>
</tr>
<tr>
 <td>Pending Withdrawals: </td>
 <td>$<b>{if $ab_formated.withdraw_pending != 0}{$ab_formated.withdraw_pending}{else}0.00{/if}</b></td>
</tr>
{if $settings.def_payee_account != ''}
<tr>
 <td>Your E-gold Account:</td>
 <td>{$userinfo.egold_account}</td>
</tr>
{/if}
{if $settings.def_payee_account_evocash != ''}
<tr>
 <td>Your Evocash Account:</td>
 <td>{$userinfo.evocash_account}</td>
</tr>
{/if}
{if $settings.def_payee_account_intgold != ''}
<tr>
 <td>Your INTGold account:</td>
 <td>{$userinfo.intgold_account}</td>
</tr>
{/if}
{if $settings.def_payee_account_stormpay != ''}
<tr>
 <td>Your StormPay account:</td>
 <td>{$userinfo.stormpay_account}</td>
</tr>
{/if}
{if $settings.def_payee_account_ebullion != ''}
<tr>
 <td>Your e-Bullion account:</td>
 <td>{$userinfo.ebullion_account}</td>
</tr>
{/if}
{if $settings.def_payee_account_paypal != ''}
<tr>
 <td>Your PayPal account:</td>
 <td>{$userinfo.paypal_account}</td>
</tr>
{/if}
{if $settings.def_payee_account_goldmoney != ''}
<tr>
 <td>Your GoldMoney account:</td>
 <td>{$userinfo.goldmoney_account}</td>
</tr>
{/if}
{if $settings.def_payee_account_eeecurrency != ''}
<tr>
 <td>Your eeeCurrency account:</td>
 <td>{$userinfo.eeecurrency_account}</td>
</tr>
{/if}
</table>

{if $other_processings}
For other e-currencies please provide your payee account details in the comments field bellow.
{/if}

<table cellspacing=0 cellpadding=2 border=0 width=200>
<tr>
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Select E-currency:</td>
 <td><select name=ec class=inpts>
{section name=p loop=$ps}
   {if $ps[p].balance > 0}<option value={$ps[p].id}>{$ps[p].name}</option>{/if}
{/section}
     </select>
 </td>
</tr><tr>
 <td>Withdrawal (US$):</td>
 <td><input type=text name=amount value="10.00" class=inpts size=15></td>
</tr><tr>
 <td colspan=2><textarea name=comment class=inpts cols=45 rows=4>Your comment</textarea>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Request" class=sbmt></td>
</tr></table>
</form>
{/if}

{include file="footer.tpl"}
