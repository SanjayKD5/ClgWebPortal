<?php
include("../connection/dbconn.php");
include("templetes/hod_check.php");

$user=$_GET['user'];
if($user=="faculty")
{
	$opp=$_GET['opp'];
if($opp=="app")
{
$id=$_GET['id'];
$status="verified";
$query="UPDATE `faculty` SET `status`='$status' where faculty_id='$id'";
if($run=mysqli_query($con,$query))
{
	?>
	<script>
	window.alert("Approved succesfully");
	window.open("happrovesec.php","_self");
	</script>
	<?php
	
}
else
{
    ?>
	<script>
	window.alert("something went wrong");
	window.open("happrovesec.php","_self");
	</script>
	<?php	
}

	
}
else
{
	$id=$_GET['id'];
$status="unverified";
$query="UPDATE `faculty` SET `status`='$status' where faculty_id='$id'";
if($run=mysqli_query($con,$query))
{
	?>
	<script>
	window.alert("decline succesfully");
	window.open("happrovesec.php","_self");
	</script>
	<?php
	
}
else
{
    ?>
	<script>
	window.alert("something went wrong");
	window.open("happrovesec.php","_self");
	</script>
	<?php	
}
	
}
}
//student
else
{
	$opp=$_GET['opp'];
	if($opp=="app")
{
	$id=$_GET['id'];
$status="verified";
$query="UPDATE `student` SET `status`='$status' where user_id='$id'";
if($run=mysqli_query($con,$query))
{
	?>
	<script>
	window.alert("Approved succesfully");
	window.open("happrovesec.php","_self");
	</script>
	<?php
	
}
else
{
    ?>
	<script>
	window.alert("something went wrong");
	window.open("happrovesec.php","_self");
	</script>
	<?php	
}

	
}
else
{
	$id=$_GET['id'];
$status="unverified";
$query="UPDATE `student` SET `status`='$status' where user_id='$id'";
if($run=mysqli_query($con,$query))
{
	?>
	<script>
	window.alert("decline succesfully");
	window.open("happrovesec.php","_self");
	</script>
	<?php
	
}
else
{
    ?>
	<script>
	window.alert("something went wrong");
	window.open("happrovesec.php","_self");
	</script>
	<?php	
}
	
}
	
}
?>