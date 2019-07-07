<!DOCTYPE html>
<html>
<head>
<title>Checkout Page</title>

<style type="text/css">
.form-style-6{
	font: 95% Arial, Helvetica, sans-serif;
	max-width: 400px;
	margin: 10px auto;
	padding: 16px;
	background: #F7F7F7;
}
.form-style-6 h1{
	background: #43d15d;
	padding: 20px 0;
	font-size: 140%;
	font-weight: 300;
	text-align: center;
	color: #fff;
	margin: -16px -16px 16px -16px;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="postal"],
.form-style-6 input[type="date"],
.form-style-6 input[type="datetime"],
.form-style-6 input[type="email"],
.form-style-6 input[type="number"],
.form-style-6 input[type="search"],
.form-style-6 input[type="time"],
.form-style-6 input[type="url"],
.form-style-6 textarea,
.form-style-6 select
{
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	background: #fff;
	margin-bottom: 4%;
	border: 1px solid #ccc;
	padding: 3%;
	color: #555;
	font: 95% Arial, Helvetica, sans-serif;
}
.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="date"]:focus,
.form-style-6 input[type="datetime"]:focus,
.form-style-6 input[type="email"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="search"]:focus,
.form-style-6 input[type="time"]:focus,
.form-style-6 input[type="url"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
	box-shadow: 0 0 5px #43D1AF;
	padding: 3%;
	border: 1px solid #43D1AF;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 3%;
	background: #43d15d;
	border-bottom: 2px solid #30C29E;
	border-top-style: none;
	border-right-style: none;
	border-left-style: none;
	color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
	background: #2EBC99;
}

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
            <a href="form.html">Signup</a>
            <a href="fvalid.html">Login</a>
        </div><br>
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

  	while($row = mysqli_fetch_array($result))
  	{ 																								//Place these quantities in a tabular format by giving css
  		$price = $row['price'];
  		echo "<tr>";
  		echo "<td>".$row['id']."</td>";  //Column 1 -ID
  		echo "<td>".$row['name']."</td>";    //Column 2 -NAME
  		echo "<td>".$row['quantity']."</td>";  //COLUMN 3 -Quantity
  		$new_price = $price * $row['quantity'];
  		echo "<td>".$new_price."</td></tr>";   //COlumn 4 -Price
  	}
  	echo "</table>";
  }
  else {
  	echo "Cart Is Empty!";
  }
  //$page = $_SERVER['PHP_SELF'];
   //$sec = "";
   //header("Refresh: $sec; url=$page");

  ?>
<div class="form-style-6">
<h1>Place Your Order</h1>
<form action="placed.php" method="post">
<input type="text" name="name" placeholder="Your Name" />
<input type="email" name="email" placeholder="Email Address" />
<input type="postal" name="address" placeholder="Postal Address" />
<input type="radio" name="payment_mode">Cash On Delivery <br><br>
<input type="submit" value="Confirm Your Order" />
</form>
</div>


</body>
</html>
