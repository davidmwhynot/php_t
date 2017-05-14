<?php
  /*// check for posted data
  if (filter_has_var(INPUT_POST, 'data')) {
    echo "Data Found";
  } else {
    echo "No Data";
  }
  if (filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];

    // remove illegal chars
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email is valid";
    } else {
      echo "Invalid Email";
    }
  }*/
  /*
    You can FILTER_VALIDATE_ all of the following (put them where email was):
      BOOLEAN
      EMAIL
      FLOAT
      INT
      IP
      REGEXP
      URL
    You can FILTER_SANITIZE_ the following:
      EMAIL
      ENCODED
      NUMBER_FLOAT
      NUMBER_INT
      SPECIAL_CHARS
      STRING
      URL

  $var = 'aswevawe';
  if (filter_var($var, FILTER_VALIDATE_INT)) {
    echo $var . ' is a number';
  } else {
    echo "$var is not a number";
  }
  $var = '<script>alert(1)</script>';
  echo $var;
  echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
  var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
  $filters = array(
    "data1" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 100
      )
    )
  );
  print_r(filter_input_array(INPUT_POST, $filters));*/
  $arr = array(
    "name" => "david whynot",
    "age" => "21",
    "email" => "davidmwhynot@gmail.com"
  );
  $filters = array(
    "name" => array(
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords"
    ),
    "age" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 120
      )
    ),
    "email" => FILTER_VALIDATE_EMAIL
  );

  print_r(filter_var_array($arr, $filters));

?>
<style>
body * {
  margin: 3px;
}
</style>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label>Data 1</label><br>
  <input type="text" name="data1"><br>
  <label>Data 2</label><br>
  <input type="text" name="data2"><br>
  <button type="submit" name="button">Submit</button>
</form>
