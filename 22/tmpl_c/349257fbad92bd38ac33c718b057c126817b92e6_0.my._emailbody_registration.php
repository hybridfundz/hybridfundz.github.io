<?php /* Smarty version 3.1.27, created on 2021-05-28 11:46:55
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:143362974260b0d82f97aa24_70232451%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1622202415,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '143362974260b0d82f97aa24_70232451',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b0d82f9d6c31_96892733',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b0d82f9d6c31_96892733')) {
function content_60b0d82f9d6c31_96892733 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '143362974260b0d82f97aa24_70232451';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>