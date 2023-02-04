<?php
include("../connection/dbconn.php");
if(isset($_POST['admin']))
{
$sent=$_POST['sent'];
$wby=$_POST['wby'];
$status="verified";
$noti="admin has uploaded new thought .";
$type="home";
$for="student";
$branch="all";
$id="admin";
$query101="INSERT INTO `notification`(`notification`,`type`,`branch`,`for1`,`by`) VALUES ('$noti','$type','$branch','$for','$id')";




$query="INSERT INTO `thought`( `sentence`, `written_by`, `status`) VALUES ('$sent','$wby','$status')";
if($run=mysqli_query($con,$query))
{
	?>
	<script>
	window.alert("update successfully");
	window.open("thought.php","_self");
	</script>
	<?php
	$run101=mysqli_query($con,$query101);
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
}
else
{
	$id=$_GET['id'];
	$status="verified";
	$query1="UPDATE `thought` SET `status`='$status' where tid='$id'";
	if($run1=mysqli_query($con,$query1))
{
	?>
	<script>
	window.alert("approve successfully");
	window.open("approve.php","_self");
	</script>
	<?php
}

else
{
	?>
	<script>
	window.alert("something went wrong please try again");
	window.open("approve.php","_self");
	</script>
	<?php
}
}

?>