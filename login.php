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

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SimpleAdmin - Login to CMS</title>
  
  <!-- Stylesheets -->
  <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
  <link rel="stylesheet" href="assets/stylesheets/login-form.css">

  <!-- Optimize for mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>
<body>

  
  <!-- HEADER -->
  <div id="header">
    <div class="page-full-width cf">
      <div id="login-intro" class="fl">
        <h1>Login to the system</h1>
        <h5>Enter your credentials below</h5>
      </div> <!-- login-intro -->
    </div> <!-- end full-width -->  
  </div> <!-- end header -->
  
  
  <!-- MAIN CONTENT -->
  <div id="content">
    <form action="login.php" method="POST" id="login-form">
      <fieldset>
        <p>
          <label for="login-username">username</label>
          <input type="text" id="login-username" name="username" class="round full-width-input" autofocus />
        </p>
        <p>
          <label for="login-password">password</label>
          <input type="password" id="login-password" name="password" class="round full-width-input" />
        </p>
        <p>No Account? <a href="register.php">Register Now!</a>.</p>
        <input type="submit" name="submit" class="button round blue image-right ic-right-arrow" value="LOG IN">
      </fieldset>
      <br/><div class="information-box round">Just click on the "LOG IN" button to continue, no login information required.</div>
    </form>
  </div> <!-- end content -->

  <!-- FOOTER -->
  <div id="footer">
    <p>&copy; Copyright 2015 <a href="http://ddk-info.github.io/">ddk-info</a>. All rights reserved.</p>
  </div> <!-- end footer -->

</body>
</html>