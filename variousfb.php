<?php
        include("connection/dbconn.php");
		include("templetes/home_header.php");
$query="select * from feedback";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
if($check==0)
{
	?><script>
	window.alert("no feedback yet");
	window.open("feedback.php","_self");
	</script>
	<?php
}
else{
	?>
	<div class="row" id="row1">				
		 <div class="col-md-12"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">Feedback Given By Different Student</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  
				  <th><h2>Branch</h2></th>
				 
				  </tr>
				  
					   <?php 
					  while( $row=mysqli_fetch_assoc($run))
			       {
					   $id=$row['st_id'];
					   $query1="select * from student where user_id='$id'";
					   $run1=mysqli_query($con,$query1);
					   $row1=mysqli_fetch_assoc($run1);
				 
				  ?>
				  <tr>
				  
				  <td><h4><?php echo $row1['user_branch']; ?></h4></td>
				  <td><h4><a href="morefb.php?fid=<?php echo $row['fb_id'];?>">  More details</a></h4></td>
				  </tr>
				  
				  		 
			  <?php
			  } 
			  ?>
				  </table>
				  </div>
			   </div>
			</div>
</div>

<?php
			  }
	 include("templetes/home_footer.php")		  ?>
		
	
