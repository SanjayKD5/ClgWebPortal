<?php
								include_once("../connection/dbconn.php");
								$id=$_SESSION['user_id'];
								
								

                            
							  
							   
							   if($nt=="notice")
								{
									 $query16="select * from notification where type='$nt'and for1='$id'  order by nid desc";
								}
								if($nt=="home")
								{
									$branch="all";
									 $query16="select * from notification where type='$nt' and branch='$branch' order by nid desc";
								}
								
								
							   
							  
							   $run16=mysqli_query($con,$query16);
							   $check16=mysqli_num_rows($run16);
							   if($check16==0)
							   {
								   
							   }
							   else{
								   
								   ?>
								   
		<div class="row" id="row1">
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
	    
			<script src="../js/bootstrap.min.js"></script>
			            <script src="../js/jquery.js"></script>   


     </body>
</html>