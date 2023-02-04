<?php
include("templetes/admin_header.php");
include("templetes/check.php");

?>
   <div class="row" id="row1">
			  
	  <div class="col-md-8" >
			       
		 <div class="panel panel-primary ">
			<div class="panel-heading"><h4><center>ADD NOTICES<center></h4> </div>
              <div class="panel-body">
				   <div class="col-md-6">
			          <form action="admin_uploadnotice.php" method="post" enctype="multipart/form-data">
					    <table class="table">
						<tr>
						   <td><label><h5><strong>NOTICE DESCRIPTION</strong></h5></label></td>
						   </tr>
						  <tr>
						   <td><input type="text" name="title" placeholder="Enter the title of notice" required="required" class="col-md-12"></td>
						  </tr>
						  <tr>
						   <td><textArea rows="3"  placeholder="Enter the Description of notice" name="description" required="required" class="col-md-12"></textarea></td>
						  </tr>
						  <tr>
						   <td><label><strong><h5>FOR</strong></h5></label></td>
						   </tr>
						  
						  <tr>
						  
						   <td><select class="col-md-12"  placeholder="enter notice for " name="for">
						           <option>For All</option>
								   <option>For Faculty</option>
								   </select>
						   </td>
						  </tr>
						   <tr>
						   <td><label><strong><h5>Any Image</strong></h5></label></td>
						   </tr>
						  <tr>
						   <td><input type="file" placeholder="Upload an image" class="col-md-12" name="img"></td>
						  </tr>
						  
						
						</table>
                      	
                      					  
		 
	               </div>	
				   <div class="col-md-6"  >
				   
					    <table class="table primary">
				           <tr>
						   <td><label><h5><strong>NEED APPROVED OF</strong></h5></label></td>
						   </tr>
			          
						  <tr>
						   <td><input type="number" name="app1" placeholder="Enter the chatid of faculty"  class="col-md-12"></td>
						  </tr>
						  <tr>
						   <td><input type="number" name="app2" placeholder="Enter the chatid of faculty" class="col-md-12"></td>
						  </tr>
						 <tr>
						   <td><input type="number" name="app3" placeholder="Enter the chatid of faculty" class="col-md-12"></td>
						  </tr>
						  <tr>
						   <td><input type="number" name="app4" placeholder="Enter the chatid of faculty" class="col-md-12"></td>
						  </tr>
						  <tr>
						   <td><input type="number" name="app5" placeholder="Enter the chatid of faculty" class="col-md-12"></td>
						  </tr>
						  <tr>
						   <td><input type="number" name="app6" placeholder="Enter the chatid of faculty" class="col-md-12"></td>
						  </tr>
						  <tr>
						   <td><input type="submit"  value="upload" class="btn btn-primary col-md-12" ></td>
						  </tr>
						
						</table>
                      </form>					  
		 
	               </div>	
			   </div>  
            </div>
	  </div>
	  <div class="col-md-4">
	  <?php
 include("../connection/dbconn.php");	  
$id=$_SESSION['user_id'];
$query="select * from admin where admin_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$chatid=$row['admin_chatid'];
$status="unverified";
$query1="SELECT * FROM `noticeboard` WHERE status='$status'and app1='$chatid' or app2='$chatid' or app3='$chatid' or app4='$chatid' or app5='$chatid' or app6='$chatid'";
$run1=mysqli_query($con,$query1);
$check=mysqli_num_rows($run1);
	  ?>
			       
		 <div  class="panel panel-primary ">
			<div class="panel-heading "><h4><center>MANAGE NOTICES</center></h4> </div>
              <div class="panel-body">
			  <table class="table" width="100%">
			    <tr>
				  <td><a href="noticesuplodedbyadmin.php"><span class="	glyphicon glyphicon-hand-right"></span>  see your uploded notices</a></td>
				</tr>
				<tr>
				  <td><a href="faculty_noticeboard.php"><span class="	glyphicon glyphicon-hand-right"></span>  Faculty Notice Board</a></td>
				</tr>
				<tr>
				  <td><a href="commonnb.php"><span class="glyphicon glyphicon-hand-right"></span>  Comman Notice Board</a></td>
				</tr>
				<tr>
				  <td><a href="admin_approved.php"><span class="glyphicon glyphicon-hand-right"></span>  Approved list <span class="badge"><?php echo $check?></span></a></td>
				</tr>
				<tr>
				 <td><a href="thought.php"><span class="glyphicon glyphicon-hand-right"></span> Update Thought </a></td>
				</tr>
				<tr>
				 <td><a href="photo.php"><span class="glyphicon glyphicon-hand-right"></span> Add Photos </a></td>
				</tr>
				<tr>
				 <td><a href="chatid.php"><span class="glyphicon glyphicon-hand-right"></span> view chatid </a></td>
				</tr>
				<tr>
				<td><img src="../images/notice.jpg" class="img-responsive" style="height:60%" /></td>
				</tr>
			  </table>
	          </div>  
	        </div>
		 </div>
  </div>
  <?php
include("templetes/admin_footer.php");
?>
  
