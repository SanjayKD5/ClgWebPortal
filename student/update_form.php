<! DOCTYPE html>

<?php include("templets/check.php");?>
<html>
     <head>
            <meta name="viewport" content=" width:device-width, initial-scale=1.1">
			 <meta charset="utf-8">
		           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
                   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
                    <link href="../style/design.css" rel="stylesheet" type="text/css">
           


	

     </head>
     <body style="background:lightblue;">
	      <div id="div1">
		  
             <div class="container-fluid" id="div2"  >
			     <h1 id="head" align="center"  >STUDENT SECTION </h1>
		   
		   
		     </div>
		   
		     <div style="padding:0;margin:0 auto" >
                 <ul id="ul"  class="nav nav-tabs " >
                     	<li> <a href="home.php" class="glyphicon glyphicon-home " style="float:right;padding-top:20px"></a></li>
						
                     
                 </ul>
		   
		     </div>
		  </div>
		   
		  <div class="container" >
		  
		      <div id="div-m">
			        <marquee><h4>THIS PROJECT DEALS WITH THE INFRASTRUCTURE OF COLLEGE</h4></marquee>
			  </div>
			  
			  <!--    Body started     -->
			  
			  
<div class="row" id="row1">				
		 <div class="col-md-11"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">Upadate Form</h4> </div>
                       <div class="panel-body">
					   <form action="upform.php" method="post">
					   <table class="table">
					      <tr>
						  <td class="col-md-6"> <h5><b>Sem1 Percentage :-</b></h5></td>
						  <td class="col-md-6"><input type="number" step="0.01" placeholder="enter your percentage" name="p1"></td>
						  </tr>
						   <tr>
						  <td class="col-md-6"><h5><b>Sem2 Percentage :-</b> </h5></td>
						  <td class="col-md-6"><input type="number" step="0.01" placeholder="enter your percentage" name="p2"></td>
						  </tr>
						   <tr>
						  <td class="col-md-6"> <h5><b>Result :-</b></h5></td>
						  <td ><select style="height:30" name="res" class="col-md-5">
						  <option>pass</option>
						  <option>fail</option>
						  <option>atkt</option>
						    </select>
						  </td>
						  </tr>
						  <tr>
						  <td colspan="2">
						  <button type="submit" class="btn btn-primary" name="go">SUBMIT</button>
						  </td>
						  </tr>
					   </table>
					   </form>
					   </div>
				   </div>
		  </div>
</div>		  