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
	
	    //get the form values entered
		$email = $password = "";
		$email = $_POST["c_email"];
		$email = filter_login_input($email);//clean the values to avoid sql injections
		$password = $_POST["c_password"];
		$password = filter_login_input($password);
		
		//query to check whether the username and password is correct
		$qry = "SELECT * FROM customer WHERE customer_email='$email' AND customer_password='$password'";
		$res = $conn->query($qry);
		if(mysqli_num_rows($res)>0)
		{
			$_SESSION['login'] = $email;//set session if login is succesful
			
			
		}
		else 
		{  
	
	$loginCheck = "No";
		header("location: ../html/customer_login.html");//path to go if username/password is wrong		
	
		}
			
}

if(isset($_SESSION['login']))
	{
	$_SESSION['cart'] =array();//create session for shopping cart
	$_SESSION['remove'] =array();//create session for shopping cart
	$sql2='SELECT * from customer WHERE customer_email="'.$_SESSION['login'].'"';
	$res2= mysqli_query($conn, $sql2);
	if (mysqli_num_rows($res2) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res2)) {
$_SESSION['cust_id']=$row['customer_id'];//create session for customer ID
	}}
			// below code is used to redirect users to  page when log in is succesful
			header("location: ../php/customer_profile.php");
			// below code is used to skip executing the remaining code
			// after this
			exit();
	}

?>