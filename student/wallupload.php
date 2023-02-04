<?php
include("templets/check.php");
include("templets/check1.php");
include("../connection/dbconn.php");

$title=$_POST['title'];
$imgname=$_FILES['file']['name'];
$tempname=$_FILES['file']['tmp_name'];
move_uploaded_file($tempname,"../images_wall/$imgname");
$status="unverified";
$type="wallmag";
$id=$_SESSION['user_id'];
$query1="select * from student where user_id='$id'";
$run1=mysqli_query($con,$query1);
$row1=mysqli_fetch_assoc($run1);
$branch=$row1['user_branch'];
$allowed = array('gif','jpg','jpeg');
$filename = $_FILES['img']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$ext=strtolower($ext);
if(!in_array($ext,$allowed)){
	?><script>
		 window.alert("you can upload only .jpg,.png,.gif  file only");
	  
	  window.open("wallmag.php","_self");
	</script>
	<?php
    die();
}
$check=5;
$query="INSERT INTO `noticeboard`(`title`,`image`, `branch`,`uploaded_by`,`check`,`type`,`status`)VALUES('$title','$imgname','$branch','$id','$check','$type','$status')";
if($run=mysqli_query($con,$query))
{
	?><script>
	window.alert("image upload successfully waiting for hod approval");
	window.open("wallmag.php","_self");
	</script><?php
}
else
{
	?><script>
	window.alert("image upload failed");
	window.open("wallmag.php","_self");
	</script><?php
}
?>