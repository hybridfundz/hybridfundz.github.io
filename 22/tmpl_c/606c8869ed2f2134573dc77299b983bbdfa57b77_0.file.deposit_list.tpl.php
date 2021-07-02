<?php /* Smarty version 3.1.27, created on 2020-09-21 18:57:45
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/deposit_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18703260515f692fe9198c35_57696526%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '606c8869ed2f2134573dc77299b983bbdfa57b77' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/deposit_list.tpl',
      1 => 1600727943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18703260515f692fe9198c35_57696526',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
    'currency_sign' => 0,
    'total' => 0,
    'plans' => 0,
    'p' => 0,
    'o' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f692fe92139c7_87784350',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f692fe92139c7_87784350')) {
function content_5f692fe92139c7_87784350 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/bfinftjy/crypto-scoot.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '18703260515f692fe9198c35_57696526';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>Your Deposit</title>
<div class="bannerContainer insider2">
    <div class="bannerInner">
      <div class="ctn-banner fadeInRight wow">
                  <h3>My <span>Dashboard</span></h3>
        <div class="reflinkbox"><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
" class="ref-link"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</a><a class="getban" href="?a=referals">Get Banners</a></div>
      </div>
    </div>
     </div>
</div>
<div class="clearfix"></div>

<div class="inside_wrap">
<div class="membersidebar">

  <div class="inside_inner">
  <ul class="nav">
              <li class="active"><a href="?a=account">Overview</a></li>
              <li><a href="?a=deposit">Deposit</a></li>
              <li><a href="?a=deposit_list">Your Deposits</a></li>
              <li><a href="?a=deposit_history">Deposits History</a></li>
              <li><a href="?a=earnings">Earnings History</a></li>
              <li><a href="?a=withdraw">Withdraw</a></li>
              
              <li><a href="?a=referals">Referrals</a></li>
              <li><a href="?a=edit_account">Settings</a></li>
              <li><a href="?a=security">Security</a></li>
              
            </ul>
            <div class="memtopwrap">
    <div class="memtop"> <span><img src="styles/images/uruser.png" alt="" /></span>
      <h2><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</h2>
      <p>Welcome</p>
    </div>
    <div class="memtop"> <span><img src="styles/images/urregdate.png" alt="" /></span>
      <h2><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['create_account_date']);?>
</h2>
      <p>Registration Date</p>
    </div>
    <div class="memtop"> <span><img src="styles/images/urinfo.png" alt="" /></span>
      <h2></h2>
      <p>User IP</p>
    </div>
    <div class="memtop"> <span><img src="styles/images/urrun.png" alt="" /></span>
      <h2><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_days_online_generated']);?>
</h2>
      <p>Running Days</p>
    </div>
    </div>
  </div>
</div>


<div class="myaccount">
<div class="inside_inner">
<div class="member_right">
<div class="my_accont">


<h3>Your deposits:</h3><br>

<b>Total: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['total']->value);?>
</b><br><br>

<?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<table cellspacing=1 cellpadding=2 border=0 width=100% class=line><tr><td class=item>
<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <td colspan=3 align=center><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</b></td>
</tr><tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Deposit Amount</td>
 <td class=inheader width=100 nowrap><nobr><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['period']);?>
 Profit (%)</nobr></td>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['p']->value['plans'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?>
<tr>
 <td class=item><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['name']);?>
</td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['min_deposit']);?>
 <?php if ($_smarty_tpl->tpl_vars['o']->value['max_deposit'] > 0) {?>- <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['max_deposit']);
} else { ?>and more<?php }?></td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['percent']);?>
</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
</table>
<br>
<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<?php if (!$_smarty_tpl->tpl_vars['p']->value['deposits']) {?>
<tr>
 <td colspan=4><b>No deposits for this plan</b></td>
</tr>           
<?php } else { ?>
<tr>
 <td colspan=4 class=inheader style="text-align:left">Your deposits:</td>
</tr>
<tr>
 <td class=inheader>Date</td>
 <td class=inheader>Amount</td>
<?php if ($_smarty_tpl->tpl_vars['p']->value['use_compound']) {?>
 <td class=inheader>Compounding Percent</td>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['withdraw_principal']) {?>
 <td class=inheader>Release</td>
<?php }?>
</tr>           
<?php
$_from = $_smarty_tpl->tpl_vars['p']->value['deposits'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?>
<tr>
 <td align=center class=item><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['date']);?>
</b><br><?php if ($_smarty_tpl->tpl_vars['p']->value['q_days'] == 0) {?>Working <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['duration']);?>
 days<?php } else { ?>Expire in <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['expire_in']);
}?></td>
 <td align=center class=item><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['deposit']);?>
 <img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['ec']);?>
.gif" align=absmiddle hspace=1 height=17></b></td>
<?php if ($_smarty_tpl->tpl_vars['p']->value['use_compound']) {?>
 <td align=center class=item align=center><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['compound']);?>
% <a href="<?php echo smarty_modifier_myescape(encurl("?a=change_compound&deposit=".((string)$_smarty_tpl->tpl_vars['d']->value['id'])));?>
">[change]</a></td>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['withdraw_principal']) {?>
 <td align=center class=item>
  <?php if ($_smarty_tpl->tpl_vars['d']->value['can_withdraw']) {?>
   <a href="<?php echo smarty_modifier_myescape(encurl("?a=withdraw_principal&deposit=".((string)$_smarty_tpl->tpl_vars['d']->value['id'])));?>
">[release]</a>
  <?php } else { ?>
   <?php if ($_smarty_tpl->tpl_vars['d']->value['pending_duration'] > 0) {?>
    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['pending_duration']);?>
 day<?php if ($_smarty_tpl->tpl_vars['d']->value['pending_duration'] > 1) {?>s<?php }?> left
   <?php } else { ?>
    not available
   <?php }?>
  <?php }?>
 </td>
<?php }?>
</tr>
<?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?>
<?php }?>
</table>
<?php if ($_smarty_tpl->tpl_vars['p']->value['total_deposit'] > 0 || $_smarty_tpl->tpl_vars['p']->value['today_profit'] > 0 || $_smarty_tpl->tpl_vars['p']->value['total_profit'] > 0) {?>
<table cellspacing=0 cellpadding=1 border=0>
<tr><td>Deposited Total:</td><td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['total_deposit']);?>
</b></td></tr>
<tr><td>Profit Today:</td><td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['today_profit']);?>
</b></td></tr>
<tr><td>Total Profit:</td><td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['total_profit']);?>
</b></td></tr>
</table>
<?php }?>
<br>
</td></tr></table>
<br>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
</div></div></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>