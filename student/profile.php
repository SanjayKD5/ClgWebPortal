 <?php
 
include("templets/check.php");
include("../connection/dbconn.php");
$id=$_SESSION['user_id'];
$query="select * from student where user_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$check=$row['status'];
if($row['status']=="update")
{
	?><script>
	window.alert("Session is over please update the form first");
	window.open("update_form.php","_self");
	</script>
	<?php
die();}
if($row['status']=="feedback")
{
	?><script>
	window.alert("Sessional is over please give the feedback first");
	window.open("sesfed.php","_self");
	</script>
	<?php
die();}



if($check=="verified")
{
	?><script>
	window.open("showdata.php","_self");
	</script>
	
	<?php
}

else{
	if($row['status']=="pending")
{
	?><script>
	window.alert("profile updation is in pending state . please wait for the hod approvation");
	window.open("home.php","$_self");
	</script>
	<?php
	die();
}
include("templets/header.php");
$branch=$row['user_branch'];
$src=$row['user_image'];
if ($row['user_image']==null)
{$src="default.jpg";	
}
else
{
$src=$row['user_image'];
}

?>
    
       <div class="row" id="row1">
         <div class="col-md-4">
	       <div class="panel panel-primary">
	         <div class="panel-heading"><center><h4>PHOTO</h4></center></div>
	         <div class="panel-body">
			      <img src="../images/<?php echo $src?>" class="img-responsive">
	           <form action="update.php" method="post" enctype="multipart/form-data">
			   <table class="table" height="18%">
			   <tr><td><input type="file" name="img"</td></tr>
			 
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
		  <td><label>Enrollment Number</label></td>
		  <td><input type="number" name="eno" required="required"></td>
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
		  <td><label>Branch</label></td>
		  <td><?php echo $branch; ?></td>
		 </tr>
		  <tr>
		  <td><label>Year</label></td>
		  <td><select class="col-md-6" style="height:35px" name="year" >
							 <option value="first">First </option>
							 <option value="second">Second</option>
							 <option value="third">Third</option>
							 </select></td>
		 </tr>
		  <tr>
		  <td></td>
		  <td  style="float:right" ><input class="btn btn-primary" name="detail" type="submit" value="Update" required="required"></td>
		 </tr>
	   </table>
	   </form>
	    </div>
	   </div>
	 </div>
 
  
</div>  
<?php 
}?>