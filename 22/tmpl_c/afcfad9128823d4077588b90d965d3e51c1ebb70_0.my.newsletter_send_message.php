<?php /* Smarty version 3.1.27, created on 2021-01-10 08:49:54
         compiled from "my:newsletter_send_message" */ ?>
<?php
/*%%SmartyHeaderCode:9612798405ffabfb28d1154_46030261%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afcfad9128823d4077588b90d965d3e51c1ebb70' => 
    array (
      0 => 'my:newsletter_send_message',
      1 => 1610268594,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '9612798405ffabfb28d1154_46030261',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ffabfb28fc6a0_38246599',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ffabfb28fc6a0_38246599')) {
function content_5ffabfb28fc6a0_38246599 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9612798405ffabfb28d1154_46030261';
?>
 <?php echo '<script'; ?>
>document.getElementById("self_menu<?php echo $_smarty_tpl->tpl_vars['message']->value['no']-1;?>
").style.display="none";<?php echo '</script'; ?>
> <div id="self_menu<?php echo $_smarty_tpl->tpl_vars['message']->value['no'];?>
">Just sent to <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
<br>Total <?php echo $_smarty_tpl->tpl_vars['message']->value['no'];?>
 messages sent.</div> <?php echo '<script'; ?>
>var menu = document.getElementById("self_menu<?php echo $_smarty_tpl->tpl_vars['message']->value['no'];?>
"); document.getElementById("newsletterplace").appendChild(menu);<?php echo '</script'; ?>
> <?php }
}
?>