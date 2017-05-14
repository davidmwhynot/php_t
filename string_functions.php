<?php
  # substr()
  # Returns a portion of a string
  $output1 = substr('Hello', 1, 3); // index is INCLUSIVE
  $output2 = substr('Hello', -2);
  echo $output1 . '<br>';
  echo $output2 . '<hr>';

  # strlen()
  # returns length of a string
  echo strlen('Hello World') . '<hr>';

  # strpos()
  # finds the position of the first occurance of a substring
  $output3 = strpos('Hello World', 'o');
  echo $output3 . '<br>';
  # strrpos()
  # finds the position of the LAST occurance of a substring
  $output4 = strrpos('Hello World', 'o');
  echo $output4 . '<hr>';

  # trim()
  # Strips whitespace
  $text1 = 'Hello World           ';
  var_dump($text1);
  echo '<br>';
  $trimmed = trim($text1);
  var_dump($trimmed);
  echo '<hr>';

  # strtoupper()
  # makes everything uppercase
  # strtolower()
  # makes evertyhing lowercase
  $output5 = strtoupper('Hello World');
  echo $output5 . '<br>';
  echo strtolower($output5) . '<br>';
  # ucwords()
  # capitalize every word
  $output6 = ucwords('hello world');
  echo $output6 . '<hr>';

  # str_replace()
  # find all occurances of a substring within a string and replace them with something
  $text2 = 'Hello World';
  $output7 = str_replace('World','Everyone', $text2);
  echo $output7;
  echo '<hr>';

  # is_string()
  # test if something is a string or not
  $val = '22';
  $output8 = is_string($val);
  echo $output8 . '<br>';
  $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
  foreach ($values as $value) {
    if(is_string($value)) {
      echo "{$value} is a string<br>";
    } else {
      echo "{$value} is not a string<br>";
    }
  }
  echo '<hr>';

  # gzcompress()
  # compress a string
  $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $compressed = gzcompress($string);
  echo $compressed;
  echo '<br>';
  $ogstring = gzuncompress($compressed);
  echo $ogstring;
 ?>
