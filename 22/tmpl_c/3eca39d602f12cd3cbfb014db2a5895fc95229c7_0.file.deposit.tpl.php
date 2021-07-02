<?php /* Smarty version 3.1.27, created on 2021-05-28 11:49:50
         compiled from "/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/deposit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:137764003060b0d8ded0e3e8_91778434%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eca39d602f12cd3cbfb014db2a5895fc95229c7' => 
    array (
      0 => '/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/deposit.tpl',
      1 => 1609542521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137764003060b0d8ded0e3e8_91778434',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
    'fatal' => 0,
    'qplans' => 0,
    'frm' => 0,
    'errors' => 0,
    'currency_sign' => 0,
    'plans' => 0,
    'compounding_available' => 0,
    'ab_formated' => 0,
    'ps' => 0,
    'hold' => 0,
    'min_deposit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60b0d8deec65b2_41245146',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60b0d8deec65b2_41245146')) {
function content_60b0d8deec65b2_41245146 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u355647698/domains/crypto-scoot.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '137764003060b0d8ded0e3e8_91778434';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>Make Deposit</title>
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


<?php if ($_smarty_tpl->tpl_vars['fatal']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'one_per_month') {?>
You can deposit once a month only.
<?php }?>

<?php } else { ?>


<?php echo '<script'; ?>
 language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");


  <?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?>

  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }

  <?php }?>


}

function updateCompound() {
  var id = 0;
  var tt = document.spendform.h_id.type;
  if (tt && tt.toLowerCase() == 'hidden') {
    id = document.spendform.h_id.value;
  } else {
    for (i = 0; i < document.spendform.h_id.length; i++) {
      if (document.spendform.h_id[i].checked) {
        id = document.spendform.h_id[i].value;
      }
    }
  }

  var cpObj = document.getElementById('compound_percents');
  if (cpObj) {
    while (cpObj.options.length != 0) {
      cpObj.options[0] = null;
    }
  }

  if (cps[id] && cps[id].length > 0) {
    document.getElementById('coumpond_block').style.display = '';

    for (i in cps[id]) {
      cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
    }
  } else {
    document.getElementById('coumpond_block').style.display = 'none';
  }
}
var cps = {};
--><?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_success') {?>
<h3>The deposit has been successfully saved.</h3>
<br><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_saved') {?>
<h3>The deposit has been saved. It will become active when the administrator checks statistics.</h3><br><br>
<?php }?>

<h3>Make a Deposit:</h3>
<br>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['less_min']) {?>
Sorry, you can deposit not less than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['less_min']);?>
 with selected processing<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['greater_max']) {?>
Sorry, you can deposit not greater than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['greater_max']);?>
 with selected processing<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['ec_forbidden']) {?>
Sorry, deposit with selected processing is temproary forbidden.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['cannot_invest_this_plan_anymore']) {?>
Sorry, you cannot invest this plan anymore<br><br>
<?php }?>
<?php }?>

<form method=post name="spendform">
<input type=hidden name=a value=deposit>
<?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?> Select a plan:<br><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['name'] = 'plans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total']);
?>
<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <td colspan=3>
<?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?>
	<input type=radio name=h_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
' <?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['plans']['first'] == 1) && ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == '')) || ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'])) {?> checked <?php }?> onclick="updateCompound()"> 
<!--	<input type=radio name=h_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
' <?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['plans']['first'] == 1) && ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == '')) || ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'])) {?> checked <?php }?> <?php if ($_smarty_tpl->tpl_vars['compounding_available']->value > 0) {?>onclick="document.spendform.compound.disabled=<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['use_compound'] == 1) {?>false<?php } else { ?>true<?php }?>;"<?php }?>> -->
<?php } else { ?>
	<input type=hidden name=h_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
'>
<?php }?>

	<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['name']);?>
</b></td>
</tr><tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Spent Amount (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
)</td>
 <td class=inheader width=100 nowrap><nobr><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['period']);?>
 Profit (%)</nobr></td>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['options'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['options']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['name'] = 'options';
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total']);
?>
<tr>
 <td class=item><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['deposit']);?>
</td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['percent']);?>
</td>
</tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_calculator']) {?>
<tr>
 <td colspan=3 align=right><a href="javascript:openCalculator('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
')">Calculate your profit &gt;&gt;</a></td>
</tr>
<?php }?>
</table><br><br>
<?php echo '<script'; ?>
>
cps[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
] = <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['compound_percents_json']);?>
;
<?php echo '</script'; ?>
>
<?php endfor; endif; ?>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your account balance (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
):</td>
 <td align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</td>
</tr>
<tr><td>&nbsp;</td>
 <td align=right>
  <small>
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
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance'] > 0) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance']);?>
 of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);
if ($_smarty_tpl->tpl_vars['hold']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['amount'] > 0) {?> / <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['hold']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['amount']);?>
 on hold<?php }?><br><?php }?>
<?php endfor; endif; ?>
  </small>
 </td>
</tr>
<tr>
 <td>Amount to Spend (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
):</td>
 <td align=right><input type=text name=amount value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_deposit']->value);?>
' class=inpts size=15 style="text-align:right;"></td>
</tr>
<tr id="coumpond_block" style="display:none">
 <td>Compounding(%):</td>
 <td align=right>
  <select name="compound" class=inpts id="compound_percents"></select>
 </td>
</tr>

<tr>
  <td colspan=2>
   <table cellspacing=0 cellpadding=2 border=0>
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
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance'] > 0 && $_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['status'] == 1) {?>
    <tr>
     <td><input type=radio name=type value="account_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
"></td>
     <td>Spend funds from the Account Balance <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>
</td>
    </tr>
   <?php }?>
<?php endfor; endif; ?>
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
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['status']) {?>
    <tr>
     <td><input type=radio name=type value="process_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['p']['index'] == 0) {?>checked<?php }?>></td>
     <td>Spend funds from <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>
</td>
    </tr>
   <?php }?>
<?php endfor; endif; ?>
   </table>
  </td>
</tr>
<tr>
 <td colspan=2><input type=submit value="Spend" class=sbmt></td>
</tr></table>
</form>

<?php echo '<script'; ?>
 language=javascript>
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match(/^process_/))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
updateCompound();
<?php echo '</script'; ?>
>


<?php }?>
</div>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>