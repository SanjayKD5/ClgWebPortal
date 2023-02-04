<?php
include("../connection/dbconn.php");
include("templets/check.php");
include("templets/check1.php");
$id=$_GET['id'];
$query="DELETE FROM complaint WHERE comp_id='$id'";
if($run=mysqli_query($con,$query))
{
	?><script>
	window.alert("notice deleted successfully");
	window.open("your_complaint.php","_self");
	</script><?php
	
}


?>