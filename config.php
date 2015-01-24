<?php
  $mysqli = new mysqli('localhost', 'root', 'root', 'auth_user');
  if ($mysqli->errno) {
    printf ("Unnable to connect to the database: <br/>  %s", $mysqli->errno);
    exit();

  }
?>

