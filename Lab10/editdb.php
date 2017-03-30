
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
                    $id = $_POST['id'];
                    $price = $_POST['price'];



                    echo "updating item of restraunt database";

                    echo "<br>Product Name: " . $productname;
                    echo "<br>item Number:" . $id;



                      $update1 = "UPDATE `products` SET name = $productname where id = $id";

                      //update to database
                     mysqli_query($db,$update1);



              ?>
