
{include file="mheader.tpl"}

 <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Tell a Friend</h2>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li>History</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

<h3>Tell friend:</h3><br><br>

{if $say eq 'invite_sent'}
Your invite/invites has been successfully sent.<br><br>
{/if}

<form action="index.php" method=post >
<input type=hidden name=a value=tell_friend>
<input type=hidden name=action value=tell_friend>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Name 1:</td>
 <td><input type=text name=name1 class=inpts></td>
 <td>Email 1:</td>
 <td><input type=text name=email1 class=inpts></td>
</tr>
<tr>
 <td>Name 2:</td>
 <td><input type=text name=name2 class=inpts></td>
 <td>Email 2:</td>
 <td><input type=text name=email2 class=inpts></td>
</tr>
<tr>
 <td>Name 3:</td>
 <td><input type=text name=name3 class=inpts></td>
 <td>Email 3:</td>
 <td><input type=text name=email3 class=inpts></td>
</tr>
<tr>
 <td colspan=4 align=center><input type=submit value="Send" class=sbmt></td>
</tr>
</table>
</form>

{include file="footer.tpl"}

