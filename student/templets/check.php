<?php
 session_start();
 if(!isset($_SESSION['user_id']))
 {
	 
	?> <script>
	window.alert("login first");
	window.open("../index.php","_self");
	</script>
 
 <?php
 die();
 }
 else
 {
	 $a="student";
	if($_SESSION['user_type']!=$a) 
	{
	?> <script>
	window.alert("login is not of student");
	window.open("../index.php","_self");
	</script>
 
 <?php
 
 die();
 }
 else{
	 
 }
 }
?>
