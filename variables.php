<?php
  // Single line comment
  # single line comment
  /*
    Multi line
    comment
  */

  #VARIABLES
  /*
    - prefix with $
    - Start with a letter or an underscore
    - only letters, numbers, and underscores
    - case sensitive
  */
  #DATA TYPES
  /*
    string
    int
    float
    boolean
    array
    object
    null
    resource
  */
  $output = 'Hello World';
  $break = '<br>';
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;
  $string1 = 'Hello';
  $string2 = 'world';
  $string3 = "They\"re Here";
  $greeting = $string1 . ' ' . $string2 . '!';
  $greeting2 = '$string1 $string2';
  $greeting3 = "$string1 $string2!";
  $float1 = 4.4;
  $bool1 = true;
  echo $greeting;
  echo $break;
  echo $sum;
  echo $break;
  echo $float1;
  echo $break;
  echo $greeting2;
  echo $break;
  echo $greeting3;
  echo $break;
  echo $string3;
  echo $break;
  #CONSTANTS
  define('GREETING','Hello everyone', true);
  echo greeting;
  echo $break;
  define('FAREWELL','Farewell everyone');
  echo FAREWELL;
 ?>
