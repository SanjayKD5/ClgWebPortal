<?php
include("templetes/hod_check.php");
include("templetes/hod_header.php");
include("../connection/dbconn.php");

 $id=$_SESSION['user_id'];
 $query="select * from faculty where faculty_id='$id'";
 $run=mysqli_query($con,$query);
 $row=mysqli_fetch_assoc($run);
 ?>
 <div class="row" id="row1">
      <div  class="col-md-7" >
			<div class="panel panel-primary ">
                <div class="panel-heading"><center><h4>Update Profile </h4> </center></div>
                <div class="panel-body">
				<form action="hupdate.php" method="post" enctype="multipart/form-data">
				<table class="table">
				<tr>
				<th>Mobile No</th>
				<td><input type="text" name="pno"></td>
				</tr>
				<tr>
				<th>password</th>
				<td><input type="text" name="pass"></td>
				</tr>
				
				<tr>
				<th>Address</th>
				<td><textarea name="address"></textarea></td>
				</tr>
				 <tr>
				  <th>Age</th>
				  <td><input type="number" name="age"></td>
				</tr>
				 <tr>
			   <p><h4>please select only those field which you want to update</h4></p>
			   </tr>
			    <tr>
			   <td><button class="btn btn-primary" type="submit" name="proedit" >update</button></td>
			   </tr>
				
				</table>
				
				</div>
            </div>		  
	 </div>
	 <div class="col-md-5"> 
	 <div  class="panel panel-default ">
     <div  class="panel-body">
	 <img src="../images/<?php echo $row['faculty_image']; ?>" class="img-responsive" style="height:29%;width:100%">
	           <table class="table" height="21%">
			   <tr>
			   <td><input type="file" name="img" ></td>
			   </tr>
			   </table>
	 </div>
   </form>    
                       </div>
	 
	    
	 
	 </div>
</div>