{include file="header.tpl"}

<h3>Internal Transfer:</h3>

{if $say == 'processed'}
<div class="success">Internal transfer has been successfully completed.</div>
{/if}

{if $fatals}

{if $fatals.forbidden}<div class="error">Internal transfers are forbidden.</div>{/if}
{if $fatals.no_deposits}<div class="error">You can not send funds before you make any deposit.</div>{/if}
{if $fatals.times_limit}<div class="error">You can send internal transfer {$settings.limit_transfer_period_times} per {$settings.limit_transfer_period_date} only.</div>{/if}

{else}
{if $errors}
{if $errors.turing_image}<div class="error">Invalid turing image</div>{/if}
{if $errors.user_not_found}<div class="error">The recipient's username entered has not been found or has been suspended.</div>{/if}
{if $errors.less_min}<div class="error">You can transfer the amount not less {$errors.less_min} only.</div>{/if}
{if $errors.too_big_amount}<div class="error">You have no such amount on your balance.</div>{/if}
{if $errors.too_big_amount_plus_fee}<div class="error">You have no enough funds to complte the transaction. Total amount you should have to send {$frm.amount|fiat:$frm.ec} + fee is <b>{$errors.too_big_amount_plus_fee}</b>.</div>{/if}
{if $errors.greater_max}<div class="error">Maximum amount you can send is {$errors.greater_max}.</div>{/if}
{if $errors.invalid_transaction_code}<div class="error">Invalid Transaction Code.</div>{/if}
{if $errors.invalid_tfa_code}<div class="error">You have entered invalid 2FA code.</div>{/if}
{/if}

{if $preview}

<form method=post>
<input type=hidden name=a value=internal_transfer>
<input type=hidden name=action value=confirm>
<input type=hidden name=amount value="{$amount}">
<input type=hidden name=account value="{$user.username|escape:html}">
<input type=hidden name=ec value="{$ec}">
<input type=hidden name=comment value="{$comment|escape:html}">

<table cellspacing=0 cellpadding=2 border=0 class="form internal_transfer_confirm">
<tr>
 <th>Payment System:</th>
 <td>{$currency}</td>
</tr>
<tr>
 <th>Recipient:</th>
 <td>{$user.username|escape:html}</td>
</tr>
<tr>
 <th>Fee:</th>
 <td>
{if $fee > 0}
  {$settings.internal_transfer_fee}% (min. {$currency_sign}{$settings.minimum_internal_transfer_fee})
{else}
We have no fee for this operation.
{/if}
</td>
</tr>
<tr>
 <th>Debit Amount:</th>
 <td>{$to_send|fiat:$ec}</td>
</tr>
<tr>
 <th>Credit Amount:</th>
 <td>{$to_receive|fiat:$ec}</td>
</tr>
{if $comment}
<tr>
 <th>With comments:</th>
 <td>{$comment|escape:html}</th>
</tr>
{/if}
{if $settings.use_transaction_code && $userinfo.transaction_code}
<tr>
 <th>Transaction Code:</th>
 <td><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
{/if}
{include file="captcha.tpl" action="internal_transfer"}
{if $userinfo.tfa_settings.withdraw}
<tr>
 <th>2FA Code:</th>
 <td><input type="text" name="tfa_code" class=inpts size=15> <input type="hidden" name="tfa_time" id="tfa_time"></td>
</tr>
{literal}
<script language=javascript>
document.getElementById('tfa_time').value = (new Date()).getTime();
</script>
{/literal}
{/if}
<tr>
 <td colspan=2><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>

{else}

<form method=post>
<input type=hidden name=a value=internal_transfer>
<input type=hidden name=action value=preview>
<input type=hidden name=say value="">

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Account Balance:</td>
 <td>{$currency_sign}<b>{$userinfo.balance_totals.balance|amount_format}</b></td>
</tr>
</table>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <th></th>
 <th>Processing</th>
 <th>Available</th>
{if $have_hold}
 <th>On Hold</th>
{/if}
</tr>
{assign var="wfch" value=1}
{foreach from=$ps item=p}
<tr>
 <td>{if $p.available > 0}<input type="radio" name="ec" value="{$p.id}" {if $frm.ec == $p.id || $wfch}{assign var="wfch" value=0}checked{/if}>{/if}</td>
 <td><img src="images/{$p.id}.gif" width=44 height=17 align=absmiddle> {$p.name|escape:html}</td>
 <td><b>{$p.available|fiat:$p.ec}</b></td>
{if $have_hold}
 <td><b style="color:gray">{$p.hold|fiat:$p.ec}</b></td>
{/if}
</tr>
{/foreach}
</table>

{*
<tr>
<td>&nbsp;</td>
 <td> <small>
{foreach from=$ps item=p}
   {if $p.balance > 0}{$currency_sign}{$p.balance} of {$p.name}{if $p.hold > 0} / {$currency_sign}{$p.hold} on hold{/if}<br>{/if}
{/foreach}
 </td>
</tr>
<tr>
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Select e-currency:</td>
 <td><select name=ec class=inpts>
{foreach from=$ps item=p}
   {if $p.available > 0}<option value={$p.id}>{$p.name}</option>{/if}
{/foreach}
     </select>
 </td>
</tr>
*}

<table cellspacing=0 cellpadding=2 border=0 width=200>
<tr>
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Transfer ({$currency_sign}):</td>
 <td><input type=text name=amount value="{if $frm.amount}{$frm.amount|escape:htmlall}{else}10.00{/if}" class=inpts size=15></td>
</tr><tr>
 <td>To Account:</td>
 <td><input type=text name=account value="{$frm.account|escape:htmlall}" class=inpts size=15></td>
</tr><tr>
 <td colspan=2><textarea name=comment class=inpts cols=45 rows=4>{if $frm.comment}{$frm.comment|escape:htmlall}{else}Your comment{/if}</textarea>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Send" class=sbmt></td>
</tr></table>
</form>

{/if}

{/if}


{include file="footer.tpl"}
