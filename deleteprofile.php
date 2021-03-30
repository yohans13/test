	<?php 
	session_start();

require_once('inc/connection.php');

				$Fname=$_SESSION["Fname"];
				$Lname=$_SESSION["Lname"];
				$Email=$_SESSION['Email'];



	$queryD="DELETE FROM user where  Email='$Email'";

	$recordD=mysqli_query($connection,$queryD);

	if($recordD)
{
	header('location:story.php');
}

	?>