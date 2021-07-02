<?php /* Smarty version 3.1.27, created on 2020-09-29 20:51:01
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:399954315f73d6758ad4c3_91945373%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f3f04e401182058d07b8912d9dc9023d487b3e5' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/login_redirect.tpl',
      1 => 1599425154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '399954315f73d6758ad4c3_91945373',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f73d6758e0412_25367612',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f73d6758e0412_25367612')) {
function content_5f73d6758e0412_25367612 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/bfinftjy/crypto-scoot.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '399954315f73d6758ad4c3_91945373';
?>
<html>
<head>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
">
</head>
<body>
<center>
Hello <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
. You are redirecting to your 
<a href=?a=account>account</a> now.
<body>
</html><?php }
}
?>