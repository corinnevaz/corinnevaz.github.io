<?php
// you have already learned about session
session_start();
if(isset($_SESSION['login'])) {
	
$total=0;
}
else{

	header("location: ../html/customer_login.html");
	}
	// checks whether logout button is clicked or not
		if(isset($_POST["logout"]))
		{
			// below code is used to destroy all the session
			session_destroy();
			// below code is used to redirect users to  page
			header("location: ../html/newweb.html");
			// below code is used to skip executing the remaining code
			// after this
			exit();
		}

	$conn = mysqli_connect("localhost", "root", "topgear", "project");
	if(mysqli_connect_error()){
	
		echo "<p>Error in connection to database.</p>";
		exit();
	}
	//else
	//{
	//	echo "<p>connection to database.</p>";
	//}
	if(isset($_SESSION['cart'])){
   
}
 else {
    header("location: order3.php");
}
	
	if(isset($_POST["delete_item"]))
	{
		$rem=$_POST['delete'];
   $key = array_search($rem, $_SESSION['cart']);
	  //echo"$key";
	  unset($_SESSION['cart'][$key]);
	}
	if(isset($_SESSION['cart']))
	{$a=implode('","',$_SESSION[cart]);
		
		//$a = htmlspecialchars($a); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
       //$a = mysql_real_escape_string($a);
        // makes sure nobody uses SQL injection
		
        //$sql = "SELECT * FROM product";
		
       $sql = 'SELECT * FROM product WHERE product_name IN ("'.$a.'")';
		$res = mysqli_query($conn, $sql);
	   
	}
    $email=$_SESSION['login'] ;
	$sql1="SELECT * FROM customer WHERE customer_email='$email'";
	   $res1 = mysqli_query($conn, $sql1);
	
	// checks whether logout button is clicked or not
		if(isset($_POST["logout"]))
		{
			// below code is used to destroy all the session
			session_destroy();
			// below code is used to redirect users to  page
			header("location: ../html/newweb.html");
			// below code is used to skip executing the remaining code
			// after this
			exit();
		}
	
	
?>
<html lang="en-US">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>SIVIKA MEDICAL WEBSITE FOR THE UNDERPREVILIGED </title>
<link href="..\css\cart.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
</style>
</head>
<body>
<nav>

	<div class="admin">
	
<div class="adminbuttons" style="margin-top:4px">
<div class="dropdown"style="padding-left:20px;">
  <button class="dropbtn"style="padding-left:50px;" ><center><img src="profile.png"alt="profile" width="25px" height="25px" ></center></button>
  <div class="dropdown-content">
    <a href="..\php\profile.php">Profile </a>
 
	 <a href="..\php\doctorsignup.html"><form method="post" style="margin-left:0px; margin:right:0px; padding:0px"><input type="submit" name="logout" value="LogOut" style="background-color:none; border:none;"></a></p>
  </div>
  </div>
  </div>
  <div class="adminbuttons" style="margin-top:4px">
<div class="dropdown">
  <button class="dropbtn" >Doctor</button>
  <div class="dropdown-content">
    <a href="..\html\doctor_login.html">Doctor Log-in</a>
    <a href="..\html\doctorsignup.html">Doctor Sign-Up</a>
  </div>
</div>	
</div>
<div class="adminbuttons" style="margin-top:4px"><a href="#"><div class="dropdown">
  <button class="dropbtn">Customer</button>
  <div class="dropdown-content">
    <a href="..\html\customer_login.html">Customer Log-in</a>
    <a href="..\html\customer_signup.html">Customer Sign-Up</a>
  </div>
</div>	 </div>
<div class="adminbuttons" style="margin-top:4px"><a href="#"><div class="dropdown">
  <button class="dropbtn">Pharmacy</button>
  <div class="dropdown-content">
    <a href="..\html\pharma.html">Pharmacy Log-in</a>
    <a href="..\html\pharma_signup.html">Pharmacy Sign-Up</a>
	<a href="..\php\addmed.php">Add Medicines</a>
  </div>
