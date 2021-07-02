{include file="header.tpl"}
<title>Transactions</title>
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


<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
 <td class=inheader><b>Type</b></td>
 <td class=inheader width=200><b>Amount</b></td>
 <td class=inheader width=170><b>Date</b></td>
</tr>
{foreach from=$trans item=t}
<tr>
 <td><b>{$t.transtype}</b></td>
 <td width=200 align=right><b>{$currency_sign} {$t.amount}</b> <img src="images/{$t.ec}.gif" align=absmiddle hspace=1 height=17>{if $t.type == 'withdraw_pending'}<a href="{"?a=cancelwithdraw&id=`$t.id`&return=`$return`&"|encurl}" onclick="return confirm('Are you sure you want to delete this request?')">[cancel]</a>{/if}</td>
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
</table>

{paginator col=$paginator.col cur=$paginator.cur url="javascript:go('%s')"}
</div></div></div></div>
{include file="footer.tpl"}