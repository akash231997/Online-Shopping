<?php session_start(); ?>

<html>
<head>
<style>

.right {background-color:lightgray;
    position: absolute;
    bottom:50;
    right:50px;
    width: 300px;
    padding: 37px;

}
.left {background-color:lightgray;
    position: absolute;
    bottom:26;
    left: 100px;
    width: 300px;
    padding: 20px;

}
body {background-color:black;
background-image: url("2.jpg");
background-repeat: no-repeat;
}
</style>
</head>
<body>

<?php
if(!isset($_SESSION['userid'])) {
		header("location:reg.php");
		}
?>

<br>
<div class="left">
<h3 style="text-align:center;">CONTACT</h3>
<h4 style="text-align:center;">Questions??</h4>
<form method="get" action="submit.php">
Full name:<br>
<input type="text" name="name">
<br>
email:<br>
<input type="text" name="email" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" >
<br>
subject:<br>
<input type="text" name="subject"><br>
comments:<br>
<input type="text" name="comments"><br><br>
<input type="submit" value="Submit">
</form> 
</div>
<div class="right">
<h3 style="text-align:center;">STORE</h3>

</head>

<body>
<i class="fa fa-map-marker"></i>
The Jeans Blog<br>
sector 128,NOIDA,UP<br>
<i class="fa fa-phone-square"></i>011-32016357<br>
<i class="fa fa-envelope"></i> jeansblog@gmail.com<br>
<h2>We accept</h2><br>
<i class="fa fa-cc-visa"></i>
Debit Card/Credit Card<br><i class="fa fa-cc-paypal"></i>
Paytm


</body>
</html>