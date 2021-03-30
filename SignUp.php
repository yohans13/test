<?php

include_once('inc/connection.php');

if(isset($_POST['b2']))
{
$Fname = $_POST['t1'];
$Lname = $_POST['t7'];
$Email = $_POST['t2'];
$Password  = $_POST['t8'];
$Country = $_POST['t3'];
$Company = $_POST['t9'];
$Address1 = $_POST['t4'];
$Address2 = $_POST['t10'];
$City = $_POST['t5'];
$Province = $_POST['t11'];
$PhoneNumber = $_POST['t6'];
$ZipCode = $_POST['t12'];




$query="INSERT INTO user (Fname  , Lname ,Email ,Password ,Country ,Company ,Address1 ,Address2 ,City,Province ,PhoneNumber ,ZipCode,user) 
		VALUES ('$Fname', '$Lname', '$Email', '$Password', '$Country', '$Company', '$Address1','$Address2', '$City', '$Province', '$PhoneNumber', '$ZipCode','user')";
$record=mysqli_query($connection,$query);

if($record)
	{
	echo "<SCRIPT> 
        alert('successfully Registered')
        window.location.replace('SignIn.php');
    </SCRIPT>";
    mysql_close();

		}
	else
		{echo "<script>
		alert('Please Try Again');
		</script>";
	}
}

$query2="SELECT  * from deliverfee ";
$record2=mysqli_query($connection,$query2);

$option="<select name='t12' is='t12' required ><option></option>";
while($stff=mysqli_fetch_assoc($record2)){
	 $option.="<option>";
	 $option.=$stff['Zipcode'];
	 $option.="</option>";
}
$option.="</select>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/SignUp.css">

	<! –– support for responsive page ––>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<! –– Google FOnt Link ––>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@800&family=Russo+One&display=swap" rel="stylesheet">

	<title>New Nile - New Password </title>
</head>



<body>

<! –– link for header  ––>

<header>
<?php require_once("inc/Header.php");?>
</header>


<! –– sign up Body   ––>

<div class="title"><h1>New Account</h1> </div>

<div class="main">

<div class="signinBody">

	
	<div class="leftside">

		<form method="post" action="SignUp.php">

	<label for="t1">First Name :</label><br>
	<input type="text" name="t1" id="t1" size="70" required>

	<br><br>

	<label for="t2">Email Address :</label><br>
	<input type="email" name="t2" id="t2" size="70" required>

	<br><br>

	<label for="t3">Country :</label><br>
	<input type="text" name="t3" id="t3" size="70" required>

	<br><br>

	<label for="t4">Address Line 1 :</label><br>
	<input type="text" name="t4" id="t4" size="70" required>

	<br><br>

	<label for="t5">City :</label><br>
	<input type="text" name="t5" id="t5" size="70" >

	<br><br>

	<label for="t6">Phone Number :</label><br>
	<input type="tel" name="t6" id="t6" size="70" required>

	<br><br>
	
	</div>

</div>	

	<div class="rightside">
		
	<label for="t7">Last Name :</label><br>
	<input type="text" name="t7" id="t7" size="70" required>

	<br><br>

	<label for="t8">Password :</label><br>
	<input type="password" name="t8" id="t8" size="70" required>

	<br><br>

	<label for="t9">Company Name :</label><br>
	<input type="text" name="t9" id="t9" size="70">

	<br><br>

	<label for="t10">Address Line 2 :</label><br >
	<input type="text" name="t10" id="t10" size="70">

	<br><br>

	<label for="t11">State/Province :</label><br>
	<input type="text" name="t11" id="t11" size="70">

	<br><br>

	<label for="t12">Zip/Postcode :</label><br>
	 <?php echo $option ?>

	</select>

	<br><br>

	</div>
	
</div>
<div class="submitbtn">
	
	<center><input type="submit" value="Create Account" name="b2"></center>
</div>

</form>






<! –– link for footer  ––>

<footer>
<?php require_once("inc/Footer.php");?>
</footer>




<script src="js/main.js"></script>

	
</body>
</html>


