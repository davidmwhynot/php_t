<?php
  # FUNCTION - Block of code that can be repeatedly called
  function simpleFunction() {
    echo 'Hello world';
  }
  simpleFunction();
  echo '<br>';
  function sayHello($name = 'World') {
    echo "Hello $name.<br>";
  }
  sayHello('Joe');
  sayHello('Bob');
  sayHello();
  function addNumbers($num1, $num2) {
      return $num1 + $num2;
  }
  $sum = addNumbers(2,3);
  echo $sum;
  echo '<br>';
  // passing arguments by reference
  $myNum = 10;
  function addFive($num) { // this wont actually change the value of myNum
    $num += 5;
  }
  function addTen(&$num) {
    $num += 10;
  }
  echo "Value: $myNum<br>";
  addFive($myNum);
  echo "Value: $myNum<br>";
  addTen($myNum);
  echo "Value: $myNum<br>";
 ?>
