<?php /* Smarty version 3.1.27, created on 2020-09-21 11:06:17
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/index_last_deposits.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17429896855f68c169df6f97_81332296%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7c79ce0088aa2ae079507ed801c1a36a67cffeb' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/index_last_deposits.tpl',
      1 => 1599425154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17429896855f68c169df6f97_81332296',
  'variables' => 
  array (
    'settings' => 0,
    'last_deposits' => 0,
    's' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f68c169e05668_81440164',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f68c169e05668_81440164')) {
function content_5f68c169e05668_81440164 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/bfinftjy/crypto-scoot.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '17429896855f68c169df6f97_81332296';
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