<?php

include("../connection/dbconn.php");
session_start();
if(isset($_SESSION['user_id']))
 {
	 
	 ?>
 <script>

 window.open("../index.php ","_self");
 </script>
 <?php
 die();
 }

$a="{$_POST['id']}";
$b="{$_POST['password']}";

$query="SELECT * FROM faculty WHERE faculty_id='$a' AND faculty_pass='$b'";

$run=mysqli_query($con,$query);


  
$check=mysqli_num_rows($run);
if($check==1)
{
	$row=mysqli_fetch_assoc($run);
	

	if($row['post']=="hod")
	{
		$c="hod";
		$_SESSION['user_id']=$a;
		$_SESSION['user_type']=$c;
		?><script>
		window.open("hod_home.php","_self");
		</script>
		<?php
		
		
	}
	if($row['post']=="staff")
	{
		$c="staff";
		$_SESSION['user_id']= $a;
		$_SESSION['user_type']=$c;
		?><script>
		window.open("staff_home.php","_self");
		</script>
		<?php
		
	}	
}

else
{
	?><script>
	    window.alert("login failed");    
		window.open("../index.php","_self");
		</script>
		<?php
}


    

?>