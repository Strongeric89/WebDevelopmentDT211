<?php
//check the Session
session_start();
echo "welcome " . $_SESSION['username'];
echo "<a href='logout.php'><h1>Log out</h1></a>";

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>welcome page</title>
  </head>
  <body>

      <a href="addAddress.html"><h1>Add Contact to Address Book</h1></a>
      <a href="viewAddress.html"><h1>View Address Book</h1></a>
      <a href="editAddress.html"><h1>Edit Contact</h1></a>
      <a href="removeAddress.html"><h1>Remove Contact</h1></a>


  </body>
</html>
