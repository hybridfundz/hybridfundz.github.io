<?php /* Smarty version 3.1.27, created on 2021-05-28 11:46:57
         compiled from "/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:55319658460b0d831093f70_85776827%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd867b5b0ba9a055d3d8f5f7d2964c3791c41178' => 
    array (
      0 => '/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/after_registration.tpl',
      1 => 1609542521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55319658460b0d831093f70_85776827',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b0d8310feb93_28197093',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b0d8310feb93_28197093')) {
function content_60b0d8310feb93_28197093 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '55319658460b0d831093f70_85776827';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>Successful Registration</title>
 <div class="bannerContainer insider">
    <div class="bannerInner">
      <div class="ctn-banner fadeInRight wow">

        <h3>Registration <span>completed</span></h3>
      </div>
    </div>
     </div>
</div>
<div class="clearfix"></div>

<div class="inside_wrap about_top">
  <div class="inside_inner">
    <p>Thank you for joining our program.<br>
You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
</p>
    <p><b>Important:</b> Do not provide your login and password to anyone!</p>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>