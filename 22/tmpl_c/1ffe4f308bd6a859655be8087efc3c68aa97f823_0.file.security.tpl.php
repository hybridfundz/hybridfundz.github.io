<?php /* Smarty version 3.1.27, created on 2020-09-21 18:55:57
         compiled from "/home/bfinftjy/crypto-scoot.com/tmpl/security.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6839373625f692f7d93e320_88060233%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ffe4f308bd6a859655be8087efc3c68aa97f823' => 
    array (
      0 => '/home/bfinftjy/crypto-scoot.com/tmpl/security.tpl',
      1 => 1600728331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6839373625f692f7d93e320_88060233',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
    'security' => 0,
    'errors' => 0,
    'tfa_enabled' => 0,
    'tfa_settings' => 0,
    'tfa_secret' => 0,
    'tfa_secret_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f692f7d998553_92060324',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f692f7d998553_92060324')) {
function content_5f692f7d998553_92060324 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/bfinftjy/crypto-scoot.com/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '6839373625f692f7d93e320_88060233';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>Security</title>
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


<h3>Advanced login security settings:</h3><br><br>

<form method=post>
<input type=hidden name=a value="security">
<input type=hidden name=action value="save">
Detect IP Address Change Sensitivity<br>
<input type=radio name=ip value=disabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'disabled') {?>checked<?php }?>>Disabled<br>
<input type=radio name=ip value=medium <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'medium') {?>checked<?php }?>>Medium<br>
<input type=radio name=ip value=high <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'high') {?>checked<?php }?>>High<br>
<input type=radio name=ip value=always <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'always') {?>checked<?php }?>>Paranoic<br><br>

Detect Browser Change<br>
<input type=radio name=browser value=disabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'disabled') {?>checked<?php }?>>Disabled<br>
<input type=radio name=browser value=enabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'enabled') {?>checked<?php }?>>Enabled<br><br>
<input type=submit value="Set" class=sbmt>
</form>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_tfa']) {?>
<h3>Two Factor Authentication</h3>
<form method=post name=mainform>
<input type=hidden name=a value="security">
<input type=hidden name=action value="tfa_save">
<input type=hidden name=time>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_code']) {?>
<b style=color:red>Invalid code.</b><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_secret']) {?>
<b style=color:red>Invalid Secret.</b><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tfa_enabled']->value) {?>
<input type="checkbox" name="tfa_on_login" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['login']) {?>checked<?php }?>> on Login<br>
<input type="checkbox" name="tfa_on_edit_account" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['edit_account']) {?>checked<?php }?>> on Edit Account<br>
<input type="checkbox" name="tfa_on_withdraw" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['withdraw']) {?>checked<?php }?>> on Withdraw<br>
<input type="checkbox" name="tfa_disable" value=1> <b style=color:red>Disable Two Factor Authentication (not recommended)</b><br>
<br>
Confirm by typing code: <input type=text name="code" class=inpts> <input type=submit value="Update" class=sbmt>
<?php } else { ?>
1. Install <a href="http://m.google.com/authenticator" targe=_blank>Google Authenticator</a> on your mobile device.<br>
2. Your Secret Code is: <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret']->value);?>
</b> <input type=hidden name="tfa_secret" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret']->value);?>
"><br>
<img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret_url']->value);?>
"><br>
3. Please enter two factor token from Google Authenticator to verify correct setup:<br> 
<input type=text name="code" class=inpts> <input type=submit value="Enable" class=sbmt>
<?php }?>
</form>



<?php echo '<script'; ?>
 language=javascript>
document.mainform.time.value = (new Date()).getTime();

function checkform() {
  if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
    alert("Please type code!");
    document.mainform.code.focus();
    return false;
  }
  return true;
}
<?php echo '</script'; ?>
>

<?php }?> 
</div></div></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>