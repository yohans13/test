


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/SignIn.css">

	<! –– support for responsive page ––>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<! –– Google FOnt Link ––>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@800&family=Russo+One&display=swap" rel="stylesheet">

	<title>New Nile - Sign In </title>
</head>



<body>

<! –– link for header  ––>

<header>
<?php require_once("inc/Header.php");?>
</header>


<! –– Sign in Body   ––>

<div class="main">

<div class="signinBody">

	<h1>Sign In</h1> <br><br>
<form action="SignIn.php" method="post">
	<div class="leftside">

		<p class="displaycrt"> You need to log in For select cart Items </p>
	<label for="t1">Email Address :</label><br>
	<input type="email" name="t1" id="t1" size="70">

	<br><br>

	<label for="t2">Password :</label><br>
	<input type="password" name="t2" id="t2" size="70">

	<br><br><br>
	<center>
	<input type="submit" value="Sign In" name="b1">
	<a href="ForgotPw.php">Forgot your password?</a>
	</center>
	</div>

</div>	

	<div class="rightside">
		
	<p class="classTitle">New Customer?</p><br>
	<p class="classbody">Create an account with us and you'll be able to:</p>

	<br>

	<p class="classlist">Check out faster</p>
	<p class="classlist">Save multiple shipping addresses</p>
	<p class="classlist">Access your order history</p>
	<p class="classlist">Place new orders</p>
	<p class="classlist">Save items to your wish list</p>

	<input type="submit" value="Create Account" name="b2">

	</div>
</form>

</div>









<! –– link for footer  ––>

<footer>
<?php require_once("inc/Footer.php");?>
</footer>




<script src="js/main.js"></script>

	
</body>
</html>


