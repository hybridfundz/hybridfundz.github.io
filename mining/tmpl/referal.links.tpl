{include file="mheader.tpl"}

 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Referal Links</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- dashboard section start -->
    <div class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row mb-none-30">
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Account Balance</span>
                    <h4 class="currency-amount">${$ab_formated.total} </h4>

                    <a href="/?a=deposit" class="cmn-btn btn-md mt-4">{$settings.site_url}/{"?ref=`$user.username`"|encurl}</a>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-dollar-sign"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
    <!-- inner hero end -->
<h3>Referral Links.</h3><br><br>

<a href="{$settings.site_url}/{"?ref=`$user.username`"|encurl}">
The best internet investment<br>
Earn a XXX% daily profit!
</a>

<br><br>
<textarea class=inpts cols=60 rows=4>
<a href={$settings.site_url}/{"?ref=`$user.username`"|encurl}>
The best internet investment<br>
Earn a XXX% daily profit!
</a>
</textarea><br><br><br>


<a href={$settings.site_url}/{"?ref=`$user.username`"|encurl}>
{$settings.site_name}.<br>
Easy. Safe. No risk.
</a>

<br><br>
<textarea class=inpts cols=60 rows=4>
<a href={$settings.site_url}/{"?ref=`$user.username`"|encurl}>
{$settings.site_name}.<br>
Easy. Safe. No risk.
</a>
</textarea><br><br><br>


<a href={$settings.site_url}/{"?ref=`$user.username`"|encurl}>
XX% daily for X weeks - total XX% guaranteed
</a>
<br><br>
<textarea class=inpts cols=60 rows=4>
<a href={$settings.site_url}/{"?ref=`$user.username`"|encurl}>
XX% daily for X weeks - total XX% guaranteed
</a>
</textarea><br><br><br>



{include file="footer.tpl"}
