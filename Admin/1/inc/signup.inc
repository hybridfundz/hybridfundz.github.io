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


  if ($frm['say'] == 'confirm')
  {
    $smarty->display ('after_registration_confirm.tpl');
    db_close ($dbconn);
    exit ();
  }

  if ($frm['say'] == 'done')
  {
    $smarty->display ('after_registration.tpl');
    db_close ($dbconn);
    exit ();
  }

  if (($frm['action'] == 'signup' AND $settings['deny_registration'] == 0))
  {
    $errors = array ();
    if (((extension_loaded ('gd') AND $settings['graph_validation'] == 1) AND 0 < $settings['graph_max_chars']))
    {
      session_start ();
      if ($_SESSION['validation_number'] != $frm['validation_number'])
      {
        array_push ($errors, 'turing_image');
      }
    }

    if ($frm['fullname'] == '')
    {
      array_push ($errors, 'full_name');
    }

    $name = quote ($frm['fullname']);
    $username = quote ($frm['username']);
    if ($frm['username'] == '')
    {
      array_push ($errors, 'username');
    }
    else
    {
      $q = '' . 'select * from hm2_users where username = \'' . $username . '\'';
      if (!($sth = mysql_query ($q)))
      {
        exit (mysql_errstr ());
        ;
      }

      $row = mysql_fetch_array ($sth);
      if ($row)
      {
        array_push ($errors, 'username_exists');
      }
    }

    if ($frm['password'] == '')
    {
      array_push ($errors, 'password');
    }
    else
    {
      if (0 < $settings['min_user_password_length'])
      {
        if (strlen ($frm['password']) < $settings['min_user_password_length'])
        {
          array_push ($errors, 'password_too_small');
        }
      }

      if ($frm['password'] != $frm['password2'])
      {
        array_push ($errors, 'password_confirm');
      }
    }

    if ($frm['email'] == '')
    {
      array_push ($errors, 'email');
    }

    if ($settings['use_user_location'])
    {
      if ($frm['address'] == '')
      {
        array_push ($errors, 'address');
      }

      if ($frm['city'] == '')
      {
        array_push ($errors, 'city');
      }

      if ($frm['state'] == '')
      {
        array_push ($errors, 'state');
      }

      if ($frm['zip'] == '')
      {
        array_push ($errors, 'zip');
      }

      if ($frm['zip'] == '')
      {
        array_push ($errors, 'country');
      }
    }

    if ($settings['use_transaction_code'])
    {
      if ($frm['transaction_code'] == '')
      {
        array_push ($errors, 'transaction_code');
      }
      else
      {
        if (0 < $settings['min_user_password_length'])
        {
          if (strlen ($frm['transaction_code']) < $settings['min_user_password_length'])
          {
            array_push ($errors, 'transaction_code_too_small');
          }
        }

        if ($frm['transaction_code'] != $frm['transaction_code2'])
        {
          array_push ($errors, 'transaction_code_confirm');
        }
      }

      if ($frm['transaction_code'] == $frm['password'])
      {
        array_push ($errors, 'transaction_code_vs_password');
      }
    }

    if ($frm['agree'] != 1)
    {
      array_push ($errors, 'agree');
    }

    $ref = quote ($frm_cookie['Referer']);
    $ref_id = 0;
    if ($settings['use_names_in_referral_links'] == 1)
    {
      $q = '' . 'select id from hm2_users where REPLACE (username, \' \', \'_\') = \'' . $ref . '\'';
    }
    else
    {
      $q = '' . 'select id from hm2_users where username = \'' . $ref . '\'';
    }

    ($sth = mysql_query ($q) OR print mysql_errstr);
    while ($row = mysql_fetch_array ($sth))
    {
      $ref_id = $row['id'];
    }

    if (($settings['force_upline'] AND $ref_id == 0))
    {
      if (($settings['get_rand_ref'] != 1 OR $frm['rand_ref'] != 1))
      {
        array_push ($errors, 'no_upline');
      }
    }

    if (sizeof ($errors) == 0)
    {
      if (((($settings['force_upline'] AND $ref_id == 0) AND $frm['rand_ref'] == 1) AND $settings['get_rand_ref']))
      {
        $q = 'select id from hm2_users where id != 1 order by rand() limit 1';
        $sth = mysql_query ($q);
        $row = mysql_fetch_array ($sth);
        $ref_id = intval ($row['id']);
      }

      $password = quote ($frm['password']);
      $pswd = '';
      if ($settings['store_uncrypted_password'] == 1)
      {
        $pswd = quote ($frm['password']);
      }

      $enc_password = md5 ($password);
      $egold = quote ($frm['egold']);
      $evocash = quote ($frm['evocash']);
      $intgold = quote ($frm['intgold']);
      $stormpay = quote ($frm['stormpay']);
      $ebullion = quote ($frm['ebullion']);
      $paypal = quote ($frm['paypal']);
      $goldmoney = quote ($frm['goldmoney']);
      $eeecurrency = quote ($frm['eeecurrency']);
      $pecunix = quote ($frm['pecunix']);
      $email = quote ($frm['email']);
      $address = quote ($frm['address']);
      $city = quote ($frm['city']);
      $state = quote ($frm['state']);
      $zip = quote ($frm['zip']);
      $country = quote ($frm['country']);
      $transaction_code = quote ($frm['transaction_code']);
      $referer_url = quote ($frm_cookie['CameFrom']);
      $confirm_string = gen_confirm_code (10);
      if ($settings['use_opt_in'] != 1)
      {
        $confirm_string = '';
      }

      $ip = $frm_env['REMOTE_ADDR'];
      $q = '' . 'insert into hm2_users set 
                       name = \'' . $name . '\', 
                       username = \'' . $username . '\', 
                       password = \'' . $enc_password . '\', 
                       date_register = now(), 
                       egold_account = \'' . $egold . '\', 
                       evocash_account = \'' . $evocash . '\',
                       intgold_account = \'' . $intgold . '\',
                       stormpay_account = \'' . $stormpay . '\',
                       ebullion_account = \'' . $ebullion . '\',
                       paypal_account = \'' . $paypal . '\',
                       goldmoney_account = \'' . $goldmoney . '\',
                       eeecurrency_account = \'' . $eeecurrency . '\',
                       address = \'' . $address . '\', 
                       city = \'' . $city . '\', 
                       state = \'' . $state . '\', 
                       zip = \'' . $zip . '\', 
                       country = \'' . $country . '\', 
                       email = \'' . $email . '\', 
                       ip_reg = \'' . $ip . '\',
                       status = \'on\', 
                       came_from = \'' . $referer_url . '\', 
                       confirm_string = \'' . $confirm_string . '\',
                       pswd = \'' . $pswd . '\',
                       transaction_code = \'' . $transaction_code . '\',
                       ref = ' . $ref_id;
      if (!(mysql_query ($q)))
      {
        exit (mysql_error ());
        ;
      }

      if ($settings['phpbb_register'])
      {
        $q = '' . 'INSERT INTO phpbb_users set 
                  username = \'' . $username . '\',
                  user_regdate = ' . time () . ('' . ',
                  user_password = \'' . $enc_password . '\',
                  user_email = \'' . $email . '\',
                  user_viewemail = 0,
                  user_dateformat = \'D M d, Y g:i a\',
                  user_lang = \'english\',
                  user_level = 0,
                  user_active = 1,
                  user_actkey = \'\'
             ');
        mysql_query ($q);
        $php_user_id = mysql_insert_id ();
        $q = 'INSERT INTO phpbb_groups (group_name, group_description, group_single_user, group_moderator)
              VALUES                   (\'\', \'Personal User\', 1, 0)';
        mysql_query ($q);
        $php_group_id = mysql_insert_id ();
        $q = '' . 'INSERT INTO phpbb_user_group (user_id, group_id, user_pending) VALUES (' . $php_user_id . ', ' . $php_group_id . ', 0)';
        mysql_query ($q);
      }

      $last_id = mysql_insert_id ();
      if (0 < $settings['startup_bonus'])
      {
        $q = '' . 'insert into hm2_history set
		user_id = ' . $last_id . ',
		ec = ' . $settings['startup_bonus_ec'] . ',
		amount = ' . $settings['startup_bonus'] . ',
		actual_amount = ' . $settings['startup_bonus'] . ',
		type=\'bonus\',
		date = now(),
		description = \'Startup bonus\'';
        (mysql_query ($q) OR print mysql_error ());
      }

      if (0 < $ref)
      {
        $q = '' . 'select * from hm2_referal_stats where date = current_date() and user_id = ' . $ref_id;
        ($sth = mysql_query ($q) OR print mysql_error ());
        $f = 0;
        while ($row = mysql_fetch_array ($sth))
        {
          $f = 1;
        }

        if ($f == 0)
        {
          $q = '' . 'insert into hm2_referal_stats set date = current_date(), user_id = ' . $ref_id . ', income = 0, reg = 1';
          $sth = mysql_query ($q);
        }
        else
        {
          $q = '' . 'update hm2_referal_stats set reg = reg+1 where date = current_date() and user_id = ' . $ref_id;
          $sth = mysql_query ($q);
        }
      }

      if ($settings['use_opt_in'] == 1)
      {
        $info = array ();
        $info['username'] = $frm['username'];
        $info['confirm_string'] = $confirm_string;
        $info['name'] = $frm['fullname'];
        $info['ip'] = $frm_env['REMOTE_ADDR'];
        send_mail ('confirm_registration', $frm['email'], $settings['opt_in_email'], $info);
        header ('Location: ?a=signup&say=confirm');
      }
      else
      {
        $q = '' . 'select * from hm2_users where id = \'' . $ref_id . '\'';
        $sth = mysql_query ($q);
        while ($refinfo = mysql_fetch_array ($sth))
        {
          $info = array ();
          $info['username'] = $refinfo['username'];
          $info['name'] = $refinfo['name'];
          $info['ref_username'] = $frm['username'];
          $info['ref_name'] = $frm['fullname'];
          $info['ref_email'] = $frm['email'];
          send_mail ('direct_signup_notification', $refinfo['email'], $settings['opt_in_email'], $info);
        }

        $info = array ();
        $info['username'] = $frm['username'];
        $info['password'] = $password;
        $info['name'] = $frm['fullname'];
        $info['ip'] = $frm_env['REMOTE_ADDR'];
        send_mail ('registration', $frm['email'], $settings['opt_in_email'], $info);
        header ('Location: ?a=signup&say=done');
      }

      db_close ($dbconn);
      exit ();
    }
  }

  include './inc/countries.inc';
  $ref = quote ($frm_cookie['Referer']);
  $q = '' . 'select * from hm2_users where username = \'' . $ref . '\'';
  ($sth = mysql_query ($q) OR print mysql_errstr);
  while ($row = mysql_fetch_array ($sth))
  {
    $smarty->assign ('referer', $row);
  }

  if ((((($frm['a'] != 'show_validation_image' AND !$userinfo['logged']) AND extension_loaded ('gd')) AND $settings['graph_validation'] == 1) AND 0 < $settings['graph_max_chars']))
  {
    $userinfo[validation_enabled] = 1;
    session_start ();
    $validation_number = gen_confirm_code ($settings['graph_max_chars'], 0);
    if ($settings['use_number_validation_number'])
    {
      $i = 0;
      $validation_number = '';
      while ($i < $settings['graph_max_chars'])
      {
        $validation_number .= rand (0, 9);
        ++$i;
      }
    }

    session_register ('validation_number');
    $userinfo[session_name] = session_name ();
    $userinfo[session_id] = session_id ();
    $userinfo[rand] = rand ();
    $smarty->assign ('userinfo', $userinfo);
  }

  $smarty->assign ('errors', $errors);
  $smarty->assign ('frm', $frm);
  $smarty->assign ('countries', $countries);
  $smarty->assign ('deny_registration', $settings['deny_registration']);
  $smarty->display ('signup.tpl');
?>
