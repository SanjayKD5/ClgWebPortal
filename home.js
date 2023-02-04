 function f1(a)
	{
		
		
			var x=document.getElementById("col");
			
			
            x.innerHTML=
		   '<div  class="panel panel-primary ">\
			    <div class="panel-heading">\
			        <h4 align="center">LOGIN FORM</h4>\
			   </div>\
			  <div  class="panel-body">\
			   <form id="form" action="student/login.php" method="post"> \
			     <table align="center" class="table" >\
			      <tr>\
			        <td><input style="line-Height:35px" type="text" name="id" required="required" class="col-md-12 " placeholder="enter your ID" ></td>\
			      </tr>\
			      <tr>\
			        <td><input style="line-Height:35px" type="password" name="password" required="required" class="col-md-12"  placeholder="enter your password"></td>\
			      </tr>\
			      <tr>\
			       <td  ><button style="line-Height:35px" type="submit" class=" col-md-12 btn btn-primary">LOG IN</button></td>\
			      </tr>\
			     </table>\
			   </form>\
			  </div>\
		   </div>';
		   
		   var y=document.getElementById("form");
		   
		   
	      if (a=="faculty")
		  {
			y.action="faculty/faculty_login.php";  
			  
			  
		  }
	      if(a=="admin"){
			y.action="admin/admin_login.php";    
			  
		  }
		
			
			

				
	}