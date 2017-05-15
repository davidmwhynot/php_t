<?php
  require('config/config.php');
  require('config/db.php');
  // get id
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  // create query
  $query = 'SELECT * FROM posts WHERE id = ' . $id;

  // get result
  $result = mysqli_query($conn, $query);

  // fetch data
  $post = mysqli_fetch_assoc($result);
  //var_dump($posts);
  // free the result from memory
  mysqli_free_result($result);
  mysqli_close($conn);
  include('inc/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Blog</title>
    <link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.min.css">
  </head>
  <body class="container">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
    <h1><?php echo $post['title']; ?></h1>
    <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    <p><?php echo $post['body']; ?></p>
  </body>
</html>
