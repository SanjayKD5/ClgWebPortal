<?php
include("templetes/admin_header.php");
include("templetes/check.php");
include("../connection/dbconn.php");

$status="pending";
				$post="hod";
       			 $query="select * from faculty where status='$status' and post='$post'";
			      $run=mysqli_query($con,$query);
				  $check=mysqli_num_rows($run);
$status1="unverified";
				 $query1="select * from thought where status='$status1'";
			      $run1=mysqli_query($con,$query1);
				  $check1=mysqli_num_rows($run1);
				  $check3=$check+$check1;  
				  
				  
				  if($check3==0)
				  {
					  ?>
	<script>
	window.alert("nothing to approve");
	window.open("admin_home.php","_self");
	</script>
	<?php
					  die();
				  }
?>
<div class="row" id="row1">
			  
	  <div class="col-md-7" >
			       
		 <div class="panel panel-primary ">
			<div class="panel-heading"><h4><center>Hod Ids<center></h4> </div>
            <div class="panel-body">
			<?php
                
				  if($check==0)
				  {
					  
				  }
				  else{
					  
					  ?>
					  <table class="table" >
					  <tr>
					  <th>Name </th>
					  <th>Branch </th>
					  </tr>  
					  <?php
					 while($row=mysqli_fetch_assoc($run))
					 {
						 ?>
						 <tr>
						 <td><?php echo $row['faculty_name'];?></td>
						 <td><?php echo $row['faculty_department'];?></td>
						 <td><a href="searchfaculty.php?id=<?php echo $row['faculty_id'];?>&type=app" > More details</a></td>
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
	 <div class="col-md-5" >
			       
		 <div class="panel panel-primary ">
			<div class="panel-heading"><h4><center>Thoughts<center></h4> </div>
            <div class="panel-body">
				<?php
                
				  if($check1==0)
				  {
					  
				  }
				  else{
					  
					  ?>
					  <table class="table" style="display:block;overflow:auto;height:35%" >
					  <tr>
					  <th>Thoght</th>
					  <th> </th>
					  </tr>  
					  <?php
					 while($row1=mysqli_fetch_assoc($run1))
					 {
						 ?>
						 
						 <tr>
						 <td><?php echo $row1['sentence'];?></td>
						 <td><a class="btn btn-primary" href="th_up.php?id=<?php echo $row1['tid']; ?>">Approve</a></td>
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



