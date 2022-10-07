<?php /* Smarty version 3.1.27, created on 2022-09-26 14:44:54
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/deposit_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12551691556331bae6849521_29855678%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8cfc320f1eac2346c2acec32c35ee3ed22c838f' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/deposit_list.tpl',
      1 => 1664183209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12551691556331bae6849521_29855678',
  'variables' => 
  array (
    'plans' => 0,
    'p' => 0,
    'o' => 0,
    'currency_sign' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6331bae6871535_56249618',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6331bae6871535_56249618')) {
function content_6331bae6871535_56249618 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '12551691556331bae6849521_29855678';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Deposit List</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    
 
    <section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b class="base--color">Plans</b></h2>
              <p>To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</p>
            </div>
          </div>
        </div>
    
   

<div class="row justify-content-center mb-none-30">
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
<div class="col-xl-3 col-lg-4 col-md-6 mb-30">
 <div class="package-card text-center bg_img" data-background="assets/images/bg/bg-4.png">
 <h4 class="package-card__title base--color mb-2"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</h4>

 <ul class="package-card__features mt-4">

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
<li><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['name']);?>
</li>
<li>Min:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['min_deposit']);?>
 <?php if ($_smarty_tpl->tpl_vars['o']->value['max_deposit'] > 0) {?></li>
 <li> Max:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['max_deposit']);
} else { ?>and more<?php }?></li>
 <li>Return<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['percent']);?>
</li>
 </ul>
              <div class="package-card__range mt-5 base--color">Cloud Mining</div>
              <a href="?a=deposit" class="cmn-btn btn-md mt-4">Invest Now</a>
            </div>
            
         </div><?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
        </div>
      </div>
    </section>


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
 <td align=center class=item><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['d']->value['deposit'],$_smarty_tpl->tpl_vars['d']->value['ec']));?>
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
<tr><td>Deposited Total:</td><td><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['total_deposit']));?>
</b></td></tr>
<tr><td>Profit Today:</td><td><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['today_profit']));?>
</b></td></tr>
<tr><td>Total Profit:</td><td><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['total_profit']));?>
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
                                                     </div>                                              </div>                 </div>             </div>         </section>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>