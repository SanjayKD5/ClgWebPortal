<?php
include("templets/check.php");
include("templets/check1.php");
include("../connection/dbconn.php");

$id=$_GET['id'];
$query="delete from noticeboard where notice_id='$id'";
if($run=mysqli_query($con,$query))
  {
	  ?><script>
	  window.alert("notice deleted successfully");
	  window.open("your_wallmag.php","_self");
	  </script><?php
	  
  }
  else
  {
	    {
	  ?><script>
	  window.alert("notice deleted failed");
	  window.open("your_wallmag.php","_self");
	  </script><?php
	  
  }
  }
?>