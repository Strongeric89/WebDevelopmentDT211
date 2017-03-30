<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show products</title>
  </head>
  <body>
    <?php

    //THE FOLLOWING WILL ENSURE A CONNECTION TO THE DATABASE
    $db_name = "restraunt";
    $mysql_user= "root";
    $mysql_pass = "7512";
    $server_name = "localhost";

    $db = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);


    if(mysqli_connect_errno()){
      echo "failed to connect";

    }

    else{
      echo "<b>connected!</b>";
    }


    //do sql query
      $select1 = "SELECT id, name, price FROM products";

     $result = mysqli_query($db,$select1);


     while($ROW = mysqli_fetch_row($result)){
       echo " <br> $ROW[0]   $ROW[1] $ROW[2]";

     }







    ?>


  </body>
</html>
