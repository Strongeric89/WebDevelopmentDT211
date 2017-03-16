<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> lab 8 - PHP</title>
  </head>
  <body>


    <?php

    function sumNumbers($num1,$num2) {
      $result = $num1 * $num2;
      return $result;

    }//end sumNumbers

      $name = "eric strong";
      echo $name;
      $size = size($name);

      //test the sumNumbers
      $number = sumNumbers(3,5);
      echo "3 + 5 = " . sumNumbers(3,5) . "<br>";

      ?>

  </body>
</html>
