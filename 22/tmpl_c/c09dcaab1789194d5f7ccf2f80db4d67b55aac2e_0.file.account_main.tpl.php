<?php /* Smarty version 3.1.27, created on 2020-09-29 20:51:02
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:61689915f73d676752a46_35189591%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c09dcaab1789194d5f7ccf2f80db4d67b55aac2e' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/account_main.tpl',
      1 => 1600727597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61689915f73d676752a46_35189591',
  'variables' => 
  array (
    'notices' => 0,
    'n' => 0,
    'settings' => 0,
    'userinfo' => 0,
    'ab_formated' => 0,
    'last_deposit' => 0,
    'last_withdrawal' => 0,
    'ps' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f73d6767bf8b1_38347846',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f73d6767bf8b1_38347846')) {
function content_5f73d6767bf8b1_38347846 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/bfinftjy/crypto-scoot.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '61689915f73d676752a46_35189591';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>Dashboard</title>

<?php echo loaddata_smarty(array('name'=>"user_notices",'var'=>'notices'),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['notices']->value) {?>
<ul style="color:red">
<?php
$_from = $_smarty_tpl->tpl_vars['notices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$foreach_n_Sav = $_smarty_tpl->tpl_vars['n'];
?>
<li><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['n']->value['title']);?>
</b> <?php echo smarty_modifier_myescape(nl2br($_smarty_tpl->tpl_vars['n']->value['text']));?>

<form method=post>
<input type=hidden name=a value=user_notices>
<input type=hidden name=action value=notified>
<input type=hidden name=id value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['n']->value['id']);?>
>
<input type=submit value="Dismiss">
</form>
<?php
$_smarty_tpl->tpl_vars['n'] = $foreach_n_Sav;
}
?>
</ul>
<?php }?>

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


    
<div class="account_mid">
  <div class="mem_mid"> <span><img src="styles/images/menmid1.png" alt=""/></span>
    <h2>$<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</b></h2>
    <p>Account Balance</p>
  </div>
  <div class="mem_mid"> <span><img src="styles/images/menmid2.png" alt=""/></span>
    <h2>$<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['earning']);?>
</b></h2>
    <p>Earned Total</p>
  </div>
  <div class="mem_mid"> <span><img src="styles/images/menmid3.png" alt=""/></span>
    <h2>$<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
</b></h2>
    <p>Active Deposit</p>
  </div>
</div>

<div class="myacc_links"> <a href="?a=earnings" class="acc_button">Earning History</a> <a href="?a=withdraw_history" class="acc_button">Total Withdrawals</a> <a href="?a=withdraw" class="acc_button">Withdraw Funds</a> <a href="?a=deposit" class="acc_button">Make New Deposit</a> </div>

<div class="account-bottom">
  <div class="detailed-stats-box one"> <span><img src="styles/images/last_deposit_icon.png" alt=""/></span>
    <h3>$<b><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_deposit']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
</b></h3>
    <p>Last Deposit</p>
  </div>
  <div class="detailed-stats-box two"> <span><img src="styles/images/last_withdreaw_icon.png" alt=""/></span>
    <h3>$<b><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_withdrawal']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
</b></h3>
    <p>Last Withdrawal</p>
  </div>
  <div class="detailed-stats-box three"> <span><img src="styles/images/total_withdraw_icon.png" alt=""/></span>
    <h3>$<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</b></h3>
    <p>Total Withdrew</p>
  </div>
  <div class="detailed-stats-box four"> <span><img src="styles/images/total_deposit_icon.png" alt=""/></span>
    <h3>$<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']);?>
</b></h3>
    <p>Total Deposit</p>
  </div>
</div>

</div>
</div>

  </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
  <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pending_col'] > 0) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pending_col']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>
 deposit<?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pending_col'] > 1) {?>s<?php }?> of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pending_amount']);?>
 total pending<br><?php }?>
<?php endfor; endif; ?>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>