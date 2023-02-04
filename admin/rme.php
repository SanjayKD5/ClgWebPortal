<?php
include("templetes/check.php");
include("../connection/dbconn.php");
//deleting by branch
if(isset($_POST['branch']))
{
	$branch=$_POST['branch1'];
	$query="DELETE FROM `student` WHERE user_branch='$branch'";
	if($run=mysqli_query($con,$query))
	{
		
		if(mysqli_affected_rows($con)==0)
       {
		?>
	<script>
	window.alert("sorry there is no id with this branch");
	window.open("removemultiple.php","_self");
	</script>
<?php
        }
       else
	   {
		?>
	<script>
	window.alert("deleted successfully");
	window.open("removemultiple.php","_self");
	</script>
<?php
        }

    }
	else
{
	?>
	<script>
	window.alert("deleted failed");
	window.open("removemultiple.php","_self");
	</script>
<?php 
}
?>
<?php
}

//deleting by year
if(isset($_POST['year1']))
{
	$year=$_POST['year'];
	$query="DELETE FROM `student` WHERE user_year='$year'";
	if($run=mysqli_query($con,$query))
	{
		
		if(mysqli_affected_rows($con)==0)
       {
		?>
	<script>
	window.alert("sorry there is no id left with this year");
	window.open("removemultiple.php","_self");
	</script>
<?php
        }
       else
	   {
		?>
	<script>
	window.alert("deleted successfully");
	window.open("removemultiple.php","_self");
	</script>
<?php
        }

    }
	else
{
	?>
	<script>
	window.alert("deleted failed");
	window.open("removemultiple.php","_self");
	</script>
<?php 
}
?>
<?php 
}

//faculty section deleted by department

if(isset($_POST['department']))
{
	$branch=$_POST['branch1'];
	$query="DELETE FROM `faculty` WHERE faculty_department='$branch'";
	if($run=mysqli_query($con,$query))
	{
		
		if(mysqli_affected_rows($con)==0)
       {
		?>
	<script>
	window.alert("sorry there is no id with this department");
	window.open("removemultiple1.php","_self");
	</script>
<?php
        }
       else
	   {
		?>
	<script>
	window.alert("deleted successfully");
	window.open("removemultiple1.php","_self");
	</script>
<?php
        }

    }
	else
{
	?>
	<script>
	window.alert("deleted failed");
	window.open("removemultiple1.php","_self");
	</script>
<?php 
}
?>
<?php
}

//deleting by year
if(isset($_POST['post']))
{
	$post=$_POST['post1'];
	$query="DELETE FROM `faculty` WHERE post='$post'";
	if($run=mysqli_query($con,$query))
	{
		
		if(mysqli_affected_rows($con)==0)
       {
		?>
	<script>
	window.alert("sorry there is no id left with this year");
	window.open("removemultiple1.php","_self");
	</script>
<?php
        }
       else
	   {
		?>
	<script>
	window.alert("deleted successfully");
	window.open("removemultiple1.php","_self");
	</script>
<?php
        }

    }
	else
{
	?>
	<script>
	window.alert("deleted failed");
	window.open("removemultiple1.php","_self");
	</script>
<?php 
}
?>
<?php 
}


?>

