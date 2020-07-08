<?php
//  session
	session_start();
	$conn = mysqli_connect("localhost", "root", "topgear", "project");
	if(mysqli_connect_error())
	{
		echo "<p>Error in connection to database.</p>";
		exit();
	}
	function filter_login_input($loginData)
	{
		$loginData = trim($loginData);
		$loginData = stripslashes($loginData);
		$loginData = htmlspecialchars($loginData);
		return $loginData;
	}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	
		$email = $password = "";
		$email = $_POST["d_email"];
		$email = filter_login_input($email);
		$password = $_POST["d_password"];
		$password = filter_login_input($password);
		
		
		$qry = "SELECT * FROM doc_per WHERE doctor_email='$email' AND doctor_password='$password'";
		$res = $conn->query($qry);
		if(mysqli_num_rows($res)>0)
		{
			$_SESSION['doc_login'] = $email;
			
			
		}
		else 
		{  
	
	$loginCheck = "No";
		header("location:../html/doctor_login.html");		
	
		}
			
}

if(isset($_SESSION['doc_login']))
	{	$sql2='SELECT * from doc_per WHERE doctor_email="'.$_SESSION['doc_login'].'"';
	$res2= mysqli_query($conn, $sql2);
	if (mysqli_num_rows($res2) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res2)) {
$_SESSION['doc_id']=$row['doctor_id'];//create session for customer ID
	}}
		
			// below code is used to redirect users to  page
			header("location: ../php/doctor_profile.php");
			// below code is used to skip executing the remaining code
			// after this
			exit();
	}
?>