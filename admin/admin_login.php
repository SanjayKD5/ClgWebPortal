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
$c="admin";

$query="SELECT * FROM admin WHERE admin_id='$a' AND admin_pass='$b'";

$run=mysqli_query($con,$query);
  
$check=mysqli_num_rows($run);
if($check==1)
{

	$_SESSION['user_id']= $a ;
	$_SESSION['user_type']=$c;
	?>
 <script>

 window.open("admin_home.php ","_self");
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
 