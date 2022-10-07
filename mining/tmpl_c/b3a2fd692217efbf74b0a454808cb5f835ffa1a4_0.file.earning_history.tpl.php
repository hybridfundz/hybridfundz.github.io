<?php /* Smarty version 3.1.27, created on 2022-09-28 00:11:51
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/earning_history.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:989277433633391475996c1_21030702%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3a2fd692217efbf74b0a454808cb5f835ffa1a4' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/earning_history.tpl',
      1 => 1664177014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '989277433633391475996c1_21030702',
  'variables' => 
  array (
    'current_page' => 0,
    'options' => 0,
    'ecs' => 0,
    'frm' => 0,
    'month' => 0,
    'day' => 0,
    'year' => 0,
    'trans' => 0,
    't' => 0,
    'return' => 0,
    'totals' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633391475d4001_58156401',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633391475d4001_58156401')) {
function content_633391475d4001_58156401 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '989277433633391475996c1_21030702';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Earning History</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
           

<?php echo '<script'; ?>
 language=javascript>
function go(p)
{
  document.opts.page.value = p;
  document.opts.submit();
}
<?php echo '</script'; ?>
>


<table cellspacing=0 cellpadding=0 border=0 width=100<?php echo '%>';?>
<tr>
 <td colspan=3>
	<h3>History:</h3>
 </td>
</tr>
<tr>
<form method=post name=opts>
<input type=hidden name=a value=history>
<input type=hidden name=page value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['current_page']->value);?>
>
 <td>
   <select name=type class=inpts onchange="document.opts.submit();">
<option value="">All transactions</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['opt'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['name'] = 'opt';
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['options']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total']);
?>
<option value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opt']['index']]['type']);?>
" <?php if ($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opt']['index']]['selected']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opt']['index']]['type_name']);?>
</option>
<?php endfor; endif; ?>
   </select>
<?php if ($_smarty_tpl->tpl_vars['ecs']->value) {?>
<br><img src=images/q.gif width=1 height=4><br>
   <select name=ec class=inpts>
     <option value=-1>All eCurrencies</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['name'] = 'ec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ecs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total']);
?>
 <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ecs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ec']['index']]['id']);?>
 <?php if ($_smarty_tpl->tpl_vars['frm']->value['ec'] == $_smarty_tpl->tpl_vars['ecs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ec']['index']]['id']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ecs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ec']['index']]['name']);?>
</option>
<?php endfor; endif; ?>
   </select>
<?php }?>
 </td>
 <td align=right>
From: <select name=month_from class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['name'] = 'month_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['month_from']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['month']->value[$_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']]);?>

<?php endfor; endif; ?>
</select> &nbsp;
<select name=day_from class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['name'] = 'day_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['day']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['day_from']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['day']->value[$_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']]);?>

<?php endfor; endif; ?>
</select> &nbsp;

<select name=year_from class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['name'] = 'year_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']]);?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']] == $_smarty_tpl->tpl_vars['frm']->value['year_from']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']]);?>

<?php endfor; endif; ?>
</select><br><img src=images/q.gif width=1 height=4><br>

To: <select name=month_to class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['name'] = 'month_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['month_to']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['month']->value[$_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']]);?>

<?php endfor; endif; ?>
</select> &nbsp;
<select name=day_to class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['name'] = 'day_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['day']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['day_to']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['day']->value[$_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']]);?>

<?php endfor; endif; ?>
</select> &nbsp;

<select name=year_to class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['name'] = 'year_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']]);?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']] == $_smarty_tpl->tpl_vars['frm']->value['year_to']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']]);?>

<?php endfor; endif; ?>
</select>

 </td>
 <td>
	&nbsp; <input type=submit value="Go" class=sbmt>
 </td>
</tr></table>
</form>
<br><br>
<div class="row mt-50">
              <div class="col-lg-12">
                <div class="table-responsive--md p-0">
                  <table class="table style--two white-space-nowrap">
                    <thead>
                      <tr>
                        
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Date</th>
                       
                      </tr>
                    </thead>


<?php
$_from = $_smarty_tpl->tpl_vars['trans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
   <tbody>
<tr>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['transtype']);?>
</b></td>
 <td width=200 align=right><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['t']->value['amount'],$_smarty_tpl->tpl_vars['t']->value['ec']));?>
</b> <?php if ($_smarty_tpl->tpl_vars['t']->value['type'] == 'withdraw_pending') {?><a href="<?php echo smarty_modifier_myescape(encurl("?a=cancelwithdraw&id=".((string)$_smarty_tpl->tpl_vars['t']->value['id'])."&return=".((string)$_smarty_tpl->tpl_vars['return']->value)."&"));?>
" onclick="return confirm('Are you sure you want to delete this request?')">[cancel]</a><?php }?></td>
 <td width=170 align=center valign=bottom><b><small><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['d']);?>
</small></b></td>
</tr>
<tr>
 <td colspan=3 class=gray><small><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['description'], ENT_QUOTES, 'UTF-8', true));?>
</small></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
if (!$_smarty_tpl->tpl_vars['t']->_loop) {
?>
<tr>
 <td colspan=3 align=center>No transactions found</td>
</tr>
<?php
}
?>
<tr><td colspan=3>&nbsp;</td>

<?php if ($_smarty_tpl->tpl_vars['totals']->value) {?>
<tr>
 <td><b>Total for selected options:</b></td>
 <td align=right nowrap>
  <?php
$_from = $_smarty_tpl->tpl_vars['totals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['t']->value['amount'],$_smarty_tpl->tpl_vars['t']->value['ec']));?>
 <br><?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
 </td>
 <td></td>
</tr>
   <tbody>
<?php }?>


</table>

<?php echo paginator(array('col'=>$_smarty_tpl->tpl_vars['paginator']->value['col'],'cur'=>$_smarty_tpl->tpl_vars['paginator']->value['cur'],'url'=>"javascript:go('%s')"),$_smarty_tpl);?>




                        </div>
                        <!-- subscribe-wrapper end -->
                    </div>
                </div>
            </div>
        </section>

           </div>
                </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>