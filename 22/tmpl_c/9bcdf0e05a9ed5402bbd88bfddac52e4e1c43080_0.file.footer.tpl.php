<?php /* Smarty version 3.1.27, created on 2021-06-28 11:28:21
         compiled from "/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:166494985760d9b25530d4a9_07696416%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bcdf0e05a9ed5402bbd88bfddac52e4e1c43080' => 
    array (
      0 => '/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/footer.tpl',
      1 => 1609542521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166494985760d9b25530d4a9_07696416',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60d9b2553146f6_35896102',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60d9b2553146f6_35896102')) {
function content_60d9b2553146f6_35896102 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '166494985760d9b25530d4a9_07696416';
?>
<div class="solidContainer">
  <div class="solidInner fadeInUp wow">
    <h3>We accept the following:</h3>
    <div class="solid"> <img src="styles/images/solid.png"/> </div>
  </div>
</div>
<div class="footerContainer">
  <div class="footerInner">
    <div class="ft-ctn-left">
      <p>Copyright &copy; 2020. <a href="?a=home">Crypto Scoot</a></a> <br>
        All Rights Reserved</p>
    </div>
    <div class="ft-ctn-mid">
      <div class="ft-md-part1">
        <ul>
          <li><a href="?a=cust&page=about">About Us</a></li>
          <li><a href="?a=rules">Rules</a></li>
          <li><a href="?a=faq">FAQ</a></li>
        </ul>
        <ul>
          <li><a href="?a=support">Support</a></li>
          <!-- <li><a href="?a=cust&page=investment">Plans</a></li> -->
          <li><a href="?a=cust&page=rating">RateUs</a></li>
        </ul>
      </div>
      <div class="ft-md-part2">
          <br><br>
        <p>E-mail: <a href="?a=home">support@crypto-scoot.com</a></p>
      </div>
    </div>
    <div class="ft-ctn-right">
      <p>Bitcoin accepted here</p>
     
    </div>
  </div>
</div>
<div id="fb-root"></div>
<!--<div class="banner-fix">
      <div class="solid"> <a href="https://t.me/Jaff100" target="blank" class="solidTop1"></a>  </div>
      <div class="banner-fix-text">
        <h3><a href="https://t.me/Jaff100">Telegram Chat</a></h3>
      </div>
    </div>-->

<?php echo '<script'; ?>
 type="text/javascript">
	$(".headerContainer").on("click", ".icon_style li a", function(){
    // alert("fsagfa");
		$(".icon_style li a").removeClass('active');
		$(this).addClass('active');
	})
<?php echo '</script'; ?>
>
<!-- Smartsupp Live Chat script -->
<?php echo '<script'; ?>
 type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '461aaafc0f386788129f0cda374eff8b4a06fde7';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
<?php echo '</script'; ?>
>


</body>
</html><?php }
}
?>