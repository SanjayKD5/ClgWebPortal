<?php

if($i==6)
{

    $who=$row21['faculty_name'];
	$sent1="Someone  has uploaded notice in ";
	$type1="notice";
	$sent2=$type;
	$sent3=" section";
	$noti=$sent1.$sent2.$sent3;
	$for="student";
	if($type=="For Faculty")
	{
		$for="faculty";
	}
	if($type=="For All")
	{
		$for="all";
	}
	$query101="INSERT INTO `notification`(`notification`,`type`,`branch`,`for1`,`by`) VALUES ('$noti','$type1','$branch','$for','$id')";
	$run101=mysqli_query($con,$query101);
}
	

?>