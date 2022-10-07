<?php /* Smarty version 3.1.27, created on 2022-10-06 01:46:47
         compiled from "my:hightcharts" */ ?>
<?php
/*%%SmartyHeaderCode:1582956628633e33876c3413_12129297%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1722fe02dab74db983b6d5cf3b1add82ab5891cf' => 
    array (
      0 => 'my:hightcharts',
      1 => 1665020807,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1582956628633e33876c3413_12129297',
  'variables' => 
  array (
    'ecs' => 0,
    'd' => 0,
    'totals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633e33876c74f2_62594698',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633e33876c74f2_62594698')) {
function content_633e33876c74f2_62594698 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1582956628633e33876c3413_12129297';
?>
 <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.7/highcharts.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
> var chart_options = { chart: { type: "column" }, title: { text: "Deposits/Withdrawals" }, subtitle: { text: "" }, legend: { enabled: false }, xAxis: { type: "datetime", labels: { format: "{value:%b %e}" } }, yAxis: { min: 0, title: { text: "Amount" } }, tooltip: { headerFormat: "<span style=font-size:10px>{point.key}</span><table>", pointFormat: "<tr><td style=color:{series.color};padding:0>{series.name}: </td>" + "<td style=padding:0 nowrap><b>{point.y}</b></td></tr>", footerFormat: "</table>", xDateFormat: "%b %e", shared: true, useHTML: true }, plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } } }; $(document).ready( function() {  <?php
$_from = $_smarty_tpl->tpl_vars['ecs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?> var ec = <?php echo $_smarty_tpl->tpl_vars['d']->value['ec'];?>
; var add_funds = <?php echo $_smarty_tpl->tpl_vars['d']->value['json']['add_funds'];?>
; var withdrawal = <?php echo $_smarty_tpl->tpl_vars['d']->value['json']['withdrawal'];?>
; chart_options.title.text = ""; //"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
";
 chart_options.tooltip.valuePrefix = "<?php echo $_smarty_tpl->tpl_vars['d']->value['fiat'];?>
";  var series = [ {"name":"In","color":"#ffbb00","data":add_funds}, {"name":"Out","color":"#00c292","data":withdrawal}, ]; chart_options.series = series; $("#chart_"+ec).highcharts(chart_options);  <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?> var add_funds = <?php echo $_smarty_tpl->tpl_vars['totals']->value['json']['add_funds'];?>
; var withdrawal = <?php echo $_smarty_tpl->tpl_vars['totals']->value['json']['withdrawal'];?>
; // chart_options.title.text = "Total";
 chart_options.tooltip.valuePrefix = "<?php echo $_smarty_tpl->tpl_vars['totals']->value['fiat'];?>
";  var series = [ {"name":"In","color":"#ffbb00","data":add_funds}, {"name":"Out","color":"#00c292","data":withdrawal}, ]; chart_options.series = series; $("#chart_totals").highcharts(chart_options); }); <?php echo '</script'; ?>
>  <?php }
}
?>