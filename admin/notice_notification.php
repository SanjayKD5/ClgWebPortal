<?php


if($i=6)
{
    $who="admin";
	$sent1=" has uploaded notice in ";
	$type1="notice";
	$sent2=$type;
	$sent3=" section";
	
	
	if($type=="For Faculty")
	{
		$for="faculty";
		$sent2="faculty noticeboard";
	}
	if($type=="For All")
	{
		$for="all";
		$sent2="common";
	}
	$noti=$who.$sent1.$sent2.$sent3;
	$query101="INSERT INTO `notification`(`notification`,`type`,`branch`,`for1`,`by`) VALUES ('$noti','$type1','$branch','$for','$id')";
	$run101=mysqli_query($con,$query101);
	
}

?>