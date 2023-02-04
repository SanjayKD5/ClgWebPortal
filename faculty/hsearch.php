<?php
include("templetes/hod_check.php");
include("templetes/hod_check1.php");
include("../connection/dbconn.php");
include("templetes/hod_header.php");


?>
<div class="row" id="row1">
         <div class="col-md-5">
	       <div class="panel panel-primary">
	         <div class="panel-heading"><center><h4>Search Student</h4></center></div>
	         <div class="panel-body">
              <form action="hsearch.php" method="post">		 
	           <table class="table">
			            <tr>
						<th>staff or student :-</th>
						</tr>
						<tr>
						<td>
						<select  name="user">
						     <option value="staff">STAFF</option>
							 <option value="student">STUDENT</option>
						 </select>
						</td>
						</tr>
			   <tr>
		         <td ><label>Select Year :-<label></td>
				 </tr>
				 <tr>
                <td class="col-md-6"> 						 
				 <select style="height:35px" name="year" >
				     <option value="first">FIRST </option>
		     	     <option value="second">SECOND</option>
				     <option value="third">THIRD</option>
				  </select>
				 </td>
			  </tr>
			   <tr>
			     <td><button class="btn btn-primary" type="submit" data-toggle="collapse" data-target="#search" name="go1"> Go</button> </td>   
			  </tr>
			  </table>
			  </form>
			   
		     </div>
	       </div>
	     </div>
		 <div class="col-md-6">
		 <div class="panel panel-primary">
	         <div class="panel-heading"><center><h4>USER</h4></center></div>
	         <div class="panel-body" id="search" class="collapse">
			 <?php
			 if(isset($_POST['go1']))
			 {
				 $status="verified";
			 $user=$_POST['user'];
			 $year=$_POST['year'];
			 $id=$_SESSION['user_id'];
			 $query="select * from faculty where faculty_id='$id'";
			 $run=mysqli_query($con,$query);
			 $row=mysqli_fetch_assoc($run);
			 $branch=$row['faculty_department'];
			 if($user=="student")
			 {
			 
			 $query2="select * from student where user_branch='$branch' and user_year='$year' and status='$status'";
			 $run2=mysqli_query($con,$query2);
			 $check2=mysqli_num_rows($run2);
			if($check2==0)
			 {
				 ?>
						<script>
						window.alert("no student yet ");
					
						</script>
					<?php
			 }
			 else{
				 ?>
				 
				 <table class="table"  style="display:block;overflow:auto;height:32%">
				 <tr>
				 <th>Name</th>
				 <th>Id</th>
				 <th></th>
				 </tr>
				<?php 
				 while($row2=mysqli_fetch_assoc($run2))
				 {
					 ?>
					        <tr>
							<td><?php echo $row2['user_name'];?><td>
							<td><?php echo $row2['user_id'];?><td>
							<td><a href="userdetails.php?id=<?php echo $row2['user_id'];?>&type=1&user=student">  More details </a></td>
							</tr>
			 
			 <?php
				 }
				 ?>
				 </table>
				 <?php
				 } 
			 }
			 else{
				 
				$post="staff";
				
			 $query2="select * from faculty where faculty_department='$branch' and post='$post' and status='$status'";
			 $run2=mysqli_query($con,$query2);
			 $check2=mysqli_num_rows($run2);
			if($check2==0)
			 {
				 ?>
						<script>
						window.alert("no student yet ");
					
						</script>
					<?php
			 }
			 else{
				 ?>
				 
				 <table class="table" height="32%" style="display:block;overflow:auto">
				 <tr>
				 <th>Name</th>
				 <th>Id</th>
				 <th></th>
				 </tr>
				<?php 
				 while($row2=mysqli_fetch_assoc($run2))
				 {
					 ?>
					        <tr>
							<td><?php echo $row2['faculty_name'];?><td>
							<td><?php echo $row2['faculty_id'];?><td>
							<td><a href="userdetails.php?id=<?php echo $row2['faculty_id'];?>&type=1&user=faculty">  More details </a></td>
							</tr>
			 
			 <?php
				 }
				 ?>
				 </table>
				 <?php
				 }  
			 }
			 
			 
			 
			 }
			 else
			 {
				?>
				<img src="../images/search.jpg" height="35%" />
				<?php
			 }
			 ?>
			 
		 </div>
</div>