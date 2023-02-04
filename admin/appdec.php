<?php
include("../connection/dbconn.php");
include("templetes/check.php");
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
	window.open("approve.php","_self");
	</script>
	<?php
	
}
else
{
    ?>
	<script>
	window.alert("something went wrong");
	window.open("approve.php","_self");
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
	window.open("approve.php","_self");
	</script>
	<?php
	
}
else
{
    ?>
	<script>
	window.alert("something went wrong");
	window.open("approve.php","_self");
	</script>
	<?php	
}
	
}
?>