<?php
include("templetes/hod_header.php");
include("templetes/hod_check.php");
include("templetes/hod_check1.php");
$nt="notice";

?>
   <div class="row" id="row1">
			  
	  <div class="col-md-8" >
			       
		 <div class="panel panel-primary ">
			<div class="panel-heading"><h4><center>ADD NOTICES<center></h4> </div>
              <div class="panel-body">
				   <div class="col-md-6">
			          <form action="huploadnotice.php" method="post" enctype="multipart/form-data">
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
						   <td><label><strong><h5>Type</strong></h5></label></td>
						   </tr>
						  
						  <tr>
						  
						   <td><select class="col-md-12"  placeholder="enter the type " name="type">
						          
						          <option>Academic</option>
								  <option>Examination</option>
								  <option>Cultural</option>
								  <option>Schedule</option>
								  <option>Official</option>
								  <option>Event_Sport</option>
								  <option>Event_Academic</option>
								  <option>Event_Competition</option>
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
						  <tr>
						  <td><label><strong><h5>Add Participant</strong></h5></label></td>
						  </tr>
						  <tr>
						  <td><input  type="radio" value="yes" name="parti" required="required">   yes
						      <input type="radio" value="no" name="parti" required="required">  No</td>
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
$query="select * from faculty where faculty_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$chatid=$row['faculty_chatid'];
$branch=$row['faculty_department'];
$status="unverified";
$type="wallmag";
$query1="SELECT * FROM `noticeboard` WHERE status='$status'and app1='$chatid' or app2='$chatid' or app3='$chatid' or app4='$chatid' or app5='$chatid' or app6='$chatid'";
$run1=mysqli_query($con,$query1);
$check=mysqli_num_rows($run1);
$query5="SELECT * FROM `noticeboard` WHERE type='$type' and branch='$branch' and status='$status'";
$run5=mysqli_query($con,$query5);
$check5=mysqli_num_rows($run5);
$check7=$check+$check5;
	  ?>
			       
		 <div  class="panel panel-primary ">
			<div class="panel-heading "><h4><center>MANAGE NOTICES</center></h4> </div>
              <div class="panel-body">
			  <table class="table" width="100%">
			    <tr>
				  <td><a href="hyour_notices.php"><span class="	glyphicon glyphicon-hand-right"></span>  see your uploded notices</a></td>
				</tr>
				<tr>
				  <td><a href="hnoticeboard.php"><span class="	glyphicon glyphicon-hand-right"></span>  Student Notice Board</a></td>
				</tr>
				<tr>
				  <td><a href="hstaff_noticeboard.php"><span class="	glyphicon glyphicon-hand-right"></span>  Staff notice Board  <span class="badge"></span></a></td>
				</tr>
				<tr>
				  <td><a href="happroved.php"><span class="	glyphicon glyphicon-hand-right"></span>  Approved list <span class="badge"><?php echo $check7?></span></a></td>
				</tr>
				<tr>
				  <td><a href="henroll.php"><span class="	glyphicon glyphicon-hand-right"></span> student enroll for notices </a></td>
				</tr>
				<tr>
				  <td><a href="hchatid.php"><span class="	glyphicon glyphicon-hand-right"></span> view chatid </a></td>
				</tr>
				<tr>
				<td><img src="../images/notice.jpg" class="img-responsive" style="height:145%" /></td>
				</tr>
				
			  </table>
	          </div>  
	        </div>
		 </div>
  </div>
  <?php
include("templetes/hod_footer.php");
?>
  
