<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Hybridminers</title>
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
                 <h2 class="page-title">LOGIN</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">Home</a></li>
              </div>


{literal}
<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>
{/literal}
<div class="account-card__body">
{if $frm.say eq 'invalid_login'}
<h3>Login error:</h3><br><br>

<div class="error">Your login or password or turing image code is wrong. Please check this information.</div>
{if $bf_tries.status}
{if $bf_tries.left == 0}
<div class="error">You have already maximum times entered incorrectly login info. Your account is blocked. Check your email to active.</div>
{else}
<div class="error">You have <b>{$bf_tries.left}</b> tries to entered correctly login information befor blocking.</div>
{/if}
{/if}

{/if}
<form method=post name=mainform onsubmit="return checkform()">
  <input type=hidden name=a value='do_login'>
  <input type=hidden name=follow value='{$frm.follow}'>
  <input type=hidden name=follow_id value='{$frm.follow_id}'>


              <div class="account-card__body">
                <h3 class="text-center">Login</h3>
                <form class="mt-4">
                  <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" value='{$frm.username|escape:"html"}' name=username placeholder="Enter user name">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter password" name=password value="">
                  </div>
                   </tr>
                {include file="captcha.tpl" action="login"}
                <tr>
                  <div class="form-row">
                    <div class="col-sm-6">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Remmber me</label>
                      </div>
                    </div>
                     </div>
                  <div class="mt-3">
                    <button class="cmn-btn"  id="submit" >Login Now</button>
                  </div>
                </form>
                <p class="f-size-14"> <a href="?a=forgot_password" class="base--color">Forgot Password?</a></p>
              </div>
              <div class="col-sm-6 text-sm-right">
                      <p class="f-size-14">Haven't an account? <a href="?a=signup" class="base--color">Sign Up</a></p>
                    </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <!-- account section end -->

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