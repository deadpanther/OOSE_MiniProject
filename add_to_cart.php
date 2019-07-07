<?php
$connect = mysqli_connect("localhost", "root", "", "oose");
$name = $_POST['name'];
$id = $_GET["id"];
$price =$_POST['price'];
$quantity=$_POST['quantity'];
$sql = "INSERT INTO cart VALUES('$id', '$name','$price','$quantity')";
mysqli_query($connect, $sql);
header( 'Location: website.php');
?>
