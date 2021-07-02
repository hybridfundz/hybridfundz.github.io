<?php /* Smarty version 3.1.27, created on 2021-06-21 07:34:39
         compiled from "my:admin_menu_section" */ ?>
<?php
/*%%SmartyHeaderCode:91643965760d0410fc617b6_34166608%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1c96949e441e6f659c3bd4ad08539b9083d54f2' => 
    array (
      0 => 'my:admin_menu_section',
      1 => 1624260879,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '91643965760d0410fc617b6_34166608',
  'variables' => 
  array (
    'section' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60d0410fd0ceb6_84633843',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60d0410fd0ceb6_84633843')) {
function content_60d0410fd0ceb6_84633843 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '91643965760d0410fc617b6_34166608';
?>
 <?php
$_from = $_smarty_tpl->tpl_vars['section']->value['subs'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?> <tr> <td class=menutxt><?php if ($_smarty_tpl->tpl_vars['m']->value['href']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['m']->value['href'];?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['title'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['m']->value['href']) {?></a><?php }?></td> </tr> <?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
?> <?php if ($_smarty_tpl->tpl_vars['section']->value['subs']) {?> <tr> <td class=menutxt>&nbsp;</td> </tr> <?php }?> <?php }
}
?>