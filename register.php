<?php
  include "config.php"; 

  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $query = "INSERT INTO users VALUES ('', '$username','$password', '$first_name', '$last_name')";

    $result = $mysqli->query($query);


    if($result == false)
      echo '<a href="register.php">Error: cannot execute query</a>';
    else

      echo "create sucess";

    // mysql_close($mysqli->connection);
    exit;
  }
?>
<form style="margin: auto; width: 30% ;border: 1px solid #ddd; padding: 15px;" action="register.php" method="POST">
  Username: <input type= "text" name="username"/><br/>
  Password: <input type= "text" name="password"/><br/>
  Password Confirm : <input type= "text" name="password_confirm"/><br/>
  Fist Name: <input type= "text" name="first_name"/> <br/>
  Last Name: <input type= "text" name="last_name"/> <br/>
  <input type="submit" value="Resgister" name="submit" />
</form>