<?php
include("templets/header.php");
include("templets/check.php");
include("templets/check1.php");
$nt="complaint";

?>
<div class="row" id="row1">

			        <div  class="col-md-8" >
			       
				        <div class="panel panel-primary ">
                                <div class="panel-heading"><center><h4>COMPLAINT</h4></center></div>
                                <div class="panel-body">
								<form action="comp_proc.php" method="post" enctype="multipart/form-data">
								 <table class="table">
								   <tr>
								   <th>To</th>
								   <td><select class="col-md-4" name="to">
								   <option value="admin">ADMIN</option>
								   <option value="hod">HOD</option>
								   </select><td>
								   </tr>
								   <tr>
								   <th> Subject </th>
								   <td> <input type="text" required="required" class="col-md-12" name="sub"></td>
								   </tr>
								   <tr>
				                   <th>Detail Description </th>
				                      <td><textarea rows="9" required="required" name="desc" class="col-md-12"></textarea>  </td>
			                       </tr>
								   <tr>
				                   <th>Image if any </th>
								   </tr>
								   <tr>
				                      <td><input type="file" name="img"> </td>
			                       </tr>
                                    <tr>
				                      <td><input type="submit" class="btn btn-primary" value="submit">  </td>
			                       </tr>								   
								   
								 </table>
								</form>
								</div>
                       </div>
			  
			  
			       </div>
				   <div class="col-md-4">
				   <div  class="panel panel-primary ">
				   <div class="panel-heading"><center><h4>COMPLAINT BOX</h4></center></div>
				   
                    <div  class="panel-body">
					
					<table class="table">
				   <tr>
				   <a href="your_complaint.php"><span class="glyphicon glyphicon-hand-right">   Your uploaded complaints</span></a>
				   </tr>
				   
				   </table>
					
					
					<img  src="../images/complaint1.jpg" width="100%" height="66%"></div>
                                
                       </div>
				   </div>
				   
	</div>
		<?php
		include("templets/footer.php");
		?>
				 