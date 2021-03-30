<?php 

session_start();

require_once('inc/connection.php');

		

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/Admin.css">


	<link rel="stylesheet" type="text/css" href="css/tables.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

	<! –– support for responsive page ––>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<! –– Google FOnt Link ––>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@800&family=Russo+One&display=swap" rel="stylesheet">

	<title>New Nile </title>


<!-- for datatables -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  


           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- /// -->


</head>



<body>

	<! –– link for header  ––>

<header>
<?php require_once("inc/HeaderLogin.php");?>
</header>




<div class="top">
<!-- <article class="stage"></article> -->

	<div class="username" style="background-color:white; ">
	<h1 style="text-transform: uppercase;"> user Name &nbsp&nbsp</h1> <br><br>
	</div>


<article class="stage"></article>


<div class="body">
	<div class="sidebar">
		
		<center><h1>New Nile Products</h1></center>

	
		<ul>
			

		<li  ID="1" class="active "  onclick="mokada(1);">Summary</li>

		<li  ID="1" class="active"  onclick="mokada(2);">Employees Accounts</li>
		
		<li  ID="1" class="active"  onclick="mokada(3);">User Accounts</li>
		
		<li  ID="1" class="active"  onclick="mokada(4);">Products</li>

		<li  ID="1" class="active"  onclick="mokada(5);">Orders</li>
		
		<li  ID="1" class="active"  onclick="mokada(6);">Inbox</li>

		<li  ID="1" class="active"  onclick="mokada(7);">Other Messages</li>



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
		
			<div class="EditorAcc">
				

				

					<?php $results = mysqli_query($connection, "SELECT `id`,concat(`fname`,' ', `lname`) as Name, `company`,`city`,  `PhoneNumber`from user Where `user`='manager'  ORDER by reg_date DESC;"); ?>


				<div class="container">  
					 <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr> 
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($results))  
                          {  

                             $student_id=$row['id'];

                              echo '  
                               <tr>  
                                    <td>'.$row["Name"].'</td>  
                                    <td>'.$row["company"].'</td>  
                                    <td>'.$row["PhoneNumber"].'</td>  
                                    

                                    <td><a class="add" title="Add" data-toggle="tooltip" href="add.php?id='.$row['id'] .'"><i class="fa fa-user-plus"></i></a>
                                    <a class="edit" title="Edit" data-toggle="tooltip" href="add.php?id=yohan"  ><i class="fa fa-pencil"></i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip" id='.$row['id'] .'><i class="fa fa-trash-o"></i></a>
                                </td>
                               </tr>  
                               ';  
                           
                              
                          }  
                          ?>  
                     </table>  
                </div>  
            </div>








			</div>

		</div>



		<div  id="body3" class="hidden">
		
			<div class="users">


				<!-- SELECT `id`,concat(`fname`," ", `lname`) as Name, `Email`, `Country`, `company`, `Address1`, `Address2`, `city`, `Province`, `PhoneNumber`, `ZipCode`from user -->
				


					<?php $results = mysqli_query($connection, "SELECT `id`,concat(`fname`,' ', `lname`) as Name, `company`,`city`,  `PhoneNumber`from user Where `user`='user' ORDER by reg_date DESC;"); ?>


<div class="container">  
					 <br />  
                <div class="table-responsive">  
                     <table id="user_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr> 
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($results))  
                          {  

                             $student_id=$row['id'];

                              echo '  
                               <tr>  
                                    <td>'.$row["Name"].'</td>  
                                    <td>'.$row["company"].'</td>  
                                    <td>'.$row["PhoneNumber"].'</td>  
                                    

                                    <td><a class="add" title="Add" data-toggle="tooltip" href="add.php?id='.$row['id'] .'"><i class="fa fa-user-plus"></i></a>
                                    <a class="edit" title="Edit" data-toggle="tooltip" href="add.php?id=yohan"  ><i class="fa fa-pencil"></i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip" id='.$row['id'] .'><i class="fa fa-trash-o"></i></a>
                                </td>
                               </tr>  
                               ';  
                           
                              
                          }  
                          ?>  
                     </table>  
                </div>  
            </div>




	</div>

		</div>


		<div  id="body4" class="hidden">
		
			<div class="messages">
				


			</div>

		</div>


		<div  id="body5" class="hidden">
		
			<div class="messages">
				


			</div>

		</div>



		<div  id="body6" class="hidden">
		
			<div class="messages">
				


			</div>

		</div>



		<div  id="body7" class="hidden">
		
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


 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>

  <script>  
 $(document).ready(function(){  
      $('#user_data').DataTable();  
 });  
 </script>

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


