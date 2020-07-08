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
		$email = $_POST["a_id"];
		$email = filter_login_input($email);
		$password = $_POST["a_password"];
		$password = filter_login_input($password);
		
		
		$qry = "SELECT * FROM admin WHERE admin_id='$email' AND a_password='$password'";
		$res = $conn->query($qry);
		if(mysqli_num_rows($res)>0)
		{
			$_SESSION['adminlogin'] = $email;
			
			
		}
		else 
		{  
	
	$loginCheck = "No";
		header("location:../php/admin_profile.php");		
	
		}
			
}

if(isset($_SESSION['adminlogin']))
	{
		
			// below code is used to redirect users to  page
			header("location:../php/admin_profile.php");
			// below code is used to skip executing the remaining code
			// after this
			exit();
	}
?>