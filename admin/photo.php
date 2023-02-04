<?php
include("templetes/admin_header.php");
include("templetes/check.php");
include("../connection/dbconn.php");
?>
<div class="row" id="row1">
  <div class="col-md-5">
     <div class="panel panel-primary">
	   <div class="panel-heading"><center><h4>Add Photo</h4></center></div>
	   <div class="panel-body">
	     <form action="ph_up.php" method="post" enctype="multipart/form-data">
		   <table class="table" height="22%">
		     <tr>
			 <td><input type="file" name="img[]" multiple></td>
			 </tr>
			 <tr>
			 <td><button type="submit" class="btn btn-primary">upload</button></td>
			 </tr>
		   </table>
		 </form>
	   </div>
	 </div>
  </div>
 
   <div class="col-md-7">
     <div class="panel panel-primary">
	   <div class="panel-heading"><center><h4>Uploaded Photo</h4></center></div>
	   <div class="panel-body">
	   <table class="table" style="display:block;overflow:auto;height:45%">
	    <?php
		$query="SELECT * FROM `photo` order by pid desc";
		$run=mysqli_query($con,$query);
		$check=mysqli_num_rows($run);
		if($check==0)
		{
			
		}
		else{
			
			while($row=mysqli_fetch_assoc($run))
			{
				?>
				<tr>
				<td><img class="img-responsive" src="../photos/<?php echo $row['image']; ?>"></td>
				</tr>
				<tr>
				<td><a class="btn btn-primary" href="delp.php?id=<?php echo $row['pid']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
				</tr>
				<?php
				
				
			}
			
			
		}
	
		?>
		</table>
	   </div>
	 </div>
   </div>
</div>
