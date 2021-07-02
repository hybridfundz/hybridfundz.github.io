{include file="header.tpl"}
<title>Dashboard</title>

{loaddata name="user_notices" var=notices}

{if $notices}
<ul style="color:red">
{foreach from=$notices item=n}
<li><b>{$n.title}</b> {$n.text|nl2br}
<form method=post>
<input type=hidden name=a value=user_notices>
<input type=hidden name=action value=notified>
<input type=hidden name=id value={$n.id}>
<input type=submit value="Dismiss">
</form>
{/foreach}
</ul>
{/if}

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


    
<div class="account_mid">
  <div class="mem_mid"> <span><img src="styles/images/menmid1.png" alt=""/></span>
    <h2>$<b>{$ab_formated.total}</b></h2>
    <p>Account Balance</p>
  </div>
  <div class="mem_mid"> <span><img src="styles/images/menmid2.png" alt=""/></span>
    <h2>$<b>{$ab_formated.earning}</b></h2>
    <p>Earned Total</p>
  </div>
  <div class="mem_mid"> <span><img src="styles/images/menmid3.png" alt=""/></span>
    <h2>$<b>{$ab_formated.active_deposit}</b></h2>
    <p>Active Deposit</p>
  </div>
</div>

<div class="myacc_links"> <a href="?a=earnings" class="acc_button">Earning History</a> <a href="?a=withdraw_history" class="acc_button">Total Withdrawals</a> <a href="?a=withdraw" class="acc_button">Withdraw Funds</a> <a href="?a=deposit" class="acc_button">Make New Deposit</a> </div>

<div class="account-bottom">
  <div class="detailed-stats-box one"> <span><img src="styles/images/last_deposit_icon.png" alt=""/></span>
    <h3>$<b>{$last_deposit|default:"n/a"}</b></h3>
    <p>Last Deposit</p>
  </div>
  <div class="detailed-stats-box two"> <span><img src="styles/images/last_withdreaw_icon.png" alt=""/></span>
    <h3>$<b>{$last_withdrawal|default:"n/a"}</b></h3>
    <p>Last Withdrawal</p>
  </div>
  <div class="detailed-stats-box three"> <span><img src="styles/images/total_withdraw_icon.png" alt=""/></span>
    <h3>$<b>{$ab_formated.withdrawal}</b></h3>
    <p>Total Withdrew</p>
  </div>
  <div class="detailed-stats-box four"> <span><img src="styles/images/total_deposit_icon.png" alt=""/></span>
    <h3>$<b>{$ab_formated.deposit}</b></h3>
    <p>Total Deposit</p>
  </div>
</div>

</div>
</div>

  </div>
</div>
{section name=p loop=$ps}
  {if $ps[p].pending_col > 0}{$ps[p].pending_col} {$ps[p].name} deposit{if $ps[p].pending_col > 1}s{/if} of {$currency_sign}{$ps[p].pending_amount} total pending<br>{/if}
{/section}



{include file="footer.tpl"}