{include file="mheader.tpl"}

 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Dashboard</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Account</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

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

                    <a href="/?a=deposit" class="cmn-btn btn-md mt-4">Add Funds</a>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-dollar-sign"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Pending Withdrawal:</span>
                    <h4 class="currency-amount">{$ab_formated.withdraw_pending}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-wallet"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Active Deposit:</span>
                    <h4 class="currency-amount">{$ab_formated.active_deposit}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cubes "></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Deposit</span>
                    <h4 class="currency-amount">${$ab_formated.deposit}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-credit-card"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Withdraw</span>
                    <h4 class="currency-amount">${$ab_formated.withdrawal}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">User: {$userinfo.username}</span>
                    <h4 class="caption">Registration Date: {$userinfo.create_account_date}</h4>
                    <h4 class="caption">Last Access: {$last_access|default:"n/a"}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Mail Us admin@hybridminers.io</span>
                    <h4 class="caption"> Or  admin@hybridminers.io</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
                
                </div><!-- d-widget-two end -->
            
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Your referral program link. Copy and share.</span>
                    <h4 class="caption"><a href="{$settings.site_url}/?ref={$userinfo.username}"> {$settings.site_url}/?ref={$userinfo.username}</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
             
              </div>
              

              </div>
        </div>
      </div>
    </div>
    <!-- dashboard section end -->

{include file="mfooter.tpl"}
