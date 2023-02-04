<?php
include("../connection/dbconn.php");
include("templetes/check.php");

$receiver="admin";
$state="unsolved";
$query="SELECT * FROM complaint WHERE receiver='$receiver' and state='$state'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
if($check==0)
{
	?>
	<script>
	window.alert("currently there are no complaints");
	window.open("admin_home.php","_self");
	</script>
	<?php
}
else
{
   include("templetes/admin_header.php");
   ?>
   
   <div class="row1" id="row1">
      <div class="col-md-12">
	   <div class="panel panel-primary">
	     <div class="panel-heading"><center><h4>Complaints</center></h4></div>
		 <div class="panel-body">
		 <table class="table" >
		 <tr>
		 <th>Subject</th>
		 
		 <th>Branch</th>
		 <th>Year</th>
		 <th></th>
		 </tr>
		 <?php
		 while($row=mysqli_fetch_assoc($run))
		 {
		$sid=$row['st_id'];
			 $query2="select * from student where user_id='$sid'";
			 $run2=mysqli_query($con,$query2);
			 $row2=mysqli_fetch_assoc($run2);
			 ?>
			 <tr>
			 <td><?php  echo $row['sub']; ?></td>
			 <td><?php echo $row2['user_branch']?>
			 <td><?php  echo $row2['user_year']; ?></td>
			 <td><a href="complaint_detail.php?id=<?php echo $row['comp_id']; ?>">More details</a></td>
			 </tr>
			 <?php
			 
		 }?>
		 </table>
		 </div>
	   </div>
	  </div>
   </div>
   
   <?php

}


?>