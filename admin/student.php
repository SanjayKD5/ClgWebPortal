<?php

include("templetes/check.php");
include("templetes/admin_header.php");

?>

 <div class="row" id="row1">
			  
	 <div   class="col-md-6" id="col" >
			       
		 <div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">ADD STUDENT</h4> </div>
              <div class="panel-body">
				 <form method="post" action="insertdata.php">
					<table class="table" height="30%">
					  <tr>
						 <td ><label>Number of Student<label></td>	   
						 <td class="col-md-6" style="line-Height:35px"> <input name="nos" type="number" required="required" ></td>
					   </tr>
					 <tr>
						<td > <label>Select Branch</label></td>
						 <td class="col-md-6"> 
						   <select style="height:35px" name="branch" >
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
					     <td colspan="2" ><button type="submit" name="student" style="padding-top:20px;" class="btn btn-primary col-md-2">GO</td>
					  </tr>
				  </table>
				 </form>
			   </div>  
              </div>
	  </div>
	  <div   class="col-md-6" id="col" >
			       
		 <div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">REMOVE STUDENT</h4> </div>
              <div class="panel-body" id="panel">
			      <form method="post" action="remove.php">
					<table class="table" >
					<tr>
					  <td > <label>Select Branch</label></td>
						 <td class="col-md-6"> 
						   <select style="height:35px" name="branch" >
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
						 <td ><label>Select Year<label></td>
                          <td class="col-md-6"> 						 
						    <select style="height:35px" name="year" >
							 <option value="first">FIRST </option>
							 <option value="second">SECOND</option>
							 <option value="third">THIRD</option>
							</select>
						  </td>
					   </tr>

					   <tr>
					      <td colspan="2"><button type="submit" name="student" class="btn btn-primary col-md-2">proceed</button><td>
					  </tr>
					
					   <tr>
					      <td colspan="2"><a style="line-height:50px"  href="removemultiple.php" >Remove Multiple Student</a><td>
					  </tr>
					</table>
				  </form>

			  </div>
		 </div>	
	  </div>	 
	  
</div>
<div class="row" id="row1">
<div  class="col-md-6" >
	      <div class="panel panel-primary ">
              <div class="panel-heading"><h4 align="center">SEARCH STUDENT</h4> </div>
              <div class="panel-body">
				<form method="post" action="search_proc.php">
					<table class="table">
					 <tr>
					  <td > <label>Select Branch</label></td>
						 <td class="col-md-6"> 
						   <select style="height:35px" name="branch" >
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
						 <td ><label>Select Year<label></td>
                          <td class="col-md-6"> 						 
						    <select style="height:35px" name="year" >
							 <option value="first">FIRST </option>
							 <option value="second">SECOND</option>
							 <option value="third">THIRD</option>
							</select>
						  </td>
					   </tr>
					
					  <tr>
						 <td colspan="2" ><button name="student" type="submit" style="padding-top:20px;" class="btn btn-primary col-md-2">GO</td>
					 </tr>
					
				   </table>
			   </form>
		     </div>  
           </div>
	  </div>
	  <div   class="col-md-6" id="col" >
			       
		 <div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">VIEW STUDENT-ID</h4> </div>
              <div class="panel-body">
				 <form method="post" action="viewexe.php">
					<table class="table">
					<tr>
					  <td > <label>Select Branch</label></td>
						 <td class="col-md-6"> 
						   <select style="height:35px" name="branch" >
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
						 <td ><label>Select Year<label></td>
                          <td class="col-md-6"> 						 
						    <select style="height:35px" name="year" >
							 <option value="first">FIRST </option>
							 <option value="second">SECOND</option>
							 <option value="third">THIRD</option>
							</select>
						  </td>
					   </tr>
					
					  <tr>
					     <td colspan="2" ><button type="submit" name="student" style="padding-top:20px;" class="btn btn-primary col-md-2">GO</td>
					  </tr>
				  </table>
				 </form>
			   </div>  
              </div>
	  </div>
</div>
