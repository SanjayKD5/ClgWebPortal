 <?php
 
include("templetes/hod_check.php");
include("../connection/dbconn.php");
$id=$_SESSION['user_id'];
$query="select * from faculty where faculty_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$check=$row['status'];
if($check=="verified")
{
	?><script>
	window.open("hod_showdata.php","_self");
	</script>
	
	<?php
}
if($check=="pending")
{
	?><script>
	window.alert("profile updation is in pending state . please wait for the admin approvation");
	window.open("hod_home.php","$_self");
	</script>
	<?php
	die();
}
else{
include("templetes/hod_header.php");
$branch=$row['faculty_department'];
$src=$row['faculty_image'];
if ($row['faculty_image']==null)
{$src="default.jpg";	
}
else
{
$src=$row['faculty_image'];
}

?>
    
       <div class="row" id="row1">
         <div class="col-md-4">
	       <div class="panel panel-primary">
	         <div class="panel-heading"><center><h4>PHOTO</h4></center></div>
	         <div class="panel-body">
			      <img src="../images/<?php echo $src?>" class="img-responsive">
	           <form action="hupdate.php" method="post" enctype="multipart/form-data">
			   <table class="table" height="11%">
			   <tr><td><input type="file" name="img" required="required"></td></tr>
			  
			  </table>
			   
		     </div>
	       </div>
	     </div>
	 
	 
	 <div class="col-md-8">
	 <div class="panel panel-primary">
	  <div class="panel-heading"><center><h4>YOUR DETAILS</h4></center></div>
	  <div class="panel-body">
	
	   <table class="table">
	     <tr>
		  <td><label>Name</label></td>
		  <td><input type="text" name="name" required="required"></td>
		 </tr>
		 <tr>
		  <td><label>Id</label></td>
		  <td><label><?php echo $id; ?></label></td>
		 </tr>
		 <tr>
		  <td><label>Chat ID</label></td>
		  <td><input type="number" name="cid" required="required"></td>
		 </tr>
		  <tr>
		  <td><label>Email</label></td>
		  <td><input type="email" name="email" required="required"></td>
		 </tr>
		  <tr>
		  <td><label>Phone No.</label></td>
		  <td><input type="number" name="pno" required="required"></td>
		 </tr>
		  <tr>
		  <td><label>Address</label></td>
		  <td><input type="text" name="add" required="required"></td>
		 </tr>
		  <tr>
		  <td><label>Age</label></td>
		  <td><input type="number" name="age" required="required"></td>
		 </tr>
		 
		  <tr>
		  <td><label>Departement</label></td>
		  <td><?php echo $branch; ?></td>
		 </tr>
		 
		  <tr>
		  <td></td>
		  <td  style="float:right" ><input class="btn btn-primary" name="detail" type="submit" value="Update" required="required"></td>
		 </tr>
	   </table>
	    </div>
	   </div>
	 </div>
 
  
</div>   
<?php
}?>