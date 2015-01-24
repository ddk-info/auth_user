<?php
  
  $current_host    = "localhost";
  $current_db_usr  = "root";
  $current_db_pwd  = "root";
  $current_db_name = "auth_user";

  $mysqli = new mysqli($current_host, $current_db_usr, $current_db_pwd, $current_db_name);
  if ($mysqli->errno) {
    printf ("Unnable to connect to the database: <br/>  %s", $mysqli->errno);
    exit();

  }
?>

