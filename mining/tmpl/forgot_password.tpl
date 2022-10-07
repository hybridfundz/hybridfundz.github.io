<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Hybridminers</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/css/vendor/dots.css">
  <!-- dashdoard main css -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>
  <body>
    <div class="preloader">
      <div class="preloader-container">
        <span class="animated-preloader"></span>
      </div>
    </div>
  
    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

  <div class="full-wh">
    <!-- STAR ANIMATION -->
    <div class="bg-animation">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='stars4'></div>
    </div><!-- / STAR ANIMATION -->
  </div>
  <div class="page-wrapper">

    <!-- account section start -->
    <div class="account-section bg_img" data-background="assets/images/bg/bg-5.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-7">
            <div class="account-card">
              <div class="account-card__header bg_img overlay--one" data-background="assets/images/bg/bg-6.jpg">
                <h2 class="section-title">Welcome to <span class="base--color"> Hybridminers</span></h2>
                <p>Invest for Future in Stable Platform</p>
                 <h2 class="page-title">Password Retrival</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
              </div>



{literal}
<script language=javascript>
function checkform() {
  if (document.forgotform.email.value == '') {
    alert("Please type your username or email!");
    document.forgotform.email.focus();
    return false;
  }
  return true;
}
</script>
{/literal}

{if $errors.turing_image}
Invalid turing image<br><br>
{/if}


{if $found_records == 2}
Your account was found. Please check your e-mail address and follow the confirmation URL to reset your password.
<br><br>
{else}
{if $found_records == 0}
No accounts found for provided info.
<br><br>
{elseif $found_records == 1}
Request was confirmed. Login and password was sent to your email address.
<br><br>
{/if}

<form method=post name=forgotform onsubmit="return checkform();">
<input type=hidden name=a value="forgot_password">
<input type=hidden name=action value="forgot_password">
<table cellspacing=0 cellpadding=2 border=0>


        <div class="account-card__body">
                <h3 class="text-center">Forgot your password:</h3>
                <form class="mt-4">
                  <div class="form-group">
                    <label>EMAIL</label>
                    <input type="text"  class=inpts value='{$frm.email|escape:htmlall}' placeholder="email">
                  </div>

{include file="captcha.tpl" action="forgot_password"}

  <div class="mt-3">
                    <button class="cmn-btn"  class="sbmt" >Forgot your password:</button>
 </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
{/if}
 </div>
           

  </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
  <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <!-- slick slider js -->
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/vendor/wow.min.js"></script>
  <script src="assets/js/contact.js"></script>
  <!-- dashboard custom js -->
  <script src="assets/js/app.js"></script>
  </body>
</html>

{literal}


<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "10a86fe0a4decf9bc15b5ae3675374c43a8268b2a38529b681cf2fba140fa6c3614d96f8c242795acf0632acf41b07fe", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.eu/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>

<div class="fixed-to-bottom">
        <iframe class="ticker" src="http://www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=2020&amp;s=1&amp;mc=USD&amp;mbg=F0F0F0&amp;bs=no&amp;bc=000014&amp;f=verdana&amp;fs=10px&amp;fc=000044&amp;lc=036EB4&amp;lhc=FE9A00&amp;vc=FE9A00&amp;vcu=008000&amp;vcd=0000&amp;" width="100%" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
    </div>  {/literal} 	