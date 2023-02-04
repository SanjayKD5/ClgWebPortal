<?php
include("templetes/check.php");
include("../connection/dbconn.php");
$status="update";
$status1="verified";
$query="update student set status='$status' where status='$status1'";

if($run=mysqli_query($con,$query))
{
	?>
	<script>
	window.alert("year ended successfully");
	window.open("admin_home.php","_self");
	</script>
	
	<?php
}	
else{
	
	?>
	<script>
	window.alert("something went wrong");
	window.open("static.php","_self");
	</script>
	
	<?php
}
?>
