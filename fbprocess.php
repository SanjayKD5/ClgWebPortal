<?php
include("connection/dbconn.php");
$id=$_POST['id'];
$pass=$_POST['pass'];
$query="select * from student where user_id='$id' and user_pass='$pass'";
$run=mysqli_query($con,$query);

$check=mysqli_num_rows($run);
if($check==0)
{
	?>
	<script>
	window.alert("id and password is miss match");
	window.open("feedback.php","_self");
	</script>
	<?php
}
else{
	
	$query3="select * from feedback where st_id='$id'";
	$run3=mysqli_query($con,$query3);
	$check3=mysqli_num_rows($run3);
	$row=mysqli_fetch_assoc($run);
	$status=$row['status'];
	if($check3==0 && $status=="verified")
	{
	
	
	$ans1=$_POST['ans1'];
	$ans2=$_POST['ans2'];
	$ans3=$_POST['ans3'];
	$ans4=$_POST['ans4'];
	$ans5=$_POST['ans5'];
	$ans6=$_POST['ans6'];
	$ans7=$_POST['ans7'];
	$ans8=$_POST['ans8'];
	$ans9=$_POST['ans9'];
	$ans10=$_POST['ans10'];
	
	empty($_POST['comment']) ? $comment="":$comment=$_POST['comment'] ;
	
	$query2="INSERT INTO `feedback`(`st_id`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`, `ans9`,`ans10`,`comment`) VALUES ('$id','$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9','$ans10','$comment')";
	if($run2=mysqli_query($con,$query2))
	{
	?>
	<script>
	window.alert("feedback updated");
  window.open("feedback.php","_self");
	</script>
	<?php	
	}
	else{
		?>
	<script>
	window.alert("plese try again");
	window.open("feedback.php","_self");
	</script>
	<?php
	}
}
else
{
	?>
	<script>
	window.alert("you have already uploaded feedback or you are a unverified user");
	window.open("feedback.php","_self");
	</script>
	<?php
}
}




?>