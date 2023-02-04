<?php
include_once("templetes/hod_check.php");
include("../connection/dbconn.php");
include_once("templetes/hod_header.php");
include("templetes/hod_check1.php");
?>
<div class="row" id="row1">
       <div   class="col-md-6" id="col" >
		<div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">Chat</h4> </div>
			 <div class="panel-body">
			 <?php
			  $fid1=$_SESSION['user_id'];
			  $query9="select * from faculty where faculty_id='$fid1'";
			  $run9=mysqli_query($con,$query9);
			  $row9=mysqli_fetch_assoc($run9);
			  $sid=$row9['faculty_chatid'];
			  
			  
			 $query="select * from chat where reciver='$sid' group by sender order by chat_id desc";
			 $run=mysqli_query($con,$query);
			 $check=mysqli_num_rows($run);
			 if($check==0)
			 {
			echo"currently there is no conversation. please click on start chat for starting conversation."; 
			 }
			 else{
				 
				 ?>
				 <table class="table" style="display:block;overflow:auto;height:47%">
				 <tr>
				 <td>
				 <img src="../images/background4.jpg" />
				 </td>
				 </tr>		 
				 <?php
				 while($row=mysqli_fetch_assoc($run))
				 {
					$fid=$row['sender'];
					$user=$row['user'];
					$status5="unread";
					$query7="select * from chat where sender='$fid' and reciver='$sid' and status='$status5'";
					$run7=mysqli_query($con,$query7);
					$check7=mysqli_num_rows($run7);
					if($user=="student")
					{
					$query2="select * from student where user_id='$fid'";
					$run2=mysqli_query($con,$query2);
					$row2=mysqli_fetch_assoc($run2);
					?>
					<tr>
					<td>
					<center><a class="btn btn-default col-md-12" href="?cid=<?php echo $fid?>"><h4><?php echo $row2['user_name']; 
					if($check7>0)
					{
						?><span style="float:right" class="badge"><?php echo $check7; ?> </span><?php
					}
					
					?></h4></a></center>
					</td>
					
					</tr>
					
					
					<?php
					}
					 
					if($user=="faculty")
					{
						$query2="select * from faculty where faculty_chatid='$fid'";
						$run2=mysqli_query($con,$query2);
					$row2=mysqli_fetch_assoc($run2);
					?>
					<tr>
					
					<td>
					<center><a class="btn btn-default col-md-12" href="?cid=<?php echo $fid?>"><h4><?php echo $row2['faculty_name'];
                    if($check7>0)
					{
						?><span style="float:right" class="badge"><?php echo $check7; ?> </span><?php
					}
					?></h4></a></center>
					</td>
					
					</tr>
					
					
					<?php
					} 
					 if($user=="admin")
					 {
						 
						?>
					<tr>
					
					<td>
					<center><a class="btn btn-default col-md-12" href="?cid=123456"><h4>Admin</h4><?php
					if($check7>0)
					{
						?><span style="float:right" class="badge"><?php echo $check7; ?> </span><?php
					}
					
					?></a></center>
					</td>
					
					</tr>
					
					
					<?php 
						 
				 }}
				 
				 ?>
				 
				 </table>
				 <?php
				 
			 }
		 
		 
			 
			 ?>
			 
			 </div>
			 <div class="panel-footer">
			  <a class="btn" href="hod_chat.php" >Start New Conversation</a>
			 </div>
		</div>
	   </div>
	   
	   <div   class="col-md-6" >
		<div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">Conversation</h4> </div>
			 <div class="panel-body">
			 <?php
			 if(isset($_GET['cid']))
			 {
			
		
			
			
			$id=$_GET['cid'];
			$sid=$_SESSION['user_id'];
			$state="read";
			$fid=$_SESSION['user_id'];
			$query9="select * from faculty where faculty_id='$fid'";
			$run9=mysqli_query($con,$query9);
			$row9=mysqli_fetch_assoc($run9);
			$sid=$row9['faculty_chatid'];
			$fetch="select * from chat where sender='$id'and reciver='$sid' or sender='$sid'and reciver='$id'  ";
			$exe=mysqli_query($con,$fetch);
			?>
				<table class="table" style="display:block;overflow:auto;height:30%">
				<tr>
				 <td>
				 <img src="../images/background4.jpg" />
				 </td>
				 </tr>
				<?php
				
				$query3="UPDATE `chat` SET status='$state' where sender='$id' and reciver='$sid'";
				$run3=mysqli_query($con,$query3);
				
				while($row4=mysqli_fetch_assoc($exe))
					{
						 if($row4['sender']==$id)
						 {$a="left";
					      $s="";  }
					 else{
						 $a="right";
						 $s="white";
						 if($row4['status']=="read")
						 {
							 $s="blue";
						 }
						 
						 
						 
					 }
						
						if($row4['type']=="msg")
						{
						?>
						
						<tr>
						
						<td style="float:<?php echo $a;?>"><?php echo $row4['message'] ;
						if($s!="")
						{
						?>
						
						<span style="background-color:<?php echo $s; ?>" class="glyphicon glyphicon-ok glyphicon-ok"> </span></td>
						<?php
						}
						?>
						
						</tr>
						
						
						<?php
					    }
						else
						{
							?>
							<tr>
						 <td style="float:<?php echo $a;?>"> <embed width="80%" class="img-reponsive"  src=<?php echo $row4['url'];  ?> ></td>	
						  </tr>
						  
						
						<?php
						}
					
					
					
					
					}
				?>
				</table>
				
				
		 <form action="hmsgpass.php?id=<?php  echo $id;?>" method="post" enctype="multipart/form-data">
		<table class="table">
		 <tr>
		 <td><textarea placeholder="Enter a message" class="col-md-12" name="msg"></textarea></td>
		 </tr>
		 <tr>
		 <td><input type="file" name="multi"></td>
		 </tr>
		 <tr>
		 <td><button type="submit" class="btn btn-primary" name="send">Send</button></td>
		 </tr>
		</table>
		</form>
		
          
        <?php 
		}
			else{
			?>
			<img src="../images/chat.jpg" class="img-responsive" style="height:57%" />
			<?php
		}
			 
			 ?>
			 </div>
          </div>
		</div>
</div>