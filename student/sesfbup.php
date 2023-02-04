<?php
include("../connection/dbconn.php");
include("templets/check.php");

$id=$_SESSION['user_id'];
$query="select * from student where user_id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($run);
$branch=$row['user_branch'];
$year=$row['user_year'];




for($i=1;$i<=5;$i++)
{
	$noc1="noc".$i;
	$noc[$i]=$_POST[$noc1];
	$nof1="nof".$i;
	$nof[$i]=$_POST[$nof1];
	$pad1="pad".$i;
	$pad[$i]=$_POST[$pad1];
	$dk1="dk".$i;
	$dk[$i]=$_POST[$dk1];
	$psiws1="psiws".$i;
	$psiws[$i]=$_POST[$psiws1];
	$ard1="ard".$i;
	$ard[$i]=$_POST[$ard1];
	$euota1="euota".$i;
	$euota[$i]=$_POST[$euota1];
	$total1="total".$i;
	$total[$i]=$_POST[$total1];
	}
	$query4="INSERT INTO `sesfeedback`(`noc1`, `noc2`, `noc3`, `noc4`, `noc5`, `nof1`, `nof2`, `nof3`, `nof4`, `nof5`, `pad1`, `pad2`, 
	`pad3`, `pad4`, `pad5`, `dk1`, `dk2`, `dk3`, `dk4`, `dk5`, `psiws1`, `psiws2`, `psiws3`, `psiws4`, `psiws5`, `ard1`, `ard2`, `ard3`, `ard4`, 
	`ard5`, `euota1`, `euota2`, `euota3`, `euota4`, `euota5`, `total1`, `total2`, `total3`, `total4`, `total5`, `id`, `branch`, `year`) 
	VALUES ('$noc[1]','$noc[2]','$noc[3]','$noc[4]','$noc[5]','$nof[1]','$nof[2]','$nof[3]','$nof[4]','$nof[5]','$pad[1]','$pad[2]','$pad[3]','$pad[4]','$pad[5]',
	'$dk[1]','$dk[2]','$dk[3]','$dk[4]','$dk[5]','$psiws[1]','$psiws[2]','$psiws[3]','$psiws[4]','$psiws[5]','$ard[1]','$ard[2]','$ard[3]','$ard[4]','$ard[5]',
	'$euota[1]','$euota[2]','$euota[3]','$euota[4]','$euota[5]','$total[1]','$total[2]','$total[3]','$total[4]','$total[5]','$id','$branch','$year')";
    if($run4=mysqli_query($con,$query4))
	{
		$status="verified";
		$query5="update student set status='$status' where user_id='$id'";
		$run5=mysqli_query($con,$query5);
		?>
		<script>
		window.alert("thanks for ur valuabel feedback");
		window.open("home.php","_self");
		</script>
		<?php
	}





?>


