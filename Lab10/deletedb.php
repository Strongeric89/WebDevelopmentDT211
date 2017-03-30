
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



                    echo "deleting item to restraunt database";
                    echo "<br>Product Name: " . $productname;



                      $delete1 = "DELETE FROM `products` WHERE name like '%$productname%'";

                      //insert to database
                     mysqli_query($db,$delete1);



              ?>
