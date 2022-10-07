<?php /* Smarty version 3.1.27, created on 2022-09-26 11:41:00
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/deposit.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:85603633863318fcc69b9d9_24149320%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84e63258e3aa234342d67220255ca3215120654a' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/deposit.confirm.tpl',
      1 => 1664177010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85603633863318fcc69b9d9_24149320',
  'variables' => 
  array (
    'false_data' => 0,
    'deposit' => 0,
    'coin_payment_image' => 0,
    't' => 0,
    'currency_sign' => 0,
    'payment_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63318fcc6b9633_22028102',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63318fcc6b9633_22028102')) {
function content_63318fcc6b9633_22028102 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '85603633863318fcc69b9d9_24149320';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Deposit Confirm</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

<?php if ($_smarty_tpl->tpl_vars['false_data']->value != 1) {?>

<table cellspacing=0 cellpadding=2 class="form deposit_confirm">
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['id'] > 0) {?>
<tr>
 <th>Plan:</th>
 <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['deposit']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
 <td rowspan=6><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['coin_payment_image']->value);?>
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
 <th>Capital Return:</th>
 <td><?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return']) {?>Yes<?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'] > 0) {?>, with <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'],2));?>
% fee<?php }
} else { ?>No (included in profit)<?php }?></td>
</tr>
<tr>
 <th>Capital Withdraw:</th>
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
 <td>USD <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['user_amount']);?>
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
 <td>USD <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']);?>
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
 <td>USD <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</td>
</tr>
<?php }?>
</table>


   
                </div>
                            </div>
                        </div>
                        <!-- subscribe-wrapper end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe section end -->
<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['payment_form']->value);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>