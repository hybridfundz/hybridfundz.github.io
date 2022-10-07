<?php /* Smarty version 3.1.27, created on 2022-09-27 19:54:43
         compiled from "my:edit_plan_compound_settings" */ ?>
<?php
/*%%SmartyHeaderCode:1147088771633355031624c9_81613701%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b9be87c33a1087ee056fed83bc9e77e140805c2' => 
    array (
      0 => 'my:edit_plan_compound_settings',
      1 => 1664308483,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1147088771633355031624c9_81613701',
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63335503166ce3_17603546',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63335503166ce3_17603546')) {
function content_63335503166ce3_17603546 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1147088771633355031624c9_81613701';
?>
<tr id=tr_compouding1> <td colspan=2><input type=checkbox name=use_compound value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['use_compound'] == 1) {?>checked<?php }?> onclick="ed_compound_f();CalculateProfit();InitCalendar();"> <a href="javascript:alert('You can use the compounding for this package.')" class=hlp>Use compounding</td> </tr><tr id=tr_compouding2> <td> &nbsp; Compounding deposit amount limits:</td> <td><nobr>min: <input type=input name=compound_min_deposit value="<?php echo amount_smarty_format($_smarty_tpl->tpl_vars['type']->value['compound_min_deposit']);?>
" class=inpts size=6 style='text-align:right'> max: <input type=input name=compound_max_deposit value="<?php echo amount_smarty_format($_smarty_tpl->tpl_vars['type']->value['compound_max_deposit']);?>
" class=inpts size=6 style="text-align:right"> <small>set 0 to skip</small></td> </tr><tr id=tr_compouding3> <td> &nbsp; Compounding percent limits:</td> <td><input type=input name=compound_percents value="<?php echo $_smarty_tpl->tpl_vars['type']->value['compound_percents'];?>
" class=inpts> <small>ex: 0-50,70,100</small></td> </tr> <?php if (!'hide_Return_compounded_amount_on_deposit_end') {?> <tr id=tr_compouding4> <td colspan=2> &nbsp; <input type=checkbox name=compound_return value=1 <?php if ($_smarty_tpl->tpl_vars['type']->value['compound_return']) {?>checked<?php }?> class=inpts> Return compounded amount on deposit end?</td> </tr> <?php }?>  <?php echo '<script'; ?>
> function CheckCompound() { var e = document.getElementById("hperiod"); var period_str = e.options[e.selectedIndex].value; if ((period_str == "end")||(period_str == "endh")) { document.nform.use_compound.disabled = true; document.nform.compound_return.disabled = true; document.getElementById("tr_compouding1").style.display = "none"; document.getElementById("tr_compouding2").style.display = "none"; document.getElementById("tr_compouding3").style.display = "none";  <?php if (!'hide_Return_compounded_amount_on_deposit_end') {?> document.getElementById("tr_compouding4").style.display = "none"; <?php }?>  document.getElementById("tr_delay_earnigs").style.display = "none"; } else { document.nform.use_compound.disabled = false; document.nform.compound_return.disabled = false; document.getElementById("tr_compouding1").style.display = "table-row"; document.getElementById("tr_compouding2").style.display = "table-row"; document.getElementById("tr_compouding3").style.display = "table-row";  <?php if (!'hide_Return_compounded_amount_on_deposit_end') {?> document.getElementById("tr_compouding4").style.display = "table-row"; <?php }?>  document.getElementById("tr_delay_earnigs").style.display = "table-row"; } CheckDailyPlan(); } // enable - disable compound fields 
function ed_compound_f() { document.nform.compound_min_deposit.disabled = (document.nform.use_compound.checked) ? false : true; document.nform.compound_max_deposit.disabled = (document.nform.use_compound.checked) ? false : true; document.nform.compound_percents.disabled = (document.nform.use_compound.checked) ? false : true;  <?php if (!'hide_Return_compounded_amount_on_deposit_end') {?> document.nform.compound_return.disabled = (document.nform.use_compound.checked) ? false : true; <?php }?>  } ed_compound_f(); <?php echo '</script'; ?>
> <?php }
}
?>