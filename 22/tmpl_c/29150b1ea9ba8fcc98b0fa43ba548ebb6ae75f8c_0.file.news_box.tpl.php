<?php /* Smarty version 3.1.27, created on 2020-09-21 11:06:17
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/news_box.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1198723955f68c169e81cb1_35813139%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29150b1ea9ba8fcc98b0fa43ba548ebb6ae75f8c' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/news_box.tpl',
      1 => 1599425152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1198723955f68c169e81cb1_35813139',
  'variables' => 
  array (
    'settings' => 0,
    'news' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f68c169e915d6_64603134',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f68c169e915d6_64603134')) {
function content_5f68c169e915d6_64603134 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/bfinftjy/crypto-scoot.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1198723955f68c169e81cb1_35813139';
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