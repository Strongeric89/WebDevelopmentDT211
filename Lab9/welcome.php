<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php page</title>
  </head>
  <body>
    <?php


// //function to print out username and password
// function printDetails($n,$p){
// $name= "Eric Strong";
// echo "my name is " . $name;
//
//   echo "<br>name: " . $n . "<br>password: " . $p;
//
// }


        $hour= $_POST['hour'];


        if($hour < 12){

            echo "Good Morning!<br> The hour is " . $hour;

        }

        else if($hour >=12){
          echo "Good Evening!<br> The hour is " . $hour;
        }




     ?>

  </body>
</html>
