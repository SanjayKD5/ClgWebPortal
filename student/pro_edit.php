<?php
include("templets/check.php");
include("templets/check1.php");
include("templets/header.php");

 $id=$_SESSION['user_id'];
 $query="select * from student where user_id='$id'";
 $run=mysqli_query($con,$query);
 $row=mysqli_fetch_assoc($run);
 ?>
 <div class="row" id="row1">
      <div  class="col-md-7" >
			<div class="panel panel-primary ">
                <div class="panel-heading"><center><h4>Update Profile </h4> </center></div>
                <div class="panel-body">
				<form action="update.php" method="post" enctype="multipart/form-data">
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
			   <td><button class="btn btn-primary" type="submit" name="proedit"  >update</button></td>
			   </tr>
				
				</table>
				
				</div>
            </div>		  
	 </div>
	 <div class="col-md-5"> 
	 <div  class="panel panel-default ">
     <div  class="panel-body">
	 <img src="../images/<?php echo $row['user_image']; ?>" class="img-responsive" style="height:46%;width:100%">
	           <table class="table" height="9.5%">
			   <tr>
			   <td><input type="file" name="img" ></td>
			   </tr>
			   </table>
	 </div>
   </form>    
                       </div>
	 
	    
	 
	 </div>
</div>
<?php 
include("templets/footer1.php");
?>  