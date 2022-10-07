<?php /* Smarty version 3.1.27, created on 2022-10-06 01:48:58
         compiled from "/home/u653868903/domains/hybridminers.io/public_html/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:633907194633e340a6f8d86_86369319%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd84a6715bb773811daa928c9e0f0d035250bcfb' => 
    array (
      0 => '/home/u653868903/domains/hybridminers.io/public_html/tmpl/account_main.tpl',
      1 => 1664204329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633907194633e340a6f8d86_86369319',
  'variables' => 
  array (
    'ab_formated' => 0,
    'userinfo' => 0,
    'last_access' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_633e340a7018d4_39024479',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_633e340a7018d4_39024479')) {
function content_633e340a7018d4_39024479 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/u653868903/domains/hybridminers.io/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '633907194633e340a6f8d86_86369319';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Dashboard</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Account</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

    <!-- dashboard section start -->
    <div class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row mb-none-30">
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Account Balance</span>
                    <h4 class="currency-amount">$<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
 </h4>

                    <a href="/?a=deposit" class="cmn-btn btn-md mt-4">Add Funds</a>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-dollar-sign"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Pending Withdrawal:</span>
                    <h4 class="currency-amount"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']);?>
</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-wallet"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Active Deposit:</span>
                    <h4 class="currency-amount"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cubes "></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Deposit</span>
                    <h4 class="currency-amount">$<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']);?>
</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-credit-card"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Withdraw</span>
                    <h4 class="currency-amount">$<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">User: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</span>
                    <h4 class="caption">Registration Date: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['create_account_date']);?>
</h4>
                    <h4 class="caption">Last Access: <?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_access']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Mail Us admin@hybridminers.io</span>
                    <h4 class="caption"> Or  admin@hybridminers.io</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
                
                </div><!-- d-widget-two end -->
            
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Your referral program link. Copy and share.</span>
                    <h4 class="caption"><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
"> <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
             
              </div>
              

              </div>
        </div>
      </div>
    </div>
    <!-- dashboard section end -->

<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>