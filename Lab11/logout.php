<?php
  session_start();
  session_destroy();

  if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
  $username = $_COOKIE['username'];
  $password = $_COOKIE['password'];
  //delete the cookie
  setcookie('username',$username, time()-1);
  setcookie('password',$password, time()-1);
}

  echo "You have successfully logged out <br>";

  echo "<br>to log back in <a href='login.php'>click here</a>";


 ?>
