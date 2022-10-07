<?php /* Smarty version 3.1.27, created on 2022-10-06 01:49:05
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/deposit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1244793852633e3411ac3070_77268778%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5729e1f66073368d1098f916b67e5e68fb747f1' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/deposit.tpl',
      1 => 1664177012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1244793852633e3411ac3070_77268778',
  'variables' => 
  array (
    'fatal' => 0,
    'qplans' => 0,
    'frm' => 0,
    'errors' => 0,
    'currency_sign' => 0,
    'plans' => 0,
    'plan' => 0,
    'o' => 0,
    'settings' => 0,
    'ab_formated' => 0,
    'min_deposit' => 0,
    'ps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633e3411aee832_90299322',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633e3411aee832_90299322')) {
function content_633e3411aee832_90299322 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1244793852633e3411ac3070_77268778';
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700">


<style>

.pricingdiv{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  font-family: 'Source Sans Pro', Arial, sans-serif;
}

.pricingdiv ul.theplan{
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  border-top-left-radius: 50px;
  border-bottom-right-radius: 50px;
  color: white;
  background: #5987de;
  position: relative;
  width: 250px; /* width of each table */
  margin-right: 10px; /* spacing between tables */
  margin-bottom: 1em;
  transition: all .5s;
}

.pricingdiv ul.theplan:hover{ /* when mouse hover over pricing table */
  transform: scale(1.05);
  transition: all .5s;
  z-index: 100;
  box-shadow: 0 0 10px gray;
}

.pricingdiv ul.theplan li{$
  margin: 10px 20px;
  position: relative;
}

.pricingdiv ul.theplan li.title{
  font-size: 150%;
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
  text-transform: uppercase;
  border-bottom: 5px solid white;
}

.pricingdiv ul.theplan:nth-of-type(2){
  background: #e53499;
}
    
.pricingdiv ul.theplan:nth-of-type(3){
  background: #2a2cc8;
}

.pricingdiv ul.theplan:last-of-type{ /* remove right margin in very last table */
  margin-right: 0;
}

/*very last LI within each pricing UL */
.pricingdiv ul.theplan li:last-of-type{
  text-align: center;
  margin-top: auto; /*align last LI (price botton li) to the very bottom of UL */
}  

.pricingdiv a.pricebutton{
  background: white;
  text-decoration: none;
  padding: 10px;
  display: inline-block;
  margin: 10px auto;
  border-radius: 5px;
  color: navy;
  text-transform: uppercase;
}

@media only screen and (max-width: 500px) {
  .pricingdiv ul.theplan{
    border-radius: 0;
    width: 100%;
    margin-right: 0;
  }
  
  .pricingdiv ul.theplan:hover{
    transform: none;
    box-shadow: none;
  }
  
  .pricingdiv a.pricebutton{
    display: block;
  }
}

</style>

                    


<?php if ($_smarty_tpl->tpl_vars['fatal']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'one_per_month') {?>
<div class="alert alert-danger">
You can deposit once a month only.
</div>
<?php }?>

<?php } else { ?>


<?php echo '<script'; ?>
 language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");


  <?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?>

  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }

  <?php }?>


}

function updateCompound() {
  var id = 0;
  var tt = document.spendform.h_id.type;
  if (tt && tt.toLowerCase() == 'hidden') {
    id = document.spendform.h_id.value;
  } else {
    for (i = 0; i < document.spendform.h_id.length; i++) {
      if (document.spendform.h_id[i].checked) {
        id = document.spendform.h_id[i].value;
      }
    }
  }

  var cpObj = document.getElementById('compound_percents');
  if (cpObj) {
    while (cpObj.options.length != 0) {
      cpObj.options[0] = null;
    }
  }

  if (cps[id] && cps[id].length > 0) {
    document.getElementById('coumpond_block').style.display = '';

    for (i in cps[id]) {
      cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
    }
  } else {
    document.getElementById('coumpond_block').style.display = 'none';
  }
}
var cps = {};
--><?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_success') {?>
<div class="alert alert-success">The deposit has been successfully saved.</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_saved') {?>
<div class="alert alert-info">The deposit has been saved. It will become active when the administrator checks statistics.</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['less_min']) {?><div class="alert alert-danger">
Sorry, you can deposit not less than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['less_min']);?>
 with selected processing</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['greater_max']) {?>
<div class="alert alert-danger">
Sorry, you can deposit not greater than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['greater_max']);?>
 with selected processing</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['ec_forbidden']) {?>
<div class="alert alert-danger">
Sorry, deposit with selected processing is temproary forbidden.</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value['cannot_invest_this_plan_anymore']) {?>
<div class="alert alert-danger">
Sorry, you cannot invest this plan anymore</div>
<?php }?>
<?php }?>


       <!-- package section start -->
 <section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b class="base--color"><?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?> Select a plan:<?php }?></b></h2>
                    <p>To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</p>    
                </div>
            </div>
        </div>
        <!-- row end -->
               
               

