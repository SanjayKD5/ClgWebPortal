<?php
include("../connection/dbconn.php");
include("templetes/check.php");
$id=$_GET['id'];
$query="DELETE FROM `photo` WHERE pid='$id'";
if($run=mysqli_query($con,$query))
{
	?><script>
	window.alert("deleted successfully");
	window.open("photo.php","_self");
	</script>
	<?php
}
else
{
	?><script>
	window.alert("deleted failed");
	window.open("photo.php","_self");
	</script>
	<?php
}

?>