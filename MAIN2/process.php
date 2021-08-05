<?php 

$mysqli = new mysqli('localhost', 'root', '', 'rentalcar') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
      $name = $_POST['name'];
      $image = $_POST['image'];
      $price = $_POST['price'];
      $discount = $_POST['discount'];
 
    $mysqli->query("INSERT INTO cars(car_name, image, price, discount) VALUES('$name', '$image', '$price', '$discount' )") or
    die($mysqli->error);


}




?>