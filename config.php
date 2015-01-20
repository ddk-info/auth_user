<?php
  $host="localhost"; // Host name
  $username="root"; // Mysql username
  $password="root"; // Mysql password
  $db_name="auth_user"; // Database name


  // Connect to server and select databse.
  $connection = mysqli_connect("$host", "$username", "$password")or die("cannot connect to server");
  $db_select  = mysqli_select_db($connection, $db_name) or die("cannot select DB");

?>