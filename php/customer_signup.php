<?php
//echo"hello";
$con=mysqli_connect("localhost","root","topgear","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  echo"hello";
if(isset($_POST['sign']))
{
	
$sql="INSERT INTO `customer`( `customer_name`, `customer_email`, `customer_password`, `customer_age`, `customer_gender`, `customer_phone`, `address`) VALUES ('".$_POST['c_name']."','".$_POST['c_email']."','".$_POST['c_password']."','".$_POST['c_dob']."','".$_POST['c_gender']."','".$_POST['c_phone']."','".$_POST['c_addr']."')";
$result=mysqli_query($con,$sql);
  
mysqli_close($con);
}
header("location: ../html/customer_login.html");
?>