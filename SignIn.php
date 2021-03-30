<?php 
session_start();
require_once('inc/connection.php');

if(isset($_POST['b2'])){
	header('location:SignUp.php');
	
}



if(isset($_POST['b1'])){


	

$check= array();

	if(!isset($_POST['t1'])){
		$check[]="error 1";
	}
	if(!isset($_POST['t2'])){
		$check[]="error 2";
	}

	if(empty($check)){
		
		$email=$_POST['t1'];
		$password=$_POST['t2'];


		$query="SELECT * from user where Email='{$email}' and Password='{$password}' LIMIT 1";

		$record=mysqli_query($connection,$query);

									if($record){
										
										if(mysqli_num_rows($record)==1){

											$user=mysqli_fetch_assoc($record);

											$type=$user['user'];

																	 if ($type =='user') {
																	 
																						header("location:profile.php");
																						}

																		else if($type=='admin'){

																						header("location:MainAdmin.php");
																						}
																					

																		else if ($type=='manager'){

																						header("location:MainAdmin.php");
																						}

																						else{
																							echo 'no';
																						}



																			}

																				else

																							{

																						echo "<script>alert('Invalid user Name/Password');</script>";

																							}
																

																	

												}
												else
												{
												echo "<script>alert('Invalid user Name/Password');</script>";

												}


					}


		}

?>


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
<form action="SignIn.php?" method="post">
	<div class="leftside">

			<?php if(isset($_GET['order'])){
	echo "<p class='displaycrt'> You need to log in For PLace New Orders </p>";
} ?>

	
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


