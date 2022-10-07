{include file="mheader.tpl"}

 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Preview</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <!-- inner hero end -->
<h3>Exchange Confirmation:</h3><br><br>
<form method=post name="exchange_form">
  <input type="hidden" name="a" value="exchange">
  <input type="hidden" name="action" value="exchange">
  <input type="hidden" name="from" value="{$ex_from.ec}">
  <input type="hidden" name="to" value="{$ex_to.ec}">
  <input type="hidden" name="amount" value="{$ex_from.amount}">
  <table cellspacing=0 cellpadding=2 border=0 class="form">
  <tr>
    <th>From:</th>
    <td><img src="images/{$ex_from.ec}.gif" align=absmiddle>{$ex_from.name|escape:html}</td>
    <th>Amount:</th>
    <td>{$ex_from.amount|fiat:$ex_from.ec}</td>
  </tr>
  <tr>
    <th>Commission:</th>
    <td colspan=3>{$fees.percent}%</td>
  </tr>
  <tr>
    <th>To:</th>
    <td><img src="images/{$ex_to.ec}.gif" align=absmiddle>{$ex_to.name|escape:html}</td>
    <th>Amount:</th>
    <td>{$ex_to.amount|fiat:$ex_to.ec}</td>
  </tr>
{* You are trying to exchange {$currency_sign}{$amount} {$from_name} to {$currency_sign}{$exchange_amount} {$to_name}. *}
  <tr>
   <th></th>
   <td><input type=submit name="button" value="Confirm" class=sbmt></td>
  </tr>
  </table>
</form>

{literal}
<script>
function update_rate() {
document.exchange_form.action.value = 'preview';
document.exchange_form.button.disabled = true;
document.exchange_form.submit();
}
setTimeout('update_rate()', 10*1000);
</script>
{/literal}

{include file="footer.tpl"}
