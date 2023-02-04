<?php
include("templetes/hod_header.php");
include("templetes/hod_check.php");
include("templetes/hod_check1.php");
include("../connection/dbconn.php");

$status="pending";
$post="staff";
$fid=$_SESSION['user_id'];
$query9="select * from faculty where faculty_id='$fid'";
$run9=mysqli_query($con,$query9);
$row9=mysqli_fetch_assoc($run9);
$branch=$row9['faculty_department'];				
       			 $query="select * from student where status='$status' and user_branch='$branch'";
			      $run=mysqli_query($con,$query);
				  $check=mysqli_num_rows($run);

				 $query1="select * from faculty where status='$status' and post='$post' and faculty_department='$branch'";
			      $run1=mysqli_query($con,$query1);
				  $check1=mysqli_num_rows($run1);
				  $check3=$check+$check1;  
				  
				  
				  if($check3==0)
				  {
					  ?>
	<script>
	window.alert("nothing to approve");
	window.open("hod_home.php","_self");
	</script>
	<?php
					  die();
				  }
?>
<div class="row" id="row1">
			  
	  <div class="col-md-6" >
			       
		 <div class="panel panel-primary ">
			<div class="panel-heading"><h4><center>Student Ids<center></h4> </div>
            <div class="panel-body">
			<?php
                
				  if($check==0)
				  {
					  
				  }
				  else{
					  
					  ?>
					  <table class="table" style="display:block;overflow:auto;height:35%" >
					  <tr>
					  <th>Name </th>
					  <th>Branch </th>
					  </tr>  
					  <?php
					 while($row=mysqli_fetch_assoc($run))
					 {
						 ?>
						 <tr>
						 <td><?php echo $row['user_name'];?></td>
						 <td><?php echo $row['user_id'];?></td>
						 <td><a href="userdetails.php?id=<?php echo $row['user_id'];?>&type=app&user=student" > More details</a></td>
						 </tr>
						 
					<?php }
		
					  ?>
					  
					  </table>
					  <?php
				  }
			
			
			
			?>
			</div>
	     </div>
	 </div>
	 <div class="col-md-6" >
			       
		 <div class="panel panel-primary ">
			<div class="panel-heading"><h4><center>Staff<center></h4> </div>
            <div class="panel-body">
				<?php
                
				  if($check1==0)
				  {
					  
				  }
				  else{
					  
					  ?>
					  <table class="table" style="display:block;overflow:auto;height:35%" >
					  <tr>
					  <th>Name</th>
					  <th> ID</th>
					  </tr>  
					  <?php
					 while($row1=mysqli_fetch_assoc($run1))
					 {
						 ?>
						 
						 <tr>
						 <td><?php echo $row1['faculty_name'];?></td>
						 <td><?php echo $row1['faculty_id'];?></td>
						 <td><a  href="userdetails.php?id=<?php echo $row1['faculty_id']; ?>&type=app&user=faculty">More details</a></td>
						 </tr>
						 
					<?php }
		
					  ?>
					  
					  </table>
					  <?php
				  }
			
			
			
			?>
			</div>
	     </div>
	 </div>
	 
</div>




