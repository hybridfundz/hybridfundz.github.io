{include file="mheader.tpl"}

 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Edit Account</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->                <section class="pb-120">             <div class="container">                 <div class="row justify-content-center">                     <div class="col-lg-10">                         <div class="subscribe-wrapper bg_img" data-background="assets/images/bg/bg-5.jpg"> 

<h3>Confirm Your Identity:</h3><br><br>
<form action="index.php" method=post name=editform>
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
<input type=hidden name=action2 value=confirm>

{if $say == 'invalid_code'}
<b style="color: red">Invalid Confirmation Code</b><br><br>
{/if}

The system sent you an e-mail with the confirmation code used to confirm your identity. Please check your e-mail.
<br><br>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your Confirmation Code:</td>
 <td><input type=text name=account_update_confirmation_code class=inpts size=30></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>
                                                     </div>                                              </div>                 </div>             </div>         </section>
{include file="mfooter.tpl"}

