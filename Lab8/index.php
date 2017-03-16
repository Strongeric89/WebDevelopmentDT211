<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> lab 8 - PHP</title>
  </head>
  <body>

    <form class="" action="index.php" method="post">
      NUMBER-1:<input type="text" name="num1" value="">
        NUMBER-2:<input type="text" name="num2" value="">
        <input type="submit" name="" value="">

    </form>


    <?php

    function sumNumbers($num1,$num2) {
      $result = $num1 * $num2;
      return $result;

    }//end sumNumbers

      $name = "eric strong";
      echo $name;

      echo "<br>the size of the word " . $name . " is " . strlen($name);

      //test the sumNumbers
      $number = sumNumbers(3,5);
      echo "<br>3 + 5 = " . sumNumbers(3,5) . "<br>";

      ?>

  </body>
</html>
