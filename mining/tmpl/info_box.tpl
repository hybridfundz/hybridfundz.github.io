{loaddata name="program_stats" stats="start_date" var=start_date}



<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
	<th colspan=2 class=title>Info</th>
</tr>
{if $settings.show_info_box_started == 1}
{loaddata name="program_stats" stats="start_date" var=start_date}
<tr>
	<td class=menutxt><b>Started</b>
        <td class=menutxt align=right>{$start_date|date_format}</td>
</tr>
{/if}
{if $settings.show_info_box_running_days == 1}
{loaddata name="program_stats" stats="days_online" var=days_online}
<tr>
	<td class=menutxt><b>Running days</b></td>
	<td class=menutxt align=right>{$days_online}</td>
</tr>
{/if}
{if $settings.show_info_box_total_accounts}
{loaddata name="program_stats" stats="total_accounts" var=total_accounts}
<tr>
	<td class=menutxt><b>Total accounts</b></td>
	<td class=menutxt align=right>{$total_accounts}</td>
</tr>
{/if}
{if $settings.show_info_box_active_accounts}
{loaddata name="program_stats" stats="active_accounts" var=active_accounts}
<tr>
	<td class=menutxt><b>Active accounts</b></td>
	<td class=menutxt align=right>{$active_accounts}</td>
</tr>
{/if}
{if $settings.show_info_box_vip_accounts}
{loaddata name="program_stats" stats="vip_accounts" var=vip_accounts}
<tr>
	<td class=menutxt><b>VIP accounts</b></td>
	<td class=menutxt align=right>{$vip_accounts}</td>
</tr>
{/if}
{if $settings.show_info_box_deposit_funds == 1}
{loaddata name="program_stats" stats="total_deposits" var=total_deposits}
<tr>
	<td class=menutxt><b>Total deposited</b></td>
	<td class=menutxt align=right>{$total_deposits|fiat}</td>
</tr>
{/if}
{if $settings.show_info_box_today_deposit_funds == 1}
{loaddata name="program_stats" stats="today_deposits" var=today_deposits}
<tr>
	<td class=menutxt><b>Today deposited</b></td>
	<td class=menutxt align=right>{$today_deposits|fiat}</td>
</tr>
{/if}
{if $settings.show_info_box_total_withdraw == 1}
{loaddata name="program_stats" stats="total_withdraw" var=total_withdraw}
<tr>
	<td class=menutxt><b>Total withdraw</b></td>
	<td class=menutxt align=right>{$total_withdraw|fiat}</td>
</tr>
{/if}
{if $settings.show_info_box_today_withdraw_funds == 1}
{loaddata name="program_stats" stats="today_withdraw" var=today_withdraw}
<tr>
	<td class=menutxt><b>Today withdraw</b></td>
	<td class=menutxt align=right>{$today_withdraw|fiat}</td>
</tr>
{/if}
{if $settings.show_info_box_visitor_online == 1}
{loaddata name="program_stats" stats="online_visitors" var=online_visitors}
<tr>
	<td class=menutxt><b>Visitors online</b></td>
	<td class=menutxt align=right>{$online_visitors}</td>
</tr>
{/if}
{if $settings.show_info_box_members_online == 1}
{loaddata name="program_stats" stats="online_members" var=online_members}
<tr>
	<td class=menutxt><b>Members online</b></td>
	<td class=menutxt align=right>{$online_members}</td>
</tr>
{/if}
{if $settings.show_info_box_newest_member == 1}
{loaddata name="program_stats" stats="newest_member" var=newest_member}
<tr>
	<td class=menutxt><b>Newest Member</b></td>
	<td class=menutxt align=right>{$newest_member|default:"N/A"}</td>
</tr>
{/if}
{if $settings.show_info_box_lastaddfunds}
{loaddata name="program_stats" stats="last_addfunds" var=last_addfunds}
 {if $last_addfunds}
        <tr>
	<td class=menutxt><b>Last topup:</b></th>
	<td class=menutxt align=right>{$last_addfunds.amount|fiat:$last_addfunds.ec} ({$last_addfunds.username|escape:html})</td>
	</tr>
 {/if}
{/if}

{if $settings.show_info_box_lastdeposit}
{loaddata name="program_stats" stats="last_deposit" var=last_deposit}
 {if $last_deposit}
        <tr>
	<td class=menutxt><b>Last deposit:</b></th>
	<td class=menutxt align=right>{$last_deposit.amount|fiat:$last_deposit.ec} ({$last_deposit.username|escape:html})</td>
	</tr>
 {/if}
{/if}
	
{if $settings.show_info_box_lastwithdrawal}
{loaddata name="program_stats" stats="last_withdrawal" var=last_withdrawal}
 {if $last_withdrawal}
        <tr>
	<td class=menutxt><b>Last withdraw:</b></td>
	<td class=menutxt align=right>{$last_withdrawal.amount|fiat:$last_withdrawal.ec} ({$last_withdrawal.username|escape:html})</td>
	</tr>
 {/if}
{/if}

{if $settings.show_info_box_last_update == 1}
{loaddata name="program_stats" stats="update_date" var=update_date}
<tr>
	<td class=menutxt><b>Last update</b>
        <td class=menutxt align=right>{$update_date|date_format}</td>
</tr>
{/if}


</table>
<br>
