<?php
include("../connection/dbconn.php");
include("templetes/check.php");

$id=$_SESSION['user_id'];
$query="select * from admin where admin_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$chatid=$row['admin_chatid'];
$status="unverified";
$query1="SELECT * FROM `noticeboard` WHERE status='$status'and app1='$chatid' or app2='$chatid' or app3='$chatid' or app4='$chatid' or app5='$chatid' or app6='$chatid'";
$run1=mysqli_query($con,$query1);
$check=mysqli_num_rows($run1);

$query3="select * from admin where admin_id='$id'";
$run3=mysqli_query($con,$query3);
$row3=mysqli_fetch_assoc($run3);

if($check==0)
{
	?><script>
	window.alert("currently no notice are available");
window.open("admin_notices.php","_self");
	</script>
	<?php
}
else{
	include("templetes/admin_header.php");
	?>
	<div class="row" id="row1">
			  
			        <div   class="col-md-12" id="col" >
			       
				        <div  class="panel panel-primary ">
						 <div  class="panel-heading"><center><h4>Approve Notices</h4><center></div>
						  <div  class="panel-body">
						    <table class="table table-responsive" style="display:block;overflow:auto;height:60%;" >
							<?php
							while($row1=mysqli_fetch_assoc($run1))
							{
								$cid=$row1['uploaded_by'];
								$query2="select * from faculty where faculty_id='$cid'";
								$run2=mysqli_query($con,$query2);
								$row2=mysqli_fetch_assoc($run2);
								?>
								<tr>
								<th ><span class="glyphicon glyphicon-list-alt"><span> Title :-</th>
								<td><?php echo $row1['title'];?><td>
								</tr>
								<tr>
								<th>Description :-</th>
								<td><?php echo $row1['description'];?><td>
								</tr>
								<tr>
								<th>Uploded By :-</th>
								<td><?php echo $row2['faculty_name'];?><td>
								</tr>
								<tr>
								<tr>
								<th>Department :-</th>
								<td><?php echo $row2['faculty_department'];?><td>
								</tr>
								<tr>
								<td></td>
								<td><embed width="75%" class="img-reponsive" height="25%"  src=<?php echo $row1['url']; ?>><td>
								</tr>
								<tr>
								<td> <a  type="button" class="btn btn-primary"  href="admin_verifynotice.php?id=<?php echo $row1['notice_id'];?>&chatid=<?php echo $row3['admin_chatid'];?>&ap=app"> <span class="	glyphicon glyphicon-ok"></span>  Approve </a></td>
							       <td>  <a type="button"  class="btn btn-primary" href="admin_verifynotice.php?id=<?php echo $row1['notice_id'];?>&chatid=<?php echo $row3['admin_chatid'];?>&ap=dec"> <span class="	glyphicon glyphicon-remove"></span>  Decline  </a></td>
							      
								</tr>	
								<tr><td> </td><td> </td></tr>
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


?>