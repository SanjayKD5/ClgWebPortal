<?php
include("../connection/dbconn.php");
include("templets/check.php");
include("templets/check1.php");

$id=$_SESSION['user_id'];
$sub=$_POST['sub'];
$desc=$_POST['desc'];
$to=$_POST['to'];
$status="noticed recived";
$name=isset($_FILES['img']) ? $_FILES['img']['name'] : "";
$tempname=$_FILES['img']['tmp_name'];
$state="unsolved";
move_uploaded_file($tempname,"../images/$name");
$allowed = array('gif','jpg','jpeg');
$filename = $_FILES['img']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$ext=strtolower($ext);
if(!in_array($ext,$allowed)){
	?><script>
		 window.alert("you can upload only .jpg,.png,.gif or  file only");
	  
	  window.open("complaint.php","_self");
	</script>
	<?php
    die();
}

$query="INSERT INTO `complaint`(`st_id`, `sub`, `desc`, `receiver`,`status`,`img`,`state`) VALUES ('$id','$sub','$desc','$to','$status','$name','$state')";
if($run=mysqli_query($con,$query))
{
	?><script>
	window.alert("complaint has submited. please wait for the proper action you will be notify soon in your status filled of complaint");
	window.open("complaint.php","_self");
	</script>
	<?php
	
}
else
{
	
	?><script>
	window.alert("Due to some technical error complaint has not submited please try again");
	window.open("complaint.php","_self");
	</script>
	<?php
}


?>