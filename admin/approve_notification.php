<?php
if($action=="app")
{
$who=$st;
$sent=" has approved your notice";
$noti=$who.$sent;
$type1="notice";
$for=$row['uploaded_by'];
$query101="INSERT INTO `notification`(`notification`,`type`,`for1`)VALUES('$noti','$type1','$for')";
	$run101=mysqli_query($con,$query101);
}
else
{
	
$who=$st1;
$sent=" has decline your notice ";
$noti=$who.$sent;
$type1="notice";
$for=$row['uploaded_by'];
$query101="INSERT INTO `notification`(`notification`,`type`,`for1`)VALUES('$noti','$type1','$for')";
$run101=mysqli_query($con,$query101);
}

?>