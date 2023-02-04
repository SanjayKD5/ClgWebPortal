<?php
include("templetes/hod_check.php");
include("templetes/hod_header.php");
?>
<div class="row" id="row1">
    <div  class="col-md-6">
		<div class="panel panel-primary ">
		    <div class="panel-heading"><center><h4>SUSPEND STUDENT</center></h4></div>
            <div class="panel-body">
			    <form method="post" action="suspend.php">
				   <table class="table " height="25%">
					 
					<tr>
					 <th> SELECT YEAR :-</th>
					 </tr>
					<tr>
					<td>
						<select  name="year">
						     <option value="first">FIRST </option>
							 <option value="second">SECOND</option>
							 <option value="third">THIRD</option>
						  
						</select>
						</td>
						</tr>
					
					
					
					 
					<tr>
					<td><input type="submit" class="btn btn-primary" name="go" ></td>
					 </tr>
					  
					</table>
				  </form>
		   </div>
		</div>
	</div>
		<div class="col-md-6">
			 <div class="panel panel-primary">
				   <div class="panel-primary">
					 <div class="panel-heading"><h4 align="center">USER</h4></div>
				        <div class="panel-body" id="user">
						    <?php 
							if(isset($_POST['year']))
					{
					
					
					$year=$_POST['year'];
					$status="verified";
					$fid=$_SESSION['user_id'];
			        $query9="select * from faculty where faculty_id='$fid'";
			        $run9=mysqli_query($con,$query9);
			        $row9=mysqli_fetch_assoc($run9);
			        $department=$row9['faculty_department'];
					
					$query="SELECT * FROM `student` where user_branch='$department' and user_year='$year' and status='$status'";
					$run=mysqli_query($con,$query);
					$check=mysqli_num_rows($run);
					if($check==0)
					{
						
					}
					else{
						
						?>
						<table class="table" width="100%" style="display:block;overflow:auto;height:25%" >
						<tr>
						<th>Name</th>
						</tr>
						<?php
						
						while($row=mysqli_fetch_assoc($run))
						{
							
							?>
							
							<tr>
							<td><?php echo $row['user_name'];?><td>

							<td><a class="btn btn-primary" href="susres.php?id=<?php echo $row['user_id'];?>&post=student&op=sus" name="suspend">Suspend</a></td>
							</tr>
							
							
							<?php
							
						}
					}	
					}
					
?>					
	                     </div>
	               </div>
	         </div>	
        </div>	
</div>		