<form method=post name="spendform">
    <input type=hidden name=a value=deposit>
    
  <div class="row justify-content-center mb-none-30">
    <?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['plan']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_fplans'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_fplans']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_fplans']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_fplans']->value['iteration'] == 1;
$foreach_plan_Sav = $_smarty_tpl->tpl_vars['plan'];
?>  
  <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
  <div class="package-card text-center bg_img" data-background="assets/images/bg/bg-4.png">
 <h4 class="package-card__title base--color mb-2"><?php if (count($_smarty_tpl->tpl_vars['plans']->value) > 1) {?>
        <input type=radio name=h_id value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan']->value['id']);?>
" <?php if ((((isset($_smarty_tpl->tpl_vars['__foreach_fplans']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_fplans']->value['first'] : null) == 1) && (!$_smarty_tpl->tpl_vars['frm']->value['h_id'])) || ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == $_smarty_tpl->tpl_vars['plan']->value['id'])) {?> checked <?php }?> onclick="updateCompound()"> 
    <?php } else { ?>
        <input type=hidden name=h_id value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan']->value['id']);?>
">
    <?php }?> <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
 <?php
$_from = $_smarty_tpl->tpl_vars['plan']->value['plans'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?> </h4>
<ul class="package-card__features mt-4">
<li>Min : <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['min_deposit']);?>
</li>
   <li>Max : <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['max_deposit']);?>
</li>
     <li>Return: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['percent']);?>
%</li> 
        </ul>
          
    </ul>
 <div class="package-card__range mt-5 base--color"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['min_deposit']);?>
 - <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['max_deposit']);?>
</div>  <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
          <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_calculator']) {?>
    <li>Calculate your profit &gt;&gt; <span class="badge base--bg text-dark"><a href="javascript:openCalculator('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan']->value['id']);?>
')">Calculator</a></span></li><?php }?>                 
     </div>      
      </div>  
  
     <?php
$_smarty_tpl->tpl_vars['plan'] = $foreach_plan_Sav;
}
?>                             
                </div>    
              
    </div>
</section>
         

                  
           
       
       <!-- package section start -->
 <section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title"><span class="font-weight-normal">DEPOSITS</span>-  <b class="base--color"> PAYMENT</b></h2>
                    </div>
            </div>
        </div>
        <!-- row end -->
       



        <section class="pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="subscribe-wrapper bg_img" data-background="assets/images/bg/bg-5.jpg">
                           
<div class="col-lg-12">
                    <section class="box">
                        <div class="content-body"><font color="white">
                         Available Balance (USD): <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</font>   
                            <hr>
                            
                            <div class="form-group">
                              <label class="form-label" for="field-1"><font color="white">Amount to Invest (USD)</font></label>  
                        <div class="controls">
        <input type="text" name="amount" class="form-control" value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_deposit']->value);?>
' placeholder="Amount to Invest">
    </div>
    </div>
    <hr>
       
        <select class="form-control input-sm m-bot15" name="type" required>
            <option value="process_48">SELECT PAYMENT METHOD * </option>
            
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance'] > 0 && $_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['status'] == 1) {?>
   <option value="account_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
">Invest from Available Balance <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>
</option>
   <?php }?>
<?php endfor; endif; ?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['status']) {?>
   <option value="process_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>
</option>
   <?php }?>
<?php endfor; endif; ?>

        </select>
       
     <hr>
     <center>
     <input type=submit value="Proceed" class="btn btn-primary">
       </center>                     
                

</div></div></div>

</div></section></div>
</form>

<?php echo '<script'; ?>
 language=javascript>
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match(/^process_/))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
updateCompound();
<?php echo '</script'; ?>
>


<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>