<?php
include("templetes/hod_check.php");
include("../connection/dbconn.php");
$status="feedback";
$year=$_POST['ay'];
$program=$_POST['pro'];
$semester=$_POST['sem'];
$date=$_POST['date'];
$fid=$_SESSION['user_id'];
			$query9="select * from faculty where faculty_id='$fid'";
			$run9=mysqli_query($con,$query9);
			$row9=mysqli_fetch_assoc($run9);
			$branch=$row9['faculty_department'];
$status1="verified";

$query="update student set status='$status' where status='$status1' and user_branch='$branch'";

if($run=mysqli_query($con,$query))
{
	$query1="INSERT INTO `sesfbd`(`year`, `program`, `sem`, `date`, `branch`) VALUES ('$year','$program','$semester','$date','$branch')";
    $run1=mysqli_query($con,$query1);
	?>
	<script>
  window.alert("feedback form is sended to student");
	window.open("static.php","_self");
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
