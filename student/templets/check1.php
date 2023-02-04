<?php

include("../connection/dbconn.php");

$id=$_SESSION['user_id'];
$query="select * from student where user_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
if($row['status']=="unverified")
{
	?><script>
	window.alert("update profile first");
	window.open("profile.php","_self");
	</script>
	<?php
die();}
if($row['status']=="pending")
{
	?><script>
	window.alert("profile updation is in pending state try after some time");
	window.open("home.php","_self");
	</script>
	<?php
die();}
if($row['status']=="update")
{
	?><script>
	window.alert("Session is over please update the form first");
	window.open("update_form.php","_self");
	</script>
	<?php
die();}
if($row['status']=="feedback")
{
	?><script>
	window.alert("Sessional is over please give the feedback first");
	window.open("sesfed.php","_self");
	</script>
	<?php
die();}

?>

