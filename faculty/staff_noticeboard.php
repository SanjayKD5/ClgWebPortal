<?php
include("../connection/dbconn.php");
include("templetes/staff_check.php");
include("templetes/staff_header.php");




$type="For Faculty";
$status="verified";

$query="SELECT * FROM `noticeboard` WHERE  type='$type' and status='$status' order by notice_id desc" ;
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
                      if($check==0)
			   {
				    ?><script>
	window.alert("no notices yet");
	window.open("staff_notice.php","_self");
	</script>
	<?php 
				   
			   }
			  else{

?>

<div class="row" id="row1">				
		 <div class="col-md-12"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">NOTICES</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  <th><h2>click here</h2><th>
				  </tr>
				  
					   <?php 
					 while( $row=mysqli_fetch_assoc($run))
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row['title'];?></h4></td>
				  <td><h4><?php echo $row['description']; ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row['notice_id'];?>&type=notice">  More details</a></h4></td>
				  </tr>
				  
				  		 
			  <?php
			  } 
			  ?>
				  </table>
				  </div>
			   </div>
			</div>
</div>

<?php }
			 ?> 
	