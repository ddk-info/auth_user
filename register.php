<?php
  include "config.php";

  if (isset($_POST['submit'])){ 
    $username   = mysqli_escape_string($connection, $_POST['username']);
    $password   = mysqli_escape_string($connection, $_POST['password']);
    $first_name = mysqli_escape_string($connection, $_POST['first_name']);

    $sql = "INSERT INTO users (username, password, first_name)
    VALUES ('$username', '$password', '$first_name')";
    $result = mysqli_query($connection,$sql);

    if($result == false)
      echo '<a href="register.php">Error: cannot execute query</a>';
    else
      header("Location: dashboard.php");
    exit;

  }



?>
<form style="margin: auto; width: 30% ;border: 1px solid #ddd; padding: 15px;" action="" method="POST">
  Username: <input type= "text" name="username"/><br/>
  Password: <input type= "text" name="password"/><br/>
  Fist Name: <input type= "text" name="first_name"/> <br/>
  <input type="submit" value="Resgister" name="submit" />
</form>