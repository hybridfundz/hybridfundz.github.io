</div>

              </td>
              </tr>
            </table>
            <!-- Main: END -->

              </td>

{if $settings.show_news_box}
              <td class=line valign="top" width=1><img src=images/q.gif width=1 height=1></td>          
              <td width=300 align=center class=bgcolorright><img src="images/q.gif" width=180 height=1>
{if $settings.show_news_box}
{include file="news_box.tpl"}
{/if}
                                   
              </td>
{/if}
             </tr>
           </table>
		  </td>
		 </tr>
	   </table>
	 </td>
  </tr>



  <tr> 
    <td height="19" class="forCopyright">All Rights Reserved. <a href='{$settings.site_url}' class="forCopyright">{$settings.site_name}</a></td>
  </tr>
</table>
</center></body>
</html>