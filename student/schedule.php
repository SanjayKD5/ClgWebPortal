<?php
include("templets/check.php");
include("../connection/dbconn.php");
include("templets/check1.php");
include("templets/header.php");
$nt="notice";
$id=$_SESSION['user_id'];

$query1="select * from student where user_id='$id'";
$run1=mysqli_query($con,$query1);
$row1=mysqli_fetch_assoc($run1);
$branch=$row1['user_branch'];
//academic notices
$type="Schedule";
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
		 <div class="col-md-11"  >
			       <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center">SCHEDULE NOTICES</h4> </div>
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
</div>



<?php
			  }
			  
			  
			  $query1="SELECT * FROM `schedule` WHERE st_id='$id' order by sid desc";
			  $run1=mysqli_query($con,$query1);
			  $check1=mysqli_num_rows($run1);
			  
			  if($check1==0)
			   {
				   
			   }
			  else{
			   ?>
			   
<div class="row" id="row1">
  <div class="col-md-11">
      <div class="panel panel-primary">
	     <div class="panel-heading"><center><h4>Event related</h4></center></div>
		 <div class="panel-body">
		    <table class="table" style="display:block;overflow:auto" height="44%">
			<tr>
				 <td>
				 <img src="../images/background4.jpg" />
				 </td>
				 </tr>
			<tr>
			<th>For</th>
			   <th>Message</th>
			   </tr>
			<?php 
			while($row1=mysqli_fetch_assoc($run1))
			{
			$nid=$row1['nid'];
			  $query2="SELECT * FROM `noticeboard` WHERE notice_id='$nid'";
			  $run2=mysqli_query($con,$query2);
			  $row2=mysqli_fetch_assoc($run2);
			  ?>
			   <tr>
			   <td><?php echo $row2['title']; ?></td>
			   <td><?php echo $row1['notice']; ?></td>
			   </tr>
			   
			   <?php
			} ?>
		    </table>
		 </div>
	  </div>
  </div>

</div>
<?php
			  }
			  include("templets/footer.php");
?>