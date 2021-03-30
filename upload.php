<?php 

	require_once('inc/connection.php');

	$errors = array();

	if (isset($_POST['submit'])) {
		// submitt button is clicked

		$file_name = $_FILES['image']['name'];
		$file_type = $_FILES['image']['type'];
		$file_size = $_FILES['image']['size'];
		$temp_name = $_FILES['image']['tmp_name'];

		$upload_to = 'img/products/';

		// checking the file type
		if ($file_type != 'image/jpeg') {
			$errors[] = 'Only JPEG files are allowed.';
		}

		// checking file size
		if ($file_size > 500000) {
			$errors[] = 'File size should be less than 500kb.';
		}
		
		if (empty($errors)) {
			$file_uploaded = move_uploaded_file($temp_name, $upload_to . $file_name);
		}

		$Name = $_POST['t1'];
		$Image = $upload_to.$file_name;
		$Price = $_POST['t3'];
	




$query="INSERT INTO item (Name  , Image ,Price  )  VALUES ('$Name', '$Image', '$Price')";
$record=mysqli_query($connection,$query);

if($record)
	{
	echo "<script>
		alert('Done');
		</script>";}
	else
		{echo "<script>
		alert('Please Try Again');
		</script>";
	}


	}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/Contact.css">

	<! –– support for responsive page ––>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<! –– Google FOnt Link ––>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@800&family=Russo+One&display=swap" rel="stylesheet">

	<title>New Nile - Image Upload </title>
</head>



<body>

<! –– link for header  ––>

<header>
<?php require_once("inc/Header.php");?>
</header>


<! –– Sign in Body   ––>

<div class="title"><h1>Upload New Product</h1> </div>

<div class="mainUpload">

<div class="signinBody">

	
	<div class="leftside">

	
		<h1>Image Upload</h1><br>
		<h3>Choose an Image and Click Upload</h3><br>

		<?php 
			if (!empty($errors)) {
				echo '<div class="errors">';
				echo '<p style=color:gray;>File not uploaded. Check following errors:</p>';
				foreach ($errors as $error) {
					echo   '<p style=color:red;>'.'->'.$error.'</p>';
				}
				echo '</div>';
			}

		 ?>


		 	<form action="upload.php" method="post" enctype="multipart/form-data">
			
			<input type="file" name="image" id="">
			
		

			<p class="note">Note: JPEG files less than 500kb only.</p>


			<br>

			<label for="t1">Description</label>
			<input type="text" name="t1" id="t1" required> <br>
			<br>
			<label for="t3">Price</label>
			<input type="text" name="t3" id="t3" required> <br>

			<center><input type="submit" value="submit" name="submit"></center>

		</form>


	</div>

</div>	



	<div class="rightside">
		
	

		<?php 
			if (isset($file_uploaded)) {
				echo '<center><h3>Uploaded File</h3></center><br>';
				echo '<img src="' . $upload_to . $file_name . '" style="height:300px">';
			}

		 ?>

	</div>

</div>










<! –– link for footer  ––>

<footer>
<?php require_once("inc/Footer.php");?>
</footer>




<script src="js/main.js"></script>

	
</body>
</html>


