<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php returing page</title>
  </head>
  <body>
    <?php
    function sumNumbers($num1,$num2) {
      $result = $num1 * $num2;
      return $result;

    }//end sumNumbers

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $result = sumNumbers($num1,$num2);
    echo "<br> The result of " . $num1 . " + " . $num2 . " = " . $result;


     ?>

  </body>
</html>
