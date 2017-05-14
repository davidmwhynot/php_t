<?php
  if(isset($_POST['submit'])) {
    session_start(); // start the session

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: page2.php');
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Sessions</title>
  </head>
  <body>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label>Name</label>
      <input type="text" name="name" placeholder="Enter Name" value="">
      <br>
      <label>Email</label>
      <input type="text" name="email" placeholder="Enter Name" value="Enter Email">
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
