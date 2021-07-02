<?php /* Smarty version 3.1.27, created on 2021-06-28 11:28:14
         compiled from "/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/captcha.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4438249860d9b24e064955_23535538%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bd2807c55657cdb01c54756372a036b16d566a8' => 
    array (
      0 => '/home/u355647698/domains/crypto-scoot.com/public_html/tmpl/captcha.tpl',
      1 => 1609542521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4438249860d9b24e064955_23535538',
  'variables' => 
  array (
    'action' => 0,
    'ti' => 0,
    'inpt_size' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_60d9b24e222606_58675428',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_60d9b24e222606_58675428')) {
function content_60d9b24e222606_58675428 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u355647698/domains/crypto-scoot.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '4438249860d9b24e064955_23535538';
if ($_smarty_tpl->tpl_vars['ti']->value['check'][$_smarty_tpl->tpl_vars['action']->value]) {?>

<?php if ($_smarty_tpl->tpl_vars['ti']->value['type'] == 'image') {?>
<tr>
 <td class=menutxt><img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"></td>
 <td><input type=text name=validation_number class=inpts size=<?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['inpt_size']->value)===null||$tmp==='' ? 30 : $tmp));?>
></td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ti']->value['type'] == 'recaptcha_v2') {?>
<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
<tr>
 <td class=menutxt colspan=2>
<div class="g-recaptcha" data-sitekey="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['recaptcha_site_key']);?>
"></div>
 </td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ti']->value['type'] == 'recaptcha_v3') {?>
<?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['recaptcha_site_key']);?>
"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
  grecaptcha.ready(function() {
      grecaptcha.execute('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['recaptcha_site_key']);?>
', {action: '<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['action']->value);?>
'}).then(function (token) {
                var rinput = document.getElementById('g-recaptcha');
                rinput.value = token;
            });
  });
  <?php echo '</script'; ?>
>

<tr>
 <td class=menutxt colspan=2>
<input type="hidden" name="g-recaptcha-response" id="g-recaptcha">
 </td>
</tr>
<?php }?>

<?php }
}
}
?>