<?php
include("../connection/dbconn.php");
include("templets/check.php");
include("templets/check1.php");
$id=$_SESSION['user_id'];
$query="SELECT * FROM student WHERE user_id='$id'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
$row=mysqli_fetch_assoc($run);

      include("templets/header.php");
     ?>
   
       <div class="row" id="row1">
         <div class="col-md-5">
	       <div class="panel panel-primary">
	         <div class="panel-heading"><center><h4>PHOTO</h4></center></div>
	         <div class="panel-body"> 
	           <img class="img-responsive"  style="height:59%;width:100%" src="../images/<?php echo $row['user_image'];?> " />
		     </div>
			 <div class="panel-footer">
			 <a  href="pro_edit.php"><span class="glyphicon glyphicon-hand-right"></span>  Update Profile</a>
			 </div>
	       </div>
	     </div>
	 
	 
	 <div class="col-md-7">
	 <div class="panel panel-primary">
	  <div class="panel-heading"><center><h4>STUDENT DETAILS</h4></center></div>
	  <div class="panel-body">
	   <table class="table">
	     <tr>
		  <td><label>NAME</label></td>
		  <td><label><?php echo $row['user_name'];?></label></td>
		 </tr>
		 <tr>
		  <td><label>ID</label></td>
		  <td><label><?php echo $row['user_id'];?></label></td>
		 </tr>
		 <tr>
		  <td><label>ENROLLMENT NUMBER</label></td>
		  <td><label><?php echo $row['user_eno'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>EMAIL</label></td>
		  <td><label><?php echo $row['user_email'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>PHONE NO.</label></td>
		  <td><label><?php echo $row['user_pno'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>ADDRESS</label></td>
		  <td><label><?php echo $row['user_add'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>AGE</label></td>
		  <td><label><?php echo $row['user_age'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>BRANCH</label></td>
		  <td><label><?php echo $row['user_branch'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>YEAR</label></td>
		  <td><label><?php echo $row['user_year'];?></label></td>
		 </tr>
	   </table>
	    </div>
	   </div>
	 </div>
 
  
</div>   
<?php 
include("templets/footer1.php");
?>  
