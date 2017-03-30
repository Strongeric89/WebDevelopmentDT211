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

      $productname= $_POST['productname'];
      $price = $_POST['price'];


      echo "adding item to restraunt database";
      echo "<br>Product Name: " . $productname;
      echo "<br>Price: " . $productname;

        $id = 61;
        $catagory = 5;
        $image = "images/lab10;";



        $insert1 = "INSERT INTO products (id,name,price,catagory,image) VALUES('$id','$productname', '$price', '$catagory', '$image')";

        //insert to database
       mysqli_query($db,$insert1);

       echo "<br>details added to the " . $db_name . " table";

?>
