<?php
include("../connection/dbconn.php");
include("templetes/hod_check.php");

$notice=$_POST['schedule'];
$nid=$_GET['id'];
$query="SELECT * FROM `participants` WHERE notice_id='$nid'";
$run=mysqli_query($con,$query);
$noti="your schedule section has been updated";
$type="home";
while($row=mysqli_fetch_assoc($run))
{
$sid=$row['stud_id'];
$query101="INSERT INTO `notification`(`notification`,`type`,`for1`) VALUES ('$noti','$type','$sid')";
$run101=mysqli_query($con,$query101);

$query2="INSERT INTO `schedule`( `nid`,`st_id`,`notice`) VALUES ('$nid','$sid','$notice')";
if($run2=mysqli_query($con,$query2))
{
	$a=0;
}
else
{
	$a=1;
}
}
if($a==0)
{
?>
	<script>
	window.alert("send successfully");
	window.open("henroll.php","_self");
	</script>
	<?php	
}
else
{
?>
	<script>
	window.alert("send fail");
	window.open("henroll.php","_self");
	</script>
	<?php	
}


?>