<?php

include("templetes/check.php");
include("templetes/admin_header.php");

?>

 <div class="row" id="row1">
			  
	 <div   class="col-md-6" id="col" >
			       
		 <div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">ADD FACULTY</h4> </div>
              <div class="panel-body">
				 <form method="post" action="insertdata.php">
					<table class="table">
					  <tr>
						 <td ><label>Number of FACULTY<label></td>	   
						 <td  style="line-Height:35px"> <input name="nos" type="number" required="required" ></td>
					   </tr>
					 <tr>
						<td > <label>Select Department</label></td>
						 <td > 
						   <select style="height:35px" name="department" >
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
						<td > <label>Select POST</label></td>
						 <td > 
						   <select style="height:35px" name="post" >
							 <option value="hod">HOD </option>
							 <option value="staff">STAFF</option>
							
						    </select>
						 </td>
					 </tr>
					  <tr>
					     <td  ><button type="submit" name="faculty" class="btn btn-primary ">GO</td>
					  </tr>
				  </table>
				 </form>
			   </div>  
              </div>
	  </div>
	  <div   class="col-md-6" id="col" >
			       
		 <div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">REMOVE FACULTY</h4> </div>
              <div class="panel-body" id="panel">
			      <form method="post" action="remove.php">
					<table class="table">
					  					 <tr>
						<td > <label>Select Department</label></td>
						 <td > 
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
					      <td colspan="2"><button  type="submit" name="faculty" class="btn btn-primary ">Go</button><td>
					  </tr>
					   <tr>
					      <td colspan="2" style="padding-top:48px;" ><a style="line-height:50px"  href="removemultiple1.php" >Remove Multiple Faculty</a><td>
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
              <div class="panel-heading"><h4 align="center">SEARCH FACULTY</h4> </div>
              <div class="panel-body">
				<form method="post" action="search_proc.php">
					<table class="table">
					  <tr>
						<td > <label>Select Department</label></td>
						 <td > 
						   <select style="height:35px" name="department" >
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
						<td > <label>Select POST</label></td>
						 <td > 
						   <select style="height:35px" name="post" >
							 <option value="hod">HOD </option>
							 <option value="staff">STAFF</option>
							
						    </select>
						 </td>
					 </tr>
					  <tr>
						 <td colspan="2" ><button name="faculty" type="submit" style="padding-top:20px;" class="btn btn-primary col-md-2">GO</td>
					 </tr>
					  
				   </table>
			   </form>
		     </div>  
           </div>
	  </div>
	  <div   class="col-md-6" id="col" >
			       
		 <div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">VIEW FACULTY-ID</h4> </div>
              <div class="panel-body" id="panel">
			      <form method="post" action="viewexe.php">
					<table class="table">
					  <tr>
					      <td > <label>Select Department</label></td>
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
                          <td ><label>Select Post<label></td>
                          <td class="col-md-6"> 						 
						    <select style="height:35px" name="post" >
							 <option value="hod">HOD </option>
							 <option value="staff">STAFF</option>
							</select>
						  </td>
					   
					  </tr>
					   <tr>
					     <td colspan="2" ><button type="submit" name="faculty" style="padding-top:20px;" class="btn btn-primary col-md-2">GO</td>
					  </tr>
					</table>
				  </form>

			  </div>
		 </div>	
	  </div>	 
	  
</div>

