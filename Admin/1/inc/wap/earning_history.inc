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


  header ('Content-type: text/vnd.wap.wml');
  $id = $userinfo['id'];
  $type = $frm['type'];
  $type_found = 0;
  $options = array ();
  $q = '' . 'select type from hm2_history where user_id = ' . $id . ' group by type order by type';
  ($sth = mysql_query ($q) OR print mysql_error ());
  while ($row = mysql_fetch_array ($sth))
  {
    $row['type_name'] = $transtype[$row['type']];
    $row['selected'] = ($row['type'] == $frm['type'] ? 1 : 0);
    if ($type == $row['type'])
    {
      $type_found = 1;
    }

    array_push ($options, $row);
  }

  $smarty->assign ('options', $options);
  $typewhere = '';
  if ($type_found)
  {
    $typewhere = '' . ' and type = \'' . $type . '\' ';
  }
  else
  {
    if ($type != '')
    {
      $qtype = quote ($type);
      $typewhere = '' . ' and type = \'' . $qtype . '\' ';
    }
  }

  $frm['day_to'] = sprintf ('%d', $frm['day_to']);
  $frm['month_to'] = sprintf ('%d', $frm['month_to']);
  $frm['year_to'] = sprintf ('%d', $frm['year_to']);
  $frm['day_from'] = sprintf ('%d', $frm['day_from']);
  $frm['month_from'] = sprintf ('%d', $frm['month_from']);
  $frm['year_from'] = sprintf ('%d', $frm['year_from']);
  if ($frm['day_to'] == 0)
  {
    $frm['day_to'] = date ('j', time () + $settings['time_dif'] * 60 * 60);
    $frm['month_to'] = date ('n', time () + $settings['time_dif'] * 60 * 60);
    $frm['year_to'] = date ('Y', time () + $settings['time_dif'] * 60 * 60);
    $frm['day_from'] = 1;
    $frm['month_from'] = $frm['month_to'];
    $frm['year_from'] = $frm['year_to'];
  }

  $datewhere = '\'' . $frm['year_from'] . '-' . $frm['month_from'] . '-' . $frm['day_from'] . '\' + interval 0 day < date + interval ' . $settings['time_dif'] . ' hour and ' . '\'' . $frm['year_to'] . '-' . $frm['month_to'] . '-' . $frm['day_to'] . '\' + interval 1 day > date + interval ' . $settings['time_dif'] . ' hour ';
  $q = '' . 'select count(*) as call from hm2_history where ' . $datewhere . ' ' . $typewhere . ' and user_id = ' . $id;
  ($sth = mysql_query ($q) OR print mysql_error ());
  $row = mysql_fetch_array ($sth);
  $count_all = $row['call'];
  $page = $frm['page'];
  $onpage = 20;
  $colpages = ceil ($count_all / $onpage);
  if ($page <= 1)
  {
    $page = 1;
  }

  if (($colpages < $page AND 1 < $colpages))
  {
    $page = $colpages;
  }

  $from = ($page - 1) * $onpage;
  $q = 'select *, date_format(date + interval ' . $settings['time_dif'] . ('' . ' hour, \'%b-%e-%Y %r\') as d from hm2_history where ' . $datewhere . ' ' . $typewhere . ' and user_id = ' . $id . ' order by date desc, id desc limit ' . $from . ', ' . $onpage);
  ($sth = mysql_query ($q) OR print mysql_error ());
  $trans = array ();
  while ($row = mysql_fetch_array ($sth))
  {
    $row['transtype'] = $transtype[$row['type']];
    $row['actual_amount'] = number_format (abs ($row['actual_amount']), 2);
    array_push ($trans, $row);
  }

  $pages = array ();
  for ($i = 1; $i <= $colpages; ++$i)
  {
    $apage = array ();
    $apage['page'] = $i;
    $apage['current'] = ($i == $page ? 1 : 0);
    array_push ($pages, $apage);
  }

  $smarty->assign ('pages', $pages);
  $smarty->assign ('colpages', $colpages);
  $smarty->assign ('current_page', $page);
  if (1 < $page)
  {
    $smarty->assign ('prev_page', $page - 1);
  }

  if ($page < $colpages)
  {
    $smarty->assign ('next_page', $page + 1);
  }

  $q = '' . 'select sum(actual_amount) as sum from hm2_history where ' . $datewhere . ' and user_id = ' . $id . ' ' . $typewhere;
  $sth = mysql_query ($q);
  $row = mysql_fetch_array ($sth);
  $periodsum = $row['sum'];
  $smarty->assign ('periodsum', number_format ($periodsum, 2));
  $q = '' . 'select sum(actual_amount) as sum from hm2_history where user_id = ' . $id . ' ' . $typewhere;
  $sth = mysql_query ($q);
  $row = mysql_fetch_array ($sth);
  $allsum = $row['sum'];
  $smarty->assign ('allsum', number_format ($allsum, 2));
  $month = array ('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
  $smarty->assign ('month', $month);
  $days = array ();
  for ($i = 1; $i <= 31; ++$i)
  {
    array_push ($days, $i);
  }

  $smarty->assign ('day', $days);
  $year = array ();
  for ($i = $settings['site_start_year']; $i <= date ('Y', time () + $settings['time_dif'] * 60 * 60); ++$i)
  {
    array_push ($year, $i);
  }

  $smarty->assign ('year', $year);
  $smarty->assign ('trans', $trans);
  $smarty->assign ('qtrans', sizeof ($trans));
  $smarty->assign ('frm', $frm);
  $smarty->display ('wap/earning_history.tpl');
?>
