<?php
  include ("config.php");
  ob_start();
   if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)) {
      $query="SELECT * FROM users WHERE username='$username' and password='$password'";
      $result = $mysqli->query($query);

      if ($result->num_rows > 0 ){
        header("Location: dashboard.php");
        die();

      }
      else {
        echo "<script>alert('Username or Password is invalid')</script>";;
      }
    }
    else {
      echo "<script>alert('Please input your username and password before you login.')</script>";
    }
      
  }

?>
<!DOCTYPE html>
  <html>
  <head>
    <title>User Autherization</title>
    <link rel="stylesheet" href="stylesheets/login-form.css" type="text/css" media="all" />
  </head>
  <body>
    <div class="container">
      <header>
        <h1><a href="register.php">User Autherization</a></h1>
      </header>

      <form method="POST" action="login.php">
        <fieldset>
          <legend>Login</legend>
          <p><label> Username: </label><input type="text" name="username" /></p>
          <p><label> Password: </label><input type="password" name="password" /></p>
          <p class="center"><input value="Login" type="submit" class="center" /></p>
        </fieldset>
      </form>
      <strong> No Account? <a href="register.php"> Register Here! </a></strong>
    </div>
    </body>
  </html>