<?php /* Smarty version 3.1.27, created on 2020-09-21 11:06:17
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/index_last_add_funds.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15696090665f68c169dda251_51806766%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f970e7310525e050325b1e4e95dbb68798813664' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/index_last_add_funds.tpl',
      1 => 1599425154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15696090665f68c169dda251_51806766',
  'variables' => 
  array (
    'settings' => 0,
    'last_add_funds' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f68c169dec368_37060776',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f68c169dec368_37060776')) {
function content_5f68c169dec368_37060776 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/bfinftjy/crypto-scoot.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '15696090665f68c169dda251_51806766';
if ($_smarty_tpl->tpl_vars['settings']->value['index_last_add_funds']) {?>
<?php echo loaddata_smarty(array('name'=>"transactions",'limit'=>$_smarty_tpl->tpl_vars['settings']->value['index_last_add_funds'],'type'=>"add_funds",'var'=>"last_add_funds"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['last_add_funds']->value) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=4 class=title>Last Add Funds</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['last_add_funds']->value;
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