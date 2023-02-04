<?php

include("connection/dbconn.php");
include("templetes/home_header.php");





$status="verified";

$query="SELECT * FROM  photo order by pid desc";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);






?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<?php 

			   if($row==0)
			   {
				   ?><script>
				   window.alert("currently there are no photo");
				   window.open("index.php","_self");
				   
				   </script>
			  <?php }
			  else{
				  
				  
         ?>
	   <div class="item active">
           <div class="row" id="row1">	
                  
               				  
			     <div   class="col-md-12"  >
			       <div  class="panel panel-primary ">
				    <div class="panel-body">
			          
			              
						     
							 <tr>
				               <img width="100%"  height="65%" src="photos/<?php echo $row['image']; ?>">
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
                  
               				  
			     <div   class="col-md-12"  >
			       <div  class="panel panel-primary ">
				    <div class="panel-body">
			          
			              
						     
							 <tr>
				               <img width="100%"  height="65%" src="photos/<?php echo $row['image']; ?>">
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
include("templetes/home_footer.php");
?>