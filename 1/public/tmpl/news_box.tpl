<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
	<th colspan=2 class=title>News</th>
</tr>
{section name=s loop=$news}
<tr>
 <td><p align=justify><b>{$news[s].title}</b><br>
  {$news[s].small_text} <a href="?a=news#{$news[s].id}">more</a><br>
  <small><i>{$news[s].d}</i></small></p>
 </td>
</tr>
{/section}
<tr>
 <td><a href="?a=news">All news</a>
 </td>
</tr>
</table>
<br>
