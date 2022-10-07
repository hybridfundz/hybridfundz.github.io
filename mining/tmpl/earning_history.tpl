{include file="mheader.tpl"}

 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Earning History</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
           
{literal}
<script language=javascript>
function go(p)
{
  document.opts.page.value = p;
  document.opts.submit();
}
</script>
{/literal}

<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
 <td colspan=3>
	<h3>History:</h3>
 </td>
</tr>
<tr>
<form method=post name=opts>
<input type=hidden name=a value=history>
<input type=hidden name=page value={$current_page}>
 <td>
   <select name=type class=inpts onchange="document.opts.submit();">
<option value="">All transactions</option>
{section name=opt loop=$options}
<option value="{$options[opt].type}" {if $options[opt].selected}selected{/if}>{$options[opt].type_name}</option>
{/section}
   </select>
{if $ecs}
<br><img src=images/q.gif width=1 height=4><br>
   <select name=ec class=inpts>
     <option value=-1>All eCurrencies</option>
{section name=ec loop=$ecs}
 <option value={$ecs[ec].id} {if $frm.ec eq $ecs[ec].id}selected{/if}>{$ecs[ec].name}</option>
{/section}
   </select>
{/if}
 </td>
 <td align=right>
From: <select name=month_from class=inpts>
{section name=month_from loop=$month}
<option value={$smarty.section.month_from.index+1} {if $smarty.section.month_from.index+1 == $frm.month_from}selected{/if}>{$month[month_from]}
{/section}
</select> &nbsp;
<select name=day_from class=inpts>
{section name=day_from loop=$day}
<option value={$smarty.section.day_from.index+1} {if $smarty.section.day_from.index+1 == $frm.day_from}selected{/if}>{$day[day_from]}
{/section}
</select> &nbsp;

<select name=year_from class=inpts>
{section name=year_from loop=$year}
<option value={$year[year_from]} {if $year[year_from] == $frm.year_from}selected{/if}>{$year[year_from]}
{/section}
</select><br><img src=images/q.gif width=1 height=4><br>

To: <select name=month_to class=inpts>
{section name=month_to loop=$month}
<option value={$smarty.section.month_to.index+1} {if $smarty.section.month_to.index+1 == $frm.month_to}selected{/if}>{$month[month_to]}
{/section}
</select> &nbsp;
<select name=day_to class=inpts>
{section name=day_to loop=$day}
<option value={$smarty.section.day_to.index+1} {if $smarty.section.day_to.index+1 == $frm.day_to}selected{/if}>{$day[day_to]}
{/section}
</select> &nbsp;

<select name=year_to class=inpts>
{section name=year_to loop=$year}
<option value={$year[year_to]} {if $year[year_to] == $frm.year_to}selected{/if}>{$year[year_to]}
{/section}
</select>

 </td>
 <td>
	&nbsp; <input type=submit value="Go" class=sbmt>
 </td>
</tr></table>
</form>
<br><br>
<div class="row mt-50">
              <div class="col-lg-12">
                <div class="table-responsive--md p-0">
                  <table class="table style--two white-space-nowrap">
                    <thead>
                      <tr>
                        
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Date</th>
                       
                      </tr>
                    </thead>


{foreach from=$trans item=t}
   <tbody>
<tr>
 <td><b>{$t.transtype}</b></td>
 <td width=200 align=right><b>{$t.amount|fiat:$t.ec}</b> {if $t.type == 'withdraw_pending'}<a href="{"?a=cancelwithdraw&id=`$t.id`&return=`$return`&"|encurl}" onclick="return confirm('Are you sure you want to delete this request?')">[cancel]</a>{/if}</td>
 <td width=170 align=center valign=bottom><b><small>{$t.d}</small></b></td>
</tr>
<tr>
 <td colspan=3 class=gray><small>{$t.description|escape:html}</small></td>
</tr>
{foreachelse}
<tr>
 <td colspan=3 align=center>No transactions found</td>
</tr>
{/foreach}
<tr><td colspan=3>&nbsp;</td>

{if $totals}
<tr>
 <td><b>Total for selected options:</b></td>
 <td align=right nowrap>
  {foreach from=$totals item=t}{$t.amount|fiat:$t.ec} <br>{/foreach}
 </td>
 <td></td>
</tr>
   <tbody>
{/if}

{*
{if $trans}
<tr>
    <td colspan=2>For this period:</td>
 <td align=right><b>{$currency_sign} {$periodsum}</b></td>
</tr>
{/if}
<tr>
    <td colspan=2>Total:</td>
 <td align=right><b>{$currency_sign} {$allsum}</b></td>
</tr>
*}
</table>

{paginator col=$paginator.col cur=$paginator.cur url="javascript:go('%s')"}



                        </div>
                        <!-- subscribe-wrapper end -->
                    </div>
                </div>
            </div>
        </section>

           </div>
                </div>
{include file="footer.tpl"}
