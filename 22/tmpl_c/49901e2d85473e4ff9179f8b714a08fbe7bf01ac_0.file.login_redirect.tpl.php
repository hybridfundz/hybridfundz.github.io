<?php /* Smarty version 3.1.27, created on 2021-05-29 17:07:28
         compiled from "/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71354971260b274d0b791a7_02684420%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49901e2d85473e4ff9179f8b714a08fbe7bf01ac' => 
    array (
      0 => '/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/login_redirect.tpl',
      1 => 1609542521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71354971260b274d0b791a7_02684420',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b274d0bc74e3_35916344',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b274d0bc74e3_35916344')) {
function content_60b274d0bc74e3_35916344 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u355647698/domains/crypto-scoot.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '71354971260b274d0b791a7_02684420';
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