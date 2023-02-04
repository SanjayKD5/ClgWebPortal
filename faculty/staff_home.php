<?php
include("templetes/staff_header.php");
include("templetes/staff_check.php");
$nt="home";

?>
                 <div class="row" id="row1">
			  
			        <div   class="col-md-7" id="col" >
			       
				        <div  class="panel panel-default ">
                                <div  class="panel-body"><img  src="../images/staff1.png" width="100%" height="50%"></div>
                                
                       </div>
			  
			  
			       </div>
		      
		          
			  
			        <div  class="col-md-5" >
			       
				        <div class="panel panel-primary ">
                                <div class="panel-heading"><center><h4>Total Student</center></h4></div>
                                <div class="panel-body"><?php 
								
				  include("../connection/dbconn.php");
				  $status="verified";
				  $fid=$_SESSION['user_id'];
			$query9="select * from faculty where faculty_id='$fid'";
			$run9=mysqli_query($con,$query9);
			$row9=mysqli_fetch_assoc($run9);
			$branch=$row9['faculty_department'];
				  $query="SELECT user_year ,count(user_year) FROM  student where status='$status' and user_branch='$branch' group by user_year";
				   $run=mysqli_query($con,$query);
				  ?>
				  <table class="table" height="36%">
				  <?php
					 while( $row=mysqli_fetch_assoc($run)){
									 ?>
									 <tr>
								 <td> <?php print_r($row['user_year']);?></td>
								 <td> <?php print_r($row['count(user_year)']);?></td>
								 </tr><?php
								  
								 }
								 ?>
								 </table>
								 </div>
                       </div>
			  
			  
			       </div>
				 			        
		      
		         </div>
				 
				 <?php include("templetes/staff_footer.php");?>
