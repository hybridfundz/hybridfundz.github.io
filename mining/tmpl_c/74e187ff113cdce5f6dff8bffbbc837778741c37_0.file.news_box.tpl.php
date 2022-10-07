<?php /* Smarty version 3.1.27, created on 2022-07-17 00:08:56
         compiled from "C:\Users\Administrator\Desktop\xampp56\htdocs\ggc\tmpl\news_box.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1130662d336f8b5e496_72489975%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74e187ff113cdce5f6dff8bffbbc837778741c37' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\xampp56\\htdocs\\ggc\\tmpl\\news_box.tpl',
      1 => 1599410752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1130662d336f8b5e496_72489975',
  'variables' => 
  array (
    'settings' => 0,
    'news' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62d336f8b74cf9_61309931',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62d336f8b74cf9_61309931')) {
function content_62d336f8b74cf9_61309931 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\Users\\Administrator\\Desktop\\xampp56\\htdocs\\ggc\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1130662d336f8b5e496_72489975';
?>
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=2 class=title>News</th>
</tr>
<?php echo loaddata_smarty(array('name'=>"news",'var'=>'news','limit'=>(($tmp = @$_smarty_tpl->tpl_vars['settings']->value['last_news_count'])===null||$tmp==='' ? 5 : $tmp)),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$foreach_n_Sav = $_smarty_tpl->tpl_vars['n'];
?>
<tr>
 <td><p align=justify><b><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['title'], ENT_QUOTES, 'UTF-8', true));?>
</b><br>
  <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['small_text'], ENT_QUOTES, 'UTF-8', true));?>
 <a href="<?php echo smarty_modifier_myescape(encurl("?a=news#".((string)$_smarty_tpl->tpl_vars['n']->value['id'])));?>
">more</a><br>
  <small><i><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['n']->value['d']);?>
</i></small></p>
 </td>
</tr>
<?php
$_smarty_tpl->tpl_vars['n'] = $foreach_n_Sav;
}
?>
<tr>
 <td><a href="<?php echo smarty_modifier_myescape(encurl("?a=news"));?>
">All news</a>
 </td>
</tr>
</table>
<br>
<?php }
}
?>