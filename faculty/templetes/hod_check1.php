<?php

include("../connection/dbconn.php");

$id=$_SESSION['user_id'];
$query="select * from faculty where faculty_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
if($row['status']=="unverified")
{
	?><script>
	window.alert("update profile first");
	window.open("hprofile.php","_self");
	</script>
	<?php
die();}
if($row['status']=="pending")
{
	?><script>
	window.alert("profile updation is in pending state try after some time");
	window.open("hod_home.php","_self");
	</script>
	<?php
die();}

?>

