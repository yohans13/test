
<?php 

require_once('inc/connection.php');

if(isset($_POST['b1'])){

if(!isset($_GET['User'])){

	//header("location:SignIn.php?order='explore'");

	//header("location:upload.php");


$id= $_POST['id'];

echo $id;


	
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/explore.css">

	<! –– support for responsive page ––>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<! –– Google FOnt Link ––>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@800&family=Russo+One&display=swap" rel="stylesheet">

	<title>New Nile - Shop </title>
</head>



<body>

<!-- link for header  -->

<header>
<?php require_once("inc/HeaderLogin.php");?>
</header>


<!-- explore Body   -->


<div class="title"><center><h1>New Nile Products Shop</h1></center></div>

<div class="main">
		
		<?php 
		$query="SELECT * FROM Item ORDER BY itemId ASC";
		$record=mysqli_query($connection,$query);

		if(mysqli_num_rows($record)>0){
				while($row=mysqli_fetch_array($record)){
					?>

					<div class="item">	
						<form action="explore.php?id=<?php echo $row['ItemId']; ?>" method="post">
							
							<div class="product">
									
								<h5 class="titleText"><?php echo $row['Name']; ?></h5><br>
								<img src="<?php echo $row['Image']; ?>" class="prodimg" alt="New Nile Products"><br>
								<p class="titleprice">Rs.<?php echo $row['Price']; ?>/=</p>
								<input type="number" name="b2" class="quantity" placeholder="Quantity"> &nbsp
								<input type="submit" name="submit"  value="Place Your Order">
								<input type="hidden" name="b3" value="<?php echo $row['ItemId']; ?>">

							</div>

						</form>


					</div>

			<?php	}

		}

		?>
	



</div>


<div>
	
<?php
	if(isset($_POST['submit'])){

	echo $_POST['b3'];

}?>
</div>





<script src="js/main.js"></script>

	
</body>
</html>


