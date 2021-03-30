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

	<title>New Nile </title>



		<style >

	.show{
		display: block;
	}

	.hidden{
		display: none;
	}

	.main1{
		margin-left:20% ;
		float: left;
		border:1px solid white;
		width: 800px;
		height:400px;
		padding: 30px;
		
	}


		*{
			
			margin:  0 auto;
		}


	.gif{
		margin-top: 10px;
		margin-left: 10px;
		
	}

		.gif img{
			width: 100px;
		

		}


		span{
			color: white;
			
			text-align: center;
		
			
		}
		.tabs{
			background: lightgray;
			padding: 20px 10px;
		}

		.active{
		color: red;
		}


		.tabs li{
			list-style: none;
			display: inline;
			font-weight: bold;	
			padding: 16px 10px;
			
		}


		.tabs li:hover{
			list-style: none;
			display: inline;
			color: black;
			font-weight: bold;	
			background: gray;
			padding: 16px 10px;
		}


		#body1,#body2,#body3,#body4{
			padding: 10px;
			color: black;
			
		}



		body {

 		 margin: 0;
 		 width: 100%;


		}


		.stage {
 			 animation: animateBg 5s linear infinite;
  			/*background-image: linear-gradient(0deg,#cf5c5c,#c19b4a,#def2a0,#c6ee4a,#42eca6,#64b3d9,#208ea2,#498ada,#5b73df,#897ed3,#cf5c5c,#c19b4a);*/
   			 background-image: linear-gradient(0deg,gray,lightgray,gray,blue,lightblue);

  			background-size: 100% 1100%;
  			height: 4px;
  			width: 100%;
				}

		@keyframes animateBg {
  		0% { background-position: 0% 0%; }
  		100% { background-position: 0% 100%; }



  		.arrow{
  text-align:left;
  padding-left:17px;
}

.arrow:before{
  content:"→";
  position:absolute;
  color:#383736;
  left: 83%;
  opacity: 0;
  -webkit-transition: all 250ms cubic-bezier(0.680, -0.550, 0.265, 1.550); 
}

.arrow:hover:before{
  left:84%;
  opacity:1;
}

.arrow:hover {
  width:170px;
}
				}



			.foot{
				position: relative;
			}

	</style>




</head>



<body>

<! –– link for header  ––>

<header>
<?php require_once("inc/HeaderLogin.php");?>
</header>


<! –– User in Body   ––>



<div class="top">
<!-- <article class="stage"></article> -->

	<div class="username" style="background-color:white; ">
	<h1 style="text-transform: uppercase;"><?Php echo $Fname." ".$Lname; ?> &nbsp&nbsp</h1> <br><br>
	</div>


<article class="stage"></article>


<div class="body">
	<div class="sidebar">
		
		<center><h1>Welcome to New Nile Products</h1></center>

	
		<ul>
			

		<li  ID="1" class="active "  onclick="mokada(1);">Home</li>
		
		<li  ID="1" class="active"  onclick="mokada(2);">Change Details</li>
		
		<li  ID="1" class="active"  onclick="mokada(3);">My Orders</li>
		
		<li  ID="1" class="active"  onclick="mokada(4);">Messages</li>

		<ul>


	</div>

	<div class="rightside">
		
	

		<!--<img src="img/images/nile.jpg" alt="Nile"> -->

		<div  id="body1" class="show" >
	
		<div class="box">
			
		<div class="inbluebox">
			
		</div>

		<div class="inorangebox">
			
		</div>


		<div class="inpurplebox">
			
		</div>

	<!-- 	<div class="ingreenebox">
			
		</div>
 -->
		

		</div>
		
		
		</div>

		<div id="body2"  class="hidden">
		
			<div class="CDetails">
				


			</div>

		</div>


		<div  id="body3" class="hidden">
		
			<div class="myorder">
				


			</div>

		</div>


		<div  id="body4" class="hidden">
		
			<div class="messages">
				


			</div>

		</div>




	</div>

</div>


</div>

	</div>

	






</div>	


<! –– link for footer  ––>
<!-- <div class="foot">
<footer>
<?php //require_once("inc/UserFooter.php");?>
</footer>
</div> -->


<script src="js/main.js"></script>

<script>
	
	function mokada(number){
		console.log(number);
		document.getElementsByClassName("show")[0].classList.add("hidden");
		document.getElementsByClassName("show")[0].classList.remove("show");
		document.getElementById("body"+number).classList.add("show");
		document.getElementById("body"+number).classList.remove("hidden");

		document.getElementsByClassName("active")[0].classList.remove("active");
		
		document.getElementById(number).classList.add("active");


	}

</script>


	
</body>
</html>


