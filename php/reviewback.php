<?php
$name=$_POST['cust_name'];
$product=$_POST['product_name'];
$review=$_POST['review'];


echo "review added";
$con=mysqli_connect("localhost","root","topgear","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="INSERT INTO review(customer_name,product_name,review) 
VALUES 
('$name','$product','$review')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  mysqli_close($con);
  header("location: ../php/index1.php");
?>