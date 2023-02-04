<?php
include("templets/check.php");
include("templets/check1.php");

 include("../connection/dbconn.php");
$id=$_SESSION['user_id'];
$query="SELECT * FROM complaint WHERE st_id='$id'";
 $run=mysqli_query($con,$query);
 $row=mysqli_fetch_assoc($run);
 $check=mysqli_num_rows($run);

if($check==0)
{
	?><script>
   window.alert("you have not uploaded any complaint yet");
	window.open("complaint.php","_self");
	</script>
	<?php
}
else{
	
	include("templets/header.php");
	?>
	<div class="container">
	<div class="row" id="row1">
	
			  
			        <div   class="col-md-10" id="col" >
			       
				        <div  class="panel panel-primary ">
						 <div  class="panel-heading"><center><h4>Your Uploded Complaints</h4><center></div>
						  <div  class="panel-body">
						    <table class="table table-responsive" style="display:block;overflow:auto;height:60%;">
							<?php
							do
							{
								
								?>
								<tr>
								<th> <span class="glyphicon glyphicon-list-alt"><span> Subject :-</th>
								<th><?php echo $row['sub'];?><th>
								</tr>
								<tr>
								<th>Description :-</th>
								<td><?php echo $row['desc'];?><td>
								</tr>
								<tr>
								<th>Status :-</th>
								<td><?php echo $row['status'];?><td>
								</tr>
								<?php if(!empty($row['img']))
								{?>
								<th>Image :-</th>
								<td><img src="../images/<?php echo $row['img'];?> " class="img-responsive" /><td>
								</tr>
								<?php
								}
								?>
								
								<?php if(!empty($row['reply']))
								{?>
								<th>Reply :-</th>
								<td><?php echo $row['reply'];?><td>
								</tr>
								<?php
								}
								?>
								
								<tr>
							      
								<td> <a type="button" href="del_comp.php?id=<?php echo $row['comp_id'];  ?>" class="btn btn-primary"><h4>Delete Complaint <span class="glyphicon glyphicon-trash"></span></h4></a></td>
                                 							      
								</tr>	
								<tr><td> </td><td> </td></tr>
                          <?php
                        	}while($row=mysqli_fetch_assoc($run));
                           ?>

							
						    </table>
                        
                           </div>
			  
			  
			       </div>
				   </div>
				   </div>
				   </div>
<?php
}

include("templets/footer1.php");

 ?>