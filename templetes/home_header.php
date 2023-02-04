<! DOCTYPE html>

<?php
 session_start();
 if(isset($_SESSION['user_id']))
 {
	 $a=$_SESSION['user_type'];
	 
	 if($a=="admin")
	 {
	 
	?> <script>
	window.alert("you are already login ");
	window.open("admin/admin_home.php","_self");
	</script>
 
 <?php
	 }
	 if($a=="staff")
	 {
	 
	?> <script>
	window.alert("you are already login ");
	window.open("faculty/staff_home.php","_self");
	</script>
 
 <?php
	 }
	 if($a=="hod")
	 {
	 
	?> <script>
	window.alert("you are already login ");
	window.open("faculty/hod_home.php","_self");
	</script>
 
 <?php
	 }
	 if($a=="student")
	 {
	 
	?> <script>
	window.alert("you are already login");
	window.open("student/home.php","_self");
	</script>
 
 <?php
	 }
 }
?>

<html>
     <head>
           
            <meta name="viewport" content=" width:device-width, initial-scale=1.1">
			 <meta charset="utf-8">
			  <script src="home.js"></script>
		           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
                   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
                    <link href="style/design.css" rel="stylesheet" type="text/css">
			      
	

     </head>
     <body style="background:lightblue;">
	      <div id="div1">
		  
             <div class="container-fluid " id="div2"  >
			     <h1 id="head" align="center"  >COLLEGE WEB PORTAL</h1>
		   
		   
		     </div>
		   
		     <div style="padding:0;margin:0 auto" >
                 <ul id="ul"  class="nav nav-tabs " >
				     <li> <a href="index.php" class="glyphicon glyphicon-home " style="float:right;padding-top:20px"></a></li>
					 
                 </ul>
		   
		     </div>
		  </div>
		  
		  <div class="container" >
		  
		      <div id="div-m">
			        <marquee ><h4>THIS PROJECT DEALS WITH THE INFRASTRUCTURE OF COLLEGE</h4></marquee>
			  </div>