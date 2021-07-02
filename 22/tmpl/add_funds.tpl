{include file="header.tpl"}
<title>Add Funds</title>
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


{if $frm.say eq 'deposit_success'}
<h3>The deposit has been successfully saved.</h3>
<br><br>
{/if}

{if $frm.say eq 'deposit_saved'}
<h3>The deposit has been saved. It will became active when the administrator checks statistics.</h3><br><br>
{/if}

<h3>Deposit to Account:</h3>
<br>
<form method=post>
<input type=hidden name=a value=deposit>
<input type=hidden name=h_id value=-1>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your account balance ({$currency_sign}):</td>
 <td align=right>{$currency_sign}{$ab_formated.total}</td>
</tr>
<tr><td>&nbsp;</td>
 <td align=right>
  <small>
{section name=p loop=$ps}
   {if $ps[p].balance > 0}{$currency_sign}{$ps[p].balance} of {$ps[p].name}<br>{/if}
{/section}
  </small>
 </td>
</tr><tr>
 <td>Amount to Spend ({$currency_sign}):</td>
 <td align=right><input type=text name=amount value='10.00' class=inpts size=15 style="text-align:right;"></td>
</tr>
<tr>
  <td colspan=2>
   <table cellspacing=0 cellpadding=2 border=0>
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
</div></div></div></div>
{include file="footer.tpl"}
