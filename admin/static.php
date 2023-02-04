<?php
include("templetes/check.php");
include("templetes/admin_header.php");
?>
<div class="row" id="row1">
    <div  class="col-md-6">
		<div class="panel panel-primary ">
		<div class="panel-heading"><center><h4>OPERATION </center></h4></div>
       <div class="panel-body">
	   
	   <table class="table" height="21%">
	   <tr>
	   <td class="col-md-12"><a href="endsem.php"><span class="glyphicon glyphicon-hand-right">&nbsp; </span>  End Year</a></td>
	   </tr>
	   <tr>
	   <td class="col-md-12"><a href="suspend.php"><span class="glyphicon glyphicon-hand-right">&nbsp; </span> Suspend User</a></td>
	   </tr>
	    <tr>
	   <td class="col-md-12"><a href="resume.php"><span class="glyphicon glyphicon-hand-right">&nbsp; </span> Resume User</a></td>
	   </tr>
	    </table>
	   </div>
                                
         </div>		  
	 </div>
		      
	 <div  class="col-md-6" >
			       
		 <div class="panel panel-primary ">
            <div class="panel-heading"><center><h4>TOTAL FACULTY </center></h4></div>
              <div class="panel-body"><?php 
								
				  include("../connection/dbconn.php");
				  $status="verified";
				  $query="SELECT faculty_department ,count(faculty_department) FROM  faculty where status='$status' group by faculty_department";
				   $run=mysqli_query($con,$query);
				  ?>
				  <table class="table">
				  <?php
					 while( $row=mysqli_fetch_assoc($run)){
									 ?>
									 <tr>
								 <td> <?php print_r($row['faculty_department']);?></td>
								 <td> <?php print_r($row['count(faculty_department)']);?></td>
								 </tr><?php
								  
								 }
								 ?>
								 
								 </table>
								 </div>
                       </div>
			  
			  
			       </div>
				 			        
		      
		         </div>