</div>	 </div>
<div class="adminbuttons" style="margin-top:4px">
<div class="dropdown">
  <button class="dropbtn" style="padding-right:40px;"><a href="..\html\adminlogin.html">Admin</a></button>
 
</div>	
</div>

		<div class="adminbuttons" style="margin-top:1px"> <div id="google_translate_element"> </div> </div>
	</div>
<div class="webname">
<div class="websitename">SIVIKA.CO</div>
<div class="menu">
  <ol>
    <li class="menu-item"><a href="..\html\newweb.html">About</a></li>
    <li class="menu-item"><a href="..\php\customer_docview.php">Appoint</a></li>
    <li class="menu-item"><a href="..\php\order3.php">Order</a>
     
    </li>
	
   <li class="menu-item"><a href="..\html\compare.html">Compare</a></li>

    <li class="menu-item"><a href="">NGO</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="..\education\LIST_EDUCATIONAL_NGO.html">Education</a></li>
        <li class="menu-item"><a href="..\healthcare\LIST_HEALTHCARE_NGO.html">Healthcare</a></li>
      </ol>
    </li>
<li class="menu-item"><a href="#0">Info</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="..\homeremedies\LIST_HOMEREMEDIES.html">Home Remedies</a></li>
        <li class="menu-item"><a href="..\disease\LIST_DISEASES.html">Disease Information</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="..\html\sitemap.html">Sitemap</a></li>
  </ol>
</div>
</div>
</nav>
<div class="content">
<div class='cart'>
<div class="cart_item" style="height:30px;">
<div class="cart_image" style="height:30px;"></div>
<div class="cart_name" style="height:30px;">Cart Items</div>
<div class="cart_price" style="height:30px;">Price in Rs.</div>
<div class="cart_del" style="height:30px;"> </div>
</div>
<hr style="border: 1px solid black;">
<?php
//print_r($_SESSION);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
echo'<div class="cart_item">';
echo'<div class="cart_image"><img src="data:image;base64,'.base64_encode($row['product_image']). 'alt="medicine" height="100px" width="100px"></div>';
echo'<div class="cart_name">'.$row['product_name'].'</div>';
$indexes = array_keys($_SESSION['cart'],$row['product_name']); 
$qty=sizeof($indexes);
$ttotal=((double)($row['product_price']))*$qty;
echo'<div class="cart_price">'.$row['product_price'];
echo'<br>';
echo'Quantity:'.$qty;
echo'<br>';
echo'total:'.$ttotal.'</div>';

echo'<div class="cart_del"> <form name="del" action="#" method="POST"><input type="hidden" name="delete" value="'.$row['product_name'].'"><input type="submit" name="delete_item" value="Delete" style="font-family:Verdana, sans-serif;font-weight:bold;font-size:14 pt;color:black;background-color:white;border:2px solid #000000;padding:1px;height:30px;width:100px;"></form></div>';
echo'</div>';
echo"<hr style='border: 1px solid black;'>";


$total=$total+$ttotal;

}} else {
    echo "cart is empty!";
	
}


?>
<div class="bill">
<div class="total">
<?php
echo"Total =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $total";
$tax=$total*0.05;
echo"<br>";
echo" Tax 5%=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $tax";
$delivery=10;
echo"<br>";
echo" Delivery Charges = $delivery";
$subtotal=$total+$tax+$delivery;
$_SESSION['subtotal']=$subtotal;
echo"<br>";
echo"<hr style='border: 1px solid black;'>";
echo"Total = &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$subtotal";
?></div>
</div>
</div>
<div class="address">
<div class="cart">
Delivery Address:
<hr style="border: 1px solid black;">
<br>Estimated Delivery Time: 1-2 days<br>
<?php
if (mysqli_num_rows($res1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res1)) {
echo "Deliver To :";
echo"<br>";
echo $row['address'];





}} else {
    echo "No Addresses!";
}
?>

</div>
</div>
<div class="payment">
<div class="cart">
Payment Method:
<hr style="border: 1px solid black;">
<form name="payment" action="confirm.php" method="POST">
<input type="radio" name="payment" value="cash" required >Cash on Delivery<br>

