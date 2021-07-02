<?php /* Smarty version 3.1.27, created on 2021-01-22 21:02:24
         compiled from "my:_emailbody_change_account" */ ?>
<?php
/*%%SmartyHeaderCode:2077965542600b3d6004d292_36076832%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8594f47af68d54b8edf3145e9acca31cd65213d9' => 
    array (
      0 => 'my:_emailbody_change_account',
      1 => 1611349344,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '2077965542600b3d6004d292_36076832',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_600b3d6005b779_57612229',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_600b3d6005b779_57612229')) {
function content_600b3d6005b779_57612229 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2077965542600b3d6004d292_36076832';
?>
Hello #name#,

Your account data has been changed from ip #ip#


New information:

Password: #password#
E-mail address: #email#

Contact us immediately if you did not authorize this change.

Thank you.<?php }
}
?>