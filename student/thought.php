<?php
include("templets/header.php");
include("templets/check.php");
include("templets/check1.php");
include("../connection/dbconn.php");

?>
<div class="row" id="row1">
   <div  class="col-md-6" >
		 <div class="panel panel-primary ">
            <div class="panel-heading"><center><h4>Update Thought</h4></center></div>
            <div class="panel-body">
			  <form action="th_up.php" method="post">
			   <table class="table">
			     <tr>
				  <td><textarea class="col-md-10" placeholder="enter the new thought" name="sent"></textarea></td>
			     </tr>
				 <tr>
				 <td><input type="text" class="col-md-10" placeholder="written by" name="wby"></td>
				 </tr>
				 <tr>
				 <td><button type="submit" class="btn btn-primary">Upload</button></td>
				 </tr>
			   </table>
			  </form>
			</div>
         </div>
	</div>
	<div  class="col-md-6" >
		 <div class="panel panel-primary ">
            <div class="panel-heading"><center><h4>Current Thought</center></h4></div>
            <div class="panel-body">
			<?php
			$status="verified";
			$query="select * from thought where status='$status' order by tid desc";
			$run=mysqli_query($con,$query);
			$row=mysqli_fetch_assoc($run);
			?>
			<table class="table" height="24%">
			     <tr>
				  <td><?php echo $row['sentence']; ?></td>
			     </tr>
				 <tr>
				 <td>Written by :- <?php echo $row['written_by'];?></td>
				 </tr>
				
			   </table>
			</div>
         </div>
	</div>
</div>
<?php 
include("templets/footer1.php");
?>  