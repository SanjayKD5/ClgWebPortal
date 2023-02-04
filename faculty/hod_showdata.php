<?php
include("../connection/dbconn.php");
include("templetes/hod_check.php");

$id=$_SESSION['user_id'];
$query="SELECT * FROM faculty WHERE faculty_id='$id'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
$row=mysqli_fetch_assoc($run);

      include("templetes/hod_header.php");
     ?>
   
       <div class="row" id="row1">
         <div class="col-md-5">
	       <div class="panel panel-primary">
	         <div class="panel-heading"><center><h4>PHOTO</h4></center></div>
	         <div class="panel-body"> 
	           <img class="img-responsive" src="../images/<?php echo $row['faculty_image'];?>" style="height:46%;width:100%" />
		     </div>
			  <div class="panel-footer">
			 <a  href="hpro_edit.php"><span class="glyphicon glyphicon-hand-right"></span>  Update Profile</a>
			 </div>
	       </div>
	     </div>
	 
	 
	 <div class="col-md-7">
	 <div class="panel panel-primary">
	  <div class="panel-heading"><center><h4>HOD DETAILS</h4></center></div>
	  <div class="panel-body">
	   <table class="table">
	     <tr>
		  <td><label>NAME</label></td>
		  <td><label><?php echo $row['faculty_name'];?></label></td>
		 </tr>
		 <tr>
		  <td><label>ID</label></td>
		  <td><label><?php echo $row['faculty_id'];?></label></td>
		 </tr>
		 <tr>
		  <td><label>CHAT ID</label></td>
		  <td><label><?php echo $row['faculty_chatid'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>EMAIL</label></td>
		  <td><label><?php echo $row['faculty_email'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>PHONE NO.</label></td>
		  <td><label><?php echo $row['faculty_pno'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>ADDRESS</label></td>
		  <td><label><?php echo $row['faculty_add'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>AGE</label></td>
		  <td><label><?php echo $row['faculty_age'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>BRANCH</label></td>
		  <td><label><?php echo $row['faculty_department'];?></label></td>
		 </tr>
		  <tr>
		  
	   </table>
	    </div>
	   </div>
	 </div>
 
  
</div>   
