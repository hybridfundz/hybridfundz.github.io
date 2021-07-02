				   <!-- Image Table: Start -->
{if $frm.a ne 'login'}
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
					<!-- Stats Table: End -->
{if $settings.show_kitco_dollar_per_ounce_box == 1}
					<!-- Image Table: Start -->
                    <table cellspacing=0 cellpadding=2 border=0 width=100%>
                     <tr>
	                  <th class=title>Dollar price per ounce</th>
                     </tr><tr>
	                  <td align=center><img src="http://kitconet.com/charts/metals/gold/t24_au_en_usoz_2.gif" width=172 height=124></td>
					 </tr>
					</table>
					<br>
{/if}
{if $settings.show_kitco_euro_per_ounce_box == 1}
					<!-- Image Table: Start -->
                    <table cellspacing=0 cellpadding=2 border=0 width=100%>
                     <tr>
	                  <th class=title>Euro price per ounce</th>
                     </tr><tr>
	                  <td align=center><img src="http://kitconet.com/charts/metals/gold/t24_au_en_euoz_2.gif" width=172 height=124></td>
					 </tr>
					</table>
					<br>
{/if}
					<!-- Image Table: End -->

