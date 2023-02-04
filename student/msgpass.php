<?php

include_once("templets/check.php");
include("../connection/dbconn.php");

$user="student";
$sender_id=$_SESSION['user_id'];
$receiver_id=$_GET['id'];
$message=$_POST['msg'];
$status="unread";
$name=isset($_FILES['multi']) ? $_FILES['multi']['name'] : "";
$tempname=isset($_FILES['multi']) ? $_FILES['multi']['tmp_name'] : "";
move_uploaded_file($tempname,"msg_media/$name");
if($name!=""){
$url="../student/msg_media/$name" ;
$allowed = array('gif','jpg','jpeg','mp4');
$filename = $_FILES['multi']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$ext=strtolower($ext);

if(!in_array($ext,$allowed)){
	?><script>
		 window.alert("you can upload only .jpg,.png,.gif  and .mp4  file only");
		 window.open("chh.php","_self");
	</script>
	<?php
	
    die();
}
else{
	$type="img";
	if($ext=="mp4")
	{
		$type="video";
	}
	
	$query2="INSERT INTO `chat`(`sender`,`reciver`,`type`,`img`,`url`,`user`) VALUES ('$sender_id','$receiver_id','$type','$name','$url','$user')";
	$run2=mysqli_query($con,$query2);
}
}
else
{
	$url="";
}

$type="msg";

$query="INSERT INTO `chat`(`sender`,`reciver`,`message`,`type`,`status`,`user`) VALUES ('$sender_id','$receiver_id','$message','$type','$status','$user')";
if($run=mysqli_query($con,$query))
{
	?>
	<script>
	window.alert("message send succesfully");
	 window.open("chh.php","_self");
	</script>
	<?php
}	
else
{
?>
	<script>
	window.alert("message sending failed");
	 window.open("chh.php","_self");
	</script>
	<?php
}
?>
