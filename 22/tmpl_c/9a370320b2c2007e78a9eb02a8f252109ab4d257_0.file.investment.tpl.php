<?php /* Smarty version 3.1.27, created on 2020-09-29 21:20:42
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/custom/investment.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7816543025f73dd6a9be414_52601967%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a370320b2c2007e78a9eb02a8f252109ab4d257' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/custom/investment.tpl',
      1 => 1600724330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7816543025f73dd6a9be414_52601967',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f73dd6a9ecef4_51039951',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f73dd6a9ecef4_51039951')) {
function content_5f73dd6a9ecef4_51039951 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7816543025f73dd6a9be414_52601967';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>Our Plans | Crypto Scoot</title>

 <div class="bannerContainer insider">
    <div class="bannerInner">
      <div class="ctn-banner fadeInRight wow">

        <h3> Investment <span>Plans</span></h3>
      </div>
    </div>
     </div>
</div>
<div class="clearfix"></div>

<div class="inside_wrap investment">
  <div class="inside_inner">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#plan1" aria-controls="home" role="tab" data-toggle="tab">170%<span>After 1 day</span></a></li>
      <li role="presentation" class=""><a href="#plan2" aria-controls="profile" role="tab" data-toggle="tab"></i>287%<span>After 3 days</span></a></li>
      <li role="presentation" class=""><a href="#plan3" aria-controls="profile" role="tab" data-toggle="tab"></i>500%<span>After 5 days</span></a></li>
      <li role="presentation" class=""><a href="#plan4" aria-controls="profile" role="tab" data-toggle="tab"></i>6%<span>Hourly for 24 hours</span></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="plan1">
        <div class="plan-title">MAIN PLAN 1  = 170% After 1 Day</div>
      </div>
      <div role="tabpanel" class="tab-pane" id="plan2">
        <div class="plan-title"> MAIN PLAN 2  =287% After 3 Days</div>
      </div>
      <div role="tabpanel" class="tab-pane" id="plan3">
        <div class="plan-title">MAIN PLAN 3 =500% After 5 Days </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="plan4">
        <div class="plan-title">MAIN PLAN 4   =6% Hourly for 24 hours </div>
      </div>
    </div>
  </div>
</div>
<div class="uptoContainer">
  <div class="uptoInner">
    <div class="uptoLeft">
      <h3>Up to 15%</h3>

    </div>
    <div class="uptoRight">
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>