<?php
include("../connection/dbconn.php");


$sent=$_POST['sent'];
$wby=$_POST['wby'];
$status="unverified";
$query="INSERT INTO `thought`( `sentence`, `written_by`,`status`) VALUES ('$sent','$wby','$status')";
if($run=mysqli_query($con,$query))
{
	?>
	<script>
	window.alert("update successfully");
	window.open("thought.php","_self");
	</script>
	<?php
}

else
{
	?>
	<script>
	window.alert("something went wrong please try again");
	window.open("thought.php","_self");
	</script>
	<?php
}


?>