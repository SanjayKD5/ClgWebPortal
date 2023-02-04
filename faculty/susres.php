<?php
include("templetes/hod_check.php");
include("templetes/hod_header.php");
include("../connection/dbconn.php");

$id=$_GET['id'];
$op=$_GET['op'];
if($op=="sus")
{
	$status="suspend";
	$post=$_GET['post'];
	
		$query=" update student set status='$status' where user_id='$id'";
		$run=mysqli_query($con,$query);
		?>
						<script>
						window.alert(" suspended successfully ");
						window.open("suspend.php","_self");
					</script>
					<?php
		
	
	
}
else
{
	$status="verified";
	$post=$_GET['post'];
	
		$query=" update student set status='$status' where user_id='$id'";
		$run=mysqli_query($con,$query);
		?>
						<script>
						window.alert(" resume successfully ");
					window.open("resume.php","_self");
					</script>
					<?php
		
	
	
}

?>