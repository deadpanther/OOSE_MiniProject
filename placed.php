<!DOCTYPE html>
<html>
<head>
  <title>
    Order Confirmation
  </title>
  <style>
    h1{
      align:center;

    }
  </style>
</head>
<?php

$connect = mysqli_connect("localhost", "root", "", "oose");
echo "<h1>Your order has been successfully placed!</h1>";
$name = $_POST['name'];
$address= $_POST['address'];
$payment_mode = $_POST['payment_mode'];
$email = $_POST['email'];
$sql= "select * from cart";
$result = mysqli_query($connect, $sql);
$ids= array();
while($row = mysqli_fetch_array($result))
{
array_push($ids,$row['id'],$row['quantity']);
}
$orders = json_encode($ids);
//print_r($orders);
$sql = "INSERT INTO orders (name,address,email,orders) VALUES ('$name', '$address','$email','$orders')";
mysqli_query($connect, $sql);

header( "refresh:5;url=website.php" );
?>
