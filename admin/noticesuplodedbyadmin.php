<?php

include("templetes/check.php");
 include("../connection/dbconn.php");
$id="";
$query="SELECT * FROM `noticeboard` WHERE uploaded_by='$id' ";
 $run=mysqli_query($con,$query);
 $row=mysqli_fetch_assoc($run);
 $check=mysqli_num_rows($run);

if($check==0)
{
	?><script>
   window.alert("you have not uploaded any notices yet");
	window.open("admin_notices.php","_self");
	</script>
	<?php
}
else{
	
	include("templetes/admin_header.php");
	?>
	<div class="container">
	<div class="row" id="row1">
	
			  
			        <div   class="col-md-10" id="col" >
			       
				        <div  class="panel panel-primary ">
						 <div  class="panel-heading"><center><h4>Your Uploded Notices</h4><center></div>
						  <div  class="panel-body">
						    <table class="table table-responsive" style="display:block;overflow:auto;height:60%;">
							<?php
							do
							{
								
								?>
								<tr>
								<th> <span class="glyphicon glyphicon-list-alt"><span> Title :-</th>
								<th><?php echo $row['title'];?><th>
								</tr>
								<tr>
								<th>Description :-</th>
								<th><?php echo $row['description'];?><th>
								</tr>
								<tr>
								<th>Status :-</th>
								<td><?php echo $row['state'];?><td>
								</tr>
								<?php if(!empty($row['url']))
								{?>
								<td></td>
								<td><embed width="75%" class="img-reponsive" height="25%"  src=<?php echo $row['url']; ?>><td>
								</tr>
								<?php
								}
								?>
								<tr>
								<?php 
								if($row['type']=="For Faculty")
								{?>
							      <td> <a type="button" href="viewedby.php?id=<?php echo $row['notice_id']; ?>" class="btn btn-primary"><h4>viewed by <span class="glyphicon glyphicon-eye-open"></span></h4></a></td>
								<?php }?>
								<td> <a type="button" href="admin_noticeoperation.php?action=del&id=<?php echo $row['notice_id'];?>" class="btn btn-primary"><h4>Delete notice <span class="glyphicon glyphicon-trash"></span></h4></a></td>
                                 							      
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

 ?>