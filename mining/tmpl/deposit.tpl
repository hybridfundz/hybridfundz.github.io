{include file="mheader.tpl"}

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

{literal}
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
{/literal}
                    


{if $fatal}

{if $fatal == 'one_per_month'}
<div class="alert alert-danger">
You can deposit once a month only.
</div>
{/if}

{else}

{literal}
<script language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");

{/literal}
  {if $qplans > 1}
{literal}
  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }
{/literal}
  {/if}
{literal}

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
--></script>
{/literal}

{if $frm.say eq 'deposit_success'}
<div class="alert alert-success">The deposit has been successfully saved.</div>
{/if}

{if $frm.say eq 'deposit_saved'}
<div class="alert alert-info">The deposit has been saved. It will become active when the administrator checks statistics.</div>
{/if}

{if $errors}
{if $errors.less_min}<div class="alert alert-danger">
Sorry, you can deposit not less than {$currency_sign}{$errors.less_min} with selected processing</div>
{/if}
{if $errors.greater_max}
<div class="alert alert-danger">
Sorry, you can deposit not greater than {$currency_sign}{$errors.greater_max} with selected processing</div>
{/if}
{if $errors.ec_forbidden}
<div class="alert alert-danger">
Sorry, deposit with selected processing is temproary forbidden.</div>
{/if}
{if $errors.cannot_invest_this_plan_anymore}
<div class="alert alert-danger">
Sorry, you cannot invest this plan anymore</div>
{/if}
{/if}


       <!-- package section start -->
 <section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b class="base--color">{if $qplans > 1} Select a plan:{/if}</b></h2>
                    <p>To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</p>    
                </div>
            </div>
        </div>
        <!-- row end -->
               
               

<form method=post name="spendform">
    <input type=hidden name=a value=deposit>
    
  <div class="row justify-content-center mb-none-30">
    {foreach from=$plans item=plan name=fplans}  
  <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
  <div class="package-card text-center bg_img" data-background="assets/images/bg/bg-4.png">
 <h4 class="package-card__title base--color mb-2">{if $plans|@count > 1}
        <input type=radio name=h_id value="{$plan.id}" {if (($smarty.foreach.fplans.first == 1) && (!$frm.h_id)) || ($frm.h_id == $plan.id)} checked {/if} onclick="updateCompound()"> 
    {else}
        <input type=hidden name=h_id value="{$plan.id}">
    {/if} {$plan.name|escape:html} {foreach from=$plan.plans item=o} </h4>
<ul class="package-card__features mt-4">
<li>Min : {$o.min_deposit}</li>
   <li>Max : {$o.max_deposit}</li>
     <li>Return: {$o.percent}%</li> 
        </ul>
          
    </ul>
 <div class="package-card__range mt-5 base--color">{$o.min_deposit} - {$o.max_deposit}</div>  {/foreach}
          {if $settings.enable_calculator}
    <li>Calculate your profit &gt;&gt; <span class="badge base--bg text-dark"><a href="javascript:openCalculator('{$plan.id}')">Calculator</a></span></li>{/if}                 
     </div>      
      </div>  
  
     {/foreach}                             
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
                         Available Balance (USD): {$ab_formated.total}</font>   
                            <hr>
                            
                            <div class="form-group">
                              <label class="form-label" for="field-1"><font color="white">Amount to Invest (USD)</font></label>  
                        <div class="controls">
        <input type="text" name="amount" class="form-control" value='{$min_deposit}' placeholder="Amount to Invest">
    </div>
    </div>
    <hr>
       
        <select class="form-control input-sm m-bot15" name="type" required>
            <option value="process_48">SELECT PAYMENT METHOD * </option>
            
{section name=p loop=$ps}
   {if $ps[p].balance > 0 and $ps[p].status == 1}
   <option value="account_{$ps[p].id}">Invest from Available Balance {$ps[p].name}</option>
   {/if}
{/section}

{section name=p loop=$ps}
   {if $ps[p].status}
   <option value="process_{$ps[p].id}">{$ps[p].name}</option>
   {/if}
{/section}

        </select>
       
     <hr>
     <center>
     <input type=submit value="Proceed" class="btn btn-primary">
       </center>                     
                

</div></div></div>

</div></section></div>
</form>
{literal}
<script language=javascript>
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match(/^process_/))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
updateCompound();
</script>
{/literal}

{/if}
{include file="mfooter.tpl"}