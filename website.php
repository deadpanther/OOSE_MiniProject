<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>Apni Dukan</title>
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
            <a href="signup.html">Signup</a>
            <a href="login.html">Login</a>
        </div>

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
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1/4 </div>
  <img src="dukan.jpg" style="width:100%">
</div>    
    
<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="chp.JPG" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="enm.JPG" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="aml.JPG" style="width:100%">
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

 <br>

 <br>

    <div>
      <?php
      $connect = mysqli_connect("localhost", "root", "", "oose");
        $query = "SELECT * FROM tbl_product ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
      <div class="col-md-4">
        <form method="post" action="add_to_cart.php?id=<?php echo $row["id"]; ?>">
          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
            <img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

            <h4 class="text-info"><?php echo $row["name"]; ?></h4>

            <h4 class="text-danger">Rs(Per Kg) <?php echo $row["price"]; ?></h4>

            <input type="text" name="quantity"  class="form-control" />

            <input type="hidden" name="name" value="<?php echo $row["name"];?>" />

            <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />

            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

          </div>
        </form>
      </div>
      <?php
          }
        }
      ?>
    </div>

<br><br><br><br><br><br><br><br><br><br>
        <p id="para" style="text-align: center">Big discounts on personal care</p>
 <div class="row2">
  <div class="column2">
      <a href="#"><img src="bd1.JPG" alt="Fjords" style="width:100%"></a>
  </div>
  <div class="column2">
      <a href="#"><img src="bd2.JPG" alt="Forest" style="width:100%"></a>
  </div>
  <div class="column2">
      <a href="#"><img src="bd3.JPG" alt="Mountains" style="width:100%"></a>
  </div>
<div class="column2">
    <a href="#"><img src="bd4.JPG" alt="Mountains" style="width:100%"></a>
  </div>
</div>
<br>
<p id="para" style="text-align: center">#BEAT THE HEAT With Cool Beverages</p>
   <div class="row2">
  <div class="column2">
      <a href="#"><img src="lassi.JPG" alt="Fjords" style="width:100%"></a>
  </div>
  <div class="column2">
      <a href="#"><img src="milk.JPG" alt="Forest" style="width:100%"></a>
  </div>
  <div class="column2">
      <a href="#"><img src="tang.JPG" alt="Mountains" style="width:100%"></a>
  </div>
<div class="column2">
    <a href="#"><img src="coke.JPG" alt="Mountains" style="width:100%"></a>
  </div>
</div>
<div class="footer">
<div class="column1">
  <h2>Apni Dukan</h2>
    <a href="knowus.html"><p>Know Us</p></a>
  </div>

<div class="column1">
    <h2>Get Social With Us</h2>
    <a href="https://www.facebook.com/"><p>Facebook</p></a>
    <a href="https://twitter.com/login?lang=en"><p>Twitter</p></a>
    <a href="https://www.instagram.com/?hl=en"><p>Instagram</p></a>
</div>

<div class="column1">
    <h2>Suggestions</h2>
    <a href="feedback.html"><p>Feedback</p></a>
    </div>

<div class="column1">
    <h2>Be our Partner</h2>
    <a href=""><p>Sell on Apni Dukan</p></a>
</div>
        </div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
    </body>
</html>
