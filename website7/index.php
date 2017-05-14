<?php
  $path = '/dir0/dir1/myfile.php';
  $file = 'file1.txt';

  // Return filename
  echo '1 - ' . basename($path) . '<br>';

  // Return filename without extension
  echo '2 - ' . basename($path, '.php') . '<br>';

  // Return the dir name from path
  echo '3 - ' . dirname($path) . '<br>';

  // check if file exists
  echo '4 - ' . file_exists($file) . '<br>';

  // get full path
  echo '5 - ' . realpath($file) . '<br>';

  // checks to see if file
  echo '6 - ' . is_file('test') . '<br>';
  echo '7 - ' . file_exists('test')  . '<br>';

  // check if file is writeable
  echo '8 - ' . is_writable($file) . '<br>';

  // check if readable
  echo '9 - ' . is_readable($file)  . '<br>';

  // get file size
  echo '10 - ' . filesize($file)  . '<hr>';


  // create a folder
  mkdir('test');

  // remove dir if empty
  rmdir('test');

  // copy file
  echo '1 - ' . copy('file1.txt', 'file2.txt') . '<br>';

  // rename file
  rename('file2.txt', 'myFile.txt');

  // delete a file
  unlink('myfile.txt');

  // write from file to string
  echo '2 - ' . file_get_contents($file) . '<br>';

  // write string to file (this REPLACES)
  echo '3 - ' . file_put_contents($file, 'Hello World') . '<br>';
  echo '4 - ' . file_get_contents($file) . '<br>';

  // APPEND to a file (so you dont delete its contents)
  $current = file_get_contents($file);
  $current .= ' Goodbye World';
  file_put_contents($file, $current);
  echo '5 - ' . file_get_contents($file) . '<hr>';


  // fopen()
  // allow us to put a file into a variable called a handle and then we can run continuos functions on that handle
  // open a file for reading
  $handle1 = fopen($file, 'r');
  // read the opened file
  $data = fread($handle1, filesize($file));
  echo '1 - ' . $data . '<br>';
  // ALWAYS close the file when you are done
  fclose($handle1);

  // we can alos write to a file this way
  // open file for writing, will also create the file if you specify a name that doesnt exist
  $handle2 = fopen('file2.txt', 'w');
  $txt = "Brad\n";
  fwrite($handle2, $txt);
  echo '2 - ' . file_get_contents('file2.txt') . '<br>';
  $txt = "Steve\n";
  fwrite($handle2, $txt);
  echo '3 - ' . file_get_contents('file2.txt') . '<br>';
  fclose($handle2);

 ?>
