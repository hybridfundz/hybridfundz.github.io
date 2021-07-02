<?php /* Smarty version 3.1.27, created on 2021-04-20 09:49:53
         compiled from "my:editaccount_2" */ ?>
<?php
/*%%SmartyHeaderCode:1973393642607ea3c187f640_27812257%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3343014239e3e2b8908ea06697548cf733a73735' => 
    array (
      0 => 'my:editaccount_2',
      1 => 1618912193,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1973393642607ea3c187f640_27812257',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_607ea3c1882bb6_83547871',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_607ea3c1882bb6_83547871')) {
function content_607ea3c1882bb6_83547871 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1973393642607ea3c187f640_27812257';
?>
 <tr> <td>E-mail address:</td> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><?php }
}
?>