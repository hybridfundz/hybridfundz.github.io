{include file="header.tpl"}

{literal}
<script language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");

{/literal}
  {if $qplans > 1}
{literal}
  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }
{/literal}
  {/if}
{literal}
}
--></script>
{/literal}

{if $frm.say eq 'deposit_success'}
<h3>The deposit has been successfully saved.</h3>
<br><br>
{/if}

{if $frm.say eq 'deposit_saved'}
<h3>The deposit has been saved. It will became active when the administrator checks statistics.</h3><br><br>
{/if}

<h3>Make a Deposit:</h3>
<br>
<form method=post name="spendform">
<input type=hidden name=a value=deposit>
  {if $qplans > 1} Select a plan:<br>
{/if}

{section name=plans loop=$plans}
<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
 <td colspan=3>
{if $qplans > 1}
	<input type=radio name=h_id value='{$plans[plans].id}' {if (($smarty.section.plans.first == 1) && ($frm.h_id eq '')) || ($frm.h_id == $plans[plans].id)} checked {/if} > 
<!--	<input type=radio name=h_id value='{$plans[plans].id}' {if (($smarty.section.plans.first == 1) && ($frm.h_id eq '')) || ($frm.h_id == $plans[plans].id)} checked {/if} {if $compounding_available > 0}onclick="document.spendform.compound.disabled={if $plans[plans].use_compound == 1}false{else}true{/if};"{/if}> -->
{else}
	<input type=hidden name=h_id value='{$plans[plans].id}'>
{/if}

	<b>{$plans[plans].name}</b></td>
</tr><tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Spent Amount (US$)</td>
 <td class=inheader width=100 nowrap><nobr>{$plans[plans].period} Profit (%)</nobr></td>
</tr>
{section name=options loop=$plans[plans].plans}
<tr>
 <td class=item>{$plans[plans].plans[options].name|escape:html}</td>
 <td class=item align=right>{$plans[plans].plans[options].deposit}</td>
 <td class=item align=right>{$plans[plans].plans[options].percent}</td>
</tr>
{/section}
{if $settings.enable_calculator}
<tr>
 <td colspan=3 align=right><a href="javascript:openCalculator('{$plans[plans].id}')">Calculate your profit &gt;&gt;</a></td>
</tr>
{/if}
</table><br><br>
{/section}


<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your account balance (US$):</td>
 <td align=right>${$ab_formated.total}</td>
</tr>
<tr><td>&nbsp;</td>
 <td align=right>
  <small>
{section name=p loop=$ps}
   {if $ps[p].balance > 0}${$ps[p].balance} of {$ps[p].name}{if $hold[p].amount > 0} / ${$hold[p].amount} on hold{/if}<br>{/if}
{/section}
  </small>
 </td>
</tr><tr>
      <td>Amount to Spend (US$):</td>
 <td align=right><input type=text name=amount value='{$min_deposit}' class=inpts size=15 style="text-align:right;"></td>
</tr>
<tr>
  <td colspan=2>
   <table cellspacing=0 cellpadding=2 border=0>
{section name=p loop=$ps}
   {if $ps[p].balance > 0 and $ps[p].status == 1}
    <tr>
     <td><input type=radio name=type value="account_{$ps[p].id}"></td>
     <td>Spend funds from the Account Balance {$ps[p].name}</td>
    </tr>
   {/if}
{/section}
{section name=p loop=$ps}
   {if $ps[p].status}
    <tr>
     <td><input type=radio name=type value="process_{$ps[p].id}" {if $smarty.section.p.index == 0}checked{/if}></td>
     <td>Spend funds from {$ps[p].name}</td>
    </tr>
   {/if}
{/section}
   </table>
  </td>
</tr>
<tr>
 <td colspan=2><input type=submit value="Spend" class=sbmt></td>
</tr></table>
</form>
{literal}
<script language=javascript>
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match('/process_/'))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
</script>
{/literal}

{include file="footer.tpl"}
