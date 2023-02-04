
<?php
include("templetes/check.php");
include("../connection/dbconn.php");
$id=$_GET['id'];
$type=$_GET['type'];
$query="SELECT * FROM faculty WHERE faculty_id='$id'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
$row=mysqli_fetch_assoc($run);

      include("templetes/admin_header.php");
     ?>
   
       <div class="row" id="row1">
         <div class="col-md-5">
	       <div class="panel panel-primary">
	         <div class="panel-heading"><center><h4>PHOTO</h4></center></div>
	         <div class="panel-body"> 
	           <img class="img-responsive" src="../images/<?php echo $row['faculty_image'];?> " style="height:50%;width:100%"/>
		     </div>
	       </div>
	     </div>
	 
	 
	 <div class="col-md-7">
	 <div class="panel panel-primary">
	  <div class="panel-heading"><center><h4>FACULTY DETAILS</h4></center></div>
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
		  <?php
		  if($type=="app")
		  {
			  ?>
			  <tr>
			  <td><a href="appdec.php?id=<?php echo $row['faculty_id']; ?>&opp=app" class="btn btn-primary"><span class="glyphicon glyphicon-ok"><span> Approve </a>
			  <a href="appdec.php?id=<?php echo $row['faculty_id']; ?>&opp=del" class="btn btn-primary"> <span class="glyphicon glyphicon-remove"><span> Decline</a></td>
			  </tr>
		 <?php
		 }
		  
		  ?>
		 
	   </table>
	    </div>
	   </div>
	 </div>
 
  
</div>   




