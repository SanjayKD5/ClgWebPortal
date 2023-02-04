<?php
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
 

include("../connection/dbconn.php");

$a="{$_POST['id']}";
$b="{$_POST['password']}";

$query="SELECT * FROM student WHERE user_id='$a' AND user_pass='$b'";

$run=mysqli_query($con,$query);
  
$check=mysqli_num_rows($run);
if($check==1)
{
$c="student";
	$_SESSION['user_id']= $a ;
	$_SESSION['user_type']=$c;
	?>
 <script>

 window.open("home.php ","_self");
 </script>
 <?php
	
}


else
{
 
?>
 <script>
 window.alert("login failed");
 window.open("../index.php ","_self")
 </script>
 <?php
 }

?>
 