<?php 

session_start();

require_once('inc/connection.php');

				$Fname=$_SESSION["Fname"];
				$Lname=$_SESSION["Lname"];
				$Email=$_SESSION['Email'];
				$Password=$_SESSION['Password'];
				$Country=$_SESSION['Country'];
				$Company=$_SESSION['Company'];
				$Address1=$_SESSION['Address1'];
				$Address2=$_SESSION['Address2'];
				$City=$_SESSION['City'];
				$Province=$_SESSION['Province'];
				$PhoneNumber=$_SESSION['PhoneNumber'];
				$ZipCode=$_SESSION['ZipCode'];




?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/profileadmin.css">

	<! –– support for responsive page ––>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<! –– Google FOnt Link ––>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@800&family=Russo+One&display=swap" rel="stylesheet">

	<title>New Nile </title>
</head>



<body>

<! –– link for header  ––>

<header>
<?php require_once("inc/Headeradmin.php");?>
</header>


<! –– User in Body   ––>

<div class="top">


	</div>

<div class="body">
	<div class="sidebar">
		
		<h2>Welcome to New Nile Products</h2>

		<br><br>

		<a href="user.php">Manage New Orders</a>
		<br><br><br>
		<a href="msg.php">Messages &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
		<br><br><br>
		<a href="shop.php">Add New Product  &nbsp&nbsp&nbsp&nbsp</a>
		<br><br><br>
		<a href="cart.php">Delete Old Products  &nbsp</a>
		<br><br><br>
		<a href="cart.php">Users Details  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp</a>
		<br><br><br>
		<a href="cart.php">Company Statistics  &nbsp&nbsp</a>





	</div>

	<div class="rightside">
		
	
<br><br>
		<img src="img/images/nile.jpg" alt="Nile">

	</div>

</div>


</div>

	</div>

	






</div>	


<! –– link for footer  ––>
<div class="foot">
<footer>
<?php require_once("inc/Footer.php");?>
</footer>
</div>


<script src="js/main.js"></script>

	
</body>
</html>