<center>
<input type="hidden" name="confirm" value=""><input type="submit" name="place_order" value="Place Order" style="font-family:Verdana, sans-serif;font-weight:bold;font-size:15 pt;color:black;background-color:white;border:2px solid #000000;padding:1px;height:50px;width:200px;"></form>
</center>

</div>

</div>
			
            
</div>
<br>
<div class="footer">
<br><br>
<br>
  <p><table>
  <tr>
    <td ><a href="..\html\newweb.html">Home</a></td>
     <td><a href="..\html\map.html">Store Locator</a><br></td>
	<td><a href="..\html\doctorsignup.html">Are you a Doctor? Join Us</a><br></td>
	<td><a href="..\disease\LIST_DISEASES.html">Disease Information</a></td>
	
  </tr>
  <tr>
    <td><a href="..\html\customer_sign.html">Sign-up</a><br></td>
	<td><a href="..\html\pharma_signup.html">Are you a Pharmacist?</a><br></td>
	<td><a href="..\html\customer_login.html">Already a user? Log-in.</a><br></td>
	<td><a href="..\homeremedies\LIST_HOMEREMEDIES.html">Home Remedies</a><br></td>

	
</tr>
  <tr>
    <td><a href="..\html\newweb.html">About us</a><br></td>
	<td><a href="https://snatchbot.me/webchat?botID=46836&appID=B45P5NaH1zswBpoPPNHE">Chat</a><br></td>
	<td><a href="..\php\order3.php">Want medicines? Order</a><br></td>
		<td><a href="..\healthcare\LIST_HEALTHCARE_NGO.html">Healthcare(NGO)</a></td>

	</tr>
	<tr>
	<td><a href="..\html\sitemap.html">Site-Map</a></td>
	<td><a href="..\php\index1.php">Customer Review</a></td>
	<td><a href="..\html\compare.html">Don't know which is best? Compare</a></td>
	<td><a href="..\education\LIST_EDUCATIONAL_NGO.html">Education(NGO)</a></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr>
	
</table><br></p>
				<div class="footer-social-icons">
    <ul class="social-icons">
        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
    </ul>
	<br>
	
</div>
</div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en',  layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="f.js"></script>

<script> 
function getSelectionText() {
    var text = "";
    if (window.getSelection) {
        text = window.getSelection().toString();
    // for Internet Explorer 8 and below. For Blogger, you should use &amp;&amp; instead of &&.
    } else if (document.selection && document.selection.type != "Control") { 
        text = document.selection.createRange().text;
    }
    return text;
}
$(document).ready(function (){ // when the document has completed loading
   $(document).mouseup(function (e){ // attach the mouseup event for all div and pre tags
      setTimeout(function() { // When clicking on a highlighted area, the value stays highlighted until after the mouseup event, and would therefore stil be captured by getSelection. This micro-timeout solves the issue. 
         responsiveVoice.cancel(); // stop anything currently being spoken
         responsiveVoice.speak(getSelectionText()); //speak the text as returned by getSelectionText
      }, 1);
   });
});
</script>
<script src="https://code.responsivevoice.org/responsivevoice.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<script> 
function getSelectionText() {
    var text = "";
    if (window.getSelection) {
        text = window.getSelection().toString();
    // for Internet Explorer 8 and below. For Blogger, you should use &amp;&amp; instead of &&.
    } else if (document.selection && document.selection.type != "Control") { 
        text = document.selection.createRange().text;
    }
    return text;
}
$(document).ready(function (){ // when the document has completed loading
   $(document).mouseup(function (e){ // attach the mouseup event for all div and pre tags
      setTimeout(function() { // When clicking on a highlighted area, the value stays highlighted until after the mouseup event, and would therefore stil be captured by getSelection. This micro-timeout solves the issue. 
         responsiveVoice.cancel(); // stop anything currently being spoken
         responsiveVoice.speak(getSelectionText()); //speak the text as returned by getSelectionText
      }, 1);
   });
});
</script>
</body>

</html>