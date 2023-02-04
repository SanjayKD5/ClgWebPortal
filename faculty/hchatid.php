<?php
include("templetes/hod_check.php");
include("templetes/hod_header.php");
include("../connection/dbconn.php");

?>
<div class="row" id="row1">
     <div class="col-md-5">
	    <div class="panel panel-primary">
		   <div class="panel-heading"><center><h4>View Chatids</h4></center></div>
		   <div class="panel-body">
		   <form action="" method="post">
		     <table class="table" style="height:40%">
			 
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
					<td><button class="btn btn-primary" type="submit" name="go">Go </button></td>
					</tr>
					
			 </table>
			 </form>
		   </div>
		</div>
	 </div>
	 <div class="col-md-7">
	    <div class="panel panel-primary">
		   <div class="panel-heading"><center><h4>View Chatids</h4></center></div>
		   <div class="panel-body">
		   <?php 
		   if(isset($_POST['branch']))
		   {
			   $branch=$_POST['branch'];
			   $status="verified";
			   $query="select * from faculty where status='$status' and faculty_department='$branch'";
			   $run=mysqli_query($con,$query);
			   $check=mysqli_num_rows($run);
			   if($check==0)
			   {
				   ?><script>
				   
				   window.alert("no faculty is of such branch");
				   window.open("hod_notice.php");
				   </script>
				    <?php
				   
			   }
			   else
			   {
				   ?><table class="table" style="display:block;overflow:auto;height:40%">
				   
				      <tr>
				   <td>
				 <img src="../images/background4.jpg" />
				 </td>
				   </tr>
				   
				   <tr>
				   <th>Name</th>
				   <th>CHATID</th>
				   </tr>
				   <?php	
				   while($row=mysqli_fetch_assoc($run))
			   {
					   ?>
			   <tr>
			   <td><?php echo $row['faculty_name'];?></td>
			   <td><?php echo $row['faculty_chatid'];?></td>
			   </tr>
			   
			    <?php
			   }
		   }}
		   else
			 {
				?>
				<img src="../images/search.jpg" height="43%" />
				<?php
			 }
			 ?>
		   </div>
		</div>   
	 </div>
</div>