<?php


$conn = mysqli_connect("localhost", "root", "topgear", "project");
	if(mysqli_connect_error())
	{
		echo "<p>Error in connection to database.</p>";
		exit();
	}

  
$target = "upload/".basename($_FILES["image"]["name"]);


   if( move_uploaded_file($_FILES['image']['tmp_name'],$target))
	{
		$msg="image uploaded";
		echo"$msg";
	}
	else{
		$msg="not uploaded";
		echo"$msg";
	}
//INSERT INTO `pharmacy`(` `pharmacy_fname`, `pharmacy_lname`, `pharmacy_email`, `pharmacy_password`, `p_address`, `p_contact`, `p_store_reg_no`, `p_lic_no`, `pharmacy_image`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])
  



$sql="INSERT INTO pharmacy(pharmacy_name, pharmacy_email, pharmacy_password, p_address, p_contact, p_store_reg_no, p_lic_no, pharmacy_image) VALUES('".$_POST['p_name']."','".$_POST['p_email']."','".$_POST['p_password']."','".$_POST['p_address']."','".$_POST['p_contact']."','".$_POST['p_store_reg_no']."','".$_POST['p_lic_no']."','".$_FILES['image']['name']."')";
$res= mysqli_query($conn, $sql);
header("location:../html/reg_msg.html");
/*if (!mysqli_query($conn,$sql))
{
	die('error:'.mysqli_error($conn));
}
else{
	header("location:../html/reg_msg.html");
}*/



//mysqli_close($conn);
  




?>