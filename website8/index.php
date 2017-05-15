<?php
  require('config/config.php');
  require('config/db.php');
  // create query
  $query = 'SELECT * FROM posts';

  // get result
  $result = mysqli_query($conn, $query);

  // fetch data
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //var_dump($posts);
  // free the result from memory
  mysqli_free_result($result);
  mysqli_close($conn);

  // includes
  include('inc/header.php');
?>
<h1>Posts</h1>
<?php foreach($posts as $post) : ?>
  <div class="well">
    <h3><?php echo $post['title']; ?></h3>
    <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    <p><?php echo $post['body']; ?></p>
    <a class="btn btn-default" href="<?php echo ROOT_URL . 'post.php?id=' . $post['id']; ?>">Read More</a>
  </div>
<?php endforeach; ?>
<?php include('inc/footer.php'); ?>
