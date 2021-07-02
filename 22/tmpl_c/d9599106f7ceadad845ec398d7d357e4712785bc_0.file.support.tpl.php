<?php /* Smarty version 3.1.27, created on 2020-09-30 14:02:15
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/support.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19401891765f74c82772f9c9_82966565%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9599106f7ceadad845ec398d7d357e4712785bc' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/support.tpl',
      1 => 1601041744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19401891765f74c82772f9c9_82966565',
  'variables' => 
  array (
    'say' => 0,
    'userinfo' => 0,
    'errors' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f74c8277888d7_44618240',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f74c8277888d7_44618240')) {
function content_5f74c8277888d7_44618240 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/bfinftjy/crypto-scoot.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '19401891765f74c82772f9c9_82966565';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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


<?php if ($_smarty_tpl->tpl_vars['say']->value == 'send') {?>
Message has been successfully sent. We will back to you in next 24 hours. Thank you.<br><br>
<?php } else { ?>

<?php echo '<script'; ?>
 language=javascript>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] == 1) {?>

function checkform() { 
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

<?php } else { ?>

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

<?php }?>
<?php echo '</script'; ?>
>

<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value=support>
<input type=hidden name=action value=send>

 <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
  <ul style="color:red">
   <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image'] == 1) {?>
    <li>Invalid turing image</li>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_email'] == 1) {?>
    <li>Invalid email address</li>
   <?php }?>
  </ul>
 <?php }?>

<table cellspacing=5 cellpadding=5 border=0 width="100%">
<tr>
 <td>Your Name:</td>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['name']);?>
</b></td>
<?php } else { ?>
 <td><input type="text" name="name" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" size=30 class=inpts></td>
<?php }?>
</tr>
<tr>
 <td>Your Email:</td>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
</b></td>
<?php } else { ?>
 <td><input type="text" name="email" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" size=30 class=inpts></td>
<?php }?>
</tr>
<tr>
 <td colspan=2>Message:<br><br><textarea name=message class=inpts cols=45 rows=4><?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['message'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</textarea>
</tr>
<?php echo $_smarty_tpl->getSubTemplate ("captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"support"), 0);
?>

<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Send" class=sbmt></td>
</tr></table>
</form>

<?php }?>

       </div>
  </div>
</div>
<div class="inside_wrap supportmap">
  <!--<div class="inside_inner">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9048136585925!2d-0.17821388375759167!3d51.51496227963643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ab2aafc93b1%3A0xaa7540cc5729baed!2s24%20Spring%20St%2C%20Paddington%2C%20London%20W2%203RF%2C%20UK!5e0!3m2!1sen!2sin!4v1580029100465!5m2!1sen!2sin" width="100%" height="350"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div> -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>