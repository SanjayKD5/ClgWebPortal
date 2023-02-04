<?php
include("../connection/dbconn.php");
 include("templetes/admin_header.php");
 if(isset($_POST['student']))
{	 
 $branch=$_POST['branch'];
 $year=$_POST['year'];
 ?>

 <div class="row" id="row1">
    <div class="col-md-6">
       <div class="panel panel-primary ">
          <div class="panel-heading"><h4><center>VERIFIED STUDENTS</center></h4></div>
          <div class="panel-body ">
            <table   style="display:block;overflow:auto;height:300;line-height:4;"  class="table tabel-responsive" >
              <tr>
               <th >NAME</th>
               <th style="padding-left:50">ID</th>
              </tr>
              <?php
			            $status="verified";
                        $query="SELECT * FROM student where status='$status' and user_branch='$branch' and user_year='$year'";
                        $run=mysqli_query($con,$query);
                        $check=mysqli_num_rows($run);
						 if($check==0)
                         {?><script>
                                window.alert("no verified  id");
                               
   
                            </script>
	
                          <?php
                         }
						 
                 while($row=mysqli_fetch_assoc($run))
                  {
					    
                       
                       
                           ?>
	               
                    <tr>
	                 <td><?php echo $row['user_name'];?></td>
	                 <td  style="padding-left:50"><center><?php echo $row['user_id'];?></center> </td>
	                </tr>
	
	
	              <?php
	
                  
				  }
              ?>
		    </table>
          </div>
        </div>
    </div>
	<div class="col-md-6">
       <div class="panel panel-primary ">
          <div class="panel-heading"><h4><center>UNVERIFIED STUDENTS</center></h4></div>
          <div class="panel-body ">
            <table   style="display:block;overflow:auto;height:300;line-height:4;"  class="table tabel-responsive" >
              <tr>
               
               <th >ID</th>
			   <th style="padding-left:50">PASSWORD</th>
              </tr>
              <?php
			           $status1="unverified";
                        $query1="SELECT * FROM student where status='$status1' and user_branch='$branch' ";
                        $run1=mysqli_query($con,$query1);
                        $check1=mysqli_num_rows($run1);
                 while($row1=mysqli_fetch_assoc($run1))
                  {
					  
	               ?>
				   
                    <tr>
	                 
	                 <td  ><center><?php echo $row1['user_id'];?></center> </td>
					 <td style="padding-left:50"><?php echo $row1['user_pass'];?></td>
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
if(isset($_POST['faculty']))
{
$branch=$_POST['branch'];
$post=$_POST['post'];
 ?>

 <div class="row" id="row1">
    <div class="col-md-6">
       <div class="panel panel-primary ">
          <div class="panel-heading"><h4><center>VERIFIED FACULTY</center></h4></div>
          <div class="panel-body ">
            <table   style="display:block;overflow:auto;height:300;line-height:4;"  class="table tabel-responsive" >
              <tr>
               <th >NAME</th>
               <th style="padding-left:50">ID</th>
              </tr>
              <?php
			            $status="verified";
                        $query="SELECT * FROM faculty where status='$status' and faculty_department='$branch' and post='$post'";
                        $run=mysqli_query($con,$query);
                        $check=mysqli_num_rows($run);
						 if($check==0)
                         {?><script>
                                window.alert("no verified id");
                                
   
                            </script>
	
                          <?php
                         }
			
                 while($row=mysqli_fetch_assoc($run))
                  {
					    
                       
                       
                           ?>
	               
                    <tr>
	                 <td><?php echo $row['faculty_name'];?></td>
	                 <td  style="padding-left:50"><center><?php echo $row['faculty_id'];?></center> </td>
	                </tr>
	
	
	              <?php
	
                  
				  }
              ?>
		    </table>
          </div>
        </div>
    </div>
	<div class="col-md-6">
       <div class="panel panel-primary ">
          <div class="panel-heading"><h4><center>UNVERIFIED FACULTY</center></h4></div>
          <div class="panel-body ">
            <table   style="display:block;overflow:auto;height:300;line-height:4;"  class="table tabel-responsive" >
              <tr>
               
               <th >ID</th>
			   <th style="padding-left:50">PASSWORD</th>
              </tr>
              <?php
			           $status1="unverified";
                        $query1="SELECT * FROM faculty where status='$status1' and faculty_department='$branch' ";
                        $run1=mysqli_query($con,$query1);
                        $check1=mysqli_num_rows($run1);
                 while($row1=mysqli_fetch_assoc($run1))
                  {
					  
	               ?>
				   
                    <tr>
	                 
	                 <td  ><center><?php echo $row1['faculty_id'];?></center> </td>
					 <td style="padding-left:50"><?php echo $row1['faculty_pass'];?></td>
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

