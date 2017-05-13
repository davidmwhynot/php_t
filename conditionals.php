<?php
  # CONDITIONALS
  /*
    ==
    === strict type
    <
    >
    <=
    >=
    !=
    !== strict type
  */
  function checkNum($num) {
    if($num == 5) {
      echo "$num passed 5<br>";
    } else if($num == 6) {
      echo "$num passed 6<br>";
    } else {
      echo "$num did not pass<br>";
    }
  }
  checkNum(4);
  checkNum(5);
  checkNum(6);
  # nesting if statements
  function checkNumV2($num) {
    if($num > 4)
      if($num < 10)
        echo "$num passed 4 and 10<br>";
      else
        echo "$num failed 10<br>";
    else
      echo "$num failed 4<br>";
  }
  checkNumV2(4);
  checkNumV2(5);
  checkNumV2(10);
  checkNumV2(11);
  # LOGICAL OPERATORS
  /*
    and &&
    or ||
    xor
  */
  $num = 5;
  if($num > 4 and $num < 10) {
    echo "$num passed > 4 and < 10<br>";
  } else {
    echo "$num failed  > 4 and < 10<br>";
  }
  if($num > 6 or $num < 10) {
    echo "$num passed > 6 or < 10<br>";
  } else {
    echo "$num failed > 6 or < 10<br>";
  }
  if($num > 4 xor $num < 10) {
    echo "$num passed > 4 xor < 10<br>";
  } else {
    echo "$num failed > 4 xor < 10<br>";
  }

  # SWITCH
  $favColor = 'yellow';
  switch($favColor) {
    case 'red':
      echo 'fav color is red';
      break;
    case 'blue':
      echo 'fav color is blue';
      break;
    case 'green':
      echo 'fav color is green';
      break;
    default:
      echo 'you have no soul';
  }
 ?>
