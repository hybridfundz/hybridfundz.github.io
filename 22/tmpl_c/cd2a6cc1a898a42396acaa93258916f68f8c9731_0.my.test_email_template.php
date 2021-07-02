<?php /* Smarty version 3.1.27, created on 2021-01-09 20:31:27
         compiled from "my:test_email_template" */ ?>
<?php
/*%%SmartyHeaderCode:14765547295ffa129f3569c9_48026979%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd2a6cc1a898a42396acaa93258916f68f8c9731' => 
    array (
      0 => 'my:test_email_template',
      1 => 1610224287,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '14765547295ffa129f3569c9_48026979',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ffa129f378347_81867838',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ffa129f378347_81867838')) {
function content_5ffa129f378347_81867838 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14765547295ffa129f3569c9_48026979';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header_popup", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == "success") {?> <div class="alert alert-success">Test Mail has been sent.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['errors']['text']) {?> <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['result']->value['errors']['text'];?>
</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['errors']['html']) {?> <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['result']->value['errors']['html'];?>
</div> <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer_popup", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>