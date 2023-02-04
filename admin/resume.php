<?php
include("templetes/check.php");
include("templetes/admin_header.php");
?>
<div class="row" id="row1">
    <div  class="col-md-6">
		<div class="panel panel-primary ">
		    <div class="panel-heading"><center><h4>RESUME USER</center></h4></div>
            <div class="panel-body">
			    <form method="post" action="resume.php">
				   <table class="table " height="25%">
					 <tr>
					 <th> SELECT USER</th>
					 </tr>
					    <tr>
						<td>
						<select  name="user" >
						     <option value="faculty">FACULTY </option>
							 <option value="student">STUDENT</option>
						  
						</select>
						</td>
						</tr>
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
					 <th> Select Branch :-</th>
					 </tr>
					 <tr>
					 <td><select  name="branch" >
							 <option value="computer">COMPUTER </option>
							 <option value="civil">CIVIL</option>
							 <option value="chemical">CHEMICAL</option>
							 <option value="mechanical">MECHANICAL</option>
							 <option value="electrical">ELECTRICAL</option>
							  <option value="electronics">ELECTRONICS</option>
						    </select></td>
							
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
							if(isset($_POST['branch']))
					{
					$user=$_POST['user'];
					$department=$_POST['branch'];
					$year=$_POST['year'];
					$status1="suspend";
					if($user=="faculty")
					{
					$query="SELECT * FROM `faculty` where faculty_department='$department'and status='$status1'";
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
						<th>Post</th>
						</tr>
						<?php
						
						while($row=mysqli_fetch_assoc($run))
						{
							
							?>
							
							<tr>
							<td><?php echo $row['faculty_name'];?><td>
							<td><?php echo $row['post'];?><td>
							<td><a class="btn btn-primary" href="susres.php?id=<?php echo $row['faculty_id'];?>&post=student&op=re" name="resume">Resume</a></td>
							</tr>
							
							
							<?php
							
						}
					}
					}
					else
					{
					$query="SELECT * FROM `student` where user_branch='$department' and user_year='$year'and status='$status1'";
					$run=mysqli_query($con,$query);
					$check=mysqli_num_rows($run);
					if($check==0)
					{
						
					}
					else{
						
						?>
						<table class="table" width="100%" style="display:block;overflow:auto;height:38%" >
						<tr>
						<th>Name</th>
						</tr>
						<?php
						
						while($row=mysqli_fetch_assoc($run))
						{
							
							?>
							
							<tr>
							<td><?php echo $row['user_name'];?><td>

							<td><a class="btn btn-primary" href="susres.php?id=<?php echo $row['user_id'];?>&post=student&op=re" name="resume">Resume</a></td>
							</tr>
							
							
							<?php
							
						}
					}	
					}
					
					}
?>					
	                     </div>
	               </div>
	         </div>	
        </div>	
</div>		