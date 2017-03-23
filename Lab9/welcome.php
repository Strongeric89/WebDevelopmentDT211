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
$name= "Eric Strong";
echo "my name is " . $name;

  echo "<br>name: " . $n . "<br>password: " . $p;

}


        $username = $_POST['name'];
        $password = $_POST['password'];

        printDetails($username, $password);



     ?>

  </body>
</html>
