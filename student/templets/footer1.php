</div>
		  
		  </div>

		 			
		  
	
		  
			
			 <script src="../js/bootstrap.min.js"></script>
			 
			   
               
		  
		   
		   
                
         

     </body>
</html>
<?php
     $a=$_SESSION['user_id'];
    include_once("../connection/dbconn.php");
    date_default_timezone_set("Asia/Calcutta");
	$time=date("y-m-d H:i:s");
	$updatetime="update student set time='$time' where user_id='$a'";
	$run=mysqli_query($con,$updatetime);
?>