<?php
//authenticate page
// $tempusername = "eric";
// $temppassword = "7512";


$tempusername = "batman";
$temppassword = "7512";

if(isset($_POST['login'])){
  //go inside
  $username = $_POST['username'];
  $password= $_POST['password'];
  $remember = $_POST['remember'];

  if($username == $tempusername and $password == $temppassword){

    //setting the cookie
    if(isset($_POST['remember'])){
      setcookie('username',$username, time()+60*60*7);
      setcookie('password',$password, time()+60*60*7);

    } // valid for 7 days

      //create a Session
      session_start();

      $_SESSION['username'] = $username;

      //send to welcome
      header("Location: welcome.php");


  }//end if

  else{
    echo "<b>Invalid Authentication. Please check your username or password</b>

    <a href='login.php'> Click to try again</a>

    ";

  }//end else

}//end if
else{
   header("Location: login.php");
}

 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>authenticate</title>
   </head>

   <body>

   </body>
 </html>
