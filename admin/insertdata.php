<?php
include("../connection/dbconn.php");
include("templetes/check.php");

            //student


if(isset($_POST['student']))
{
   $n=$_POST['nos'];
   $branch=$_POST['branch'];
   $id="st-";

   //selecting br
    if($branch=="computer")
     {
	 $br="co-";
      }
     if($branch=="chemical")
      {
	   $br="ch-";
      }
      if($branch=="civil")
       {
	     $br="ce-";
         }
       if($branch=="mechanical")
          {
	      $br="me-";
           }
       if($branch=="electronics")
           {
	        $br="ee-";
            }
        if($branch=="electrical")
         {
	      $br="et-";
         }
//selecting no
    $query1="select * from student where user_branch='$branch' order by user_id desc";
    $run1=mysqli_query($con,$query1);
    $check1=mysqli_num_rows($run1);
    if($check1==0)
    {
	$no="100";
    }
    else
    {
	$row1=mysqli_fetch_assoc($run1);
	$abc=$row1['user_id'];
	$no=substr($abc,6);
	$no++;
    }




$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$c=0;
$status="unverified";

if($n>100 || $n<0){
	?><script>
	window.alert("number of id must be less than 100 and grether than zero");
	window.open("student.php","_self");
	</script><?PHP
}


else
{
  for($i=1;$i<=$n;$i++)
   {

    $password = substr( str_shuffle( $chars ), 0, 8 );
    $id=$id.$br.$no;
    $query="INSERT INTO student(user_id,user_pass,user_branch,status)VALUES ('$id','$password','$branch','$status')";
    $no++;
    $id="st-";
    if($run=mysqli_query($con,$query))
    {
	 $c++;
    }

     }
    if($c==$n)
    {
	?><script>
	window.open("student.php","_self");
	window.alert("student id are generated successfully");
	</script><?php
	
     }
	 
   }}
   
   
         //faculty
   
   
   
if(isset($_POST['faculty']))
{
	$n=$_POST['nos'];
$branch=$_POST['department'];

       if($branch=="computer")
        {
	     $br="co-";
        }
       if($branch=="chemical")
       {
	    $br="ch-";
       }
      if($branch=="civil")
       {
	     $br="ce-";
         }
       if($branch=="mechanical")
          {
	      $br="me-";
           }
       if($branch=="electronics")
           {
	        $br="ee-";
            }
        if($branch=="electrical")
         {
	      $br="et-";
         }


$post=$_POST['post'];
if($post=="hod")
{$id="hod-";}
if($post=="staff")
{$id="sta-";}
$ab=$id;



$query1="select * from faculty where faculty_department='$branch' and post='$post' order by faculty_id desc";
    $run1=mysqli_query($con,$query1);
    $check1=mysqli_num_rows($run1);
    if($check1==0)
    {
	$no="100";
    }
    else
    {
	$row1=mysqli_fetch_assoc($run1);
	$abc=$row1['faculty_id'];
	$no=substr($abc,7);
	$no++;
    }
	

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$c=0;
$status="unverified";
if($n>100 || $n<0){
	?><script>
	window.open("faculty.php","_self");
	window.alert("number of id must be less than 100 and greter than zero");
	
	</script><?PHP
}
 
 else{
 
for($i=1;$i<=$n;$i++)
{
 $id=$id.$br.$no;
 $password = substr( str_shuffle( $chars ), 0, 8 );
  $query="INSERT INTO faculty(faculty_id,faculty_pass,faculty_department,status,post)VALUES ('$id','$password','$branch','$status','$post')";
$no++;
$id=$ab;
  if($run=mysqli_query($con,$query))
 {
	 $c++;
 }

}
if($c==$n)
{
	?><script>
	window.open("faculty.php","_self");
	window.alert("faculty id are generated successfully");
	</script><?php
	
}

 }
}


?>