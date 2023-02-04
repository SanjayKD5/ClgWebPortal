<?php
include("templetes/hod_check.php");
include("templetes/hod_check1.php");
include("templetes/hod_header.php");
?>
<div class="row" id="row1">
    <div  class="col-md-6">
		<div class="panel panel-primary ">
		<div class="panel-heading"><center><h4>OPERATION </center></h4></div>
       <div class="panel-body">
	   
	   <table class="table" height="33%">
	   <tr>
	   <td class="col-md-12"><a href="?feedback=1"><span class="glyphicon glyphicon-hand-right">&nbsp; </span>  Take Feedback</a></td>
	   </tr>
	   <tr>
	   <td class="col-md-12"><a href="seefb.php"><span class="glyphicon glyphicon-hand-right">&nbsp; </span>  See Feedback</a></td>
	   </tr>
	   <tr>
	   <td class="col-md-12"><a href="honline.php"><span class="glyphicon glyphicon-hand-right">&nbsp; </span> Online User</a></td>
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
            <div class="panel-heading"><center><h4>----</center></h4></div>
              <div class="panel-body">
			  
			  <table class="table">
			  <?php
			  if(isset($_GET['feedback']))
			  {
				  ?>
				  <form action="fedop.php" method="post">
				  <tr>
				  <th><label> Academic year</label></th>
				  <td><input type="text" name="ay" required></td>
				  </tr>
				  <tr>
				  <th> <label> Program</label></th>
				  <td><input type="text" name="pro" required></td>
				  </tr>
				  <tr>
				  <th><label> Semester</label></th>
				  <td><input type="text" name="sem" required></td>
				  </tr>
				  <tr>
				  <th><label> Date</label></th>
				  <td><input type="date" name="date" required></td>
				  </tr>
				  <tr>
				  <td>
				  
				  <button type="submit" class="btn btn-primary">TAKE FEEDBACK</button>
				  </td>
				  </tr>
				   </form>
				  <?php
			  }
			  else{
				  
				  ?>
				  <img class="img-responsive" width="100%"  style="height:33%" src="../images/other.png">
				  
				  
				  <?php
			  }
			  
			  
			  
			  ?>
			   </table>
			  
								 </div>
                       </div>
			  
			  
			       </div>
				 			        
		      
		         </div>
