<?php
include("templetes/staff_check.php");
include("templetes/staff_header.php");
include("../connection/dbconn.php");
?>
<div class="row"  id="row1">
 <div  class="col-md-5" >
			 <div class="panel panel-primary ">
                <div class="panel-heading"><center><h4>Check  Enroll Student</center></h4></div>
                <div class="panel-body">
				<form action="enroll.php" method="post">
				<table class="table" height="32%">
				<tr>
				<th>Enter The Id Of Notice</th>
				</tr>
				<tr>
				<td><input type="number" name="id"></td>
				</tr>
				<tr>
				<td><input type="submit" class="btn btn-primary" name="go" data-toggle="collapse" data-target="#enroll"></td>
				</tr>
				</table>
				</form>
				</div>
          </div>	  
	</div>
	<div class="col-md-7">
      <div class="panel panel-primary ">
                <div class="panel-heading"><center><h4> Enroll Student</center></h4></div>
                <div class="panel-body" id="enroll" class="collapse">
				    <?php 
					if(isset($_POST['go']))
					{
					$id=$_POST['id'];
					$query="SELECT * FROM `participants` WHERE notice_id='$id'";
					$run=mysqli_query($con,$query);
					$check=mysqli_num_rows($run);
					if($check==0)
					{
						?>
						<script>
						window.alert("no enroll yet ");
					//	window.open("staff_notice.php","_self");
						</script>
					<?php
					}
					else{
						?>
						<table class="table" width="100%" style="display:block;overflow:auto;height:32%">
						
						<?php
						while($row=mysqli_fetch_assoc($run))
						{
							$sid=$row['stud_id'];
							$query2="select * from student where user_id='$sid'";
							$run2=mysqli_query($con,$query2);
							$row2=mysqli_fetch_assoc($run2);
							?>
							
							<tr>
							<td><?php echo $row2['user_name'];?><td>
							<td><?php echo $row2['user_branch'];?><td>
							<td><?php echo $row2['user_year'];?>year<td>
							<td> <a href="student_detail.php?id=<?php echo $sid;?>" > more Details</a></td>
							</tr>
							
							
							<?php
							
							
							
						}
						?>
						<form action="schedule.php?id=<?php echo $id;?>" method="post">
						<tr >
						<td colspan="8"><textarea class="col-md-11" name="schedule" placeholder="any notice for enroll student"></textarea></td>
						</tr>
						<tr >
						<td ><button type="submit" class="bn btn-primary">Send</td>
						</tr>
						</table>
						</form>
					
						
				
					
				
	<?php		
					}
					}
					else{
						echo "enter notice id in the box";
					}
					?>
	</div>
    </div>
	</div>				
</div>
