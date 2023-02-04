<?php
include("templetes/check.php");
include("templetes/admin_header.php");
include("../connection/dbconn.php");
if(isset($_POST['student']))
{
$branch=$_POST['branch'];
$year=$_POST['year'];
$status="verified";

$query="select * from student where user_branch='$branch' and user_year='$year' and status='$status'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
if($check==0)
{
	?><script>
	window.alert("currently no student have such branch and year");
	window.open("student.php","_self");
	</script>
	<?php
}



?>
<div class="row" id="row1">
   <div class="col-md-11">
       <div class="panel panel-primary">
	       <div class="panel-heading"><center><h4>Student</center></h4></div>
		   <div class="panel-body">
		   <table class="table">
		   <tr>
		   <th>Name</th>
		   <th>ID</th>
		   <th></th>
		   </tr>
		   
		   <?php
		   while($row=mysqli_fetch_assoc($run))
		   {
			  ?> 
			   <tr>
			   <td><?php echo $row['user_name']?></td>
			   <td><?php echo $row['user_id']?></td>
			   <td><a href="searchstudent.php?id=<?php echo $row['user_id'];?>" >more details</a></td>
			   </tr>
			   
		  <?php }?>
		  
		   </table>
		     </div> 
		</div>
	  </div>
 </div>
<?php
}
else{
	
$branch=$_POST['department'];

$status="verified";

$query="select * from faculty where faculty_department='$branch' and status='$status'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
if($check==0)
{
	?><script>
	window.alert("currently there is no faculty in this department");
	window.open("faculty.php","_self");
	</script>
	<?php
}



?>
<div class="row" id="row1">
   <div class="col-md-11">
       <div class="panel panel-primary">
	       <div class="panel-heading"><center><h4>faculty</center></h4></div>
		   <div class="panel-body">
		   <table class="table">
		   <tr>
		   <th>Name</th>
		   <th>Post</th>
		   <th></th>
		   </tr>
		   
		   <?php
		   while($row=mysqli_fetch_assoc($run))
		   {
			  ?> 
			   <tr>
			   <td><?php echo $row['faculty_name']?></td>
			   <td><?php echo $row['post']?></td>
			   <td><a href="searchfaculty.php?id=<?php echo $row['faculty_id'];?>&type=not" >more details</a></td>
			   </tr>
			   
		  <?php }?>
		  
		   </table>
		     </div> 
		</div>
	  </div>
 </div>	
 <?php
}
?>