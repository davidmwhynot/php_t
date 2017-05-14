<?php
  setcookie('username', 'frank', time() + (86400*30)); // 1 day
  // delete cookie
  setcookie('username', 'frank', time() - 3600);
  if(count($_COOKIE) > 0) {
    echo 'There are ' . count($_COOKIE) . ' cookies saved';
  } else {
    echo 'there are no cookies saved';
  }
  echo '<br>';
  if (isset($_COOKIE['username'])) {
    echo 'User ' . $_COOKIE['username'] . ' is set<br>';
  } else {
    echo 'username is not set';
  }
 ?>
