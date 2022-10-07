{include file="mheader.tpl"}

 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Deposit Confirm</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

                
                           

<h2 class="section-title"><span class="font-weight-normal"></span> <b class="base--color"></b></h2>                  <section class="pb-120">             <div class="container">                 <div class="row justify-content-center">                     <div class="col-lg-10">                         <div class="subscribe-wrapper bg_img" data-background="assets/images/bg/bg-5.jpg"> 
{if $errors}
{if $errors.invalid_type} The Plan does not exist. {/if} 
{if $errors.not_enough_funds} You have no enough funds to complete the operation.<br>{/if}
{if $errors.less_min}The minimal spend amount for '{$plan_name}' is {$currency_sign}{$errors.less_min}.<br>{/if}
{if $errors.on_hold}Sorry, this amount on hold now.<br>{/if}
<br>
Click <a href="{"?a=deposit"|encurl}">here</a> and try again.

{else}

<h3>Deposit Confirmation:</h3><br><br>

<table cellspacing=0 cellpadding=2 class="form deposit_confirm">
<tr>
 <th>Plan:</th>
 <td>{$deposit.name|escape:html}</td>
</tr>
<tr>
 <th>Profit:</th>
 <td>{$deposit.percent}% {if $deposit.period == 'end' || $deposit.period == 'endh'}after {$deposit.periods} {$deposit.time_units}{if $deposit.periods != 1}s{/if}{else}{$deposit.period_name} for {if $deposit.periods == 0}lifelong{else}{$deposit.periods} {$deposit.time_units}{if $deposit.periods != 1}s{/if} {if $deposit.work_week}(mon-fri){/if}{/if}{/if}</td>
</tr>
<tr>
 <th>Principal Return:</th>
 <td>{if $deposit.principal_return}Yes{if $deposit.principal_return_hold_percent > 0}, with {$deposit.principal_return_hold_percent|number_format:2}% fee{/if}{else}No (included in profit){/if}</td>
</tr>
<tr>
 <th>Principal Withdraw:</th>
 <td>
{if $deposit.principal_withdraw}Available with 
{foreach from=$deposit.principal_withdraw_terms item=t name=wpt}
{$t.percent}% fee {if $t.duration > 0}after {$t.duration} days{/if}{if !$smarty.foreach.wpt.last} or {/if}
{/foreach}
{if $deposit.principal_withdraw_duration_max} but before {$deposit.principal_withdraw_duration_max|number_format} days{/if}
{else}Not available{/if}
 </td>
</tr>
{if $deposit.compound != -1}
<tr>
 <th>Compound:</th>
 <td>{$deposit.compound|number_format}%</td>
</tr>
{/if}
{if $deposit.fees.fee}
<tr>
 <th>Credit Amount:</th>
 <td>{$deposit.user_amount|fiat}</td>
</tr>
<tr>
 <th>Deposit Fee:</th>
 <td>{$deposit.fees.fee|fiat} ({$deposit.fees.percent}%)</td>
</tr>
<tr>
 <th>Deposit:</th>
 <td>{$deposit.to_deposit|fiat}</td>
</tr>
{else}
<tr>
 <th>Amount:</th>
 <td>{$currency_sign}{$deposit.user_amount}</td>
</tr>
{/if}
</table>
<br>

                                                     </div>                                              </div>                 </div>             </div>         </section>

<form name=spend method=post>

<input type=hidden name=a value=deposit>
<input type=hidden name=action value=confirm>
<input type=hidden name=type value={$type}>
<input type=hidden name=h_id value={$h_id}>
<input type=hidden name=amount value="{$famount}">
<input type=hidden name=compound value={$compound}>
<br><input type=submit value="Process" class=sbmt> &nbsp;
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=deposit'">
</form>

{/if}

{include file="mfooter.tpl"}
