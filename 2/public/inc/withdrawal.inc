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


  if ($frm['action'] == 'preview')
  {
    $ab = get_user_balance ($userinfo['id']);
    $amount = sprintf ('%0.2f', $frm['amount']);
    $description = quote ($frm['comment']);
    $ec = sprintf ('%d', $frm['ec']);
    if (0 < $settings['forbid_withdraw_before_deposit'])
    {
      $q = 'select count(*) as cnt from hm2_deposits where user_id = ' . $userinfo['id'];
      $sth = mysql_query ($q);
      $row = mysql_fetch_array ($sth);
      if ($row['cnt'] < 1)
      {
        header ('Location: ?a=withdraw&say=no_deposits');
        db_close ($dbconn);
        exit ();
      }
    }

    if ($amount <= 0)
    {
      header ('Location: ?a=withdraw&say=zero');
      db_close ($dbconn);
      exit ();
    }

    $on_hold = 0;
    if ($settings['allow_withdraw_when_deposit_ends'] == 1)
    {
      $q = '' . 'select id from hm2_deposits where user_id = ' . $userinfo['id'];
      ($sth = mysql_query ($q) OR print mysql_error ());
      $deps = array ();
      $deps[0] = 0;
      while ($row = mysql_fetch_array ($sth))
      {
        array_push ($deps, $row[id]);
      }

      $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $userinfo['id'] . ('' . ' and ec = ' . $ec . ' and 
	deposit_id in (') . join (',', $deps) . ') and 
			(type=\'earning\' or 
	(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));';
      ($sth = mysql_query ($q) OR print mysql_error ());
      while ($row = mysql_fetch_array ($sth))
      {
        $on_hold = $row[amount];
      }
    }

    if ($settings['hold_only_first_days'] == 1)
    {
      $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $userinfo[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $ec . ' and hm2_deposits.deposit_date + interval hm2_types.hold day > now()';
    }
    else
    {
      $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $userinfo[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $ec;
    }

    ($sth = mysql_query ($q) OR print mysql_error ());
    $deps = array ();
    $deps[0] = 0;
    while ($row = mysql_fetch_array ($sth))
    {
      $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $userinfo['id'] . ('' . ' and ec = ' . $ec . ' and 
		deposit_id = ' . $row[id] . ' and date > now() - interval ' . $row[hold] . ' day and 
			(type=\'earning\' or 
		(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));');
      ($sth1 = mysql_query ($q) OR print mysql_error ());
      while ($row1 = mysql_fetch_array ($sth1))
      {
        $on_hold += $row1[amount];
      }
    }

    $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $userinfo['id'] . ('' . ' and ec = ' . $ec);
    ($sth = mysql_query ($q) OR print mysql_error ());
    $ab['total'] = 0;
    while ($row = mysql_fetch_array ($sth))
    {
      $ab['total'] = $row['amount'] - $on_hold;
    }

    if ($ab['total'] < $amount)
    {
      if ($amount <= $ab['total'] + $on_hold)
      {
        header ('Location: ?a=withdraw&say=on_hold');
      }
      else
      {
        header ('Location: ?a=withdraw&say=not_enought');
      }

      db_close ($dbconn);
      exit ();
    }

    if ($amount < $settings['min_withdrawal_amount'])
    {
      header ('Location: ?a=withdraw&say=less_min');
      db_close ($dbconn);
      exit ();
    }

    if (0 < $settings[max_daily_withdraw])
    {
      $q = '' . 'select sum(actual_amount) as am from hm2_history where type in (\'withdraw\', \'withdraw_pending\') and user_id = ' . $userinfo[id];
      ($sth = mysql_query ($q) OR print mysql_error ());
      $dw = 0;
      while ($row = mysql_fetch_array ($sth))
      {
        $dw = 0 - $row[am];
      }

      if ($settings[max_daily_withdraw] < $dw + $amount)
      {
        header ('Location: ?a=withdraw&say=daily_limit');
        db_close ($dbconn);
        exit ();
      }
    }

    $fee = floor ($amount * $settings['withdrawal_fee']) / 100;
    if ($fee < $settings['withdrawal_fee_min'])
    {
      $fee = $settings['withdrawal_fee_min'];
    }

    $to_withdraw = $amount - $fee;
    if ($to_withdraw < 0)
    {
      $to_withdraw = 0;
    }

    $to_withdraw = number_format (floor ($to_withdraw * 100) / 100, 2);
    $account = '';
    if (($ec == 0 AND $settings['def_payee_account']))
    {
      $account = $userinfo['egold_account'];
    }

    if (($ec == 1 AND $settings['def_payee_account_evocash']))
    {
      $account = $userinfo['evocash_account'];
    }

    if (($ec == 2 AND $settings['def_payee_account_intgold']))
    {
      $account = $userinfo['intgold_account'];
    }

    if (($ec == 4 AND $settings['def_payee_account_stormpay']))
    {
      $account = $userinfo['stormpay_account'];
    }

    if (($ec == 5 AND $settings['def_payee_account_ebullion']))
    {
      $account = $userinfo['ebullion_account'];
    }

    if (($ec == 6 AND $settings['def_payee_account_paypal']))
    {
      $account = $userinfo['paypal_account'];
    }

    if (($ec == 7 AND $settings['def_payee_account_goldmoney']))
    {
      $account = $userinfo['goldmoney_account'];
    }

    if (($ec == 8 AND $settings['def_payee_account_eeecurrency']))
    {
      $account = $userinfo['eeecurrency_account'];
    }

    if (($ec == 9 AND $settings['def_payee_account_pecunix']))
    {
      $account = $userinfo['pecunix_account'];
    }

    $smarty->assign ('preview', 1);
    $smarty->assign ('amount', $amount);
    $smarty->assign ('fee', $fee);
    $smarty->assign ('to_withdraw', $to_withdraw);
    $smarty->assign ('currency', $exchange_systems[$ec]['name']);
    $smarty->assign ('ec', $ec);
    $smarty->assign ('account', $account);
    $smarty->assign ('comment', $frm['comment']);
    $smarty->display ('withdrawal.tpl');
  }
  else
  {
    if ($frm['action'] == 'withdraw')
    {
      if (($settings['use_transaction_code'] == 1 AND $frm['transaction_code'] != $userinfo['transaction_code']))
      {
        header ('Location: ?a=withdraw&say=invalid_transaction_code');
        db_close ($dbconn);
        exit ();
      }

      $ab = get_user_balance ($userinfo['id']);
      $amount = sprintf ('%0.2f', $frm['amount']);
      $description = quote ($frm['comment']);
      $ec = sprintf ('%d', $frm['ec']);
      if ($amount <= 0)
      {
        header ('Location: ?a=withdraw&say=zero');
        db_close ($dbconn);
        exit ();
      }

      if (0 < $settings['forbid_withdraw_before_deposit'])
      {
        $q = 'select count(*) as cnt from hm2_deposits where user_id = ' . $userinfo['id'];
        $sth = mysql_query ($q);
        $row = mysql_fetch_array ($sth);
        if ($row['cnt'] < 1)
        {
          header ('Location: ?a=withdraw&say=no_deposits');
          db_close ($dbconn);
          exit ();
        }
      }

      $on_hold = 0;
      if ($settings['allow_withdraw_when_deposit_ends'] == 1)
      {
        $q = '' . 'select id from hm2_deposits where user_id = ' . $userinfo['id'];
        ($sth = mysql_query ($q) OR print mysql_error ());
        $deps = array ();
        $deps[0] = 0;
        while ($row = mysql_fetch_array ($sth))
        {
          array_push ($deps, $row[id]);
        }

        $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $userinfo['id'] . ('' . ' and ec = ' . $ec . ' and 
	deposit_id in (') . join (',', $deps) . ') and 
			(type=\'earning\' or 
	(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));';
        ($sth = mysql_query ($q) OR print mysql_error ());
        while ($row = mysql_fetch_array ($sth))
        {
          $on_hold = $row[amount];
        }
      }

      if ($settings['hold_only_first_days'] == 1)
      {
        $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $userinfo[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $ec . ' and hm2_deposits.deposit_date + interval hm2_types.hold day > now()';
      }
      else
      {
        $q = '' . 'select hm2_deposits.id, hm2_types.hold from hm2_deposits, hm2_types where user_id = ' . $userinfo[id] . ' and hm2_types.id = hm2_deposits.type_id and ec=' . $ec;
      }

      ($sth = mysql_query ($q) OR print mysql_error ());
      $deps = array ();
      $deps[0] = 0;
      while ($row = mysql_fetch_array ($sth))
      {
        $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $userinfo['id'] . ('' . ' and ec = ' . $ec . ' and 
		deposit_id = ' . $row[id] . ' and date > now() - interval ' . $row[hold] . ' day and 
			(type=\'earning\' or 
		(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\')));');
        ($sth1 = mysql_query ($q) OR print mysql_error ());
        while ($row1 = mysql_fetch_array ($sth1))
        {
          $on_hold += $row1[amount];
        }
      }

      $q = 'select sum(actual_amount) as amount from hm2_history where user_id = ' . $userinfo['id'] . ('' . ' and ec = ' . $ec);
      ($sth = mysql_query ($q) OR print mysql_error ());
      $ab['total'] = 0;
      while ($row = mysql_fetch_array ($sth))
      {
        $ab['total'] = $row['amount'] - $on_hold;
      }

      if ($ab['total'] < $amount)
      {
        if ($amount <= $ab['total'] + $on_hold)
        {
          header ('Location: ?a=withdraw&say=on_hold');
        }
        else
        {
          header ('Location: ?a=withdraw&say=not_enought');
        }

        db_close ($dbconn);
        exit ();
      }

      if (0 < $settings[max_daily_withdraw])
      {
        $q = '' . 'select sum(actual_amount) as am from hm2_history where type in (\'withdraw\', \'withdraw_pending\') and user_id = ' . $userinfo[id];
        ($sth = mysql_query ($q) OR print mysql_error ());
        $dw = 0;
        while ($row = mysql_fetch_array ($sth))
        {
          $dw = 0 - $row[am];
        }

        if ($settings[max_daily_withdraw] < $dw + $amount)
        {
          header ('Location: ?a=withdraw&say=daily_limit');
          db_close ($dbconn);
          exit ();
        }
      }

      if ($amount <= $ab['total'])
      {
        if ($amount < $settings['min_withdrawal_amount'])
        {
          header ('Location: ?a=withdraw&say=less_min');
          db_close ($dbconn);
          exit ();
        }

        $q = 'insert into hm2_history set 
  	user_id = ' . $userinfo['id'] . ('' . ',
  	amount = -' . $amount . ',
  	actual_amount = -' . $amount . ',
  	type=\'withdraw_pending\',
  	date = now(),
  	ec = ' . $ec . ',
  	description = \'' . $description . '\'');
        ($sth = mysql_query ($q) OR print mysql_error ());
        $last_id = mysql_insert_id ();
        $info = array ();
        $info['username'] = $userinfo['username'];
        $info['name'] = $userinfo['name'];
        $info['ip'] = $frm_env['REMOTE_ADDR'];
        $info['amount'] = $amount;
        send_mail ('withdraw_request_user_notification', $userinfo['email'], $settings['system_email'], $info);
        send_mail ('withdraw_request_admin_notification', $settings['system_email'], $settings['system_email'], $info);
        if (($settings['use_auto_payment'] == 1 AND ((((($ec == 0 OR $ec == 1) OR $ec == 2) OR $ec == 5) OR $ec == 8) OR $ec == 9)))
        {
          if (($settings['min_auto_withdraw'] <= $amount AND $amount <= $settings['max_auto_withdraw']))
          {
            $q = 'select sum(amount) as sum from hm2_history where type=\'withdrawal\' and date + interval 24 hour > now() and user_id = ' . $userinfo['id'];
            ($sth = mysql_query ($q) OR print mysql_error ());
            if ($row = mysql_fetch_array ($sth))
            {
              if ((abs ($row['sum']) + $amount <= $settings['max_auto_withdraw_user'] AND $userinfo['auto_withdraw'] == 1))
              {
                $fee = floor ($amount * $settings['withdrawal_fee']) / 100;
                if ($fee < $settings['withdrawal_fee_min'])
                {
                  $fee = $settings['withdrawal_fee_min'];
                }

                $to_withdraw = $amount - $fee;
                if ($to_withdraw < 0)
                {
                  $to_withdraw = 0;
                }

                $to_withdraw = sprintf ('%.02f', floor ($to_withdraw * 100) / 100);
                $success_txt = 'Withdraw to ' . $userinfo['username'] . ' from ' . $settings['site_name'];
                if ($ec == 0)
                {
                  $error_txt = '' . 'Error, tried sent ' . $to_withdraw . ' to e-gold account # ' . $userinfo['egold_account'] . '. Error:';
                  list ($res, $text, $batch) = send_money_to_egold ('', $to_withdraw, $userinfo['egold_account'], $success_txt, $error_txt);
                }

                if ($ec == 1)
                {
                  $error_txt = '' . 'Error, tried sent ' . $to_withdraw . ' to evocash account # ' . $userinfo['evocash_account'] . '. Error:';
                  list ($res, $text, $batch) = send_money_to_evocash ('', $to_withdraw, $userinfo['evocash_account'], $success_txt, $error_txt);
                }

                if ($ec == 2)
                {
                  $error_txt = '' . 'Error, tried sent ' . $to_withdraw . ' to IntGold account # ' . $userinfo['intgold_account'] . '. Error:';
                  list ($res, $text, $batch) = send_money_to_intgold ('', $to_withdraw, $userinfo['intgold_account'], $success_txt, $error_txt);
                }

                if ($ec == 5)
                {
                  $error_txt = '' . 'Error, tried sent ' . $to_withdraw . ' to e-bullion account # ' . $userinfo['ebullion_account'] . '. Error:';
                  list ($res, $text, $batch) = send_money_to_ebullion ('', $to_withdraw, $userinfo['ebullion_account'], $success_txt, $error_txt);
                }

                if ($ec == 8)
                {
                  $error_txt = '' . 'Error, tried sent ' . $to_withdraw . ' to eeeCurrency account # ' . $userinfo['eeecurrency_account'] . '. Error:';
                  list ($res, $text, $batch) = send_money_to_eeecurrency ('', $to_withdraw, $userinfo['eeecurrency_account'], $success_txt, $error_txt);
                }

                if ($ec == 9)
                {
                  $error_txt = '' . 'Error, tried sent ' . $to_withdraw . ' to Pecunix account # ' . $userinfo['pecunix_account'] . '. Error:';
                  list ($res, $text, $batch) = send_money_to_pecunix ('', $to_withdraw, $userinfo['pecunix_account'], $success_txt, $error_txt);
                }

                if ($res == 1)
                {
                  $q = '' . 'delete from hm2_history where id = ' . $last_id;
                  mysql_query ($q);
                  $d_account = array ($userinfo['egold_account'], $userinfo['evocash_account'], $userinfo['intgold_account'], '', $userinfo['stormpay_account'], $userinfo['ebullion_account'], $userinfo['paypal_account'], $userinfo['goldmoney_account'], $userinfo['eeecurrency_account'], $userinfo['pecunix_account']);
                  $q = 'insert into hm2_history set
  		user_id = ' . $userinfo['id'] . ('' . ',
  		amount = -' . $amount . ',
  		actual_amount = -' . $amount . ',
  		type=\'withdrawal\',
  		date = now(),
  		ec = ' . $ec . ',
  		description = \'Withdraw to account ') . $d_account[$ec] . ('' . '. Batch is ' . $batch . '\'');
                  (mysql_query ($q) OR print mysql_error ());
                  $info['batch'] = $batch;
                  $info['account'] = $d_account[$ec];
                  $info['currency'] = $exchange_systems[$ec]['name'];
                  send_mail ('withdraw_user_notification', $userinfo['email'], $settings['system_email'], $info);
                  send_mail ('withdraw_admin_notification', $settings['system_email'], $settings['system_email'], $info);
                  header ('' . 'Location: ?a=withdraw&say=processed&batch=' . $batch);
                  db_close ($dbconn);
                  exit ();
                }
              }
            }
          }
        }

        header ('Location: ?a=withdraw&say=processed');
        db_close ($dbconn);
        exit ();
      }
      else
      {
        if ($amount <= $ab[total] + $on_hold)
        {
          header ('Location: ?a=withdraw&say=on_hold');
        }
        else
        {
          header ('Location: ?a=withdraw&say=not_enought');
        }

        db_close ($dbconn);
        exit ();
      }
    }
    else
    {
      $id = $userinfo['id'];
      $ab = get_user_balance ($id);
      $ab_formated = array ();
      $ab['withdraw_pending'] = 0 - $ab['withdraw_pending'];
      reset ($ab);
      while (list ($kk, $vv) = each ($ab))
      {
        $vv = floor ($vv * 100) / 100;
        $ab_formated[$kk] = number_format ($vv, 2);
      }

      $smarty->assign ('ab_formated', $ab_formated);
      $smarty->assign ('say', $frm['say']);
      $smarty->assign ('batch', $frm['batch']);
      $format = ($settings['show_full_sum'] ? 5 : 2);
      $q = 'select sum(actual_amount) as sm, ec from hm2_history where user_id = ' . $userinfo['id'] . ' group by ec';
      $sth = mysql_query ($q);
      while ($row = mysql_fetch_array ($sth))
      {
        if ($format == 2)
        {
          $row['sm'] = floor ($row['sm'] * 100) / 100;
        }

        $exchange_systems[$row['ec']]['balance'] = number_format ($row['sm'], $format);
        if (100 < $row['ec'])
        {
          $smarty->assign ('other_processings', 1);
          continue;
        }
      }

      $ps = array ();
      reset ($exchange_systems);
      foreach ($exchange_systems as $id => $data)
      {
        array_push ($ps, array_merge (array ('id' => $id, 'account' => $accounts[$id]), $data));
      }

      $hold = array ();
      if ($settings['allow_withdraw_when_deposit_ends'] == 1)
      {
        $q = '' . 'select id from hm2_deposits where user_id = ' . $userinfo['id'] . ' and status=\'on\'';
        ($sth = mysql_query ($q) OR print mysql_error ());
        $deps = array ();
        $deps[0] = 0;
        while ($row = mysql_fetch_array ($sth))
        {
          array_push ($deps, $row[id]);
        }

        $q = 'select sum(actual_amount) as amount, ec from hm2_history where user_id = ' . $userinfo['id'] . ' and 
	deposit_id in (' . join (',', $deps) . ') and 
			(type=\'earning\' or 
	(type=\'deposit\' and (description like \'Compou%\' or description like \'<b>Archived transactions</b>:<br>Compound%\'))) group by ec';
        ($sth = mysql_query ($q) OR print mysql_error ());
        while ($row = mysql_fetch_array ($sth))
        {
          array_push ($hold, array ('ec' => $row[ec], 'amount' => number_format ($row[amount], 2)));
        }
      }

      if ($settings['hold_only_first_days'] == 1)
      {
        $q = '' . 'select
              sum(hm2_history.actual_amount) as am, 
	      hm2_history.ec
            from
              hm2_history,
              hm2_deposits,
              hm2_types
            where
              hm2_history.user_id = ' . $userinfo[id] . ' and
	      hm2_history.deposit_id = hm2_deposits.id and
              hm2_types.id = hm2_deposits.type_id and
              now() - interval hm2_types.hold day < hm2_history.date and 
	      hm2_deposits.deposit_date + interval hm2_types.hold day > now() and
	      (hm2_history.type=\'earning\' or 
		(hm2_history.type=\'deposit\' and (hm2_history.description like \'Compou%\' or hm2_history.description like \'<b>Archived transactions</b>:<br>Compound%\'))) 
	    group by hm2_history.ec
          ';
      }
      else
      {
        $q = '' . 'select
              sum(hm2_history.actual_amount) as am, 
	      hm2_history.ec
            from
              hm2_history,
              hm2_deposits,
              hm2_types
            where
              hm2_history.user_id = ' . $userinfo[id] . ' and
	      hm2_history.deposit_id = hm2_deposits.id and
              hm2_types.id = hm2_deposits.type_id and
              now() - interval hm2_types.hold day < hm2_history.date and 
	      (hm2_history.type=\'earning\' or 
		(hm2_history.type=\'deposit\' and (hm2_history.description like \'Compou%\' or hm2_history.description like \'<b>Archived transactions</b>:<br>Compound%\'))) 
	    group by hm2_history.ec
          ';
      }

      ($sth = mysql_query ($q) OR print mysql_error ());
      $deps = array ();
      $deps[0] = 0;
      while ($row = mysql_fetch_array ($sth))
      {
        array_push ($hold, array ('ec' => $row[ec], 'amount' => number_format ($row[am], 2)));
      }

      $smarty->assign ('hold', $hold);
      $smarty->assign ('ps', $ps);
      $smarty->display ('withdrawal.tpl');
    }
  }

?>
