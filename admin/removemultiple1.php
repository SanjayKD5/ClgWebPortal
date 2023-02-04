<?php

include("templetes/check.php");
include("templetes/admin_header.php");

?>
 <div class="row" id="row1">
      <div   class="col-md-6"  >
			       
		 <div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">Remove Faculty By Department</h4> </div>
              <div class="panel-body">
				 <form method="post" action="rme.php">
					<table class="table">
					 
					 <tr>
						<td > <label>Select Department :-</label></td>
						 <td class="col-md-6"> 
						   <select style="height:35px" name="branch1" >
							 <option value="computer">COMPUTER </option>
							 <option value="civil">CIVIL</option>
							 <option value="chemical">CHEMICAL</option>
							 <option value="mechanical">MECHANICAL</option>
							 <option value="electrical">ELECTRICAL</option>
							  <option value="electronics">ELECTRONICS</option>
						    </select>
						 </td>
					 </tr>
					  <tr>
					     <td colspan="2" ><button type="submit" name="department"  class="btn btn-primary col-md-2">GO</td>
					  </tr>
				  </table>
				 </form>
			   </div>  
              </div>
	  </div>
 <div   class="col-md-6"  >
			       
		 <div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">Remove Faculty By Post</h4> </div>
              <div class="panel-body" id="panel">
			      <form method="post" action="rme.php">
					<table class="table">
					  <tr>
					      <td><label >   Enter the Post :- </label></td>
					      <td><select class="col-md-8" style="height:35px" name="post1" >
							 <option value="hod">HOD </option>
							 <option value="staff">STAFF</option>
							 
							 </select></td>
					  </tr>

					   <tr>
					      <td colspan="2"><button type="submit" name="post" class="btn btn-primary col-md-2">Go</button><td>
					  </tr>
					   
					</table>
				  </form>

			  </div>
		 </div>	
	  </div>	 
	  
</div>
