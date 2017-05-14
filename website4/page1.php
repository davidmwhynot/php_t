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
