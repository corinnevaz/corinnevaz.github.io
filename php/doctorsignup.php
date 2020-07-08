<?php
session_start();

$conn = mysqli_connect("localhost", "root", "topgear", "project");
	if(mysqli_connect_error())
	{
		echo "<p>Error in connection to database.</p>";
		exit();
	} 

	$target = "upload/".basename($_FILES['d_propic']['name']);
	$target1 = "upload/".basename($_FILES['d_proofpic']['name']);


   if(move_uploaded_file($_FILES['d_propic']['tmp_name'],$target))
	{
		$msg="image uploaded";
	}
	else{
		$msg="not uploaded";
	}

	if( move_uploaded_file($_FILES['d_proofpic']['tmp_name'],$target1))
	{
		$msg="image uploaded";
	}
	else{
		$msg="not uploaded";
	}
	

$sql="INSERT INTO `doc_temp` (`doctor_name`, `doctor_gender`,`doctor_spe`, `doctor_city`, `doctor_phone`, `doctor_email`, `doctor_password`,`doctor_degree`, `doctor_college`, `doctor_yearcompl`, `doctor_yearexp`,`doctor_regnum`, `doctor_regcou`, `doctor_regyear`, `doctor_clinicname`,`doctor_clinicad`, `doctor_cliniccity`, `doctor_idproof`, `doctor_picture`,`doctor_propic`, `doctor_clinicregnum`, `doctor_days`, `doctor_time`,`doctor_fee`) VALUES ('".$_POST['d_name']."','".$_POST['d_gender']."', '".$_POST['d_spe']."', '".$_POST['d_city']."',
".$_POST['d_phone'].",'".$_POST['d_email']."', '".$_POST['d_password']."', '".$_POST['d_degree']."', '".$_POST['d_college']."', ".$_POST['d_yearcom'].",".$_POST['d_yearexp'].",'".$_POST['d_rnu']."','".$_POST['d_rcou']."',".$_POST['d_ryear'].",'".$_POST['d_cname']."','".$_POST['d_cad']."','".$_POST['d_ccity']."','".$_POST['d_idproof']."','".$_FILES['d_proofpic']['name']."','".$_FILES['d_propic']['name']."','".$_POST['d_cregnum']."','".$_POST['d_ava']."','".$_POST['d_time']."','".$_POST['d_fee']."')";  


$res= mysqli_query($conn, $sql);
header("location:../html/reg_msg.html");
/*if (!mysqli_query($conn,$sql))
{
	die('error:'.mysqli_error($conn));
}
else{
	header("location:../html/reg_msg.html");
}*/

?>