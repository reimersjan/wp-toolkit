<?php

  // shows if a connection to your database is successfull or not
  // code from http://www.wpbeginner.com/

  $link = mysql_connect('localhost', 'root', 'password');
  if (!$link) {
    die('Could not connect: ' . mysql_error());
  }
  echo 'Connected successfully';
  mysql_close($link);
?>
