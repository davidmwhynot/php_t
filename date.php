<?php
  echo date('d'); // day
  echo '<br>';
  echo date('m'); // month
  echo '<br>';
  echo date('y'); // year short
  echo '<br>';
  echo date('Y'); // year long
  echo '<br>';
  echo date('l'); // day of week
  echo '<br>';
  echo date('Y/m/d'); // WOMBO COMBO
  echo '<br>';
  echo date('Y-m-d'); // UsE oTHeR SymBoLs xD
  echo '<br>';
  echo date('h'); // hour
  echo '<br>';
  echo date('i'); // minute
  echo '<br>';
  echo date('s'); // second
  echo '<br>';
  echo date('a'); // am or pm
  echo '<br>';
  echo date('h:i:sa'); // WOMBO COMBO but it's wrong because timezones xd
  echo '<br>';
  // set or get timezone
  echo date_default_timezone_get();
  echo '<br>';
  date_default_timezone_set('America/Detroit');
  echo date_default_timezone_get();
  echo '<br>';
  echo date('h:i:sa');
  echo '<br>';
  // you can make a timestamp
  $timestamp = mktime(10, 14, 54, 9, 10, 1981);
  echo $timestamp;
  echo '<br>';
  // change the timestamp to a readable date
  echo date('m/d/Y h:i:sa', $timestamp);
  echo '<br>';
  // convert string to time
  $timestamp2 = strtotime('7:00pm March 22 2016');
  echo $timestamp2;
  echo '<br>';
  echo date('m/d/Y h:i:sa', $timestamp2);
  echo '<br>';
  // you can be very vague
  $timestamp3 = strtotime('tomorrow');
  echo $timestamp3;
  echo '<br>';
  echo date('m/d/Y h:i:sa', $timestamp3);
  echo '<br>';
  $timestamp4 = strtotime('next tuesday');
  echo $timestamp4;
  echo '<br>';
  echo date('m/d/Y h:i:sa', $timestamp4);
  echo '<br>';
  $timestamp5 = strtotime('4pm july 4');
  echo $timestamp5;
  echo '<br>';
  echo date('m/d/Y h:i:sa', $timestamp5);
?>
