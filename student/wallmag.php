<?php
include("templets/check.php");
include("templets/header.php");
include("templets/check1.php");
?>
<div class="row" id="row1">
    <div class="col-md-8">
	   <div class="panel panel-primary">
	      <div class="panel-heading"><center><h4>Add photo to Wall Magazine</h4></center></div>
		  <div class="panel-body">
		     <form method="post" action="wallupload.php" enctype="multipart/form-data">
			    <table class="table" height="18%">
				   <tr>
				     <th>Title :-</th>
					 <td><input class="col-md-6" type="text" name="title" required="reuired"></td>
				   </tr>
				   <tr>
				     <th>Image:-</th>
					 <td><input type="file" name="file" required="reuired"></td>
				   </tr>
				   <tr>
				     <td colspan="2"><button type="submit" class="btn btn-primary">Upload</td>
				   </tr>
				</table>
			 </form>
		  </div>
	   </div>
    </div>
	<div class="col-md-4">
	 <div  class="panel panel-primary ">
			<div class="panel-heading "><h4><center>Manage Upload</center></h4> </div>
              <div class="panel-body">
			  <table class="table" width="100%" height="20%">
			    <tr>
				  <td><a href="your_wallmag.php"><span class="	glyphicon glyphicon-hand-right"></span>  see your uploded Images</a></td>
				</tr>
				
				<tr>
				  <td><a href="studentwall.php"><span class="	glyphicon glyphicon-hand-right"></span>  See wall Magzine  <span class="badge"></span></a></td>
				</tr>
				<tr>
				  <td><a href="thought.php"><span class="	glyphicon glyphicon-hand-right"></span>  Update thought</a></td>
				</tr>
				
				
				
			  </table>
	          </div>  
	        </div>
         </div>
       </div>
	<?php 
include("templets/footer1.php");
?>     