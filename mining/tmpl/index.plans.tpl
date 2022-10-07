{literal}
<script language="javascript"><!--
function openCalculator(id)
{
  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");
}
--></script>
{/literal}

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
          <div class="col-xl-3 col-lg-4 col-md-6 mb-30">       
{foreach from=$index_plans item=p}
{if !$p.closed}
<div class="package-card text-center bg_img" data-background="assets/images/bg/bg-4.png">
<h4 class="package-card__title base--color mb-2">{if $p.dsc != ''}<a href="{"?a=show_package_info&id=`$p.id`"|encurl}">{/if}<b>{$p.name|escape:html}</b></a></h4>

{if $p.plans}

{foreach from=$p.plans item=o}
   <ul class="package-card__features mt-4">
                
<li>{$o.name|escape:html}<span class="badge base--bg text-dark">{$o.deposit}</span></li>
                    <li>{$o.percent|string_format:"%.2f"}</li>

{/foreach}
{if $settings.enable_calculator and $p.period != 'Floating'}
 <a href="javascript:openCalculator('{$p.id}')">Calculate your profit &gt;&gt;</a>

{/if}
{/if}

{if $userinfo.logged}
<br>
<form method=post>
<input type=hidden name=a value=deposit>
<input type=submit value="Make deposit" class=sbmt>
<input type=hidden name=h_id value={$p.id}>
</form>
<br><br>
{/if}
{/if}
{/foreach}
