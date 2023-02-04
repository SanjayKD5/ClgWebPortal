<?php
include("templets/check.php");
include("templets/check1.php");
include("../connection/dbconn.php");
$id=$_SESSION['user_id'];
$query="SELECT * FROM `noticeboard` WHERE uploaded_by='$id' ";
 $run=mysqli_query($con,$query);
 $row=mysqli_fetch_assoc($run);
 $check=mysqli_num_rows($run);
 if($check==0)
{
	?><script>
   window.alert("you have not uploaded any image yet");
	window.open("wallmag.php","_self");
	</script>
	<?php
}
else{
	
	include("templets/header.php");
	?>
	<div class="container">
	         <div class="row" id="row1">
	            <div   class="col-md-11" id="col" >
	               <div  class="panel panel-primary ">
						 <div  class="panel-heading"><center><h4>Your Uploded Images</h4><center></div>
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
								<th>Status :-</th>
								<td><?php echo $row['state'];?><td>
								</tr>
								<tr>
								<td></td>
								<td><img width="75%" class="img-reponsive" height="25%"  src="../images_wall/<?php echo $row['image']; ?>"><td>
								</tr>
								<tr>

								<td> <a type="button" href="del.php?id=<?php echo $row['notice_id'];?>" class="btn btn-primary" ><h4>Delete notice <span class="glyphicon glyphicon-trash"></span></h4></a></td>
                                 							      
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