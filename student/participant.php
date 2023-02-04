<?php
include("templets/check.php");
include("templets/check1.php");
include("../connection/dbconn.php");

$nid=$_GET['id'];
$type=$_GET['type'];
$sid=$_SESSION['user_id'];
$query2="SELECT * FROM `participants` WHERE  stud_id='$sid' and notice_id='$nid'";
$run2=mysqli_query($con,$query2);
$check=mysqli_num_rows($run2);
if($type=="event")
{
   if($check>0)
  {
	?><script>
	  window.alert("you are already enroll");
	  window.open("event.php","_self");
	</script>
	
	<?php
    }
  else{

  $query="INSERT INTO `participants`(`stud_id`,`notice_id`) VALUES ('$sid','$nid')";
  if($run=mysqli_query($con,$query))
    {
		$a=6;
		include("parti_notification.php");
	?><script>
	  window.alert("you are Enroll successfully");
	 window.open("event.php","_self");
	</script>
	
	<?php
   }
   else
   {
	?>
	<script>
	  window.alert("you are Enroll failed");
	  window.open("event.php","_self");
	</script>
	<?php
   }}
}
else{
	if($check>0)
{
	?><script>
	  window.alert("you are already enroll");
	  window.open("notices.php","_self");
	</script>
	
	<?php
}
else{

$query="INSERT INTO `participants`(`stud_id`,`notice_id`) VALUES ('$sid','$nid')";
if($run=mysqli_query($con,$query))
{
	$a=6;
	include("parti_notification.php");
	?><script>
	  window.alert("you are Enroll successfully");
	 window.open("notices.php","_self");
	</script>
	
	<?php
}
else
{
	?>
	<script>
	  window.alert("you are Enroll failed");
	  window.open("notices.php","_self");
	</script>
	<?php
}}
}
?>