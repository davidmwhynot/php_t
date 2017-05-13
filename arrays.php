<?php
  #Array - variable that holds multiple values
  /*
    - Indexed
    - Associative
    - Multidimensional
  */

  #Indexed
  $people = array('Kevin', 'Jeremy', 'Sara');
  $ids = array(23,55,12);
  $cars = ['Honda','Toyota','Ford'];
  echo $ids[2];
  echo '<br>';
  echo $people[2];
  echo '<br>';
  echo $cars[1];
  echo '<br>';
  $cars[3] = 'Chevy';
  echo $cars[3];
  echo '<br>';
  $cars[] = 'BMW';
  echo $cars[4];
  echo '<br>';
  echo count($cars);
  echo '<br>';
  print_r($cars);
  echo '<br>';
  var_dump($cars); // useful for debugging. can dump any variable
  echo '<br>';

  #Associative
  $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
  $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
  echo $ids[22];
  echo '<br>';
  echo $people['Brad'];
  echo '<br>';
  $people['Jill'] = 42;
  echo $people['Jill'];
  echo '<br>';
  print_r($people);
  echo '<br>';
  var_dump($people);
  echo '<br>';

  #Multidimensional
  $cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
  );
  echo $cars[1][0];
  echo '<br>';
 ?>
