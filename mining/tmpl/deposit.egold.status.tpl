{include file="mheader.tpl"}

 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Deposit Confirm</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

<h3>Your Deposit status</h3><br>
<br>
{if $process eq 'yes' || $frm.m_status eq 'success'}
We have received your deposit. Thank you!
{else}
We have not received your deposit. Please try again.
{/if}
{include file="mfooter.tpl"}