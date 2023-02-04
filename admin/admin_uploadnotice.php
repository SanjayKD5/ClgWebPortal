<?php 

include("templetes/check.php");
include("../connection/dbconn.php");
$id=$_SESSION['user_id'];
$title=$_POST['title'];
$description=$_POST['description'];
$type=$_POST['for'];
$i=0;

$app1=empty($_POST['app1']) ? $i=$i+1:$_POST['app1'] ;
$app2=empty($_POST['app2']) ? $i=$i+1:$_POST['app2'] ;
$app3=empty($_POST['app3']) ? $i=$i+1:$_POST['app3'] ;
$app4=empty($_POST['app4']) ? $i=$i+1:$_POST['app4'] ;
$app5=empty($_POST['app5']) ? $i=$i+1:$_POST['app5'] ;
$app6=empty($_POST['app6']) ? $i=$i+1:$_POST['app6'] ;



$status="unverified";
$name=isset($_FILES['img']) ? $_FILES['img']['name'] : "";
$tempname=isset($_FILES['img']) ? $_FILES['img']['tmp_name'] : "";
move_uploaded_file($tempname,"images/$name");
if($name!=""){
$url="../admin/images/$name" ;
$allowed = array('gif','png','jpg','pdf');
$filename = $_FILES['img']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$ext=strtolower($ext);
if(!in_array($ext,$allowed) ) {
	?><script>
		 window.alert("you can upload only .jpg,.png,.gif or .pdf file only");
	  
	  window.open("admin_notices.php","_self");
	</script>
	<?php
    die();
}
}
else
{
	$url="";
}
$query1="select * from admin where admin_id='$id'";
$run1=mysqli_query($con,$query1);
$row=mysqli_fetch_assoc($run1);
$state="approve by : ";
if($i==6)
{
	
	$status="verified";
	$state="displayed on noticeboard";
	
}

$query="INSERT INTO `noticeboard`(`title`, `description`,`image`, `url`,`check`,`app1`, `app2`, `app3`, `app4`, `app5`, 
`app6`, `type`, `status`, `state`) VALUES ('$title','$description','$name','$url','$i','$app1','$app2','$app3','$app4','$app5','$app6','$type','$status','$state')";

if($run=mysqli_query($con,$query))
{
	?><script>
	  window.alert("notice uploded successfully");
	  
	   window.open("admin_notices.php","_self");
	</script>
	<?php
	include("notice_notification.php");
}
else
{
	?><script>
		 window.alert("notice uploded failed");
	  
	   window.open("admin_notices.php","_self");
	</script>
	<?php
}



?>