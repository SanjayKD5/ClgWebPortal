<?php

include("templets/check.php");
include("templets/header.php");
include("templets/check1.php");

$type="wallmag";
$status="verified";

$query="SELECT * FROM `noticeboard` WHERE type='$type' and status='$status' order by notice_id desc";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);






?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<?php 

			   if($row==0)
			   {
				   ?><script>
				   window.alert("currently there are no images");
				   window.open("wallmag.php","_self");
				   
				   </script>
			  <?php }
			  else{
				  $id=$row['uploaded_by'];
                  $query1="select * from student where user_id='$id'";
                  $run1=mysqli_query($con,$query1);
				  $row1=mysqli_fetch_assoc($run1);
				  
         ?>
	   <div class="item active">
           <div class="row" id="row1">	
                  <div class="col-md-4">
				    <div  class="panel panel-primary ">
				    <div class="panel-heading"><h4 align="center"> Wall Magazine</h4> </div>
                       <div class="panel-body">
					   <table class="table" height="39%">
					   <tr>
							   <td><h1>Title:-  <?php echo $row['title'];?></h1></td>
					  </tr>
					  <tr>
							   <td><h4>Uploaded by  :-<?php echo $row1['user_name'];?></h4></td>
					  </tr>
					   </table>
				       </div>
				   </div>
			    </div>
               				  
			     <div   class="col-md-8"  >
			       <div  class="panel panel-primary ">
				    <div class="panel-body">
			          
			              
						     
							 <tr>
				               <img width="100%"  height="50%" src="../images_wall/<?php echo $row['image']; ?>">
				              </tr>
							  
							 
				        </div>  
				       </div>
					   </div>
				  
				</div>
        </div>		
       
		<?php
			  
			  while( $row=mysqli_fetch_assoc($run))
			  {
				 
				  ?>
			   <div class="item ">
 <div class="row" id="row1">	
                  <div class="col-md-4">
				    <div  class="panel panel-primary ">
				    <div class="panel-heading"><h4 align="center"> Wall Magazine</h4> </div>
                       <div class="panel-body">
					   <table class="table" height="39%">
					   <tr>
							   <td><h1>Title:-  <?php echo $row['title'];?></h1></td>
					  </tr>
					  <tr>
							   <td><h4>Uploaded by  :-<?php echo $row1['user_name'];?></h4></td>
					  </tr>
					   </table>
				       </div>
				   </div>
			    </div>
               				  
			     <div   class="col-md-8"  >
			       <div  class="panel panel-primary ">
				    <div class="panel-body">
			          
			              
						     
							 <tr>
				               <img width="100%"  height="50%" src="../images_wall/<?php echo $row['image']; ?>">
				              </tr>
							  
							 
				        </div>  
				       </div>
					   </div>
				  
				</div>
        </div>
	 
				  
			 <?php }
			 
			 ?>
 </div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
 
	 

<?php
			  }
			   
include("templets/footer1.php"); 

?>