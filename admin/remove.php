<?php
include("templetes/check.php");
include("../connection/dbconn.php");


if(isset($_POST['student']))
{
$branch=$_POST['branch'];
$year=$_POST['year'];
$status="verified";

$query="SELECT * FROM `student` WHERE user_branch='$branch' and user_year='$year' and status='$status'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
if($check==0)
{
		?>
	<script>
	window.alert("there is no student in the selected branch and year  ");
	window.open("student.php","_self");
	</script>
<?php
}
else{
	include("templetes/admin_header.php")
		?>
		<div class="row" id="row1">
		   <div class="col-md-11">
		    <div class="panel panel-primary">
			  <div class="panel-heading"><center><h4>Remove Student</h4></center></div>
			  <div class="panel-body">
			     <table class="table" >
				    <tr>
					<th>Name</th>
					</tr>
					<?php
					while($row=mysqli_fetch_assoc($run))
					{
						?><tr>
						<td ><?php echo $row['user_name']?></td>
						<td><a href="#" class="btn btn-primary" >Delete <span class="glyphicon glyphicon-trash"></span></td>
					<?php
					}
					?>
				 </table>
			  </div>
			</div>
		   </div>
		</div>
	
<?php
}

}

if(isset($_POST['faculty']))
{


$branch=$_POST['branch'];
$status="verified";


$query="SELECT * FROM `faculty` WHERE faculty_department='$branch' and status='$status'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
if($check==0)
{
		?>
	<script>
	window.alert("there is no faculty in the selected branch   ");
	window.open("faculty.php","_self");
	</script>
<?php
}
else{
	include("templetes/admin_header.php")
		?>
		<div class="row" id="row1">
		   <div class="col-md-11">
		    <div class="panel panel-primary">
			  <div class="panel-heading"><center><h4>Remove Faculty</h4></center></div>
			  <div class="panel-body">
			     <table class="table" >
				    <tr>
					<th>Name</th>
					</tr>
					<?php
					while($row=mysqli_fetch_assoc($run))
					{
						?><tr>
						<td ><?php echo $row['faculty_name']?></td>
						<td><a href="#" class="btn btn-primary" >Delete <span class="glyphicon glyphicon-trash"></span></td>
					<?php
					}
					?>
				 </table>
			  </div>
			</div>
		   </div>
		</div>
	
<?php
}

}


?>