<?php

require_once('inc/connection.php');
session_start();
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
					$Email=$user['Email'];
					$Fname=$user['Fname'];
					$Lname=$user['Lname'];
			

				$_SESSION["Email"] = $Email;
				$_SESSION["Fname"] = $Fname;
				$_SESSION["Lname"] = $Lname;


			

						header("location:user.php");
					
			}

			else if($email=="newnile" && $password=="nile2020"){

				header("location:admin.php");
			}
					

					else
						{
							echo "Invalid user Name/Password";
							
			}
		}
	
	}


}
?>
