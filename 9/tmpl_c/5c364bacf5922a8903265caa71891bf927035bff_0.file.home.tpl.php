<?php /* Smarty version 3.1.27, created on 2022-07-17 00:08:55
         compiled from "C:\Users\Administrator\Desktop\xampp56\htdocs\ggc\tmpl\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4362d336f79508f5_07521589%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c364bacf5922a8903265caa71891bf927035bff' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\xampp56\\htdocs\\ggc\\tmpl\\home.tpl',
      1 => 1599410754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4362d336f79508f5_07521589',
  'variables' => 
  array (
    'settings' => 0,
    'currency_sign' => 0,
    'ref_plans' => 0,
    'percent' => 0,
    'ref_levels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62d336f79dc866_64915619',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62d336f79dc866_64915619')) {
function content_62d336f79dc866_64915619 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once 'C:\\Users\\Administrator\\Desktop\\xampp56\\htdocs\\ggc\\inc\\libs\\smarty3\\plugins\\modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '4362d336f79508f5_07521589';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


Our program is intended for people willing to achieve their financial freedom but unable to do so because they're not financial experts.<br>

<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is a long term high yield private loan program, backed up by Forex market trading and investing in various funds and activities. 
Profits from these investments are used to enhance our program and increase its stability for the long term.<br><br>

<br><br>


<?php echo $_smarty_tpl->getSubTemplate ("index.plans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<br><br>
All payments are made to your account Daily. <br>
Minimum spend is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
10 and there is no maximum. <br>
You may make an additional spend as many times as you like. <br>

<br><br>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] == 1 && $_smarty_tpl->tpl_vars['ref_plans']->value) {?>
Use our referral program and earn up to <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['percent']->value);?>
% of referral deposits!<br><br>
<b>Our first level referral bonuses:</b>
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <td class=inheader>Name</td>
 <td class=inheader>From</td>
 <td class=inheader>To</td>
 <td class=inheader>Commision (%)</td>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['r'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['r']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['name'] = 'r';
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ref_plans']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total']);
?>
<tr>
 <td class=item><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ref_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['name']);?>
</td>
 <td class=item align=center><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ref_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['from_value']);?>
</td>
 <td class=item align=center><?php if ($_smarty_tpl->tpl_vars['ref_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['to_value'] == 0) {?>and more<?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ref_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['to_value']);
}?></td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ref_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['percent']);?>
</td>
</tr>
<?php endfor; endif; ?>
</table>
<br><br>
<?php if ($_smarty_tpl->tpl_vars['ref_levels']->value) {?>
Our other levels referral bonuses (not depending on the number of referrals):<br>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['name'] = 'rl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ref_levels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total']);
?>
Level <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ref_levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['level']);?>
: <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ref_levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['percent']);?>
%</b><br> 
<?php endfor; endif; ?>
<?php }?>
<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>