<?php
include("../connection/dbconn.php");
include("templetes/hod_check.php");
include("templetes/hod_header.php");


$user=$_GET['user'];
if($user=="student")
{
$type=$_GET['type'];
$id=$_GET['id'];
$query="SELECT * FROM student WHERE user_id='$id'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
$row=mysqli_fetch_assoc($run);

      
     ?>
   <div id="print">
       <div class="row" id="row1">
         <div class="col-md-5">
	       <div class="panel panel-primary">
	         <div class="panel-heading"><center><h4>PHOTO</h4></center></div>
	         <div class="panel-body"> 
	           <img class="img-responsive" src="../images/<?php echo $row['user_image'];?>" style="height:30%;width:100%"/>
		     <?php
$query1="select * from exdata where st_id='$id'";
$run1=mysqli_query($con,$query1);
$check1=mysqli_num_rows($run1);
if($check1==0)
{
	echo " <img src='../images/ns.png' height='21%'> ";
}
else{

?>
<table class="table" height="18%">
<?php 
while($row1=mysqli_fetch_assoc($run1))
{
	$a=$row1['year'];
	if($a=="first")
	{
		?>
		<tr><td><b>First Year</b></td>
		<td>sem1 : <?php echo $row1['sem1'];?></td>
		<td>sem2 : <?php echo $row1['sem2'];?></td></tr>
		<?php
	}
	if($a=="second")
	{
		?>
		<tr><td><b>second Year</b></td>
		<td>sem3 : <?php echo $row1['sem1'];?></td>
		<td>sem4 : <?php echo $row1['sem2'];?></td></tr>
		<?php
	}
	if($a=="third")
	{
		?>
		<tr><td><b>third  Year</b></td>
		<td>sem5 : <?php echo $row1['sem1'];?></td>
		<td>sem6 : <?php echo $row1['sem2'];?></td></tr>
		<?php
	}
	?>
	
	
	<?php
	
}


?>


</table>
<?php
}



?>
		     </div>
			 <div class="panel-footer">
			 <button class="btn btn-primary" onclick="f1()">print</button>
			 </div>
	       </div>
	     </div>
	 
	 
	 <div class="col-md-7">
	 <div class="panel panel-primary">
	  <div class="panel-heading"><center><h4>STUDENT DETAILS</h4></center></div>
	  <div class="panel-body">
	   <table class="table">
	     <tr>
		  <td><label>NAME</label></td>
		  <td><label><?php echo $row['user_name'];?></label></td>
		 </tr>
		 <tr>
		  <td><label>ID</label></td>
		  <td><label><?php echo $row['user_id'];?></label></td>
		 </tr>
		 <tr>
		  <td><label>ENROLLMENT NUMBER</label></td>
		  <td><label><?php echo $row['user_eno'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>EMAIL</label></td>
		  <td><label><?php echo $row['user_email'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>PHONE NO.</label></td>
		  <td><label><?php echo $row['user_pno'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>ADDRESS</label></td>
		  <td><label><?php echo $row['user_add'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>AGE</label></td>
		  <td><label><?php echo $row['user_age'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>BRANCH</label></td>
		  <td><label><?php echo $row['user_branch'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>YEAR</label></td>
		  <td><label><?php echo $row['user_year'];?></label></td>
		 </tr>
		  <?php
		  if($type=="app")
		  {
			  ?>
			  <tr>
			  <td><a href="happdec.php?id=<?php echo $row['user_id']; ?>&opp=app&user=student" class="btn btn-primary"><span class="glyphicon glyphicon-ok"><span> Approve </a>
			  <a href="happdec.php?id=<?php echo $row['user_id']; ?>&opp=del&user=student" class="btn btn-primary"> <span class="glyphicon glyphicon-remove"><span> Decline</a></td>
			  </tr>
		 <?php
		 }
		  
		  ?>
		 
	   </table>
	    </div>
	   </div>
	 </div>
	 </div>
 
  
</div> 
<?php 
}
else{
	$id=$_GET['id'];
$type=$_GET['type'];
$query="SELECT * FROM faculty WHERE faculty_id='$id'";
$run=mysqli_query($con,$query);
$check=mysqli_num_rows($run);
$row=mysqli_fetch_assoc($run);

     
     ?>
   
       <div class="row" id="row1">
         <div class="col-md-5">
	       <div class="panel panel-primary">
	         <div class="panel-heading"><center><h4>PHOTO</h4></center></div>
	         <div class="panel-body"> 
	           <img class="img-responsive" src="../images/<?php echo $row['faculty_image'];?> " style="height:50%;width:100%"/>
		     </div>
	       </div>
	     </div>
	 
	 
	 <div class="col-md-7">
	 <div class="panel panel-primary">
	  <div class="panel-heading"><center><h4>FACULTY DETAILS</h4></center></div>
	  <div class="panel-body">
	   <table class="table">
	     <tr>
		  <td><label>NAME</label></td>
		  <td><label><?php echo $row['faculty_name'];?></label></td>
		 </tr>
		 <tr>
		  <td><label>ID</label></td>
		  <td><label><?php echo $row['faculty_id'];?></label></td>
		 </tr>
		 <tr>
		  <td><label>CHAT ID</label></td>
		  <td><label><?php echo $row['faculty_chatid'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>EMAIL</label></td>
		  <td><label><?php echo $row['faculty_email'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>PHONE NO.</label></td>
		  <td><label><?php echo $row['faculty_pno'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>ADDRESS</label></td>
		  <td><label><?php echo $row['faculty_add'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>AGE</label></td>
		  <td><label><?php echo $row['faculty_age'];?></label></td>
		 </tr>
		  <tr>
		  <td><label>BRANCH</label></td>
		  <td><label><?php echo $row['faculty_department'];?></label></td>
		 </tr>
		  <?php
		  if($type=="app")
		  {
			  ?>
			  <tr>
			  <td><a href="happdec.php?id=<?php echo $row['faculty_id']; ?>&opp=app&user=faculty" class="btn btn-primary"><span class="glyphicon glyphicon-ok"><span> Approve </a>
			  <a href="happdec.php?id=<?php echo $row['faculty_id']; ?>&opp=del&user=faculty" class="btn btn-primary"> <span class="glyphicon glyphicon-remove"><span> Decline</a></td>
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
<script type="text/javascript">


function f1()
{
var prtContent = document.getElementById("print");
var WinPrint = window.open('');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}

</script>









