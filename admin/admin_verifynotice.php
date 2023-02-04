<?php

include("templetes/check.php");
include("../connection/dbconn.php");

$action=$_GET['ap'];
$app=$_GET['chatid'];
$query21="select * from admin where admin_chatid='$app'";
	$run21=mysqli_query($con,$query21);
	$row21=mysqli_fetch_assoc($run21);
	
    $st=$row21['admin_name'];
if($action=="app")
{
	

	$id=$_GET['id'];
	$query="select * from noticeboard where notice_id='$id'";
	$run=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($run);
	$c=$row['check'];
	$c=$c+1;
	
	$status="verified";
	
	
	 
	$state=$row['state'];
	$state=$state.$st."," ;
	$a=0;
	    $query2="UPDATE `noticeboard` SET `check`='$c',`app1`='$a' WHERE notice_id='$id' and app1='$app'";	
		$query3="UPDATE `noticeboard` SET `check`='$c',`app2`='$a' WHERE notice_id='$id' and app2='$app'";	
		$query4="UPDATE `noticeboard` SET `check`='$c',`app3`='$a' WHERE notice_id='$id' and app3='$app'";
		$query5="UPDATE `noticeboard` SET `check`='$c',`app4`='$a' WHERE notice_id='$id' and app4='$app'";
    	$query6="UPDATE `noticeboard` SET `check`='$c',`app5`='$a' WHERE notice_id='$id' and app5='$app'";
		$query7="UPDATE `noticeboard` SET `check`='$c',`app6`='$a' WHERE notice_id='$id' and app6='$app'";	
		$query8="UPDATE `noticeboard` SET `state`='$state' WHERE notice_id='$id'";
		$run2=mysqli_query($con,$query2);
		$run3=mysqli_query($con,$query3);
		$run4=mysqli_query($con,$query4);
		$run5=mysqli_query($con,$query5);
		$run6=mysqli_query($con,$query6);
		$run7=mysqli_query($con,$query7);
		$run8=mysqli_query($con,$query8);
		include("approve_notification.php");
	
	if($c==6)
	{
		$i=6;
		$type=$row['type'];
		$branch=$row['branch'];
		include("notice_notification.php");
		$state=$state."and uploded to noticeboard";
		$query1="UPDATE `noticeboard` SET `status`='$status',`state`='$state' WHERE notice_id='$id'";
		
		$run1=mysqli_query($con,$query1);
		
	}
	
	
?>

	<script>
	window.alert("notice approved succesfully");
   window.open("admin_approved.php","_self");
	
	
	</script>
	
<?php
}
if($action=="dec")
{
	$id=$_GET['id'];
	$query="select * from noticeboard where notice_id='$id'";
	$run=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($run);
	

	$app=$_GET['chatid'];

	$status="verified";
	$a=0;
	$state="notice decline by".$st;
	$st1="admin";
	    $query2="UPDATE `noticeboard` SET `app1`='$a' WHERE notice_id='$id' and app1='$app'";	
		$query3="UPDATE `noticeboard` SET `app2`='$a' WHERE notice_id='$id' and app2='$app'";	
		$query4="UPDATE `noticeboard` SET `app3`='$a' WHERE notice_id='$id' and app3='$app'";
		$query5="UPDATE `noticeboard` SET `app4`='$a' WHERE notice_id='$id' and app4='$app'";
    	$query6="UPDATE `noticeboard` SET `app5`='$a' WHERE notice_id='$id' and app5='$app'";
		$query7="UPDATE `noticeboard` SET `app6`='$a' WHERE notice_id='$id' and app6='$app'";	
		$query8="UPDATE `noticeboard` SET `state`='$state' WHERE notice_id='$id'";
		$run2=mysqli_query($con,$query2);
		$run3=mysqli_query($con,$query3);
		$run4=mysqli_query($con,$query4);
		$run5=mysqli_query($con,$query5);
		$run6=mysqli_query($con,$query6);
		$run7=mysqli_query($con,$query7);
		$run8=mysqli_query($con,$query8);
		include("approve_notification.php");
		
	
?>
<script>
	window.alert("notice declined");
	window.open("admin_approved.php","_self");
	
	</script>
<?php
}
?>
