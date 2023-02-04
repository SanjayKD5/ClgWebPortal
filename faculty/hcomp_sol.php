<?php
include("../connection/dbconn.php");

$id=$_GET['id'];
$reply=$_POST['reply'];
$state="solved";



$noti="hod has replied to your complaint please check your complaint section";
$query2="select * from complaint where comp_id='$id'";
$run2=mysqli_query($con,$query2);
$row2=mysqli_fetch_assoc($run2);
$for=$row2['stud_id'];
$type="complaint";
$query3="INSERT INTO `notification`(`notification`, `type`,`for`) VALUES ('$noti','$type','$for')";


$query="UPDATE `complaint` SET `reply`='$reply',`state`='$state' where comp_id='$id'";
if($run=mysqli_query($con,$query))
{
	
	
	?>
	<script>
  window.open("hcomplaint.php","_self");
	</script>
	
	<?php
	$run3=mysqli_query($con,$query3);
}
else
{
	?>
	<script>
	window.alert("something went wrong");
  window.open("hcomplaint.php","_self");
	</script>
	
	<?php
}

?>