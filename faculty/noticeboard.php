<?php
include("../connection/dbconn.php");
include("templetes/staff_check.php");
include("templetes/staff_header.php");
$id=$_SESSION['user_id'];

$query1="select * from faculty where faculty_id='$id'";
$run1=mysqli_query($con,$query1);
$row1=mysqli_fetch_assoc($run1);
$branch=$row1['faculty_department'];
//academic notices
$type="Academic";
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
		 <div class="col-md-12"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">ACADEMIC NOTICES</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  <th><h2>click here</h2><th>
				  </tr>
				  
					   <?php 
					  while( $row=mysqli_fetch_assoc($run))
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row['title'];?></h4></td>
				  <td><h4><?php echo $row['description']; ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row['notice_id'];?>&type=notice">  More details</a></h4></td>
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
			  
			  
			  
			  
			  
			  
			  
//official notices
$type1="Official";
$query1="SELECT * FROM `noticeboard` WHERE branch='$branch' and type='$type1' and status='$status' order by notice_id desc" ;
$run1=mysqli_query($con,$query1);
$check1=mysqli_num_rows($run1);
     if($check1==0)
        { }
			  else{
				  ?>
				  
<div class="row" id="row1">				
		 <div class="col-md-12"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">OFFICIAL NOTICES</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  <th><h2>click here</h2><th>
				  </tr>
				  
					   <?php 
					 while( $row1=mysqli_fetch_assoc($run1)) 
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row1['title'];?></h4></td>
				  <td><h4><?php echo $row1['description']; ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row1['notice_id'];?>&type=notice">  More details</a></h4></td>
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



//examination notices
$type2="Examination";
$query2="SELECT * FROM `noticeboard` WHERE branch='$branch' and type='$type2' and status='$status' order by notice_id desc" ;
$run2=mysqli_query($con,$query2);
$check2=mysqli_num_rows($run2);
if($check2==0)
        { }
			  else{
				  ?>
<div class="row" id="row1">				
		 <div class="col-md-12"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">EXAMINATION NOTICES</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  <th><h2>click here</h2><th>
				  </tr>
				  
					   <?php 
					while( $row2=mysqli_fetch_assoc($run2))  
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row2['title'];?></h4></td>
				  <td><h4><?php echo $row2['description']; ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row2['notice_id'];?>&type=notice">  More details</a></h4></td>
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




	//cultural notices	
$type3="Cultural";
$query3="SELECT * FROM `noticeboard` WHERE branch='$branch' and type='$type3' and status='$status' order by notice_id desc" ;
$run3=mysqli_query($con,$query3);
$check3=mysqli_num_rows($run3);
if($check3==0)
        { }	
	else{
				  ?>
<div class="row" id="row1">				
		 <div class="col-md-12"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">CALTURAL NOTICES</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  <th><h2>click here</h2><th>
				  </tr>
				  
					   <?php 
					  while( $row3=mysqli_fetch_assoc($run3))
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row3['title'];?></h4></td>
				  <td><h4><?php echo $row3['description']; ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row3['notice_id'];?>&type=notice">  More details</a></h4></td>
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
	
	
	
	$type="Event_Academic";

$query4="SELECT * FROM `noticeboard` WHERE branch='$branch' and type='$type' and status='$status' order by notice_id desc" ;
$run4=mysqli_query($con,$query4);
$check4=mysqli_num_rows($run4);
                      if($check4==0)
			   {
				   
			   }
			  else{

?>

<div class="row" id="row1">				
		 <div class="col-md-12"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">ACADEMIC EVENTS</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  <th><h2>click here</h2><th>
				  </tr>
				  
					   <?php 
					   while( $row4=mysqli_fetch_assoc($run4))
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row4['title'];?></h4></td>
				  <td><h4><?php echo $row4['description']; ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row4['notice_id'];?>&type=event">  More details</a></h4></td>
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
			  
			  
			  
			  
			  
			  
			  

$type5="Event_Sport";
$query5="SELECT * FROM `noticeboard` WHERE  type='$type1' and status='$status' order by notice_id desc" ;
$run5=mysqli_query($con,$query5);
$check5=mysqli_num_rows($run5);
     if($check5==0)
        { }
			  else{
				  ?>
				  
<div class="row" id="row1">				
		 <div class="col-md-12"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">SPORT EVENtS</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  <th><h2>click here</h2><th>
				  </tr>
				  
					   <?php 
					  while( $row5=mysqli_fetch_assoc($run5))
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row5['title'];?></h4></td>
				  <td><h4><?php echo $row5['description']; ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row5['notice_id'];?>&type=event">  More details</a></h4></td>
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



$type6="Event_Competition";
$query6="SELECT * FROM `noticeboard` WHERE type='$type2' and status='$status' order by notice_id desc" ;
$run6=mysqli_query($con,$query6);
$check6=mysqli_num_rows($run6);
if($check6==0)
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
				  <th><h2>click here</h2><th>
				  </tr>
				  
					   <?php 
					 while( $row6=mysqli_fetch_assoc($run6)) 
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row6['title'];?></h4></td>
				  <td><h4><?php echo $row6['description']; ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row6['notice_id'];?>&type=event">  More details</a></h4></td>
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




?>	   
					 
			