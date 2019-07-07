<!DOCTYPE html>
<html>
<head>
<style>

.topnav{
                display: inline-block;
                height: 80px;
                width: 100%;
                background-color: #1E90FF;
                border-radius: 5px;
            }
            h3{
                display: inline-block;
                margin-top: 20px;
                margin-left: 8px;
                font-size: 30px;
                font-family: Bodoni MT;
                color: #ffff1a;
            }
            h2{
                font-family:  Bodoni MT;
            }
.topnav {
  overflow: hidden;
        }
.topnav a {
  float: right;
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  margin-top: 10px;
  text-decoration: none;
  font-size: 22px;
  font-family: Bodoni MT;
}

.topnav a:hover {
  background-color: #ffff99;
  color: black;
}

.topnav .search-container {
display: inline-block;
margin-left: 60px;
}

.topnav input[type=text] {
  padding: 6px;
  border-radius: 4px;
  margin-top: 8px;
  font-size: 17px;
  font-family: Bodoni MT;
  border: none;
  width: 600px;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background:  #cccccc;
  font-size: 17px;
  border: none;
  cursor: pointer;
  border-radius: 4px;
  font-family: Bodoni MT;
}

.topnav .search-container button:hover {
  background:#e6e6e6;
}

 .navbar {
    overflow: hidden;
    background-color: #333;
    font-family:  Bodoni MT;
}

.navbar a {
    float: left;
    font-size: 20px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 25px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #99ccff;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #e6e6e6;
    margin-left: 0.2px;
    width: 100%;
    left: 0;
    z-index: 1;
}

.dropdown-content .header {
    display:flex;
    height: 50px;
    background: #3399ff;
    margin-left: 8px;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 23.50%;
    padding: 10px;
    background-color:#f2f2f2;
    height: 310px;
}

.column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* CSS FOR SLIDESHOWS.....................................................................................*/
* {box-sizing: border-box;}
body {font-family: Bodoni MT;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  max-height:500px;
  position: relative;
  margin: auto;
  border: 2px solid black;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #C0C0C0;
  border-radius: 50%;
  display: inline-flex;
  border: 2px solid black;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

/* CSS FOR products.....................................................................................*/
            html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;

}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: black;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
/* CSS FOR footer.....................................................................................*/
            .footer{
                display: inline-block;
                width: 100%;
                height: 300px;
                border: 2px solid black;
                background-color: #1e90ff;
                color: white;
            }
            a{
                color: white;
                text-decoration: none;
            }
.column1 {
    float: left;
    padding: 75px;
    font-size: 20px;
            }
            .row2,.column2{
    box-sizing: border-box;
}

.column2 {
    float: left;
    width: 25%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row2::after {
    content: "";
    clear: both;
    display: table;
}
            #para{
                font-size: 25px;
            }

table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

table td, table th {
    border: 1px solid #ddd;
    padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

a.button {
    height:50px;
    width:200px;
    text-decoration: none;
    color: white;
}
</style>
</head>

<body>
<div class="topnav">
            <h3><i>Apni Dukan</i></h3>
            <div class="search-container">
      <input type="text" placeholder="Search for products, brands here" name="search">
                <button type="submit"><i class="fa fa-search">Search</i></button>
            </div>
             <a href="cart.php">Cart<i class="fa fa-shopping-cart"></i></a>
			 <a href = "order.php">Order</a>
            <a href="form.html">Signup</a>
            <a href="fvalid.html">Login</a>
        </div>
</body>

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Shop By Category
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Categories</h2>
      </div>
      <div class="row">
        <div class="column">
          <h2>Fruits & Vegetables</h2>
          <a href="#">Fresh fruits</a>
          <a href="#">Herbs and Seasoning</a>
          <a href="#">Cuts & Sprouts</a>
            <a href="#">Fresh Fruits</a>
        </div>
        <div class="column">
          <h2>Beverages</h2>
          <a href="#">Tea/Coffee</a>
          <a href="#">Energy & soft Drinks</a>
          <a href="#">Health Drinks & Supplements</a>
          <a href="#">Fruit Juices</a>
        </div>
        <div class="column">
          <h2>Foodgrains/Oil/Masala</h2>
          <a href="#">Salt,Sugar,Jaggery</a>
          <a href="#">Dry Fruits</a>
          <a href="#">Dals and pulses</a>
          <a href="#">Edible oils and ghees</a>
        </div>

      </div>
    </div>
   </div>
</div>
<br>
<h1>Your Shopping Cart</h1>
<?php

$connect = mysqli_connect("localhost", "root", "", "oose");
$query = "SELECT * FROM cart";
$result = mysqli_query($connect, $query);
//print_r($result);
if(mysqli_num_rows($result) > 0)
{
	echo "<table border='1'>
	<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Quantity</th>
	<th>Price</th>
	</tr>";
  $tot_price=0;
	while($row = mysqli_fetch_array($result))
	{ 																								//Place these quantities in a tabular format by giving css
		$price = $row['price'];
		echo "<tr>";
		echo "<td>".$row['id']."</td>";  //Column 1 -ID
		echo "<td>".$row['name']."</td>";    //Column 2 -NAME
		echo "<td>".$row['quantity']."</td>";  //COLUMN 3 -Quantity
		$new_price = $price * $row['quantity'];
		echo "<td>".$new_price."</td></tr>";   //COlumn 4 -Price
    $tot_price = $new_price + $tot_price;
	}
  echo "<tr><td colspan=3>Total Amount</td><td>".$tot_price."</td></tr>";
	echo "</table>";
}
else {
	echo "Cart Is Empty!";
}

?>
<br>
<br>
<br>
<div>
<h2>To update the cart</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
	Id Of the Product:<input type="text" name="id">
	Updated quantity:<input type="text" name="quantity">
	<input type="submit" name="submit" value="Update">
</form>
</div>
<?php
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$quantity = $_POST['quantity'];
	if($quantity==0)
	{
		$sql="delete from cart where id=$id";
		mysqli_query($connect, $sql);

	}
	else {
		$sql = "UPDATE cart SET quantity=$quantity WHERE id=$id";
		mysqli_query($connect, $sql);

}
}
?>
<br>
<br>

<a href="order.php" class="button">Proceed to checkout</a>
</html>
