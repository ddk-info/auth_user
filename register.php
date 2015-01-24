<?php
  include "config.php"; 

  if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['first_name']) && isset($_POST['last_name'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    if (!empty($username) && !empty($password) && !empty($first_name) && !empty($last_name)){
      $query = "INSERT INTO users VALUES ('', '$username','$password', '$first_name', '$last_name')";

      $result = $mysqli->query($query);


      if($result == false)
        echo '<a href="register.php">Error: cannot execute query</a>';
      else
        echo "You account registered successfully <a href='login.php'> Login </a>";
      exit;
    }
    else {
      echo "<script> alert('All fields are required *') </script>";
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
    <link rel="stylesheet" href="assets/stylesheets/base.css">

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
  </head>
  <body>

    
    <!-- HEADER -->
    <div id="header">
      <div class="page-full-width cf">
        <div id="login-intro" class="fl">
          <h1>REGISTERATION FORM</h1>
          <h5>Enter your credentials below</h5>
        </div> <!-- login-intro -->
      </div> <!-- end full-width -->  
    </div> <!-- end header -->
    
    
    <!-- MAIN CONTENT -->
    <div id="content">
      <form action="register.php" method="POST" id="login-form">
        <fieldset>
          <p>
            <label for="login-username">username</label>
            <input type="text" id="login-username" name="username" class="round full-width-input" autofocus />
          </p>
          <p>
            <label for="login-password">password</label>
            <input type="password" id="login-password" name="password" class="round full-width-input" />
          </p>
          <p>
            <label for="login-first-name">First Name</label>
            <input type="text" id="login-first-name" name="first_name" class="round full-width-input" autofocus />
          </p>
          <p>
            <label for="login-last-name">Last Name</label>
            <input type="text" id="login-last-name" name="last_name" class="round full-width-input" autofocus />
          </p>
          <input type="submit" name="submit" class="button round blue image-right ic-right-arrow" value="RESISTER">
        </fieldset>
        <br/><div class="information-box round">Please complete all the fields register form information required.</div>
        <p>Note: If you are existing member, just go<a href="login.php"> click here  </a>.</p>
      </form>
    </div> <!-- end content -->

    <!-- FOOTER -->
    <div id="footer">
      <p>&copy; Copyright 2015 <a href="http://ddk-info.github.io/">ddk-info</a>. All rights reserved.</p>
    </div> <!-- end footer -->

  </body>
</html>
