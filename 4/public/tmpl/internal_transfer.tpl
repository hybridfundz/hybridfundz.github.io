{include file="header.tpl"}

<h3>Internal Transfer:</h3><br><br>

{if $fatal}

{if $fatal == 'completed'}Internal transfer has been successfully completed.<br><br><a href="?a=internal_transfer">Return to the Internal Transfer form.</a>{/if}

{if $fatal == 'forbidden'}Internal transfers are forbidden.{/if}
{if $fatal == 'invalid_transaction_code'}Invalid Transaction Code.<br><br><a href="javascript:history.go(-1)">&lt;&lt; Back</a>{/if}

{else}

{if $say == 'too_small_amount'}You can transfer the amount more that 0 only.<br><br>{/if}
{if $say == 'too_big_amount'}You have no such amount on your balance.<br><br>{/if}
{if $say == 'user_not_found'}The recipient's username entered has not been found or has been suspended.<br><br>{/if}
{if $say == 'no_deposits'}You can not send funds before you make any deposit.<br><br>{/if}
{if $say == 'on_hold'}Sorry, this amount on hold now.<br><br>{/if}

{if $preview}

<form method=post>
<input type=hidden name=a value=internal_transfer>
<input type=hidden name=action value=make_transaction>
<input type=hidden name=amount value={$amount}>
<input type=hidden name=account value={$user.username}>
<input type=hidden name=ec value={$ec}>
<input type=hidden name=comment value="{$comment}">

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
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td colspan=2>Send <b>${$amount} of {$ec_name}</b> to account <b>{$user.username}</b></td>
{if $comment}
</tr><tr>
 <td colspan=2>With comments: {$comment|escape:html}
{/if}
</tr>
{if $settings.use_transaction_code && $userinfo.transaction_code}
<tr>
 <td>Transaction Code:</td>
 <td><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td colspan=2><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>

{else}

<form method=post>
<input type=hidden name=a value=internal_transfer>
<input type=hidden name=action value=preview_transaction>

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
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Select e-currency:</td>
 <td><select name=ec class=inpts>
{section name=p loop=$ps}
   {if $ps[p].balance > 0}<option value={$ps[p].id}>{$ps[p].name}</option>{/if}
{/section}
     </select>
 </td>
</tr><tr>
 <td>Transfer (US$):</td>
 <td><input type=text name=amount value="10.00" class=inpts size=15></td>
</tr><tr>
 <td>To Account:</td>
 <td><input type=text name=account value="" class=inpts size=15></td>
</tr><tr>
 <td colspan=2><textarea name=comment class=inpts cols=45 rows=4>Your comment</textarea>
</tr><tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Send" class=sbmt></td>
</tr></table>
</form>

{/if}

{/if}


{include file="footer.tpl"}
