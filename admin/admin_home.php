<?php

include("templetes/check.php");
include("templetes/admin_header.php");

?>
		  
		 
<div class="row" id="row1">
			  
   <div   class="col-md-7" id="col" >
			       
	<div  class="panel panel-default ">
       <div  class="panel-body"><img  src="../images/student.png" width="100%" height="50%"></div>
                                
         </div>
			  
			  
	 </div>
		      
	 <div  class="col-md-5" >
			       
		 <div class="panel panel-primary ">
            <div class="panel-heading"><center><h4>TOTAL STUDENT </center></h4></div>
              <div class="panel-body"><?php 
								
				  include("../connection/dbconn.php");
				  $query="SELECT user_branch ,count(user_branch) FROM  student group by user_branch";
				   $run=mysqli_query($con,$query);
				  ?>
				  <table class="table">
				  <?php
					 while( $row=mysqli_fetch_assoc($run)){
									 ?>
									 <tr>
								 <td> <?php print_r($row['user_branch']);?></td>
								 <td> <?php print_r($row['count(user_branch)']);?></td>
								 </tr><?php
								  
								 }
								 ?>
								 
								 </table>
								 </div>
                       </div>
			  
			  
			       </div>
				 			        
		      
		         </div>
<?php
 include("templetes/admin_footer.php");
?>