<?xml version="1.0"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">

<wml>
<card title="Your account">

<p>
<b>Your account:</b><br/>

<b>User:</b> &nbsp; {$userinfo.username}<br/>
<b>Registration Date:</b> &nbsp; {$userinfo.create_account_date}<br/>
<b>Last Access:</b> &nbsp; {$last_access}<br/><br/>

<b>Account Balance:</b> &nbsp; $${$ab_formated.total}<br/>
<b>Total Earned:</b> &nbsp; $${$ab_formated.earning}<br/>
<b>Active Deposit:</b> &nbsp; $${$ab_formated.active_deposit}<br/><br/>

{if $last_deposit}
<b>Last Deposit:</b> &nbsp; $${$last_deposit}<br/>
{/if}
{if $ab_formated.deposit != 0}
<b>Total Deposit:</b> &nbsp; $${$ab_formated.deposit}<br/>
{/if}
{if $last_withdrawal}
<b>Last Withdrawal:</b> &nbsp; $${$last_withdrawal} &nbsp; <small>{$last_withdrawal_date}</small><br/>
{/if}
{if $ab_formated.withdrawal > 0}
<b>Total Withdrew:</b> &nbsp; $${$ab_formated.withdrawal}<br/>
{/if}
<br/>
<a href="wap.php?home">Home</a><br/>
<a href="wap.php?a=earnings">History</a><br/>
<a href="wap.php?a=logout">Logout</a><br/>
</p>
</card>
</wml>
