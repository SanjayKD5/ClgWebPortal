<?php
include("templetes/check.php");
include("../connection/dbconn.php");
$noti="admin has uploaded new photos in gallary check if you want.";
$type="home";
$for="student";
$branch="all";
$id="admin";
$query101="INSERT INTO `notification`(`notification`,`type`,`branch`,`for1`,`by`) VALUES ('$noti','$type','$branch','$for','$id')";
$total= count($_FILES["img"]['name']);
$c=0;
$d=$total;
while($total>0)
{
$name=$_FILES['img']['name'][$c];
$tempname=$_FILES['img']['tmp_name'][$c];
$allowed = array('gif','jpg','jpeg');
$filename = $_FILES['img']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$ext=strtolower($ext);
if(!in_array($ext,$allowed)){
	?><script>
		 window.alert("you can upload only .jpg,.png,.gif file only");
	  
	  window.open("photo.php","_self");
	</script>
	<?php
    die();
}

if(move_uploaded_file($tempname,"../photos/$name"))
{
	
	$c++;
}
$total--;
}
if($c==$d)
{
	$query="INSERT INTO `photo`(`image`) VALUES ('$name')";
$run=mysqli_query($con,$query);
	?>
	<script>
	window.alert("upload successfully");
	window.open("photo.php","_self");
	</script>
	<?php
	$run101=mysqli_query($con,$query101);
}

else{
	
	?>
	<script>
	window.alert("upload failed");
	window.open("photo.php","_self");
	</script>
	<?php
}



?>