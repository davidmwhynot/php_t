<?php
  # LOOPS - Execute code set number of times
  /*
    for
    while
    do while
    foreach
  */
  # for loop
  # @params - init, condition, inc
  for($i = 0; $i <= 10; ++$i) {
    echo 'Number ' . $i;
    echo '<br>';
  }

  #While loop
  # @params - condition

  $a=0;
  while ($a <= 10) {
    echo($a);
    echo '<br>';
    ++$a;
  }

  #do while
  # @params - condition
  $x = 0;
  do {
    echo $x;
    echo '<br>';
    ++$x;
  } while ($x < 10);
  #foreach
  $people = ['Brad','Jose','William'];
  foreach ($people as $person) {
    echo $person;
    echo '<br>';
  }
  $people = array('Brad' => 'brad@gmail.com','Jose' => 'jose@gmail.com','William' => 'william@gmail.com');
  foreach ($people as $person => $email) {
    echo $person . ': ' . $email;
    echo '<br>';
  }
 ?>
