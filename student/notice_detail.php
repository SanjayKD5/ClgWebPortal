<?php
include("templets/check.php");
include("templets/header.php");
include("templets/check1.php");
include("../connection/dbconn.php");
$id=$_GET['id'];
$type=$_GET['type'];
$query="SELECT * FROM `noticeboard` WHERE notice_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
empty($row['uploaded_by']) ? $una="admin" : $uid=$row['uploaded_by'];
if(!empty($row['uploaded_by']))
{
$query2="select * from faculty where faculty_id='$uid'";
$run2=mysqli_query($con,$query2);
$row2=mysqli_fetch_assoc($run2);
$una=$row2['faculty_name'];
}


$st_id=$_SESSION['user_id'];
$query4="select * from history where stud_id='$st_id' and notice_id='$id'";
$run4=mysqli_query($con,$query4);
$check4=mysqli_num_rows($run4);
if($check4==0)
{
$query3="INSERT INTO `history`(`stud_id`,`notice_id`) VALUES ('$st_id','$id')";
$run3=mysqli_query($con,$query3);
}

empty($row['image'])?$a=0:$a=70;

?>
<div class="row" id="row1">	
			 <div  class="panel panel-primary ">
			           <div class="panel-heading"><h4 align="center"> NOTICE DESCRIPTION</h4> </div>
                         <div class="panel-body">
			             <div   class="col-md-11"  >
			      
			              <table class="table" >
						     <tr>
							 <td><strong><h4>Title:-</strong></h4></td>
							   <td><h3><?php echo $row['title'];?></h3></td>
							   
							 </tr>
							  <tr>
							  <td><strong><h4>Description:-</strong></h4></td>
							 <td><h4><?php echo $row['description']; ?></h4></td>
							</tr>
							<tr>
							<td><strong><h4>Uploded by:-</strong></h4></td>
							   <td><h4><?php echo $una;?></h4></td>
							 </tr>
							
				          </table>
				       </div>
					   
				   
			    
		        
			    
				 <?php
				 $allowed = array('gif','png','jpg');
				 $filename = $row['image'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                 $ext=strtolower($ext);
                   if(!in_array($ext,$allowed) )
                   {?>
			   
				   <embed width="100%" class="img-reponsive" height="<?php echo $a; ?>%" src=<?php echo $row['url'];  ?> >
				   
                 <?php
				   }else
				   {
					   ?>
					   <embed width="100%" class="img-reponsive" height="<?php echo $a; ?>%" src=<?php echo $row['url'];  ?> type="application/pdf"  >
				  
				 <?php 
				   }
				 
				 if($row['participant']=="yes")
				 {
					 ?>
					 <div>
					 <a class="btn btn-primary" href="participant.php?id=<?php echo $row['notice_id']; ?>&type=<?php  echo $type ;?>" style="float:right" name="participate">Take Participate</a>
					 <div>
					 <?php
				 }
				 ?>
                
			    </div>
</div>
</div>
</div>
</div>
<?php 
include("templets/footer1.php");
?>  