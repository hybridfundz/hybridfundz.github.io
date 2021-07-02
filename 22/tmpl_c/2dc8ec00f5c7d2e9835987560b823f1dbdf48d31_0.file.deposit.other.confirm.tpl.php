<?php /* Smarty version 3.1.27, created on 2021-03-04 11:52:39
         compiled from "/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/deposit.other.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3914442436040ca07282f07_37355987%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dc8ec00f5c7d2e9835987560b823f1dbdf48d31' => 
    array (
      0 => '/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/deposit.other.confirm.tpl',
      1 => 1609542521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3914442436040ca07282f07_37355987',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
    'ok' => 0,
    'description' => 0,
    'deposit' => 0,
    't' => 0,
    'currency_sign' => 0,
    'type' => 0,
    'h_id' => 0,
    'compound' => 0,
    'famount' => 0,
    'fields' => 0,
    'max_deposit_less' => 0,
    'max_deposit_format' => 0,
    'wrong_paln' => 0,
    'not_enough_funds' => 0,
    'less_than_min' => 0,
    'plan_name' => 0,
    'min_amount' => 0,
    'zero_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6040ca07345ec8_27371811',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6040ca07345ec8_27371811')) {
function content_6040ca07345ec8_27371811 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u355647698/domains/crypto-scoot.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '3914442436040ca07282f07_37355987';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>Confirm Deposit</title>
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


<?php if ($_smarty_tpl->tpl_vars['ok']->value == 1) {?>
<h3>Please confirm your deposit:</h3><br><br>

<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['description']->value);?>
<br><br>

<table cellspacing=0 cellpadding=2 class="form deposit_confirm">
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['id'] > 0) {?>
<tr>
 <th>Plan:</th>
 <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['deposit']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
</tr>
<tr>
 <th>Profit:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['percent']);?>
% <?php if ($_smarty_tpl->tpl_vars['deposit']->value['period'] == 'end' || $_smarty_tpl->tpl_vars['deposit']->value['period'] == 'endh') {?>after <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['time_units']);
if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] != 1) {?>s<?php }
} else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['period_name']);?>
 for <?php if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] == 0) {?>lifelong<?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['time_units']);
if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] != 1) {?>s<?php }?> <?php if ($_smarty_tpl->tpl_vars['deposit']->value['work_week']) {?>(mon-fri)<?php }
}
}?></td>
</tr>
<tr>
 <th>Principal Return:</th>
 <td><?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return']) {?>Yes<?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'] > 0) {?>, with <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'],2));?>
% fee<?php }
} else { ?>No (included in profit)<?php }?></td>
</tr>
<tr>
 <th>Principal Withdraw:</th>
 <td>
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw']) {?>Available with 
<?php
$_from = $_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_terms'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_wpt'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_wpt']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_wpt']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_wpt']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_wpt']->value['total'];
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['percent']);?>
% fee <?php if ($_smarty_tpl->tpl_vars['t']->value['duration'] > 0) {?>after <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['duration']);?>
 days<?php }
if (!(isset($_smarty_tpl->tpl_vars['__foreach_wpt']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_wpt']->value['last'] : null)) {?> or <?php }?>
<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_max']) {?> but before <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_max']));?>
 days<?php }?>
<?php } else { ?>Not available<?php }?>
 </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['use_compound'] == 1) {?>
<tr>
 <th>Compound:</th>
 <td><?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['compound']));?>
%</td>
</tr>
<?php }?>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee']) {?>
<tr>
 <th>Credit Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['user_amount']);?>
</td>
</tr>
<tr>
 <th>Deposit Fee:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['percent']);?>
% + <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['add_amount']);?>
 (min. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee_min']);?>
 max. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee_max']);?>
)</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']) {?>
<tr>
 <th>Debit Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']);?>
</td>
</tr>
<tr>
 <th><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['converted_fiat']);?>
 Debit Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</td>
</tr>
<?php } else { ?>
<tr>
 <th>Debit Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</td>
</tr>
<?php }?>
</table>
<br><br>
<form name=spend method=post>
<input type=hidden name=a value=deposit>
<input type=hidden name=action value=confirm>
<input type=hidden name=type value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value);?>
>
<input type=hidden name=h_id value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['h_id']->value);?>
>
<input type=hidden name=compound value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['compound']->value);?>
>
<INPUT type=hidden name=amount value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['famount']->value);?>
">
<?php if ($_smarty_tpl->tpl_vars['fields']->value) {?>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2><b>Required Information:</b></td>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total']);
?>
<tr>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['name']);?>
</td>
 <td><input type="text" name="fields[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['id']);?>
]" value="" class=inpts></td>
</tr>
<?php endfor; endif; ?>
</table>
<?php }?>

<br><input type=submit value="Save" class=sbmt> &nbsp;
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=deposit'">
</form>

<?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['max_deposit_less']->value == 1) {?>
Sorry, the maximal deposit is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['max_deposit_format']->value);?>
.<br>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['wrong_paln']->value == 1) {?> The Plan does not exist. <?php }?> 
<?php if ($_smarty_tpl->tpl_vars['not_enough_funds']->value == 1) {?> You have not enough funds to complete the operation.<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['less_than_min']->value == 1) {?>
The minimal spend amount for '<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan_name']->value);?>
' is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_amount']->value);?>
.<br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['zero_amount']->value) {?>
You should enter amount grater than zero.<br>
<?php }?>

<br>
Click <a href="?a=deposit">here</a> and try again.


<?php }?>
</div></div></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>