<?php
  include "config.php"; 

  if(isset($_POST['submit'])) {
    
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