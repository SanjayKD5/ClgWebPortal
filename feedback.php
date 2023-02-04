 <?php
        include("connection/dbconn.php");
		include("templetes/home_header.php");
	 ?>
 <div class="row" id="row1">
   <div class="col-md-11" id="col" >
	  <div  class="panel panel-primary ">
	  <div class="panel-heading"><center><h4>Your Feedback Is Important For Us</h4></center></div>
	  <div class="panel-body">
	  <form action="fbprocess.php" method="post">
	  <table class="table">
	    
	    <tr>
		<th><h4>Please Answer following Question</h4></th>
		<th><h4>YES</h4></th>
		<th><h4>NO</h4></th>
		<th><h4>NEUTRAL</h4></th>
		</tr>
		<tr>
		<th> The professors are well-trained and deliver the syllabus efficiently?	</th>
		<td><input type="radio" name="ans1" value="yes"required="required"></td>
		<td><input type="radio" name="ans1" value="no"></td>
		<td><input type="radio" name="ans1" value="neutral"></td>
		</tr>
		<tr>
		<th>The library has all the necessary reading and research material?</th>
		<td><input type="radio" name="ans2" value="yes" required="required"></td>
		<td><input type="radio" name="ans2" value="no"></td>
		<td><input type="radio" name="ans2" value="neutral"></td>
		</tr>
		<tr>
		<th>This college has well equipped computer access facility ?</th>
		<td><input type="radio" name="ans3" value="yes" required="required"></td>
		<td><input type="radio" name="ans3" value="no"></td>
		<td><input type="radio" name="ans3" value="neutral"></td>
		</tr>
		<tr>
		<th>Professors are reliable and helpful ?</th>
		<td><input type="radio" name="ans4" value="yes" required="required"></td>
		<td><input type="radio" name="ans4" value="no"></td>
		<td><input type="radio" name="ans4" value="neutral"></td>
		</tr>
		<tr>
		<th>if professors help you with research and projects?</th>
		<td><input type="radio" name="ans5"  value="yes"required="required"></td>
		<td><input type="radio" name="ans5" value="no"></td>
		<td><input type="radio" name="ans5" value="neutral"></td>
		</tr>
		<tr>
		<th>How satisfied are you with the university campus and its facilities?</th>
		<td><input type="radio" name="ans6" value="yes" required="required"></td>
		<td><input type="radio" name="ans6" value="no"></td>
		<td><input type="radio" name="ans6" value="neutral"></td>
		</tr>
		<tr>
		<th>the cleaniness of college is good?</th>
		<td><input type="radio" name="ans7" value="yes" required="required"></td>
		<td><input type="radio" name="ans7" value="no"></td>
		<td><input type="radio" name="ans7" value="neutral"></td>
		</tr>
		<tr>
		<th>the water facility is good ?</th>
		<td><input type="radio" name="ans8" value="yes" required="required"></td>
		<td><input type="radio" name="ans8" value="no"></td>
		<td><input type="radio" name="ans8" value="neutral"></td>
		</tr>
		<tr>
		<th>the quality of water is good?</th>
		<td><input type="radio" name="ans9" value="yes" required="required"></td>
		<td><input type="radio" name="ans9" value="no"></td>
		<td><input type="radio" name="ans9" value="neutral"></td>
		</tr>
		<tr>
		<th>would you be to recommend us to a friend or colleague ?</th>
		<td><input type="radio" name="ans10" value="yes" required="required"></td>
		<td><input type="radio" name="ans10" value="no"></td>
		<td><input type="radio" name="ans10" value="neutral"></td>
		</tr>
		</table>
		<table class="table">
		<tr>
		<th>Any Another Comment</th>
		<td><textarea name="comment" class="col-md-8" placeholder="enter a comment"></textarea></td>
		</tr>
		<tr>
		<th>Enter your Id</th>
        <td><input class="col-md-8" type="text" required="required"  placeholder="enter your id" name="id"</td>
		</tr>
		<tr>
		<th>Enter your Password</th>
		<td><input type="password" class="col-md-8" required="required" name="pass"placeholder="enter your password"></td>
		</tr>
		
	 <tr>
		<td ><input type="submit" class="btn btn-primary" value="submit"></td>
		</tr>

		</table>
	  </form>
	 </div>
	 <div class="panel-footer">
	 <a href="variousfb.php"><span class="glyphicon glyphicon-hand-down"></span><h4>  see feedback given by diffrent student</h4></a>
	 </div>
	</div>
  </div>
 </div>
				 			        
		      
 <?php include("templetes/home_footer.php")?>