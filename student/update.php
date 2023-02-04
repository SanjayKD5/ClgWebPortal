<?php
include("templets/check.php");
include("../connection/dbconn.php");


$id=$_SESSION['user_id'];
if(isset($_POST['detail']))
{
$name=mysqli_real_escape_string($con, $_POST['name']);
$eno=$_POST['eno'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$pno=$_POST['pno'];
$add=$_POST['add'];
$age=$_POST['age'];
$year=$_POST['year'];
$imgname=$_FILES['img']['name'];
$tempname=$_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"../images/$imgname");
$status="pending";
$query="UPDATE `student` SET `user_name`='$name',`user_eno`='$eno',`user_email`='$email',
       `status`='$status',`user_pno`='$pno',`user_add`='$add',`user_age`='$age',
	   `user_year`='$year' WHERE user_id='$id'";
$query1="UPDATE `student` SET `user_image`='$imgname' where user_id='$id'";	   
 if($run=mysqli_query($con,$query))
 {
	 if($run1=mysqli_query($con,$query1))
	 {
 ?> <script>
 window.alert("information update succesfully");
 window.open("profile.php","_self");</script>
<?php
 }}
else{
	
	 ?> <script>
 window.alert("information update failed");
 window.open("profile.php","_self");</script>
<?php
}
}





// proc_close_edit



else
{   $id=$_SESSION['user_id'];
	$query="select * from student where user_id='$id'";
	$run=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($run);
	
	empty($_POST['pass']) ? $pass=$row['user_pass'] : $pass=$_POST['pass'];
	empty($_POST['pno']) ? $pno=$row['user_pno'] : $pno=$_POST['pno'];
	empty($_POST['address']) ? $add=$row['user_add'] : $add=$_POST['address'];
	empty($_POST['year']) ? $year=$row['user_year'] : $year=$_POST['year'];
	empty($_POST['age']) ? $age=$row['user_age'] : $age=$_POST['age'];
	
		
	
	 $img=$_FILES['img']['name'];
$tempname=$_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"../images/$img");

if($img=="")
{$img=$row['user_image'];}
     
	 $query1="UPDATE `student` SET `user_pass`='$pass',`user_pno`='$pno',`user_add`='$add',`user_age`='$age',`user_year`='$year',`user_image`='$img' WHERE user_id='$id'";
	 if($run1=mysqli_query($con,$query1))
	 {
		 ?>
		 <script>
		 window.alert("updated successfully");
		 window.open("profile.php","_self");
		 </script>
		 <?php
	 }
	 
	 else
	 {
		 ?><script>
		 window.alert("update fail");
		 window.open("profile.php","_self");
		 </script>
		 <?php
	 }
}
?>