<! DOCTYPE html>
<html>
     <head>
           <meta name="viewport" content=" width:device-width, initial-scale=1.0">
			 <meta charset="utf-8">
		           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
                   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
                    <link href="../style/design.css" rel="stylesheet" type="text/css">
			
	

     </head>
     <body style="background:lightblue;">
	      <div id="div1">
		  
             <div class="container-fluid " id="div2"   >
			     <h1 id="head" align="center"  >ADMIN SECTION </h1>
		   
		   
		     </div>
		   
		     <div style="padding:0;margin:0 auto" >
                 <ul id="ul"  class="nav nav-tabs " >
				 	<li> <a href="admin_home.php" class="glyphicon glyphicon-home " style="float:right;padding-top:20px"></a></li>
                    
			         <li><a href="student.php"><h4>STUDENT</h4></a></li>
			         <li><a  href="faculty.php"><h4>FACULTY</h4> </a></li>
					 <?php
					
					 include("../connection/dbconn.php");
                      $status1212="pending";
				      $post="hod";
       			      $query1212="select * from faculty where status='$status1212' and post='$post'";
			          $run1212=mysqli_query($con,$query1212);
				       $check1212=mysqli_num_rows($run1212);
                       $status1213="unverified";
				      $query1213="select * from thought where status='$status1213'";
			         $run1213=mysqli_query($con,$query1213);
				      $check1213=mysqli_num_rows($run1213);
					  $check3=$check1212+$check1213;
					  ?>
					  <li><a href="approve.php"><h4>APPROVE <span class="badge"><?php echo $check3;?> </span></h4></a></li>
					 <li><a href="admin_notices.php"><h4>NOTICES</h4> </a></li>
					 
					 
					 <?php
					 $receiver="admin";
                     $state="unsolved";
                     $queryfc="SELECT * FROM complaint WHERE receiver='$receiver' and state='$state'";
                     $runfc=mysqli_query($con,$queryfc);
					 $checkfc=mysqli_num_rows($runfc);
					 ?>
					 
					 
				     <li><a href="complaint.php"><h4>COMPLAINT  <span class="badge"><?php echo $checkfc;?></span></h4> </a></li>
					 <li><a href="achh.php"> <h4>CHAT</h4> </a></li>
					 <li><a href="static.php"> <h4>OTHER</h4> </a></li>
					 <li><a  href="../logout.php"><h4>LOGOUT </h4>     </a></li>
					 
				
				     
                 
				 
		   
		     </div>
		  </div>
		   <div class="container" >
       <div id="div-m">
           <marquee><h4>THIS PROJECT DEALS WITH THE INFRASTRUCTURE OF COLLEGE</h4></marquee>
       </div>