<?php
include_once("templets/check.php");
include("../connection/dbconn.php");
if(!isset($_GET['chatid']))
{
	
include_once("templets/header.php");
include_once("templets/check1.php");
?>
<script>

function f1()
{
	
	document.location.reload();
}
	

</script>

 <div class="row" id="row1">
       <div   class="col-md-6" id="col" >
			       
		 <div  class="panel panel-primary ">
			 <div class="panel-heading"><h4 align="center">Chat</h4> </div>
              <div class="panel-body" id="panel">
			     
			      <form method="get" action="chat.php">
				   
					<table class="table " height="30%">
					 <tr>
					 <th> Select Branch :-</th>
					 </tr>
					 <tr>
					 <td><select style="height:35px" name="branch" >
							 <option value="computer">COMPUTER </option>
							 <option value="civil">CIVIL</option>
							 <option value="chemical">CHEMICAL</option>
							 <option value="mechanical">MECHANICAL</option>
							 <option value="electrical">ELECTRICAL</option>
							  <option value="electronics">ELECTRONICS</option>
						    </select></td>
							
					</tr>
					<tr>
					<td><input type="submit" class="btn btn-primary" name="go" data-toggle="collapse" data-target="#faculty"></td>
					 </tr>
					  
					</table>
				  </form>
				  </div>
				  </div>
				  </div>
				  <div class="col-md-6">
				  <div class="panel panel-primary">
				    <div class="panel-primary">
					  <div class="panel-heading"><h4 align="center">Faculty</h4></div>
				        <div class="panel-body" id="faculty">
				   
				   <?php 

					if(isset($_GET['branch']))
					{
					$department=$_GET['branch'];
					$status="verified";
					$query="SELECT * FROM `faculty` where faculty_department='$department' and status='$status'";
					$run=mysqli_query($con,$query);
					$check=mysqli_num_rows($run);
					if($check==0)
					{
						?>
						<script>
						window.alert("no faculty of this branch ");
					
						</script>
					<?php
					}
					else{
						$i=1;
						?>
						
						<table class="table" width="100%" style="display:block;overflow:auto;height:30%" >
						<tr colspan="2">
						<th>Sr No</th>
						<th>Name</th>
						</tr>
						
						
						<?php
						while($row=mysqli_fetch_assoc($run))
						{
							
							?>
							
							<tr>
							<th><?php echo $i;?></th>
							<td><?php echo $row['faculty_name'];?><td>
							<td><a class="btn btn-primary" href="?chatid=<?php echo $row['faculty_chatid'];?>&dep=<?php echo $department; ?>"  data-toggle="modal" data-target="#myModal">chat</a></td>
							</tr>
							
							
							<?php
							
							$i++;
							
						}
					}}

						else{
			?>
			<img src="../images/chat2.jpg" class="img-responsive" style="height:33%" />
			<?php
		}
			 
			 ?>
						
				   
				   </div>
				  

			  </div>
		 </div>	
	  </div>
	  
</div>
	
<div class="modal fade" id="myModal"   role="dialog">

    <div class="modal-dialog ">
    <?php
}
?>
      <!-- Modal content-->
	  
     <div class="modal-content">
	  
        <div class="modal-header">
		<h4><center>Chat System</center></h4>
          <button type="button" onclick="f1()" class="close" data-dismiss="modal">&times;</button>
          
        </div>

        <div class="modal-body" style="display:block;overflow:auto;height:50%" id="div4">
		<?php
		if(isset($_GET['chatid']))
		{
			
			$dep=$_GET['dep'];
			$id=$_GET['chatid'];
			$sid=$_SESSION['user_id'];
			$state="read";
			$fetch="select * from chat where sender='$id'and reciver='$sid' or sender='$sid'and reciver='$id'  ";
			$exe=mysqli_query($con,$fetch);
			$check1=mysqli_num_rows($exe);
			if($check1==0)
			{
				echo "you have not started conversion yet";
			}
			else{
				
				?>
				<table class="table">
				<?php
				
				$query3="UPDATE `chat` SET status='$state' where sender='$id' and reciver='$sid'";
				$run3=mysqli_query($con,$query3);
				
				while($row2=mysqli_fetch_assoc($exe))
					{
						 if($row2['sender']==$id)
						 {$a="left";
					      $s="";  }
					 else{
						 $a="right";
						 $s="white";
						 if($row2['status']=="read")
						 {
							 $s="blue";
						 }
						 
						 
						 
					 }
						
						if($row2['type']=="msg")
						{
						?>
						
						<tr>
						
						<td style="float:<?php echo $a;?>"><?php echo $row2['message'] ;
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
						 <td style="float:<?php echo $a;?>"> <embed width="80%" class="img-reponsive"  src=<?php echo $row2['url'];  ?> ></td>	
						  </tr>
						  
						
						<?php
						}
					
					
					
					
					}
				?>
				</table>
				
				
						
				
				<?php
			}
		
		?>
		
        <?php
		if($id!=0)
		{
			
?>		
        </div>
		<div class="modal-footer">
		 <form action="msgpass.php?id=<?php  echo $id;?>" method="post" enctype="multipart/form-data">
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
		
          <button type="button" onclick="f1()" class="btn btn-default" data-dismiss="modal">Close</button>
		   
        </div>
        <?php 
		}}
		
		?>
      </div>
      
    </div>
  </div>



