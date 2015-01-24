<?php
  include ("config.php");
   if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0 ){
      echo "success loginin";

    }
    else {
      echo "failed";
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
    </div>
    </body>
  </html>