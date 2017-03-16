<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> lab 8 - PHP</title>
  </head>
  <body>
    stuff

    <?php

    function sumNumbers($num1,$num2){
      $result = $num1 * $num2;
      return $result;

    }
      $name = "eric strong";
      echo $name;
      echo size($name);

      //test the sumNumbers
      $number = sumNumbers(3,5);
      echo "the number is " . $number;
     ?>

  </body>
</html>
