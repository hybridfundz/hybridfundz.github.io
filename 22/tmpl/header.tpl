<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="google-site-verification" content="RyUdXUPCHphxqbMZXQ3jkvxCYpw0UwTsTQwmeTNwXrc" />
<link rel="shortcut icon" href="styles/images/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
<!-- font-family: 'Titillium Web', sans-serif; -->
<link href='styles/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='styles/animate.css' rel='stylesheet' type='text/css'>
<link href='styles/custom.css' rel='stylesheet' type='text/css'>
<script src='styles/jquery.js' type='text/javascript'></script>
<script src="styles/wow.js"></script>
<script src="styles/wow.min.js"></script>
<script type="text/javascript" src="styles/bootstrap.min.js"></script>
<script src="styles/setting2.js" type='text/javascript'></script>

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
          {if $userinfo.logged != 1}   
	  <a href="?a=login" class="login">login</a> 
	  <a href="?a=signup" class="signup">signup</a>
	  	 {else}
	  	 
	  	   <a href="?a=account" class="login">dashboard</a> 
	  <a href="?a=logout" class="signup">logout</a>
	  	 {/if}
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
