<?php /* Smarty version 3.1.27, created on 2022-07-17 00:08:56
         compiled from "C:\Users\Administrator\Desktop\xampp56\htdocs\ggc\tmpl\index_last_deposits.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1347262d336f8680622_29799116%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65f36dbfa99201dafcdd0728fe043de934983e5d' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\xampp56\\htdocs\\ggc\\tmpl\\index_last_deposits.tpl',
      1 => 1599410754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1347262d336f8680622_29799116',
  'variables' => 
  array (
    'settings' => 0,
    'last_deposits' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62d336f86947d6_72188273',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62d336f86947d6_72188273')) {
function content_62d336f86947d6_72188273 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\Users\\Administrator\\Desktop\\xampp56\\htdocs\\ggc\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1347262d336f8680622_29799116';
if ($_smarty_tpl->tpl_vars['settings']->value['index_last_deposits']) {?>
<?php echo loaddata_smarty(array('name'=>"transactions",'limit'=>$_smarty_tpl->tpl_vars['settings']->value['index_last_deposits'],'type'=>"deposit",'var'=>"last_deposits"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['last_deposits']->value) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=4 class=title>Last Deposits</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['last_deposits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
<tr>
 <td class=menutxt><img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['ec']);?>
.gif"></td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['amount']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['date']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</td>
 </td>
</tr>
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
</table>
<?php }

}
}
?>