<?php

include("templetes/hod_check.php");
include("templetes/hod_check1.php");
include("templetes/hod_header.php");
include("../connection/dbconn.php");


$id=$_GET['sfid'];
$query="select * from sesfeedback where sf_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$fid=$_SESSION['user_id'];
			$query9="select * from faculty where faculty_id='$fid'";
			$run9=mysqli_query($con,$query9);
			$row9=mysqli_fetch_assoc($run9);
			$branch=$row9['faculty_department'];
			
			$query1="SELECT * FROM `sesfbd` WHERE branch='$branch' order by sid desc";
$run1=mysqli_query($con,$query1);
$row1=mysqli_fetch_assoc($run1);
			
?>
<div class="row" id="row1">
    <div class="col-md-11">
	   <div class="panel panel-primary">
	         <div class="panel-body">
			 <div id="print">
			 
			     <div>
			    <h4 style="float:right"> <label>D-14 </label></h4><br/>
				 <h5>For AICTE Diploma Cources</h5 ><br/>
				 <strong><center><h5>Maharastra State Board of Technical Education</h4></center></strong>
				<center><h4><label> STUDENT FEEDBACK </label></h4></center>
				 <center><h5> (Head of The Deapartment shall take the Feed Back at the end of Second Class Test )</h5></center><br/> 
				 </div>
				 
				 <div>
				  <label class="col-md-3"> Academic year :-
				 <?php echo $row1['year']; ?></label>
				 <label class="col-md-3"> Program :-
				 <?php echo $row1['program']; ?></label>
				 <label class="col-md-3"> Semester :-
				 <?php echo $row1['sem']; ?></label>
				 <label class="col-md-3"> Date :-
				 <?php echo $row1['date']; ?></label>
				 <br />
				 </div>
				 <div>
				 <table class="table tabel-responsive table-bordered" style="display:block;overflow:auto;width:100%;margin-top:20px">
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
					   $noc1="noc".$i;
					   $nof1="nof".$i;
					   $pad1="pad".$i;
					   $dk1="dk".$i;
					   $psiws1="psiws".$i;
					   $ard1="ard".$i;
					   $euota1="euota".$i;
					   $total1="total".$i;
					   
					   ?>
					   <tr>
					    <td><center><?php echo $i;?></center></td>
						<td><center><?php echo $row[$noc1]; ?></center></td>
						<td><center><?php echo $row[$nof1]; ?></center></td>
						<td><center><?php echo $row[$pad1]; ?></center></td>
						<td><center><?php echo $row[$dk1]; ?></center></td>
						<td><center><?php echo $row[$psiws1]; ?></center></td>
						<td><center><?php echo $row[$ard1]; ?></center></td>
						<td><center><?php echo $row[$euota1]; ?></center></td>
						<td><center><?php echo $row[$total1]; ?></center></td>
						
					   </tr>
					   <?php
				   }
				   ?>
				   </div>
				   </div>
				   
				   
				 </table>
				 <button  onclick="f3()" class="btn btn-primary">print</button>
				 
				 
				 
             </div>			 
	   </div>
    </div>
</div>
<script type="text/javascript">


function f3()
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