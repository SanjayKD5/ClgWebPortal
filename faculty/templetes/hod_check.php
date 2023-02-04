<?php

if (session_id() == "")
{
  session_start();
}

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
	 $a="hod";
	if($_SESSION['user_type']!=$a) 
	{
	?> <script>
	window.alert("login is not of hod");
	window.open("../index.php","_self");
	</script>
 
 <?php
 
 die();
 }
 }
?>