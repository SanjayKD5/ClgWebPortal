<?php
include("templets/check.php");
include("../connection/dbconn.php");

$s1=$_POST['p1'];
$s2=$_POST['p2'];
$res=$_POST['res'];
$id=$_SESSION['user_id'];
$query="select * from student where user_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$year=$row['user_year'];
$branch=$row['user_branch'];
$year1="";
if($year=="first")
{
	$year1="second";
}
if($year=="second")
{
	$year1="third";
}
if($year=="third")
{
	$year1="xstudent";
}

$status="verified";
$query2="UPDATE `student` SET `status`='$status',`user_year`='$year1' where user_id='$id'";
$run2=mysqli_query($con,$query2);

$query1="INSERT INTO `exdata`(`st_id`, `year`,`sem1`,`sem2`,`result`,`branch`) VALUES('$id','$year','$s1','$s2','$res','$branch')";

if($run1=mysqli_query($con,$query1))
{
	?><script>
	window.alert("profile updated successfully");
	window.open("home.php","_self");
	</script>
	
	<?php
}


?>