<?php
  if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
  $username = $_COOKIES['username'];
  $password = $_COOKIES['password'];

  echo "
    <script>
      document.getElementById('username').value = '$username';
      document.getElementById('password').value = '$password';
    </script>";


}

 ?>

<!DOCTYPE html>
  <head>
    <!--THE  FOLLOWING IS THE STYLE SHEET-->
    <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
    <script src="scripts/myFirstScript.js"></script>
    <title>lab 11 - log in</title>
  </head>
  <body class="maincontent">

    <h1>Welcome to the Phone Book system</h1>
    <form id="form" action="authenticate.php" method="post" border="2">

      <b>Username:</b><input type="text" name="username" id="username" value="" required>
      <br><br>
      <b>Password:</b><input type="password" name="password" id="passord" value="" required>
      <br><br><br>
      <a href="#">Sign up</a>
        <br>
        <br>

        <b>Remember me:</b><input type="checkbox" name="remember" value="1">
        <br><br>
      <input type="submit" name="login" value="Login">
    </form>


  </body>
</html>
