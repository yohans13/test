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


if(isset($_POST['b2'])){


				$Passwords=$_POST['t8'];
				
				$Companys=$_POST['t9'];
				$Address1s=$_POST['t4'];
				$Address2s=$_POST['t10'];
				$Citys=$_POST['t5'];
				$Provinces=$_POST['t11'];
				$PhoneNumbers=$_POST['t6'];
				



	$query="UPDATE user SET Password='$Passwords',Company='$Companys',Address1='$Address1s',Address2='$Address2s',City='$Citys',Province='$Provinces',PhoneNumber='$PhoneNumbers' WHERE Email='$Email'";
$record=mysqli_query($connection,$query);

if($record)
	{
	echo "<script>
		alert('Done');
		</script>";

		header('location:profile.php');
		}
	else
		{echo "<script>
		alert('Please Try Again');
		</script>";
	}

}

/*$query2="SELECT  * from deliverfee ";
$record2=mysqli_query($connection,$query2);

$option="<select name='t12' is='t12'  ><option></option>";
while($stff=mysqli_fetch_assoc($record2)){
	 $option.="<option>";
	 $option.=$stff['Zipcode'];
	 $option.="</option>";
}
$option.="</select>";*/


?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/profile.css">

	<! –– support for responsive page ––>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<! –– Google FOnt Link ––>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@800&family=Russo+One&display=swap" rel="stylesheet">

	<title>New Nile - Sign In </title>
</head>



<body>

<! –– link for header  ––>

<header>
<?php require_once("inc/HeaderLogin.php");?>
</header>


<! –– User in Body   ––>

<div class="top">

	<div class="username">
	<h1><?Php echo $Fname." ".$Lname; ?> &nbsp&nbsp</h1> <br><br>
	</div>

<div class="body">
	<div class="sidebar">
		
		<h2>Welcome to New Nile Products</h2>

		<br><br><br><br>

		<a href="user.php">Change Profile Details</a>
		<br><br><br>
		<a href="msg.php">Messages &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
		<br><br><br>
		<a href="shop.php">Shop  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
		<br><br><br>
		<a href="shopcart.php">Shoping Cart  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp</a>




	</div>

	<div class="rightside">
		
	

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


