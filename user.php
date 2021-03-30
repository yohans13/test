



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
	echo "<SCRIPT> 
        alert('successfully updated')
        window.location.replace('profile.php');
    </SCRIPT>";
    mysql_close();

		}
	else
		{echo "<script>
		alert('Please Try Again');
		</script>";
	}

}












if(isset($_POST['b5'])){

	

$queryD="DELETE FROM user where  Email='$Email'";

$recordD=mysqli_query($connection,$query);

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

<script type="text/javascript">
<!--
function confirmation() {

	var answer = confirm("Delete This Account!")
	if (answer){



		alert("successfully  Deleted")

		
	
		 window.location.replace('deleteprofile.php');
	}
	else{
		alert("Canceled ")
	}
}

</script>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/user.css">

	<! –– support for responsive page ––>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<! –– Google FOnt Link ––>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@800&family=Russo+One&display=swap" rel="stylesheet">

	<title>New Nile  </title>
</head>



<body>

<! –– link for header  ––>

<header>
<?php require_once("inc/HeaderLogin.php");?>
</header>


<! –– User in Body   ––>

<div class="top">

	<div class="username">
	<h1>Welcome <?Php echo $Fname." ".$Lname; ?>! &nbsp&nbsp</h1> <br><br>
	</div>

	<div class="body">
		

		<div class="signinBody">

	
	<div class="leftside">

		<form method="post" action="user.php">

	<label for="t1">First Name :</label><br>
	<input type="text" name="t1" id="t1" size="70" disabled value="<?php echo $Fname ?>">

	<br><br>

	<label for="t2">Email Address :</label><br>
	<input type="email" name="t2" id="t2" size="70" disabled value="<?php echo $Email ?>">

	<br><br>

	<label for="t3">Country :</label><br>
	<input type="text" name="t3" id="t3" size="70" disabled value="<?php echo $Country ?>">

	<br><br>

	<label for="t4">Address Line 1 :</label><br>
	<input type="text" name="t4" id="t4" size="70" required value="<?php echo $Address1 ?>">

	<br><br>

	<label for="t5">City :</label><br>
	<input type="text" name="t5" id="t5" size="70" value="<?php echo $City ?>">

	<br><br>

	<label for="t6">Phone Number :</label><br>
	<input type="tel" name="t6" id="t6" size="70" required value="<?php echo $PhoneNumber ?>">

	<br><br>
	
	</div>

</div>	

	<div class="rightside">
		
	<label for="t7">Last Name :</label><br>
	<input type="text" name="t7" id="t7" size="70" disabled value="<?php echo $Lname ?>">

	<br><br>

	<label for="t8">Password :</label><br>
	<input type="password" name="t8" id="t8" size="70" required value="<?php echo $Password ?>">

	<br><br>

	<label for="t9">Company Name :</label><br>
	<input type="text" name="t9" id="t9" size="70" value="<?php echo $Company ?>">

	<br><br>

	<label for="t10">Address Line 2 :</label><br >
	<input type="text" name="t10" id="t10" size="70" value="<?php echo $Address2 ?>">

	<br><br>

	<label for="t11">State/Province :</label><br>
	<input type="text" name="t11" id="t11" size="70" value="<?php echo $Province ?>">

	<br><br>

	<label for="t12">Zip/Postcode :</label><br>
	 <input type="text" name="t12" id="t12" size="70" value="<?php echo $ZipCode ?>" disabled>

	</select>



	</div>
	
</div>
<div class="submitbtn">
	
	<center><input type="button" value="Remove Account"  name="b5" id="b3" onclick="confirmation()"> &nbsp&nbsp <input type="submit" value="Update Account" name="b2"></center>
</div>

</form>


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


