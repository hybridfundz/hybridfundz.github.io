<?php /* Smarty version 3.1.27, created on 2021-06-23 19:30:29
         compiled from "/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/custom/rating.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:174025028160d38bd5c4d851_63303526%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d21ed73fe93cb5f23fd3e08489985ae057a9fa' => 
    array (
      0 => '/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/custom/rating.tpl',
      1 => 1609542521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174025028160d38bd5c4d851_63303526',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60d38bd5c62b81_82272490',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60d38bd5c62b81_82272490')) {
function content_60d38bd5c62b81_82272490 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '174025028160d38bd5c4d851_63303526';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>Rating | Crypto Scoot</title>

 <div class="bannerContainer insider">
    <div class="bannerInner">
      <div class="ctn-banner fadeInRight wow">

        <h3>Our Rating</h3>
      </div>
    </div>
     </div>
</div>
<div class="clearfix"></div>

<div class="inside_wrap">
  <div class="inside_inner">
    <table class="monitor-table">
      <tr>
        <td><span class="icon">&nbsp;</span>Monitor code</td>
        <td><span class="icon">&nbsp;</span>Monitor code</td>
        <td><span class="icon">&nbsp;</span>Monitor code</td>
      </tr>
    </table>
  </div>
</div>
<div class="uptoContainer">
  <div class="uptoInner">
    <div class="uptoLeft">
      <h3>Up to 10%<span>*</span></h3>
      <h4>Referral Commission</h4>
      <p>*Commission % is based on Deposit amount</p>
    </div>
    <div class="uptoRight">
      <div class="uptoRight-part">
        <h3>3%</h3>
        <p>$20 to $1000 </p>
      </div>
      <div class="uptoRight-img"> <img src="styles/images/upto-icon.png"> </div>
      <div class="uptoRight-part">
        <h3>5%</h3>
        <p>$1001 to $5000</p>
      </div>
      <div class="uptoRight-img"> <img src="styles/images/upto-icon.png"> </div>
      <div class="uptoRight-part">
        <h3>7%</h3>
        <p>$5001 to $10K</p>
      </div>
      <div class="uptoRight-img"> <img src="styles/images/upto-icon.png"> </div>
      <div class="uptoRight-part">
        <h3>10%</h3>
        <p>$10K to $100K</p>
      </div>
    </div>


  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>