<?php
include("templetes/hod_check.php");
include("templetes/hod_check1.php");
include("templetes/hod_header.php");
date_default_timezone_set("Asia/Calcutta");
$time2=date('Y-m-d H:i:s', strtotime("-5 min"));
$fid=$_SESSION['user_id'];
			$query9="select * from faculty where faculty_id='$fid'";
			$run9=mysqli_query($con,$query9);
			$row9=mysqli_fetch_assoc($run9);
			$branch=$row9['faculty_department'];

$query="select * from student where time>='$time2' and user_branch='$branch' order by user_year asc";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);

if($check==0)
{
	
}

else{
	?>
<div class="row" id="row1">
   <div class="col-md-6">
	  <div class="panel panel-primary">
	       <div class="panel-heading"><center><h4>STUDENTS</h4></center></div>
	       <div class="panel-body">
	        <table class="table">
	          <tr>
	           <th>Name</th>
	            <th>Year</th>
	            </tr>
	            <?php
	
	        while($row=mysqli_fetch_assoc($run))
	         {
		?>
	              <tr>
	           <td><?php echo $row['user_name'];?></td>
	           <td><?php echo $row['user_branch'];?></td>
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
