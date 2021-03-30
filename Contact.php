

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/Contact.css">

	<! –– support for responsive page ––>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<! –– Google FOnt Link ––>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@800&family=Russo+One&display=swap" rel="stylesheet">

	<title>New Nile - Contact Us </title>
</head>



<body>

<! –– link for header  ––>

<header>
<?php require_once("inc/Header.php");?>
</header>


<! –– Sign in Body   ––>

<div class="title"><h1>Submit a request</h1> </div>

<div class="main">

<div class="signinBody">

	
	<div class="leftside">

	<label for="t1">Your email address :</label><br>
	<input type="email" name="t1" id="t1" size="70" required>

	<br><br>

	<label for="t2">Name :</label><br>
	<input type="text" name="t2" id="t2" size="70" required>

	<br><br>

	<label for="t1">Subject :</label><br>
	<input type="text" name="t1" id="t1" size="70" required>

	<br><br>

	<label for="t2">Description :</label><br>
	<textarea id="t2" size="400" required></textarea>

	<br> 

	<center><input type="submit"  name="b2"></center>
	
	</div>

</div>	



	<div class="rightside">
		
		<img src="img/images/nile.jpg">

	</div>

</div>










<! –– link for footer  ––>

<footer>
<?php require_once("inc/Footer.php");?>
</footer>




<script src="js/main.js"></script>

	
</body>
</html>


