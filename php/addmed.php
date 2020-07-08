<?php
session_start();
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
if(isset($_SESSION['pharma_login'])) {
	
	//echo"<script language='javascript'>";
//echo "alert('Welcome' )";
//echo"</script>";

}
else{

	header("location: ../html/pharma.html");
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


if(isset($_POST['submit']))
 { 	$conn=mysqli_connect("localhost","root","topgear","project");
	$product_name=$_POST['product_name'];
	$composition=$_POST['composition'];
	$product_price=$_POST['product_price'];
	$product_usage=$_POST['product_usage'];
	$side_effect=$_POST['side_effect'];
	$direction=$_POST['direction'];
	
	 $imageName=mysqli_real_escape_string($conn,$_FILES["image"]["name"]);
	 $imageData=mysqli_real_escape_string($conn,file_get_contents($_FILES["image"]["tmp_name"]));
	 $imageType=mysqli_real_escape_string($conn,$_FILES["image"]["type"]);
	 $sql = "INSERT INTO product(product_name, composition, product_usage, side_effect, direction, product_price, product_image,pharmacy_id)VALUES ('".$product_name."','".$composition."','".$product_usage."','".$side_effect."','".$direction."',".$product_price.",'".$imageData."',".$_SESSION['pharma_id'].")";
		$res = mysqli_query($conn, $sql);
		 if(substr($imageType,0,5)== "image")
	 {	
		
		
		//echo "working code";
	
		 }
 else
 {
	  //echo "only images allowed";
	 
 }	
 
	 
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
//Display image
//echo '<img src="data:image/jpeg;base64,'.base64_encode($image->load()) .'" />';
//echo"$product_name";
//echo"$composition";
//echo"$product_price";
//echo"$product_usage";
//echo"$side_effect";
//echo"$direction";

?>




<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIVIKA MEDICAL WEBSITE FOR THE UNDERPREVILIGED </title>
<link href="..\css\addmed.css" rel="stylesheet" type="text/css">
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
<div class="adminbuttons" style="margin-top:4px"><a href="form1.html"><div class="dropdown">
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
    <li class="menu-item"><a href="..\html\appointment.php">Appoint</a></li>
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
    <li class="menu-item"><a href="..\sitemap.html">Sitemap</a></li>
  </ol>
</div>
</div>
</nav>
<div class="content"><hr>
<div class="form_product">
<script>
function validatename()
  {
   var name = document.add_product.product_name.value;
   var letters = /^[A-Za-z]+$/;
   if(name.match(letters))
     {
      return true;
     }
   else
     {
     alert("please enter a valid name");
     return false;
     }
  }
  


</script>
<form name="add_product" action="#" method="post" enctype="multipart/form-data">
<div style="height:400px;width:40%;background-color:;float:left;">
Medicine Name:<br><br><br><br>
Medicine Composition:<br><br><br>
Medicine Price: <br><br><br>
Medicine Usage:<br><br><br>
Medicine Side-Effects: <br><br><br>
Directions For Use: <br><br>
Medicine Image:
</div>
<div style="height:400px;width:60%;background-color:;float:right;">
<input type="text" required name="product_name" onchange=validatename() style="height:40px; width:300px; border:none; border-bottom: 2px solid black; background-color:#ffffff;"><br><br>
<textarea name="composition"  required style="height:40px; width:300px; border:none; border-bottom: 2px solid black; background-color:#ffffff;"></textarea><br><br>
<input type="number" step="0.01" required name="product_price" style="height:40px; width:300px; border:none; border-bottom: 2px solid black; background-color:#ffffff;"><br><br>
<textarea name="product_usage" required style="height:40px; width:300px; border:none; border-bottom: 2px solid black; background-color:#ffffff;"></textarea><br><br>
<textarea name="side_effect" required style="height:40px; width:300px; border:none; border-bottom: 2px solid black; background-color:#ffffff;"></textarea><br><br>
<textarea name="direction" required style="height:40px; width:300px; border:none; border-bottom: 2px solid black; background-color:#ffffff;"></textarea><br><br>
<input type="file" required name="image">
</div>
<input type="submit" name="submit" value="Add Medicine" style="font-family:Verdana, sans-serif;font-weight:bold;font-size:14 pt;color:black;background-color:white;border:2px solid #000000;padding:3px;height:50px;width:150px;margin-left:250px; margin-top:20px;"> <br><input type="reset" name="cancel" value="Reset" style="font-family:Verdana, sans-serif;font-weight:bold;font-size:14 pt;color:black;background-color:white;border:2px solid #000000;padding:3px;height:50px;width:150px;margin-left:250px;margin-top:20px;">
</form>
</div>
</div>
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
