<?php /* Smarty version 3.1.27, created on 2022-10-07 00:05:29
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1319018783633f6d49de7663_65051903%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d8851584940d0644ceff9223375f099d5a57b35' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/footer.tpl',
      1 => 1664318447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1319018783633f6d49de7663_65051903',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633f6d49de9772_51903341',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633f6d49de9772_51903341')) {
function content_633f6d49de9772_51903341 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1319018783633f6d49de7663_65051903';
?>
 <!-- footer section start -->
        <footer class="footer bg_img" data-background="assets/images/bg/bg-7.jpg">
            <div class="footer__top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <a href="#0" class="footer-logo"><img src="assets/images/logo.png" alt="image"></a>
                            <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-4">
                                <li><a href="/">Home</a></li>
                                <li><a href="?a=rules">Privacy & Policy</a></li>
                                <li><a href="?a=rules">Terms & Conditions</a></li>
                            
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-md-left text-center">
                            <p>© 2022 <a href='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
' class="forCopyright"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</a>. All rights reserved</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                                <li><a href="#0" data-toggle="tooltip" data-placement="top" title="facebook"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#0" data-toggle="tooltip" data-placement="top" title="twitter"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-p"></i></a></li>
                                <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer section end -->
    </div>
    <!-- page-wrapper end -->
    <!-- jQuery library -->
    <?php echo '<script'; ?>
 src="assets/js/vendor/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <!-- bootstrap js -->
    <?php echo '<script'; ?>
 src="assets/js/vendor/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <!-- slick slider js -->
    <?php echo '<script'; ?>
 src="assets/js/vendor/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/vendor/wow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/contact.js"><?php echo '</script'; ?>
>
    <!-- dashboard custom js -->
    <?php echo '<script'; ?>
 src="assets/js/app.js"><?php echo '</script'; ?>
>
</body>
  

<?php echo '<script'; ?>
 type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "10a86fe0a4decf9bc15b5ae3675374c43a8268b2a38529b681cf2fba140fa6c3614d96f8c242795acf0632acf41b07fe", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.eu/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);<?php echo '</script'; ?>
>

</html>
        <?php }
}
?>