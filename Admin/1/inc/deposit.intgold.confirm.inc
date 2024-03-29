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


  $amount = sprintf ('%0.2f', $frm['amount']);
  $h_id = sprintf ('%d', $frm['h_id']);
  if (($settings[use_add_funds] AND $h_id == -1))
  {
    if (0.01 <= $amount)
    {
      $smarty->assign ('h_id', -1);
      $smarty->assign ('amount', $amount);
      $smarty->assign ('amount_format', number_format ($amount, 2));
      $smarty->display ('deposit.intgold.confirm.tpl');
    }
  }
  else
  {
    $q = '' . 'select * from hm2_types where id = ' . $h_id . ' and closed = 0';
    ($sth = mysql_query ($q) OR print mysql_error ());
    $type = mysql_fetch_array ($sth);
    if (!$type)
    {
      $smarty->assign ('false_data', 1);
    }
    else
    {
      $plan_name = $type['name'];
      $smarty->assign ('plan_name', $plan_name);
    }

    $use_compound = 0;
    if ($type['use_compound'])
    {
      if ($type['compound_max_deposit'] == 0)
      {
        $type['compound_max_deposit'] = $amount + 1;
      }

      if (($type['compound_min_deposit'] <= $amount AND $amount <= $type['compound_max_deposit']))
      {
        $use_compound = 1;
        if ($type['compound_percents_type'] == 1)
        {
          $cps = preg_split ('/\\s*,\\s*/', $type['compound_percents']);
          $cps1 = array ();
          foreach ($cps as $cp)
          {
            array_push ($cps1, sprintf ('%d', $cp));
          }

          sort ($cps1);
          $compound_percents = array ();
          foreach ($cps1 as $cp)
          {
            array_push ($compound_percents, array ('percent' => sprintf ('%d', $cp)));
          }

          $smarty->assign ('compound_percents', $compound_percents);
        }
        else
        {
          $smarty->assign ('compound_min_percents', $type['compound_min_percent']);
          $smarty->assign ('compound_max_percents', $type['compound_max_percent']);
        }
      }
    }

    $smarty->assign ('use_compound', $use_compound);
    $q = '' . 'select count(*) as col, min(min_deposit) as min from hm2_plans where parent = ' . $h_id;
    ($sth = mysql_query ($q) OR print mysql_error ());
    $row = mysql_fetch_array ($sth);
    if ($row)
    {
      if ($row['col'] == 0)
      {
        $smarty->assign ('false_data', 1);
      }

      if ($amount < $row['min'])
      {
        $amount = $row['min'];
      }
    }
    else
    {
      $smarty->assign ('false_data', 1);
    }

    $q = '' . 'select count(*) as col from hm2_plans where parent = ' . $h_id . ' and max_deposit = 0';
    ($sth = mysql_query ($q) OR print mysql_error ());
    $row = mysql_fetch_array ($sth);
    if ($row)
    {
      if (0 < $row['col'])
      {
      }
      else
      {
        $q = '' . 'select count(*) as col, max(max_deposit) as max from hm2_plans where parent = ' . $h_id;
        ($sth = mysql_query ($q) OR print mysql_error ());
        $row = mysql_fetch_array ($sth);
        if ($row)
        {
          if ($row['col'] == 0)
          {
            $smarty->assign ('false_data', 1);
          }

          if ($row['max'] < $amount)
          {
            $amount = $row['max'];
          }
        }
        else
        {
          $smarty->assign ('false_data', 1);
        }
      }

      $smarty->assign ('h_id', $h_id);
      $smarty->assign ('amount', $amount);
      $smarty->assign ('amount_format', number_format ($amount, 2));
      $smarty->assign ('compounding', sprintf ('%d', $frm['compound']));
      $smarty->display ('deposit.intgold.confirm.tpl');
    }
  }

?>
