<?php /* Smarty version 3.1.27, created on 2022-10-07 00:05:29
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:499615864633f6d49db6090_21715335%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2150c68f312a74007e7402ad01cba9be1a402125' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/news.tpl',
      1 => 1664152930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '499615864633f6d49db6090_21715335',
  'variables' => 
  array (
    'frm' => 0,
    'new' => 0,
    'news' => 0,
    'n' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633f6d49ddb4e8_54503583',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633f6d49ddb4e8_54503583')) {
function content_633f6d49ddb4e8_54503583 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '499615864633f6d49db6090_21715335';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['frm']->value['id']) {?>

<?php echo loaddata_smarty(array('name'=>"news_item",'id'=>$_smarty_tpl->tpl_vars['frm']->value['id'],'var'=>'new'),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['new']->value) {?>
<h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['new']->value['title']);?>
</h3>
<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['new']->value['full_text']);?>

<?php } else { ?>
Not Found
<?php }?>

<?php } else { ?>

<h3>News</h3><br>

<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<?php echo loaddata_smarty(array('name'=>"news",'var'=>'news','page'=>$_smarty_tpl->tpl_vars['frm']->value['p'],'limit'=>20,'pages_var'=>'pages'),$_smarty_tpl);?>

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
 <td align=justify><a name="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['n']->value['id']);?>
"></a><a href="<?php echo smarty_modifier_myescape(encurl("?a=news&id=".((string)$_smarty_tpl->tpl_vars['n']->value['id'])));?>
"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['n']->value['title']);?>
</a><br>
  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['n']->value['full_text']);?>
<br>
  <small><i><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['n']->value['date']);?>
</i></small>
 </td>
</tr>
<?php
$_smarty_tpl->tpl_vars['n'] = $foreach_n_Sav;
}
if (!$_smarty_tpl->tpl_vars['n']->_loop) {
?>
<tr>
 <td colspan=3 align=center>No news found</td>
</tr>
<?php
}
?>
</table>

<center>
<?php echo paginator(array('col'=>$_smarty_tpl->tpl_vars['pages']->value['col'],'cur'=>$_smarty_tpl->tpl_vars['pages']->value['cur'],'url'=>encurl("?a=news&p=%s")),$_smarty_tpl);?>

</center>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>