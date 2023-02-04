<?php
include("templetes/home_header.php");
include("connection/dbconn.php");
$fid=$_GET['fid'];
$query="select * from feedback where fb_id='$fid'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$id=$row['st_id'];
$query1="select * from student where user_id='$id'";
$run1=mysqli_query($con,$query1);
$row1=mysqli_fetch_assoc($run1);
?>
<div class="row" id="row1">
			  
			        <div   class="col-md-11" id="col" >
			       
				        <div  class="panel panel-primary ">
						<div class="panel-heading"><center><h4>Feedback</center></h4></div>
                                <div  class="panel-body">
								 <table class="table"> 
								
								 <th>Branch :-</th>
								 <td><?php echo $row1['user_branch']?></td>
								 </tr>
								 </table>
								 <table class="table">
								 <tr>
								 <th><h4><strong>Question asked</strong></h4></th>
								 <th><h4><strong>Answer Given</strong></h4></th>
								 </tr>
								  <tr>
								 <th>The professors are well-trained and deliver the syllabus efficiently?</th>
								 <td><?php echo $row['ans1']?></td>
								 </tr>
								 <tr>
								 <th>The library has all the necessary reading and research material?</th>
								 <td><?php echo $row['ans2']?></td>
								 </tr>
								  <tr>
								 <th>This college has well equipped computer access facility ?</th>
								 <td><?php echo $row['ans3']?></td>
								 </tr>
								  <tr>
								 <th>Professors are reliable and helpful ?</th>
								 <td><?php echo $row['ans4']?></td>
								 </tr>
								 <tr>
								 <th>if professors help you with research and projects?</th>
								 <td><?php echo $row['ans5']?></td>
								 </tr>
								 <tr>
								 <th>How satisfied are you with the university campus and its facilities?</th>
								 <td><?php echo $row['ans6']?></td>
								 </tr>
								 <tr>
								 <th>the cleaniness of college is good?</th>
								 <td><?php echo $row['ans7']?></td>
								 </tr>
								 <tr>
								 <th>the water facility is good ?</th>
								 <td><?php echo $row['ans8']?></td>
								 </tr>
								 <tr>
								 <th>the quality of water is good?</th>
								 <td><?php echo $row['ans9']?></td>
								 </tr>
								 <tr>
								 <th>would you be to recommend us to a friend or colleague ?</th>
								 <td><?php echo $row['ans10']?></td>
								 </tr>
								 <?php if(!empty($row['comment']))
								 {
									 ?>
									 <tr>
								 <th>comment</th>
								 <td><?php echo $row['comment']?></td>
								 </tr>
									 
									 <?php
								 }
								 ?>
								 </table>
								</div>
                                
                       </div>
			       </div>
		       </div>