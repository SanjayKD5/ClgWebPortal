<?php
include("../connection/dbconn.php");
include("templets/check.php");
include("templets/header.php");
include("templets/check1.php");
$nt="notice";
$id=$_SESSION['user_id'];

$query1="select * from student where user_id='$id'";
$run1=mysqli_query($con,$query1);
$row1=mysqli_fetch_assoc($run1);
$branch=$row1['user_branch'];
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
		 <div class="col-md-6"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">ACADEMIC NOTICES</h4> </div>
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
				  <td><h4><?php echo mb_strimwidth($row['description'], 0, 30, '...'); ?></h4></td>
				  <td><h4><a href="notice_detail.php?id=<?php echo $row['notice_id'];?>&type=notice">  More details</a></h4></td>
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
			  
			  
			  
			  
			  
			  
			  
//official notices
$type1="Official";
$query1="SELECT * FROM `noticeboard` WHERE branch='$branch' and type='$type1' and status='$status' order by notice_id desc" ;
$run1=mysqli_query($con,$query1);
$check1=mysqli_num_rows($run1);
     if($check1==0)
        { }
			  else{
				  ?>
				  
				
		 <div class="col-md-6"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">OFFICIAL NOTICES</h4> </div>
                       <div class="panel-body">
					    <table class="table table-responsive" style="display:block;overflow:auto" height="44%">
						 <tr>
				  <th><h2>Title</h2></th>
				  <th><h2>Description</h2></th>
				  
				  </tr>
				  
					   <?php 
					while( $row1=mysqli_fetch_assoc($run1))  
			       {
				 
				  ?>
				  <tr>
				  <td><h4><?php echo $row1['title'];?></h4></td>
				  <td><h4><?php echo mb_strimwidth($row1['description'], 0, 30,'...'); ?></h4></td>
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
		 <div class="col-md-6"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">EXAMINATION NOTICES</h4> </div>
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
				  <td><h4><a href="notice_detail.php?id=<?php echo $row2['notice_id'];?>&type=notice">  More details</a></h4></td>
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




	//cultural notices	
$type3="Cultural";
$query3="SELECT * FROM `noticeboard` WHERE branch='$branch' and type='$type3' and status='$status' order by notice_id desc" ;
$run3=mysqli_query($con,$query3);
$check3=mysqli_num_rows($run3);
if($check3==0)
        { }	
	else{
				  ?>
				
		 <div class="col-md-6"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">CALTURAL NOTICES</h4> </div>
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
	


include("templets/footer.php");
?>	   
					 
			