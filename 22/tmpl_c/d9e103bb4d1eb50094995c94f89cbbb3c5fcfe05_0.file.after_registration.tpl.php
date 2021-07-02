<?php /* Smarty version 3.1.27, created on 2020-09-26 16:54:01
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19031120315f6faa6906d3a1_40178956%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9e103bb4d1eb50094995c94f89cbbb3c5fcfe05' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/after_registration.tpl',
      1 => 1600726630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19031120315f6faa6906d3a1_40178956',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f6faa69097874_63734449',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f6faa69097874_63734449')) {
function content_5f6faa69097874_63734449 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19031120315f6faa6906d3a1_40178956';
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