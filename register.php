<?php
  include "config.php"; 

  if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['first_name']) && isset($_POST['password_confirm'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $first_name = $_POST['first_name'];

    if (!empty($username) && !empty($password) && !empty($password_confirm) && !empty($first_name)){
      if ($password != $password_confirm) {
        echo "Password is not match";
      }
      else {
        $query     = "SELECT `username` FROM `users` WHERE `username` = '$username";
        $query_run =  mysqli_query($connection, $query); 
        $query_exist = mysql_num_rows($query_run);
        if ($query_exist == 1) {
          echo "The username '.$username.' has already exist!";
        }
        else {
          echo "ok ";
          $query = "INSERT INTO `users` VALUES ('','$username','$password','$password_confirm','$first_name')";
        }
      }
    }
    else{
      echo "all fields are required.";
    }
  }

?>
<form style="margin: auto; width: 30% ;border: 1px solid #ddd; padding: 15px;" action="register.php" method="POST">
  Username: <input type= "text" name="username"/><br/>
  Password: <input type= "text" name="password"/><br/>
  Password Confirm : <input type= "text" name="password_confirm"/><br/>
  Fist Name: <input type= "text" name="first_name"/> <br/>
  <input type="submit" value="Resgister" name="submit" />
</form>
