<?php /* Smarty version 3.1.27, created on 2021-01-02 19:25:35
         compiled from "my:rates_bottom" */ ?>
<?php
/*%%SmartyHeaderCode:19512276465ff0c8af5d6771_86045995%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd00238fa58650c64a3075c5be273de7e32db5e8d' => 
    array (
      0 => 'my:rates_bottom',
      1 => 1609615535,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '19512276465ff0c8af5d6771_86045995',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ff0c8af5da9a7_88766391',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ff0c8af5da9a7_88766391')) {
function content_5ff0c8af5da9a7_88766391 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19512276465ff0c8af5d6771_86045995';
?>
 </td><td align=right> <form method=get> <input type=hidden name=a value="holidays"> <input type=submit value="Holidays" class=sbmt size=15> </form> </td> </tr> </table> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Investment packages:<br> You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li> Active package. All active users will receive earnings every pay period if made a deposit</li> <li> Inactive package. Users will not receive any earnings</li> <br><br> Here you can view, edit and delete your packages and plans. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>