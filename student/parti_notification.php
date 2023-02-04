<?php 
if($a==6)
{
$type1="notices";
$noti="someone enrolls to your uploaded notices";
$query111="select * from noticeboard where notice_id='$nid'";
	$run111=mysqli_query($con,$query111);
	$row111=mysqli_fetch_assoc($run111);
$for=$row111['uploaded_by'];
$query101="INSERT INTO `notification`(`notification`,`type`,`for1`) VALUES ('$noti','$type1','$for')";
$run101=mysqli_query($con,$query101);

}

?>