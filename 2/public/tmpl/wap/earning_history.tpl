<?xml version="1.0"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">

<wml>
<card title="Transactions">
<p>

{if $qtrans > 0}
{section name=trans loop=$trans}
<b>{$trans[trans].transtype}:</b> $$ {$trans[trans].actual_amount} &nbsp;
<small>{$trans[trans].d}</small><br/>
<small>{$trans[trans].description}</small>
<br/><br/>
{/section}
{else}
<tr>
<center><b>No transactions found</b></center>
<br/>
{/if}
<br/>

{if $qtrans > 0}
<b>Total for all time:</b> &nbsp;
$$ {$allsum}
{/if}
<br/>

{if $colpages > 1}
<center>
{if $prev_page > 0}
 <a href="wap.php?a=earnings&amp;page={$prev_page}">&lt;&lt;</a>
{/if}
{section name=p loop=$pages}
{if $pages[p].current == 1}
{$pages[p].page}
{else}
 <a href="wap.php?a=earnings&amp;page={$pages[p].page}">{$pages[p].page}</a>
{/if}
{/section}
{if $next_page > 0}
 <a href="wap.php?a=earnings&amp;page={$next_page}">&gt;&gt;</a>
{/if}
</center>
{/if}
<br/>
<a href="wap.php?home">Home</a><br/>
<a href="wap.php?a=account">Account</a><br/>
<a href="wap.php?a=logout">Logout</a><br/>
</p>
</card>
</wml>
