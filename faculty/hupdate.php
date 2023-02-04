<?php
include("templetes/hod_check.php");
include("../connection/dbconn.php");

$id=$_SESSION['user_id'];
if(isset($_POST['detail']))
{
$name=mysqli_real_escape_string($con, $_POST['name']);
$chatid=$_POST['cid'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$pno=$_POST['pno'];
$add=$_POST['add'];
$age=$_POST['age'];

$imgname=$_FILES['img']['name'];
$tempname=$_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"../images/$imgname");
$status="pending";
$query="UPDATE `faculty` SET `faculty_name`='$name',`faculty_email`='$email',faculty_chatid='$chatid',
       `status`='$status',`faculty_pno`='$pno',`faculty_add`='$add',`faculty_age`='$age' WHERE faculty_id='$id'";
$query1="UPDATE `faculty` SET `faculty_image`='$imgname' where faculty_id='$id'";	   
 if($run=mysqli_query($con,$query))
 {
	 if($run1=mysqli_query($con,$query1))
	 {
 ?> <script>
 window.alert("information update succesfully");
 window.open("hprofile.php","_self");</script>
<?php
 }}
else{
	
	
	 ?><script>
 window.alert("information update failed");
 window.open("hprofile.php","_self");</script>
<?php
}
}



else
{   $id=$_SESSION['user_id'];
	$query="select * from faculty where faculty_id='$id'";
	$run=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($run);
	
	empty($_POST['pass']) ? $pass=$row['faculty_pass'] : $pass=$_POST['pass'];
	empty($_POST['pno']) ? $pno=$row['faculty_pno'] : $pno=$_POST['pno'];
	empty($_POST['address']) ? $add=$row['faculty_add'] : $add=$_POST['address'];
	empty($_POST['age']) ? $age=$row['faculty_age'] : $age=$_POST['age'];
	
		
	
	 $img=$_FILES['img']['name'];
$tempname=$_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"../images/$img");

if($img=="")
{$img=$row['faculty_image'];}
     
	 $query1="UPDATE `faculty` SET `faculty_pass`='$pass',`faculty_pno`='$pno',`faculty_age`='$age',`faculty_add`='$add',`faculty_image`='$img' WHERE faculty_id='$id'";
	 if($run1=mysqli_query($con,$query1))
	 {
		 ?>
		 <script>
		 window.alert("updated successfully");
		 window.open("hprofile.php","_self");
		 </script>
		 <?php
	 }
	 
	 else
	 {
		 ?><script>
		 window.alert("update fail");
		window.open("hprofile.php","_self");
		 </script>
		 <?php
	 }
}
?>