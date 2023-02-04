<?php
include("templets/header.php");
include("templets/check.php");
include("../connection/dbconn.php");

$id=$_SESSION['user_id'];
$query1="select * from student user_id where user_id='$id'";
$run1=mysqli_query($con,$query1);
$row1=mysqli_fetch_assoc($run1);
$branch=$row1['user_branch'];
$query="SELECT * FROM `sesfbd` WHERE branch='$branch' order by sid desc";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);



?>
<div class="row" id="row1">
    <div class="col-md-11">
	   <div class="panel panel-primary">
	         <div class="panel-body">
			 <form method="post" action="sesfbup.php">
			     <div>
			    <h4 style="float:right"> <label>D-14 </label></h4><br/>
				 <h5>For AICTE Diploma Cources</h5 ><br/>
				 <strong><center><h5>Maharastra State Board of Technical Education</h4></center></strong>
				<center><h4><label> STUDENT FEEDBACK </label></h4></center>
				 <center><h5> (Head of The Deapartment shall take the Feed Back at the end of Second Class Test )</h5></center><br/> 
				 </div>
				 
				 <div>
				 <label class="col-md-3"> Academic year :-
				 <?php echo $row['year']; ?></label>
				 <label class="col-md-3"> Program :-
				 <?php echo $row['program']; ?></label>
				 <label class="col-md-3"> Semester :-
				 <?php echo $row['sem']; ?></label>
				 <label class="col-md-3"> Date :-
				 <?php echo $row['date']; ?></label>
				 <br />
				 </div>
				 <div>
				 <table class="table table-bordered tabel-responsives" style="display:block;overflow:auto;width:100%;margin-top:20px">
				   <tr>
				   <th rowspan="2">Sr no</th>
				   <th rowspan="2">Name of Course(TH/PR)</th>
				   <th rowspan="2">Name of Faculty</th>
				   <th colspan="5">Each  Parameter to be Assessed on thr Scale of 1 to 5   (1-Lowest & 5- Highest)</th>
				   <th rowspan="2">Total (Max 25)</th>
				   </tr> 
				   <tr>
				   <th>Punctuality & Discipline</th>
				   <th>Domain Knowledge</th>
				   <th>Presentation Skill & Interaction with Students</th>
				   <th>Ability to Resolve Difficulties</th>
				   <th>Effective Use of Teaching Aids</th> 
				   </tr>
				   <?php
				   for($i=1;$i<=5;$i++)
				   {
					   ?>
					   <tr>
					    <td><?php echo $i;?></td>
						<td ><input  type="text" style="width:100px" name="noc<?php echo $i?>" required></td>
						<td><input type="text" style="width:100px" name="nof<?php echo $i?>" required></td>
						<td><input type="number" style="width:100px" name="pad<?php echo $i?>"  required></td>
						<td><input type="number" style="width:100px" name="dk<?php echo $i?>"  required></td>
						<td><input type="number" style="width:100px" name="psiws<?php echo $i?>" required></td>
						<td><input type="number" style="width:100px" name="ard<?php echo $i?>"  required></td>
						<td><input type="number" style="width:100px" name="euota<?php echo $i?>" required></td>
						<td><input type="number" style="width:100px"name="total<?php echo $i?>" required></td>
						
					   </tr>
					   <?php
				   }
				   ?>
				 </table>
				 <button type="submit" class="btn btn-primary">Submit</button>
				 </div>
				 
				 </form>
             </div>			 
	   </div>
    </div>
</div>