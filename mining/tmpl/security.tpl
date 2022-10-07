{include file="mheader.tpl"}


 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">2FA</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>Account</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

<h2 class="section-title"><span class="font-weight-normal"></span> <b class="base--color"></b></h2>
      


        <section class="pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="subscribe-wrapper bg_img" data-background="assets/images/bg/bg-5.jpg">
                           


<h3>Advanced login security settings:</h3><br><br>

<form method=post>
<input type=hidden name=a value="security">
<input type=hidden name=action value="save">
Detect IP Address Change Sensitivity<br>
<input type=radio name=ip value=disabled {if $security.detect_ip == 'disabled'}checked{/if}>Disabled<br>
<input type=radio name=ip value=medium {if $security.detect_ip == 'medium'}checked{/if}>Medium<br>
<input type=radio name=ip value=high {if $security.detect_ip == 'high'}checked{/if}>High<br>
<input type=radio name=ip value=always {if $security.detect_ip == 'always'}checked{/if}>Paranoic<br><br>

Detect Browser Change<br>
<input type=radio name=browser value=disabled {if $security.detect_browser == 'disabled'}checked{/if}>Disabled<br>
<input type=radio name=browser value=enabled {if $security.detect_browser == 'enabled'}checked{/if}>Enabled<br><br>
<input type=submit value="Set" class=sbmt>
</form>

{if $settings.use_tfa}
<h3>Two Factor Authentication</h3>
<form method=post name=mainform>
<input type=hidden name=a value="security">
<input type=hidden name=action value="tfa_save">
<input type=hidden name=time>
{if $errors.invalid_tfa_code}
<b style=color:red>Invalid code.</b><br>
{/if}
{if $errors.invalid_tfa_secret}
<b style=color:red>Invalid Secret.</b><br>
{/if}

{if $tfa_enabled}
<input type="checkbox" name="tfa_on_login" value=1 {if $tfa_settings.login}checked{/if}> on Login<br>
<input type="checkbox" name="tfa_on_edit_account" value=1 {if $tfa_settings.edit_account}checked{/if}> on Edit Account<br>
<input type="checkbox" name="tfa_on_withdraw" value=1 {if $tfa_settings.withdraw}checked{/if}> on Withdraw<br>
{if $settings.internal_transfer_enabled}
<input type="checkbox" name="tfa_on_internal_transfer" value=1 {if $tfa_settings.internal_transfer}checked{/if}> on Internal Transfer<br>
{/if}
<input type="checkbox" name="tfa_disable" value=1> <b style=color:red>Disable Two Factor Authentication (not recommended)</b><br>
<br>
Confirm by typing code: <input type=text name="code" class=inpts> <input type=submit value="Update" class=sbmt>
{else}
1. Install <a href="http://m.google.com/authenticator" target=_blank>Google Authenticator</a> on your mobile device.<br>
2. Your Secret Code is: <b>{$tfa_secret}</b> <input type=hidden name="tfa_secret" value="{$tfa_secret}"><br>
<img src="{$tfa_secret_url}"><br>
3. Please enter two factor token from Google Authenticator to verify correct setup:<br> 
<input type=text name="code" class=inpts> <input type=submit value="Enable" class=sbmt>
{/if}
</form>


{literal}
<script language=javascript>
document.mainform.time.value = (new Date()).getTime();

function checkform() {
  if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
    alert("Please type code!");
    document.mainform.code.focus();
    return false;
  }
  return true;
}
</script>
{/literal}
{/if} {* use_tfa *}

                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
{include file="footer.tpl"}
