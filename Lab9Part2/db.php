<?php
$db_name = "dt211c";
$mysql_user= "root";
$mysql_pass = "7512";
$server_name = "localhost";

//$db = mysqli_connect('localhost','root','7512','dt211c');
$db = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);


if(mysqli_connect_errno()){
  echo "failed to connect";

}

else{
  echo "connected!";
}

$username= $_POST['username'];
      $password= $_POST['password'];
      $firstName=$_POST['name'];
      $lastName=$_POST['lastname'];
      $age = $_POST['age'];


      echo "<br>Name: " . $firstName;
      echo "<br>Surname: " . $lastName;
      echo "<br>Age: " . $age;
      echo "<br>Username: " . $username;
      echo "<br>Password: " . $password;


        $insert1 = "INSERT INTO person (NAME,AGE,SURNAME,USERNAME,PASSWORD) VALUES('$firstName','$age', '$lastName', '$username', '$password')";


       mysqli_query($db,$insert1);

       echo "<br>details added to the " . $db_name . " table";

?>
