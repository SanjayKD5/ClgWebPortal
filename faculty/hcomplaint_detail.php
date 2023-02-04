<?php
include("../connection/dbconn.php");
include("templetes/hod_header.php");

$id=$_GET['id'];

$query="select * from complaint where comp_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$sid=$row['st_id'];
$query2="select * from student where user_id='$sid'";
$run2=mysqli_query($con,$query2);
$row2=mysqli_fetch_assoc($run2);
$status="seen";
$query3="UPDATE `complaint` SET `status`='$status'";
$run=mysqli_query($con,$query3);

?>
<div class="row" id="row1">
  <div class="col-md-11">
    <div class="panel panel-primary">
      <div class="panel-heading">Complaint Detail</div>
	  <div class="panel-body">
	  <form action="hcomp_sol.php?id=<?php echo $id; ?>"  method="post">
	  <table class="table">
	    <tr>
		<th>Branch</th>
		<td><?php echo $row2['user_branch'] ?></td>
		</tr>
		<tr>
		<th>Year</th>
		<td><?php echo $row2['user_year'] ?></td>
		</tr>
		<tr>
		<th>Subject</th>
		<td><?php echo $row['sub'] ?></td>
		</tr>
		<?php
		if(!empty($row['img']))
		{
			?>
			
			<tr>
			<td></td>
			<td><img src="../images/<?php echo $row['img'];?>" class="img-responsive"></td>
			</tr>
			<?php
		}
		?>
		<tr>
		<th>Description</th>
		<td><?php echo $row['desc'] ?></td>
		</tr>
		<tr>
		<th>Reply</th>
		<td><textarea class="col-md-8" name="reply" placeholder="write the solution or action taken here"></textarea></td>
		</tr>
		<tr>
		<td><button type="submit" class="btn btn-primary" >submit</button></td>
		</tr>
	  </table>
	  </form>
	  </div>
    </div>
  </div>
</div>