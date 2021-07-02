<?php /* Smarty version 3.1.27, created on 2021-01-17 09:19:17
         compiled from "my:_emailbody_direct_signup_notification" */ ?>
<?php
/*%%SmartyHeaderCode:211425139060040115ea2308_72125275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397e51cbb3180e814e23de8d4b4eeafb6cb04684' => 
    array (
      0 => 'my:_emailbody_direct_signup_notification',
      1 => 1610875157,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '211425139060040115ea2308_72125275',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60040115ef9264_16192990',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60040115ef9264_16192990')) {
function content_60040115ef9264_16192990 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '211425139060040115ea2308_72125275';
?>
Dear #name# (#username#)

You have a new direct signup on #site_name#
User: #ref_username#
Name: #ref_name#
E-mail: #ref_email#

Thank you.<?php }
}
?>