<?php
include("../connection/dbconn.php");
include("templetes/hod_check.php");
include("templetes/hod_header.php");

$id=$_SESSION['user_id'];
$query="select * from faculty where faculty_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$chatid=$row['faculty_chatid'];
$branch=$row['faculty_department'];
$status="unverified";
$query1="SELECT * FROM `noticeboard` WHERE status='$status' and app1='$chatid' or app2='$chatid' or app3='$chatid' or app4='$chatid' or app5='$chatid' or app6='$chatid'";
$run1=mysqli_query($con,$query1);
$check=mysqli_num_rows($run1);
$status="unverified";
$type="wallmag";
$query5="SELECT * FROM `noticeboard` WHERE type='$type' and branch='$branch' and status='$status'";
$run5=mysqli_query($con,$query5);
$check5=mysqli_num_rows($run5);
$check7=$check+$check5;


$query3="select * from faculty where faculty_id='$id'";
$run3=mysqli_query($con,$query3);
$row3=mysqli_fetch_assoc($run3);

if($check7==0)
{
	?><script>
	window.alert("currently there are no notices");
	window.open("hod_notice.php","_self");
	</script><?php
	
	
}

	
	?>
	
						    
							<?php
					if($check==0)
                     {
	
                    }
                      else{	
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
								<td> <a  type="button" class="btn btn-primary"  href="hverify_notice.php?id=<?php echo $row1['notice_id'];?>&chatid=<?php echo $row3['faculty_chatid'];?>&ap=app"> <span class="	glyphicon glyphicon-ok"></span>  Approve </a></td>
							       <td>  <a type="button"  class="btn btn-primary" href="hverify_notice.php?id=<?php echo $row1['notice_id'];?>&chatid=<?php echo $row3['faculty_chatid'];?>&ap=dec"> <span class="	glyphicon glyphicon-remove"></span>  Decline  </a></td>
							      
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
	
						    
							<?php
							if($check5==0)
                                 {
	
                                 }
                               else
                               {
								   ?>
								   <div class="row" id="row1" >
			  
			        <div   class="col-md-12"  >
			       
				        <div  class="panel panel-primary ">
						 <div  class="panel-heading"><center><h4>Approve Wallmagzine</h4><center></div>
						  <div  class="panel-body">
								   <table class="table table-responsive" style="display:block;overflow:auto;height:60%;" >
								   <?php
							while($row5=mysqli_fetch_assoc($run5))
							{
								$cid=$row5['uploaded_by'];
								$query2="select * from student where user_id='$cid'";
								$run2=mysqli_query($con,$query2);
								$row2=mysqli_fetch_assoc($run2);
								?>
								<tr>
								<th ><span class="glyphicon glyphicon-list-alt"><span> Title :-</th>
								<td><?php echo $row5['title'];?><td>
								</tr>
								
								
								<td></td>
								<td><img src="../images_wall/<?php echo $row5['image'];?>" class="img_responsive" height="45%"><td>
								</tr>
								<th>Uploded By :-</th>
								<td><?php echo $row2['user_name'];?><td>
								</tr>
								
								<tr>
								
								<tr>
								<td> <a  type="button" class="btn btn-primary"  href="hverify_notice.php?id=<?php echo $row5['notice_id'];?>&chatid=<?php echo $row3['faculty_chatid'];?>&ap=app"> <span class="	glyphicon glyphicon-ok"></span>  Approve </a></td>
							       <td>  <a type="button"  class="btn btn-primary" href="hverify_notice.php?id=<?php echo $row5['notice_id'];?>&chatid=<?php echo $row3['faculty_chatid'];?>&ap=dec"> <span class="	glyphicon glyphicon-remove"></span>  Decline  </a></td>
							      
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
				