<?php /* Smarty version 3.1.27, created on 2021-04-06 12:58:36
         compiled from "my:_emailbody_forgot_password_confirm" */ ?>
<?php
/*%%SmartyHeaderCode:1373459268606c5afca9d2a7_42436279%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84ab1d548fc36cfa2bc8a7ec7220b8e5bad3d3b' => 
    array (
      0 => 'my:_emailbody_forgot_password_confirm',
      1 => 1617713916,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1373459268606c5afca9d2a7_42436279',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_606c5afcaaa389_21130200',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_606c5afcaaa389_21130200')) {
function content_606c5afcaaa389_21130200 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1373459268606c5afca9d2a7_42436279';
?>
Hello #name#,

Please confirm your reqest for password reset.

Copy and paste this link to your browser:
#site_url#/?a=forgot_password&action=confirm&c=#confirm_string#

Thank you.
#site_name#<?php }
}
?>