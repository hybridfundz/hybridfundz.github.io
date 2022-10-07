<?php /* Smarty version 3.1.27, created on 2022-10-06 01:46:47
         compiled from "my:dashboard" */ ?>
<?php
/*%%SmartyHeaderCode:1849761509633e338767dfa3_27778085%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29f79bbda3b9eb8f64bd912522ed9b536f6cc741' => 
    array (
      0 => 'my:dashboard',
      1 => 1665020807,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1849761509633e338767dfa3_27778085',
  'variables' => 
  array (
    'members' => 0,
    'iplans' => 0,
    'admin_menu' => 0,
    'section' => 0,
    'm' => 0,
    'value' => 0,
    'color_neg' => 0,
    'color_pos' => 0,
    'color_net' => 0,
    'add_fiat' => 0,
    'ec' => 0,
    'ecs' => 0,
    'funds' => 0,
    'stats_periods' => 0,
    'p' => 0,
    'stats_totals' => 0,
    'stats' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633e33876bd7a8_94524332',
  'tpl_function' => 
  array (
    'value_color' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => './tmpl_c/29f79bbda3b9eb8f64bd912522ed9b536f6cc741_0.my.dashboard.php',
      'uid' => '29f79bbda3b9eb8f64bd912522ed9b536f6cc741',
      'call_name' => 'smarty_template_function_value_color_1849761509633e338767dfa3_27778085',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633e33876bd7a8_94524332')) {
function content_633e33876bd7a8_94524332 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '1849761509633e338767dfa3_27778085';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:hightcharts", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Information</h3> <table class="form"> <tr> <th>Users:</th> <td> <a data-hlp="Total users registered in the system" class="hlp badge badge-info"><?php echo $_smarty_tpl->tpl_vars['members']->value['total'];?>
</a> <a data-hlp="How many active users does your system contain" class="hlp badge badge-success"><?php echo $_smarty_tpl->tpl_vars['members']->value['active']['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['members']->value['active']['percent'];?>
%)</a> <a data-hlp="How many users are suspended (able to login but can not earn any funds from principal)" class="hlp badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['members']->value['suspended']['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['members']->value['suspended']['percent'];?>
%)</a> <a data-hlp="How many users are disabled (cannot login and can not earn any funds from principal)" class="hlp badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['members']->value['off']['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['members']->value['off']['percent'];?>
%)</a> </td> </tr> <tr> <th>Active Users:</th> <td> <a data-hlp="How many users have ever made a deposit" class="hlp badge badge-success"> <?php echo $_smarty_tpl->tpl_vars['members']->value['deposited']['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['members']->value['deposited']['percent'];?>
%) </a> <a data-hlp="How many registered users haven&#39;t made any deposit yet" class="hlp badge badge-danger"> <?php echo $_smarty_tpl->tpl_vars['members']->value['notdeposited']['number'];?>
 (<?php echo $_smarty_tpl->tpl_vars['members']->value['notdeposited']['percent'];?>
%) </a> </td> </tr> <tr> <th>Investment Packages:</th> <td> <a data-hlp="Active investment packages number. Active users earn if they have deposited funds in these packages." class="hlp badge badge-success"><?php echo $_smarty_tpl->tpl_vars['iplans']->value['active'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['iplans']->value['closed']) {?> <a data-hlp="Closed investment packages number. Users cannot invest money to these packages but deposits still works." class="hlp badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['iplans']->value['closed'];?>
</a> <?php }?> <?php if ($_smarty_tpl->tpl_vars['iplans']->value['inactive']) {?> <a data-hlp="Inactive investment packages number. Users cannot invest money to these packages and cannot receive any earnings from these packages either." class="hlp badge badge-danger">Inactive: <?php echo $_smarty_tpl->tpl_vars['iplans']->value['inactive'];?>
</a> <?php }?> </td> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['admin_menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['section']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
$foreach_section_Sav = $_smarty_tpl->tpl_vars['section'];
?> <?php
$_from = $_smarty_tpl->tpl_vars['section']->value['subs'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?> <?php if (isset($_smarty_tpl->tpl_vars['m']->value['sticker'])) {?> <tr> <th><?php echo $_smarty_tpl->tpl_vars['m']->value['title'];?>
</th> <td> <a href="<?php echo $_smarty_tpl->tpl_vars['m']->value['href'];?>
" class="hlp badge badge-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['m']->value['sticker_mood'])===null||$tmp==='' ? "success" : $tmp);?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['sticker'];?>
</a> </td> </tr> <?php }?> <?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
?> <?php
$_smarty_tpl->tpl_vars['section'] = $foreach_section_Sav;
}
?> </table>  <table class="list"> <th></th> <th><a data-hlp="The difference between the funds arrived from payment processings and all the withdrawals you have made." class=hlp>Total System Earnings:</a></th> <th><a data-hlp="The sum of all users&#39; funds added from externl processings." class=hlp>Total Members&#39; Funds Added:</a></th> <th><a data-hlp="The sum of all users&#39; earnings and bonuses minus penalties and withdrawals." class=hlp>Total Users&#39; Balance:</a></th> <th><a data-hlp="Total members&#39; deposit shows you how much funds have users deposited in your system total." class=hlp>Total Deposits:</a></th> <th><a data-hlp="The total principal of all users." class=hlp>Current Deposits:</a></th> <th><a data-hlp="The total referral commissions of all users." class=hlp>Total Referrals Commissions:</a></th> <th><a data-hlp="All the funds you have ever withdrawn to users&#39; payment processing accounts." class=hlp>Total Withdrawals:</a></th> <th><a href="?a=withdrawal_requests" data-hlp="The funds users requested to withdraw." class=hlp>Pending Withdrawals:</a></th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['ecs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ec'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ec']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ec']->value) {
$_smarty_tpl->tpl_vars['ec']->_loop = true;
$foreach_ec_Sav = $_smarty_tpl->tpl_vars['ec'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <th><img src="images/<?php echo $_smarty_tpl->tpl_vars['ec']->value['ec'];?>
.gif" alt="<?php echo $_smarty_tpl->tpl_vars['ec']->value['name'];?>
" height="17" align=absmiddle></th> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('value'=>$_smarty_tpl->tpl_vars['funds']->value[$_smarty_tpl->tpl_vars['ec']->value['ec']]['earned'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"darkgreen",'value'=>$_smarty_tpl->tpl_vars['funds']->value[$_smarty_tpl->tpl_vars['ec']->value['ec']]['add_funds'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"darkred",'value'=>$_smarty_tpl->tpl_vars['funds']->value[$_smarty_tpl->tpl_vars['ec']->value['ec']]['balance'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"darkgreen",'value'=>$_smarty_tpl->tpl_vars['funds']->value[$_smarty_tpl->tpl_vars['ec']->value['ec']]['deposit'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"purple",'value'=>$_smarty_tpl->tpl_vars['funds']->value[$_smarty_tpl->tpl_vars['ec']->value['ec']]['active_deposit'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"olive",'value'=>$_smarty_tpl->tpl_vars['funds']->value[$_smarty_tpl->tpl_vars['ec']->value['ec']]['commissions'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"orangered",'value'=>$_smarty_tpl->tpl_vars['funds']->value[$_smarty_tpl->tpl_vars['ec']->value['ec']]['withdrawal'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"red",'value'=>$_smarty_tpl->tpl_vars['funds']->value[$_smarty_tpl->tpl_vars['ec']->value['ec']]['withdraw_pending'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> </tr> <?php
$_smarty_tpl->tpl_vars['ec'] = $foreach_ec_Sav;
}
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <th>Total</th> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('value'=>$_smarty_tpl->tpl_vars['funds']->value['total']['earned'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"darkgreen",'value'=>$_smarty_tpl->tpl_vars['funds']->value['total']['add_funds'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"darkred",'value'=>$_smarty_tpl->tpl_vars['funds']->value['total']['balance'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"darkgreen",'value'=>$_smarty_tpl->tpl_vars['funds']->value['total']['deposit'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"purple",'value'=>$_smarty_tpl->tpl_vars['funds']->value['total']['active_deposit'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"olive",'value'=>$_smarty_tpl->tpl_vars['funds']->value['total']['commissions'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"orangered",'value'=>$_smarty_tpl->tpl_vars['funds']->value['total']['withdrawal'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> <td><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"red",'value'=>$_smarty_tpl->tpl_vars['funds']->value['total']['withdraw_pending'],'ec'=>$_smarty_tpl->tpl_vars['ec']->value['ec'],'add_fiat'=>1), true);?>
</td> </tr> </table> <br><br> <h3 data-hlp="Total in/out stats shows you how much funds users entered in your system and how much funds you withdrew today, this week, this month, this year and total." class=hlp>Total in/out</h3> <div id="chart_totals" style="width:100%;height:300px;"></div> <table class="list"> <tr> <th colspan=2>24 hours</td> <th colspan=2>7 days</td> <th colspan=2>Month</td> <th colspan=2>Year</td> <th colspan=2>Total</td> </tr> <tr> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> </tr> </tr> <tr> <?php
$_from = $_smarty_tpl->tpl_vars['stats_periods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <td align=center><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('value'=>$_smarty_tpl->tpl_vars['stats_totals']->value['in'][$_smarty_tpl->tpl_vars['p']->value],'add_fiat'=>1), true);?>
</td> <td align=center><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"red",'value'=>$_smarty_tpl->tpl_vars['stats_totals']->value['out'][$_smarty_tpl->tpl_vars['p']->value],'add_fiat'=>1), true);?>
</td> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </tr> <tr> <?php
$_from = $_smarty_tpl->tpl_vars['stats_periods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <td colspan=2 align=center><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('value'=>$_smarty_tpl->tpl_vars['stats_totals']->value['dif'][$_smarty_tpl->tpl_vars['p']->value],'add_fiat'=>1), true);?>
</td> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </tr> </table> <br><br> <?php
$_from = $_smarty_tpl->tpl_vars['stats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?> <h3 data-hlp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 in/out stats shows you how much funds users entered in your system and how much funds you withdrew today, this week, this month, this year and total" class=hlp><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 in/out</h3> <div id="chart_<?php echo $_smarty_tpl->tpl_vars['s']->value['ec'];?>
" style="width:100%;height:300px;"></div> <br><br> <table class="list"> <tr> <th colspan=2>24 hours</td> <th colspan=2>7 days</td> <th colspan=2>Month</td> <th colspan=2>Year</td> <th colspan=2>Total</td> </tr><tr> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> <th>In</th> <th>Out</th> </tr> </tr> <tr> <?php
$_from = $_smarty_tpl->tpl_vars['stats_periods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <td align=center><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('value'=>$_smarty_tpl->tpl_vars['s']->value['in'][$_smarty_tpl->tpl_vars['p']->value],'ec'=>$_smarty_tpl->tpl_vars['s']->value['ec'],'add_fiat'=>1), true);?>
</td> <td align=center><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('color_pos'=>"red",'value'=>$_smarty_tpl->tpl_vars['s']->value['out'][$_smarty_tpl->tpl_vars['p']->value],'ec'=>$_smarty_tpl->tpl_vars['s']->value['ec'],'add_fiat'=>1), true);?>
</td> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </tr> <tr> <?php
$_from = $_smarty_tpl->tpl_vars['stats_periods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <td colspan=2 align=center><?php $_smarty_tpl->callTemplateFunction ("value_color", $_smarty_tpl, array('value'=>$_smarty_tpl->tpl_vars['s']->value['dif'][$_smarty_tpl->tpl_vars['p']->value],'ec'=>$_smarty_tpl->tpl_vars['s']->value['ec'],'add_fiat'=>1), true);?>
</td> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> </tr> </table> <br><br> <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Welcome to the HYIP Manager Pro Admin Area!<br> You can see help messages on almost all pages of the admin area in this part.<br> <br> You can see how many members are registered in the system on this page.<br> System supports 3 types of users:<br> <li>Active users. These users can login to the members area and receive earnings.</li> <li>Suspended users. These users can login to the members area but will not receive any earnings.</li> <li>Disabled users. These users can not login to the members area and will not receive any earnings.</li> <br> User becomes active when registering and only administrator can change status of any registered user. You can see how many users are active and disabled in the system at the top of this page. <br> <br> Investment packages:<br> You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li> Active package. All active users will receive earnings every pay period if made a deposit</li> <li> Inactive package. Users will not receive any earnings</li> <br><br> &quot;Total system earnings&quot; is a difference between funds came from payment processings and all the withdrawals you made. <br> <br> &quot;Total member&#39;s balance&quot; shows you how many funds can users withdraw from the system. It is the sum of all users&#39; earnings and bonuses minus penalties and withdrawals. <br> <br> &quot;Total member&#39;s deposit&quot; shows you how many funds have users ever deposited in your system. <br> <br> &quot;Current members&#39; deposit&quot; shows the overall users&#39; deposit. <br> <br> &quot;Total withdrawals&quot; shows you how many funds have you withdrawn to users&#39; accounts. <br> <br> &quot;Pending withdrawals&quot; shows you how many funds users have requested to withdraw. <br> <br> In/out stats shows you how many funds users have entered in your system and how many funds have you withdrawn today, this week, this month, this year and total. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?><?php
/* smarty_template_function_value_color_1849761509633e338767dfa3_27778085 */
if (!function_exists('smarty_template_function_value_color_1849761509633e338767dfa3_27778085')) {
function smarty_template_function_value_color_1849761509633e338767dfa3_27778085($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('add_fiat'=>true,'color_neg'=>"red",'color_pos'=>"green",'color_net'=>"gray"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?> <b style="color:<?php if ($_smarty_tpl->tpl_vars['value']->value < 0) {
echo $_smarty_tpl->tpl_vars['color_neg']->value;
} elseif ($_smarty_tpl->tpl_vars['value']->value > 0) {
echo $_smarty_tpl->tpl_vars['color_pos']->value;
} else {
echo $_smarty_tpl->tpl_vars['color_net']->value;
}?>"><?php if ($_smarty_tpl->tpl_vars['add_fiat']->value) {
echo amount_smarty_fiat(amount_smarty_format($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['ec']->value),$_smarty_tpl->tpl_vars['ec']->value);
} else {
echo $_smarty_tpl->tpl_vars['value']->value;
}?></b> <?php foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_value_color_1849761509633e338767dfa3_27778085 */

?>
