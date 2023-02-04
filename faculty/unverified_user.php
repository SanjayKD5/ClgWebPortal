<?php
include("templetes/hod_check.php");
include("templetes/hod_check1.php");
include("../connection/dbconn.php");
include("templetes/hod_header.php");
$fid=$_SESSION['user_id'];
$query9="select * from faculty where faculty_id='$fid'";
$run9=mysqli_query($con,$query9);
$row9=mysqli_fetch_assoc($run9);
$branch=$row9['faculty_department'];
$status="unverified"
?>
<div class="row" id="row1">
     <div class="col-md-6">
	    <div class="panel panel-primary">
		   <div class="panel-heading"><center><h4>Unverified Student</h4></center></div>
		   <div class="panel-body">
	   <?php
		   
			$query="select * from student where user_branch='$branch' and status='$status'";
			$run=mysqli_query($con,$query);
			$check=mysqli_num_rows($run);
			if($check==0)
			{
				?><img src="../images/noone.jpg" width="100%" height="42%"><?php
			}
			else
			{
				
				?>

		   <table class="table" style="display:block;overflow:auto;height:40%">
		   <tr>
		   <th>Id</th>
		   <th>Password</th>
		   </tr>
		   
		   <?php 
		   while($row=mysqli_fetch_assoc($run))
		   {
		   ?>
		   <tr>
		   <td><?php echo $row['user_id'] ?></td>
		   <td><?php echo $row['user_pass'] ?></td>
		   </tr>
				<?php
			}}
		   
		   ?>
		   </table>
		   	
			  </div>
		</div> 
     </div>	
	 <div class="col-md-6">
	    <div class="panel panel-primary">
		   <div class="panel-heading"><center><h4>Unverified Staff</h4></center></div>
		   <div class="panel-body">
	   <?php
		   
			$query1="select * from faculty where faculty_department='$branch' and status='$status'";
			$run1=mysqli_query($con,$query1);
			$check1=mysqli_num_rows($run1);
			if($check1==0)
			{
			?><img src="../images/noone.jpg" width="100%" height="42%"><?php	
			}
			else
			{
				
				?>

		   <table class="table" style="display:block;overflow:auto;height:40%">
		   <tr>
		   <th>Id</th>
		   <th>Password</th>
		   </tr>
		   
		   <?php 
		   while($row1=mysqli_fetch_assoc($run1))
		   {
		   ?>
		   <tr>
		   <td><?php echo $row1['faculty_id'] ?></td>
		   <td><?php echo $row1['faculty_pass'] ?></td>
		   </tr>
				<?php
			}}
		   
		   ?>
		   </table>
		   	
			  </div>
		</div> 
     </div>	
 </div>	
			
		   
			 