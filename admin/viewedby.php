<?php
include("../connection/dbconn.php");

$id=$_GET['id'];
$query="SELECT * FROM `history` WHERE notice_id='$id'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
if($check==0)
{
	?><script>
	window.alert("no one seen the notice yet");
	window.open("noticesuplodedbyadmin.php","_self");
	</script>
	
<?php }
else
{
	include("templetes/admin_header.php");
	
	?>
	
	
<div class="row" id="row1">
   <div class="col-md-11">
   <div class="panel panel-primary">
    <div class="panel-heading"><center><h4>Student</h4></center></div>
	<div class="panel-body">
	  <table class="table" >
	    
	   <tr>
	   <th>Name</th>
	   <th>Department</th>
	   </tr>
	   
	   <?php 
	   while($row=mysqli_fetch_assoc($run))
	   {
		   $sid=$row['fac_id'];
		   $query2="SELECT * FROM `faculty` WHERE  faculty_id='$sid'";
		   $run2=mysqli_query($con,$query2);
		   $row2=mysqli_fetch_assoc($run2);
		   ?>
		   
		   <tr>
		   <td><?php echo $row2['faculty_name'];?></td>
		   <td><?php echo $row2['faculty_department'];?></td>
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