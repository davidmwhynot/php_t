<?php
  $loggedIn = true;
  $arr = [2,3,4,5];
  if ($loggedIn) {
    echo "You are logged in<br>";
  } else {
    echo "You are NOT logged in<br>";
  }

  // we can put everything into one line
  echo ($loggedIn) ? 'You are logged in<br>' : 'You are NOT logged in<br>';

  $isRegistered = ($loggedIn == true) ? true : false;
  echo $isRegistered . '<hr>';

  $age = 2;
  $score = 51;

  echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average':'Exceptional'):($age > 10 ? 'Horrible':'Average'));

?>
<div>
  <?php if($loggedIn) { ?>
    <h1>Welcome User</h1>
  <?php } else { ?>
    <h1>Welcome Guest</h1>
  <?php } ?>
</div>
<p>There is a better way to do this sort of logic and HTML than above.</p>
<div>
  <?php if($loggedIn) : ?>
    <h1>Welcome User</h1>
  <?php else: ?>
    <h1>Welcome Guest</h1>
  <?php endif; ?>
</div>
<div>
  <?php foreach($arr as $val): ?>
    <h4>
      <?php echo $val; ?>
    </h4>
  <?php endforeach; ?>
</div>
<div>
  <?php for ($i=0; $i < 10; $i++): ?>
    <li><?php echo $i; ?></li>
  <?php endfor; ?>
  <p>Essentially, you can use the : at the end of some conditional or loop as an opening bracket { and then use the keyword 'end' + the name of the type of loop you are using as a closing bracket }.</p>
</div>
