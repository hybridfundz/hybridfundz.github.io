{include file="header.tpl"}
<title>Your Deposit</title>
<div class="bannerContainer insider2">
    <div class="bannerInner">
      <div class="ctn-banner fadeInRight wow">
                  <h3>My <span>Dashboard</span></h3>
        <div class="reflinkbox"><a href="{$settings.site_url}/?ref={$userinfo.username}" class="ref-link">{$settings.site_url}/?ref={$userinfo.username}</a><a class="getban" href="?a=referals">Get Banners</a></div>
      </div>
    </div>
     </div>
</div>
<div class="clearfix"></div>

<div class="inside_wrap">
<div class="membersidebar">

  <div class="inside_inner">
  <ul class="nav">
              <li class="active"><a href="?a=account">Overview</a></li>
              <li><a href="?a=deposit">Deposit</a></li>
              <li><a href="?a=deposit_list">Your Deposits</a></li>
              <li><a href="?a=deposit_history">Deposits History</a></li>
              <li><a href="?a=earnings">Earnings History</a></li>
              <li><a href="?a=withdraw">Withdraw</a></li>
              
              <li><a href="?a=referals">Referrals</a></li>
              <li><a href="?a=edit_account">Settings</a></li>
              <li><a href="?a=security">Security</a></li>
              
            </ul>
            <div class="memtopwrap">
    <div class="memtop"> <span><img src="styles/images/uruser.png" alt="" /></span>
      <h2>{$userinfo.username}</h2>
      <p>Welcome</p>
    </div>
    <div class="memtop"> <span><img src="styles/images/urregdate.png" alt="" /></span>
      <h2>{$userinfo.create_account_date}</h2>
      <p>Registration Date</p>
    </div>
    <div class="memtop"> <span><img src="styles/images/urinfo.png" alt="" /></span>
      <h2></h2>
      <p>User IP</p>
    </div>
    <div class="memtop"> <span><img src="styles/images/urrun.png" alt="" /></span>
      <h2>{$settings.site_days_online_generated}</h2>
      <p>Running Days</p>
    </div>
    </div>
  </div>
</div>


<div class="myaccount">
<div class="inside_inner">
<div class="member_right">
<div class="my_accont">


<h3>Your deposits:</h3><br>

<b>Total: {$currency_sign}{$total}</b><br><br>

{foreach from=$plans item=p}
<table cellspacing=1 cellpadding=2 border=0 width=100% class=line><tr><td class=item>
<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
 <td colspan=3 align=center><b>{$p.name}</b></td>
</tr><tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Deposit Amount</td>
 <td class=inheader width=100 nowrap><nobr>{$p.period} Profit (%)</nobr></td>
</tr>
{foreach from=$p.plans item=o}
<tr>
 <td class=item>{$o.name}</td>
 <td class=item align=right>{$currency_sign}{$o.min_deposit} {if $o.max_deposit>0}- {$currency_sign}{$o.max_deposit}{else}and more{/if}</td>
 <td class=item align=right>{$o.percent}</td>
</tr>
{/foreach}
</table>
<br>
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
 <td align=center class=item><b>{$currency_sign}{$d.deposit} <img src="images/{$d.ec}.gif" align=absmiddle hspace=1 height=17></b></td>
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
<tr><td>Deposited Total:</td><td><b>{$currency_sign}{$p.total_deposit}</b></td></tr>
<tr><td>Profit Today:</td><td><b>{$currency_sign}{$p.today_profit}</b></td></tr>
<tr><td>Total Profit:</td><td><b>{$currency_sign}{$p.total_profit}</b></td></tr>
</table>
{/if}
<br>
</td></tr></table>
<br>
{/foreach}
</div></div></div></div>
{include file="footer.tpl"}
