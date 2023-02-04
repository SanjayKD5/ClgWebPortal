<?php 

include("templetes/hod_check.php");
include("../connection/dbconn.php");
//$app1=$app2=$app3=$app4=$app5=$app6=0;
$id=$_SESSION['user_id'];
$title=$_POST['title'];
$description=$_POST['description'];
$type=$_POST['type'];
$parti=$_POST['parti'];
$i=0;

$app1=empty($_POST['app1']) ? $i=$i+1:$_POST['app1'] ;
$app2=empty($_POST['app2']) ? $i=$i+1:$_POST['app2'] ;
$app3=empty($_POST['app3']) ? $i=$i+1:$_POST['app3'] ;
$app4=empty($_POST['app4']) ? $i=$i+1:$_POST['app4'] ;
$app5=empty($_POST['app5']) ? $i=$i+1:$_POST['app5'] ;
$app6=empty($_POST['app6']) ? $i=$i+1:$_POST['app6'] ;
$type=$_POST['type'];


$status="unverified";
$name=isset($_FILES['img']) ? $_FILES['img']['name'] : "";
$tempname=isset($_FILES['img']) ? $_FILES['img']['tmp_name'] : "";
move_uploaded_file($tempname,"notice_images/$name");
if($name!=""){
$url="../faculty/notice_images/$name" ;
$allowed = array('gif','jpg','pdf','jpeg');
$filename = $_FILES['img']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$ext=strtolower($ext);
if(!in_array($ext,$allowed)){
	?><script>
		 window.alert("you can upload only .jpg,.png,.gif or .pdf file only");
	  
	  window.open("hod_notice.php","_self");
	</script>
	<?php
    die();
}
}
else
{
	$url="";
}
$query1="select * from faculty where faculty_id='$id'";
$run1=mysqli_query($con,$query1);
$row21=mysqli_fetch_assoc($run1);
$branch=$row21['faculty_department'];
$state="approve by : ";
if($i==6)
{
	
	$status="verified";
	$state="displayed on noticeboard";
	
}

$query="INSERT INTO `noticeboard`(`title`, `description`, `image`, `url`, `uploaded_by`,`check`,branch,`app1`, `app2`, `app3`, `app4`, `app5`, 
`app6`, `type`, `status`, `state`, `participant`) VALUES ('$title','$description','$name','$url','$id','$i','$branch','$app1','$app2','$app3','$app4','$app5','$app6','$type','$status','$state','$parti')";

if($run=mysqli_query($con,$query))
{
	?><script>
	  window.alert("notice uploded successfully");
	  
	 window.open("hod_notice.php","_self");
	</script>
	<?php
	include("notice_notification.php");
}
else
{
	?><script>
		 window.alert("notice uploded failed");
	  
	   window.open("hod_notice.php","_self");
	</script>
	<?php
}



?>