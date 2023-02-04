	 <?php
								include_once("../connection/dbconn.php");
								$id=$_SESSION['user_id'];
								
								

                               $query15="select * from student where user_id='$id'";
                               $run15=mysqli_query($con,$query15);
                               $row15=mysqli_fetch_assoc($run15);
                               $branch=$row15['user_branch'];
							   $for="student";
							   
							   if($nt=="notice")
								{
									 $query16="select * from notification where type='$nt'and branch='$branch' and for1='$for'  order by nid desc";
								}
								if($nt=="home")
								{
									$branch="all";
									 $query16="select * from notification where type='$nt' and branch='$branch' or for1='$id' order by nid desc";
								}
								if($nt=="complaint")
								{
									 $query16="select * from notification where type='$nt'or branch='$branch' and for1='$id'  order by nid desc";
								}
								
							   
							  
							   $run16=mysqli_query($con,$query16);
							   $check16=mysqli_num_rows($run16);
							   if($check16==0)
							   {
								   
							   }
							   else{
								   
								   ?>
	 
	 <div class="row" >
			  
			        <div   class="col-md-12" >
			       
				        <div class="panel panel-primary ">
                                <div class="panel-heading"><center><h4>NOTIFICATION</center></h4></div>
								<div class="panel-body" style="height:40%;overflow:auto;display:block">
								
								   <marquee id="12" direction="down" style="background-color:white">
								   
								   <?php
							   while($row16=mysqli_fetch_assoc($run16))
							   {
								   ?>
								   
								   
								   <h4><?php  echo $row16['notification'];?></h4>
								   <br />
								   
								   
								   
								   
								   
								   <?php
							       }
								   ?>
								   </marquee>
								   
								   <?php
								   
								   }
								?>
                               </div>
                       </div>
			  
			  
			       </div>
		      
		          
			  
			      
				 			        
		      
		         </div>
		  
		  </div>
		  
		  </div>

		 			
		  
	
		  
			
			 <script src="../js/bootstrap.min.js"></script>
			 
			   
               
		  
		   
		   
                
         

     </body>
</html>
<?php

  $a=$_SESSION['user_id'];
    include_once("../connection/dbconn.php");
    date_default_timezone_set("Asia/Calcutta");
	$time=date("y-m-d H:i:s");
	$updatetime="update student set time='$time' where user_id='$a'";
	$run=mysqli_query($con,$updatetime);

?>