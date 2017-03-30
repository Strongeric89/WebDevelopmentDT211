<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>edit item</title>
</head>
<body>

  <h1 id="heading1">edit item</h1>


<?php
  $id = $_GET['id'];

  echo "id = " . $id;


 ?>
  <form action="editdb.php" method="post">
    Product Name:<input type="text" name="productname" placeholder="enter your new product name">
    <br>
      Product Price:<input type="price" name="price" placeholder="enter your new product price">
      <br>

      Product id:<input type="id" name="id">
      <br>


        <input type="submit">





</body>
</html>
