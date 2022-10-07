{include file="mheader.tpl"}

 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Deposit List</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    
 
    <section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b class="base--color">Plans</b></h2>
              <p>To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</p>
            </div>
          </div>
        </div>
    
   

<div class="row justify-content-center mb-none-30">
{foreach from=$plans item=p}
<div class="col-xl-3 col-lg-4 col-md-6 mb-30">
 <div class="package-card text-center bg_img" data-background="assets/images/bg/bg-4.png">
 <h4 class="package-card__title base--color mb-2">{$p.name}</h4>

 <ul class="package-card__features mt-4">

{foreach from=$p.plans item=o}
<li>{$o.name}</li>
<li>Min:{$currency_sign}{$o.min_deposit} {if $o.max_deposit>0}</li>
 <li> Max:{$currency_sign}{$o.max_deposit}{else}and more{/if}</li>
 <li>Return{$o.percent}</li>
 </ul>
              <div class="package-card__range mt-5 base--color">Cloud Mining</div>
              <a href="?a=deposit" class="cmn-btn btn-md mt-4">Invest Now</a>
            </div>
            
         </div>{/foreach}
        </div>
      </div>
    </section>


<table cellspacing=1 cellpadding=2 border=0 width=100%>
{if !$p.deposits}
<tr>
 <td colspan=4><b>No deposits for this plan</b></td>
</tr>           
{else}
<tr>
 <td colspan=4 class=inheader style="text-align:left">Your deposits:</td>
</tr>
<tr>
 <td class=inheader>Date</td>
 <td class=inheader>Amount</td>
{if $p.use_compound}
 <td class=inheader>Compounding Percent</td>
{/if}
{if $p.withdraw_principal}
 <td class=inheader>Release</td>
{/if}
</tr>           
{foreach from=$p.deposits item=d}
<tr>
 <td align=center class=item><b>{$d.date}</b><br>{if $p.q_days == 0}Working {$d.duration} days{else}Expire in {$d.expire_in}{/if}</td>
 <td align=center class=item><b>{$d.deposit|fiat:$d.ec} <img src="images/{$d.ec}.gif" align=absmiddle hspace=1 height=17></b></td>


{if $p.use_compound}
 <td align=center class=item align=center>{$d.compound}% <a href="{"?a=change_compound&deposit=`$d.id`"|encurl}">[change]</a></td>
{/if}
{if $p.withdraw_principal}
 <td align=center class=item>
  {if $d.can_withdraw}
   <a href="{"?a=withdraw_principal&deposit=`$d.id`"|encurl}">[release]</a>
  {else}
   {if $d.pending_duration > 0}
    {$d.pending_duration} day{if $d.pending_duration > 1}s{/if} left
   {else}
    not available
   {/if}
  {/if}
 </td>
{/if}
</tr>
{/foreach}
{/if}
</table>
{if $p.total_deposit > 0 || $p.today_profit > 0 || $p.total_profit > 0}
<table cellspacing=0 cellpadding=1 border=0>
<tr><td>Deposited Total:</td><td><b>{$p.total_deposit|fiat}</b></td></tr>
<tr><td>Profit Today:</td><td><b>{$p.today_profit|fiat}</b></td></tr>
<tr><td>Total Profit:</td><td><b>{$p.total_profit|fiat}</b></td></tr>
</table>
{/if}
<br>
</td></tr></table>
<br>
{/foreach}
                                                     </div>                                              </div>                 </div>             </div>         </section>
{include file="footer.tpl"}
