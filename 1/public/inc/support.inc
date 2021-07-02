<?
/***********************************************************************/
/*                                                                     */
/*  This file is created by deZender                                   */
/*                                                                     */
/*  deZender (Decoder for Zend Encoder/SafeGuard):                     */
/*    Version:      0.9.3.1                                            */
/*    Author:       qinvent.com                                        */
/*    Release on:   2005.12.5                                          */
/*                                                                     */
/***********************************************************************/


  if ($frm['action'] == 'send')
  {
    $from = ($userinfo['logged'] ? $userinfo['email'] : $frm['email']);
    $message = $settings['site_name'] . ' Support request from ' . date ('l dS of F Y h:i:s A') . '

---------------------------------------------------------------
';
    $message .= $frm['message'];
    $message .= '

---------------------------------------------------------------
';
    $message .= 'User Additional Info :
';
    if ($userinfo['logged'] == 1)
    {
      $accounting = array ();
      $accounting = get_user_balance ($userinfo['id']);
      $message .= 'User      : ' . $userinfo['username'] . '
';
      $message .= 'User Name : ' . $userinfo['name'] . '
';
      $message .= 'E-Mail    : ' . $userinfo['email'] . '
';
      $message .= 'E-Gold Acc : ' . $userinfo['egold_account'] . '
';
      if ($settings[def_payee_account_intgold])
      {
        $message .= 'IntGold Acc : ' . $userinfo['intgold_account'] . '
';
      }

      if ($settings[def_payee_account_stormpay])
      {
        $message .= 'StormPay Acc : ' . $userinfo['stormpay_account'] . '
';
      }

      if ($settings[def_payee_account_ebullion])
      {
        $message .= 'e-Bullion Acc : ' . $userinfo['ebullion_account'] . '
';
      }

      if ($settings[def_payee_account_paypal])
      {
        $message .= 'PayPal Acc : ' . $userinfo['paypal_account'] . '
';
      }

      if ($settings[def_payee_account_goldmoney])
      {
        $message .= 'GoldMoney Acc : ' . $userinfo['goldmoney_account'] . '
';
      }

      if ($settings[def_payee_account_eeecurrency])
      {
        $message .= 'eeeCurrency Acc : ' . $userinfo['eeecurrency_account'] . '
';
      }

      if ($settings[def_payee_account_pecunix])
      {
        $message .= 'Pecunix Acc : ' . $userinfo['pecunix_account'] . '
';
      }

      $message .= 'Status    : ' . $userinfo['status'] . '
';
      $message .= '' . 'Active Deposits  : $' . sprintf ('%.02f', $accounting['active_deposit']) . '
';
    }
    else
    {
      $message .= 'User Name : ' . $frm['name'] . '
';
      $message .= 'E-Mail    : ' . $frm['email'] . '
';
      $message .= 'Not Registered/Logged user
';
    }

    $message .= 'IP Address: ' . $_SERVER['REMOTE_ADDR'] . '
';
    $message .= 'Language  : ' . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '
';
    $q = 'select * from hm2_users where id = 1';
    $sth = mysql_query ($q);
    $admin_email = '';
    while ($row = mysql_fetch_array ($sth))
    {
      $admin_email = $row['email'];
    }

    mail ($admin_email, $settings['site_name'] . ' Support Request', $message, '' . 'From: ' . $from);
    header ('Location: ?a=support&say=send

');
    exit ();
  }

  $smarty->assign ('say', $frm['say']);
  $smarty->display ('support.tpl');
?>
