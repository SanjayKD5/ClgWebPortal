<?php
include("../connection/dbconn.php");
include("templetes/check.php");
if($action="del")
{
	$id=$_GET['id'];
$query="DELETE FROM `noticeboard` WHERE notice_id='$id'";

if($run=mysqli_query($con,$query))
{
	?><script>
	window.alert("notice deleted successfully");
	window.open("noticesuplodedbyadmin.php","_self");
	</script><?php
	
}
}

?>