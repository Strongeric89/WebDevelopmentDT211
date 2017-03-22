<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php page</title>
  </head>
  <body>
    <?php


//function to print out username and password
function printDetails($n,$p){
  echo "name: " . $n . "\npassword: " . $p;

}

        $name= "eric stong";
        $username = $_POST['name'];
        $password = $_POST['password'];

        printDetails($username, $password);



     ?>

  </body>
</html>
