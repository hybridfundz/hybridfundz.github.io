<?php /* Smarty version 3.1.27, created on 2022-09-26 11:31:13
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:67520703463318d813388c3_10684781%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a96aba6e42f40fba6f6c410334903c6c31203dca' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/after_registration.tpl',
      1 => 1664187451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67520703463318d813388c3_10684781',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63318d8133c066_00614047',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63318d8133c066_00614047')) {
function content_63318d8133c066_00614047 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '67520703463318d813388c3_10684781';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <!-- inner hero start -->
        <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title"></h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

<h3>Registration completed:</h3><br>

Thank you for joining our program.<br>
You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
<br>
<br>

<b>Important:</b> Do not provide your login and password to anyone!

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>





<?php echo '<script'; ?>
 type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "10a86fe0a4decf9bc15b5ae3675374c43a8268b2a38529b681cf2fba140fa6c3614d96f8c242795acf0632acf41b07fe", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.eu/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);<?php echo '</script'; ?>
>

<div class="fixed-to-bottom">
        <iframe class="ticker" src="http://www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=2020&amp;s=1&amp;mc=USD&amp;mbg=F0F0F0&amp;bs=no&amp;bc=000014&amp;f=verdana&amp;fs=10px&amp;fc=000044&amp;lc=036EB4&amp;lhc=FE9A00&amp;vc=FE9A00&amp;vcu=008000&amp;vcd=0000&amp;" width="100%" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
    </div>   	<?php }
}
?>