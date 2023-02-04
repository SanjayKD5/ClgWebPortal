<?php

include("templets/check.php");
include("templets/header.php");
include("templets/check1.php");

$nt="notice";

$id=$_SESSION['user_id'];

$query1="select * from student where user_id='$id'";
$run1=mysqli_query($con,$query1);
$row1=mysqli_fetch_assoc($run1);
$branch=$row1['user_branch'];

$type="Event_Academic";
$status="verified";

$query="SELECT * FROM `noticeboard` WHERE branch='$branch' and type='$type' and status='$status' order by notice_id desc" ;
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
                      if($check==0)
			   {
				   
			   }
			  else{

?>

<div class="row" id="row1">				
		 <div class="col-md-6"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">ACADEMIC EVENTS</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  
				  </tr>
				  
					   <?php 
					 while( $row=mysqli_fetch_assoc($run)) 
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row['title'];?></h4></td>
				  <td><h4><?php echo mb_strimwidth($row['description'], 0, 30, '...');  ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row['notice_id'];?>&type=event">  More details</a></h4></td>
				  </tr>
				  
				  		 
			  <?php
			  } 
			  ?>
				  </table>
				  </div>
			   </div>
			</div>


<?php
			  }
			  
			  
			  
			  
			  
			  
			  

$type1="Event_Sport";
$query2="SELECT * FROM `noticeboard` WHERE  type='$type1' and status='$status' order by notice_id desc" ;
$run2=mysqli_query($con,$query2);
$check2=mysqli_num_rows($run2);
     if($check2==0)
        { }
			  else{
				  ?>
				  
			
		 <div class="col-md-6"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">SPORT EVENtS</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  
				  </tr>
				  
					   <?php 
					  while( $row2=mysqli_fetch_assoc($run2))
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row2['title'];?></h4></td>
				  <td><h4><?php echo mb_strimwidth($row2['description'], 0, 30, '...');  ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row2['notice_id'];?>&type=event">  More details</a></h4></td>
				  </tr>
				  
				  		 
			  <?php
			  } 
			  ?>
				  </table>
				  </div>
			   </div>
			</div>
</div>
       
<?php
			  }	



$type2="Event_Competition";
$query3="SELECT * FROM `noticeboard` WHERE type='$type2' and status='$status' order by notice_id desc" ;
$run3=mysqli_query($con,$query3);
$check3=mysqli_num_rows($run3);
if($check3==0)
        { }
			  else{
				  ?>
<div class="row" id="row1">				
		 <div class="col-md-12"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">EXAMINATION EVENTS</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  
				  </tr>
				  
					   <?php 
					while( $row3=mysqli_fetch_assoc($run3))  
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row3['title'];?></h4></td>
				  <td><h4><?php echo mb_strimwidth($row3['description'], 0, 30, '...');  ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row3['notice_id'];?>&type=event">  More details</a></h4></td>
				  </tr>
				  
				  		 
			  <?php
			  } 
			  ?>
				  </table>
				  </div>
			   </div>
			</div>
</div>
       <?php
			  }	 


include("templets/footer.php");
?>	   
					 
			