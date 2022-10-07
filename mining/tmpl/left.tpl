				   <!-- Image Table: Start -->

{if $frm.a != 'login' && $frm.a != 'login_tfa'}
{include file="login_box.tpl"}
{/if}
				   
{if $settings.show_stats_box}
<br>
{include file="stats_box.tpl"}
{/if}
                                   
{if $settings.show_info_box}
<br>
{include file="info_box.tpl"}
{/if}

{include file="index_last_add_funds.tpl"}
{include file="index_last_deposits.tpl"}
{include file="index_last_withdrawals.tpl"}
{include file="index_top_referrals.tpl"}
{include file="index_top_investors.tpl"}

					<!-- Stats Table: End -->

