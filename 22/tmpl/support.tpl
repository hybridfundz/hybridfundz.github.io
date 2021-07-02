{include file="header.tpl"}
<title>Support | Crypto Scoot</title>

 <div class="bannerContainer insider">
    <div class="bannerInner">
      <div class="ctn-banner fadeInRight wow">

        <h3>Contact <span>Us</span></h3>
      </div>
    </div>
     </div>
</div>
<div class="clearfix"></div>


<div class="inside_wrap about_top">
  <div class="inside_inner">
    <p>Do You have any questions? We strongly recommend that you start searching for the necessary information in the <a href="?a=faq">FAQ</a> section. If you need advice or technical assistance, do not hesitate to contact our specialists. Customer support is available around the clock. You just need to send a letter or a request via the feedback form to promptly receive the necessary assistance. Remember that the more detailed the description of your problem is, the sooner it will be solved. Do not forget to indicate your login, if you are a registered user of the website.</p>
  </div>
</div>
<div class="inside_wrap about_mid">
  <div class="inside_inner">
    <div class="companyLeft">
      <div class="companyLeft-part1"> <img src="images/certificate.jpeg" height="450" width="300"> </div>
      <div class="companyLeft-part2">
        <h3>Crypto Scoot </h3>
        <p>47 High Street, London, England, BR7 5AF</p>
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
                  <p><img src="images/certificate.jpeg" alt="" /></p>
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
      <h2>Crypto Scoot- a United Kingdom-based company is a legitimate business operating since 20 January, 2020 that provides its trusted fund management services globally under the UK Company number 12413163. Company's   filing details are avilable on company house website.</h2>
      <!--<div class="companyRight-part companyRight-part1">
        <h3>Phone Number:</h3>
        <p>+19715121953<br>  (24 Hours) <br></p>
      </div>-->
      <div class="companyRight-part companyRight-part2">
        <h3>E-mail Address:</h3>
        <p>support@crypto-scoot.com</p>
      
      </div>
    </div>
  </div>
</div>
<div class="inside_wrap supportform">
  <div class="inside_inner">
<h2 class="section-header"><span>Send Us a Message</span></h2>
    <div class="form-content">


{if $say eq 'send'}
Message has been successfully sent. We will back to you in next 24 hours. Thank you.<br><br>
{else}

<script language=javascript>
{if $userinfo.logged == 1}
{literal}
function checkform() { 
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}
{/literal}
{else}
{literal}
function checkform() {
  if (document.mainform.name.value == '') {
    alert("Please type your full name!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}
{/literal}
{/if}
</script>

<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value=support>
<input type=hidden name=action value=send>

 {if $errors}
  <ul style="color:red">
   {if $errors.turing_image == 1}
    <li>Invalid turing image</li>
   {/if}
   {if $errors.invalid_email == 1}
    <li>Invalid email address</li>
   {/if}
  </ul>
 {/if}

<table cellspacing=5 cellpadding=5 border=0 width="100%">
<tr>
 <td>Your Name:</td>
{if $userinfo.logged}
 <td><b>{$userinfo.name}</b></td>
{else}
 <td><input type="text" name="name" value="{$frm.name|escape:htmlall}" size=30 class=inpts></td>
{/if}
</tr>
<tr>
 <td>Your Email:</td>
{if $userinfo.logged}
 <td><b>{$userinfo.email}</b></td>
{else}
 <td><input type="text" name="email" value="{$frm.email|escape:htmlall}" size=30 class=inpts></td>
{/if}
</tr>
<tr>
 <td colspan=2>Message:<br><br><textarea name=message class=inpts cols=45 rows=4>{$frm.message|escape:htmlall}</textarea>
</tr>
{include file="captcha.tpl" action="support"}
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Send" class=sbmt></td>
</tr></table>
</form>

{/if}

       </div>
  </div>
</div>
<div class="inside_wrap supportmap">
  <!--<div class="inside_inner">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9048136585925!2d-0.17821388375759167!3d51.51496227963643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ab2aafc93b1%3A0xaa7540cc5729baed!2s24%20Spring%20St%2C%20Paddington%2C%20London%20W2%203RF%2C%20UK!5e0!3m2!1sen!2sin!4v1580029100465!5m2!1sen!2sin" width="100%" height="350"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div> -->
</div>
{include file="footer.tpl"}