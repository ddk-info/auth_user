<?php
  include "config.php"; 


  $query = "SELECT username, password ,first_name, last_name  FROM users ORDER by username";
  $result = $mysqli->query($query);  


  while ($row = $result->fetch_object()) {
    $username = $row->username;
    $password = $row->password;
    $first_name = $row->first_name;
    $last_name = $row->last_name;
    printf("Username: %s <br/> Password: %s <br/>  First Name: %s <br/> Last Name: %s", $username, $password, $first_name, $last_name); 
  }
?>
