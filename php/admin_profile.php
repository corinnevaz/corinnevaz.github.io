<?php
session_start();
	$conn = mysqli_connect("localhost", "root", "topgear", "project");
	if(mysqli_connect_error()){
	
		echo "<p>Error in connection to database.</p>";
		exit();
	}
	//else
	//{
	//	echo "<p>connection to database.</p>";
	//}
	// you have already learned about session


if(isset($_SESSION['adminlogin'])) {
	
	//echo"<script language='javascript'>";
//echo "alert('Welcome' )";
//echo"</script>";

}
else{

	header("location: adminlogin.html");
	}  
    if (isset($_POST['accept'])){ 
	
		if(!empty($_POST['doc_id'])){
        $query = $_POST['doc_id'];
	 
        // makes sure nobody uses SQL injection
        $sql = 'SELECT * FROM doc_temp WHERE doctor_id='.$query;
		$res = mysqli_query($conn, $sql);
		if (mysqli_num_rows($res) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($res))
   {
	   $sql1="INSERT INTO `doc_per` (`doctor_id`,`doctor_name`, `doctor_gender`,`doctor_spe`, `doctor_city`, `doctor_phone`, `doctor_email`, `doctor_password`,`doctor_degree`, `doctor_college`, `doctor_yearcompl`, `doctor_yearexp`,`doctor_regnum`, `doctor_regcou`, `doctor_regyear`, `doctor_clinicname`,`doctor_clinicad`,`doctor_cliniccity`, `doctor_idproof`, `doctor_picture`,`doctor_propic`, `doctor_clinicregnum`, `doctor_days`, `doctor_time`,`doctor_fee`) VALUES ('".$row['doctor_id']."','".$row['doctor_name']."','".$row['doctor_gender']."', '".$row['doctor_spe']."', '".$row['doctor_city']."',".$row['doctor_phone'].",'".$row['doctor_email']."', '".$row['doctor_password']."', '".$row['doctor_degree']."', '".$row['doctor_college']."', ".$row['doctor_yearcompl'].",".$row['doctor_yearexp'].",'".$row['doctor_regnum']."','".$row['doctor_regcou']."',".$row['doctor_regyear'].",'".$row['doctor_clinicname']."','".$row['doctor_clinicad']."','".$row['doctor_cliniccity']."','".$row['doctor_idproof']."','".$row['doctor_picture']."','".$row['doctor_propic']."','".$row['doctor_clinicregnum']."','".$row['doctor_days']."','".$row['doctor_time']."','".$row['doctor_fee']."')";  
   $res1 = mysqli_query($conn, $sql1);
   if(!mysqli_query($conn,$sql1)){
	$sql3='DELETE from doc_temp where doctor_id ='.$query;
	$res3= mysqli_query($conn,$sql3);
	if(mysqli_query($conn,$sql3)){
	header("location:../php/admin_profile.php");
	exit();
	
}
	
	
	
}
   }
}
  
   
	}
	}
	
	
	
if (isset($_POST['reject'])){ 
	
		if(!empty($_POST['doc_id'])){
        $query = $_POST['doc_id'];
	 
        // makes sure nobody uses SQL injection
        $sql = 'SELECT * FROM doc_temp WHERE doctor_id='.$query;
		$res = mysqli_query($conn, $sql);
		if (mysqli_num_rows($res) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($res))
   {
	   //$sql1="INSERT INTO `doc_per` (`doctor_id`,`doctor_name`, `doctor_gender`,`doctor_spe`, `doctor_city`, `doctor_phone`, `doctor_email`, `doctor_password`,`doctor_degree`, `doctor_college`, `doctor_yearcompl`, `doctor_yearexp`,`doctor_regnum`, `doctor_regcou`, `doctor_regyear`, `doctor_clinicname`,`doctor_clinicad`,`doctor_cliniccity`, `doctor_idproof`, `doctor_picture`,`doctor_propic`, `doctor_clinicregnum`, `doctor_days`, `doctor_time`,`doctor_fee`) VALUES ('".$row['doctor_id']."','".$row['doctor_name']."','".$row['doctor_gender']."', '".$row['doctor_spe']."', '".$row['doctor_city']."',".$row['doctor_phone'].",'".$row['doctor_email']."', '".$row['doctor_password']."', '".$row['doctor_degree']."', '".$row['doctor_college']."', ".$row['doctor_yearcompl'].",".$row['doctor_yearexp'].",'".$row['doctor_regnum']."','".$row['doctor_regcou']."',".$row['doctor_regyear'].",'".$row['doctor_clinicname']."','".$row['doctor_clinicad']."','".$row['doctor_cliniccity']."','".$row['doctor_idproof']."','".$row['doctor_picture']."','".$row['doctor_propic']."','".$row['doctor_clinicregnum']."','".$row['doctor_days']."','".$row['doctor_time']."','".$row['doctor_fee']."')";  
   //$res1 = mysqli_query($conn, $sql1);
   //if(!mysqli_query($conn,$sql1)){
	//die('error:'.mysqli_error($conn));
	$sql2='DELETE from doc_temp where doctor_id ='.$query;
	$res2= mysqli_query($conn,$sql2);
	if(mysqli_query($conn,$sql2)){
	header("location: ../php/admin_profile.php");
	exit();
	
}
   }
}
  
   
	}
	}
	
	
 if (isset($_POST['select'])){ 
	
		if(!empty($_POST['doc_id'])){
        $query = $_POST['doc_id'];
	 
        // makes sure nobody uses SQL injection
        $sql = 'SELECT * FROM doc_temp WHERE doctor_id='.$query;
		$res = mysqli_query($conn, $sql);
		if (mysqli_num_rows($res) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($res))
   {
	   $sql1="INSERT INTO `doc_per` (`doctor_id`,`doctor_name`, `doctor_gender`,`doctor_spe`, `doctor_city`, `doctor_phone`, `doctor_email`, `doctor_password`,`doctor_degree`, `doctor_college`, `doctor_yearcompl`, `doctor_yearexp`,`doctor_regnum`, `doctor_regcou`, `doctor_regyear`, `doctor_clinicname`,`doctor_clinicad`,`doctor_cliniccity`, `doctor_idproof`, `doctor_picture`,`doctor_propic`, `doctor_clinicregnum`, `doctor_days`, `doctor_time`,`doctor_fee`) VALUES ('".$row['doctor_id']."','".$row['doctor_name']."','".$row['doctor_gender']."', '".$row['doctor_spe']."', '".$row['doctor_city']."',".$row['doctor_phone'].",'".$row['doctor_email']."', '".$row['doctor_password']."', '".$row['doctor_degree']."', '".$row['doctor_college']."', ".$row['doctor_yearcompl'].",".$row['doctor_yearexp'].",'".$row['doctor_regnum']."','".$row['doctor_regcou']."',".$row['doctor_regyear'].",'".$row['doctor_clinicname']."','".$row['doctor_clinicad']."','".$row['doctor_cliniccity']."','".$row['doctor_idproof']."','".$row['doctor_picture']."','".$row['doctor_propic']."','".$row['doctor_clinicregnum']."','".$row['doctor_days']."','".$row['doctor_time']."','".$row['doctor_fee']."')";  
   $res1 = mysqli_query($conn, $sql1);
   if(!mysqli_query($conn,$sql1)){
	$sql3='DELETE from doc_temp where doctor_id ='.$query;
	$res3= mysqli_query($conn,$sql3);
	if(mysqli_query($conn,$sql3)){
	header("location: ../php/admin_profile.php");
	exit();
	
}
	
	
	
}
   }
}
  
   
	}
	}
	
	
	
 if (isset($_POST['remove'])){ 
	
		if(!empty($_POST['doc_id'])){
        $query = $_POST['doc_id'];
	 
        // makes sure nobody uses SQL injection
        $sql = 'SELECT * FROM doc_temp WHERE doctor_id='.$query;
		$res = mysqli_query($conn, $sql);
		if (mysqli_num_rows($res) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($res))
   {
	   //$sql1="INSERT INTO `doc_per` (`doctor_id`,`doctor_name`, `doctor_gender`,`doctor_spe`, `doctor_city`, `doctor_phone`, `doctor_email`, `doctor_password`,`doctor_degree`, `doctor_college`, `doctor_yearcompl`, `doctor_yearexp`,`doctor_regnum`, `doctor_regcou`, `doctor_regyear`, `doctor_clinicname`,`doctor_clinicad`,`doctor_cliniccity`, `doctor_idproof`, `doctor_picture`,`doctor_propic`, `doctor_clinicregnum`, `doctor_days`, `doctor_time`,`doctor_fee`) VALUES ('".$row['doctor_id']."','".$row['doctor_name']."','".$row['doctor_gender']."', '".$row['doctor_spe']."', '".$row['doctor_city']."',".$row['doctor_phone'].",'".$row['doctor_email']."', '".$row['doctor_password']."', '".$row['doctor_degree']."', '".$row['doctor_college']."', ".$row['doctor_yearcompl'].",".$row['doctor_yearexp'].",'".$row['doctor_regnum']."','".$row['doctor_regcou']."',".$row['doctor_regyear'].",'".$row['doctor_clinicname']."','".$row['doctor_clinicad']."','".$row['doctor_cliniccity']."','".$row['doctor_idproof']."','".$row['doctor_picture']."','".$row['doctor_propic']."','".$row['doctor_clinicregnum']."','".$row['doctor_days']."','".$row['doctor_time']."','".$row['doctor_fee']."')";  
   //$res1 = mysqli_query($conn, $sql1);
   //if(!mysqli_query($conn,$sql1)){
	//die('error:'.mysqli_error($conn));
	$sql2='DELETE from doc_temp where doctor_id ='.$query;
	$res2= mysqli_query($conn,$sql2);
	if(mysqli_query($conn,$sql2)){
	header("location:../php/admin_profile.php");
	exit();
	
}
   }
}
  
   
	}
	}
	
	else{
		
		$sql = "SELECT * FROM doc_temp";
       
		$res = mysqli_query($conn, $sql);
	}
  
  // checks whether logout button is clicked or not
		if(isset($_POST["logout"]))
		{
			// below code is used to destroy all the session
			session_destroy();
			// below code is used to redirect users to  page
			header("location:../html/newweb.html");
			// below code is used to skip executing the remaining code
			// after this
			exit();
		}
  
?>
<html lang="en-US">
<head>
<title>SIVIKA MEDICAL WEBSITE FOR THE UNDERPREVILIGED </title>
<link href="..\css\adminprofile1.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
</style>
</head>
<body>
<nav>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<div id="wrapper">
<div class="cart-icon-top">
</div>

<div class="cart-icon-bottom">
</div>

<div id="checkout">
<form name="checkout" method="post" action="#" id="foorm">

<input type="submit" name="addtocart" value="Add To Cart" style="background-color:white; border:none;"></form>

</div>

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
    <li class="menu-item"><a href="..\sitemap.html">Sitemap</a></li>
  </ol>
</div>
</div>
<hr>
<div id="sidebar">
  <br>
  <h2>ADMIN PROFILE</h2>

    <div class="infront">
    	<h3><a href="admin_profile.php">Doctor Profile Confirmation</a></h3>
		
        <h3><a href="pharmacyprofile.php">Pharmacy Profile Confirmation</a></h3>
		<h3><a href="reports.php">Reports</a></h3>
		 </form>
      
    </div>
</div>
<div id="grid-selector">
       <div id="grid-menu">
       	   View:
           <ul>           	   
               <li class="largeGrid"><a href=""></a></li>
               <li class="smallGrid"><a class="active" href=""></a></li>
           </ul>
       </div>

     
</div>

     
</div>
<div id="grid">
<div class="gap">


<?php


if (mysqli_num_rows($res) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($res)) {
echo'  <div class="product">';
echo'    	<div class="info-large">';
     echo'   	<h4>'.$row['doctor_name'].'</h4>';
            

           echo' <div class="price-big">';
            	echo'<b>Rs. '.$row['doctor_fee'].'</b>';
echo'</div>';
             
            echo'<h3>Specialization:</h3>';
            echo'<div class="sku">';
                echo'<span>'.$row['doctor_spe'].'</span></>';
            echo'</div><br>';

			echo'<div class="product-options">';
            echo'<strong>Degree</strong>';
            echo'<span>'.$row['doctor_degree'].'</span>';
            echo'</div>'; 
			
           echo'<button class="add-cart-large" onclick="additem1()"><form action="#" method="POST"><input type="hidden" name="doc_id" value="'.$row['doctor_id'].'"><input type="submit" value="Select" name="select" style="text-decoration:none;border:none;background-color:white;"></form>';                          
           echo'<button class="removecart" onclick="additem1()"><form action="#" method="POST"><input type="hidden" name="doc_id" value="'.$row['doctor_id'].'"><input type="submit" value="Remove" name="remove" style="text-decoration:none;border:none;background-color:white;"></form>';                          
              
        echo'</div>';
        echo'<div class="make3D">';
            echo'<div class="product-front">';
                echo'<div class="shadow"></div>';
                echo "<img src='upload/".$row['doctor_propic']."' alt='img' >";
                echo'<div class="image_overlay"></div>';
                echo'<div class="add_to_cart"><form action="#" method="POST"><input type="hidden" name="doc_id" value="'.$row['doctor_id'].'"><input type="submit" value="Accept" name="accept" style="text-decoration:none;border:none;background-color:none;font-size: 18px;"></form></div>';
                echo'<div class="view_gallery">View Information</div>';  
                echo'<div class="reject"><form action="#" method="POST"><input type="hidden" name="doc_id" value="'.$row['doctor_id'].'"><input type="submit" value="Reject" name="reject" style="text-decoration:none;border:none;background-color:none;font-size: 18px;"></form></div>';
				
                echo'<div class="stats">';        	
                    echo'<div class="stats-container">';
                        echo'<span class="product_price">Rs '.$row['doctor_fee'].'</span>';
                        echo'<span class="product_name">'.$row['doctor_name'].'</span>';
                        echo'<p>'.$row['doctor_spe'].'</p>';                                            
                        
                        echo'<div class="product-options">';
                        echo'<strong>Degree</strong>';
                        echo'<span>'.$row['doctor_degree'].'</span>';
                 
                    echo'</div>';  
					echo'<div class="product-options">';
                        echo'<strong>Experince</strong>';
                        echo'<span>'.$row['doctor_yearexp'].'</span>';
                 
                    echo'</div>';  
                    echo'</div>';                         
                echo'</div>';
            echo'</div>';
          
            echo'<div class="product-back">';
                echo'<div class="shadow"></div>';
                echo'<div class="carousel">';
                    echo'<ul class="carousel-container">';
                        echo "<li><img src='upload/".$row['doctor_propic']."' alt='img'>";
                        echo'<li><div class="infont">';
                          echo'<br>           <h3><center>Clinic Information</center></h3><br>';
							echo'<span>Name: '.$row['doctor_clinicname'].'</span><br><br>'; 
							echo'<span>Address: '.$row['doctor_clinicad'].'</span><br><br>';
							echo'<span>City: '.$row['doctor_cliniccity'].'</span><br><br>';
                    echo'</div>';
echo'</li>';
           echo'<li><div class="infont">';
                          echo'<br>           <h3><center>Timings</center></h3><br><br>';
                        echo'<span>Days: '.$row['doctor_days'].'</span><br><br>';
						echo'<span>Timing: '.$row['doctor_time'].'</span><br><br>';
						echo'<span>Phone: '.$row['doctor_phone'].'</span><br><br>';
						echo'<span>E-mail: '.$row['doctor_email'].'</span><br><br>';
                    echo'</div></li>';
                    echo'</ul>';
                    echo'<div class="arrows-perspective">';
                        echo'<div class="carouselPrev">';
                           echo' <div class="y"></div>';
                            echo'<div class="x"></div>';
                        echo'</div>';
                        echo'<div class="carouselNext">';
                          echo'  <div class="y"></div>';
                            echo'<div class="x"></div>';
                        echo'</div>';
                    echo'</div>';
                echo'</div>';
                echo'<div class="flip-back">';
                  echo'  <div class="cy"></div>';
                    echo'<div class="cx"></div>';
                echo'</div>';
            echo'</div>';
        echo'</div>';	
    echo'</div>'; 
		}
} else {
  echo "0 results";
} 
?>
  
	
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="menu.js"></script>
<script >

      $(document).ready(function(){
	
	$(".largeGrid").click(function(){											
    $(this).find('a').addClass('active');
    $('.smallGrid a').removeClass('active');
    
    $('.product').addClass('large').each(function(){											
		});						
		setTimeout(function(){
			$('.info-large').show();	
		}, 200);
		setTimeout(function(){

			$('.view_gallery').trigger("click");	
		}, 400);								
		
		return false;				
	});
	
	$(".smallGrid").click(function(){		        
    $(this).find('a').addClass('active');
    $('.largeGrid a').removeClass('active');
    
		$('div.product').removeClass('large');
		$(".make3D").removeClass('animate');	
    $('.info-large').fadeOut("fast");
		setTimeout(function(){								
				$('div.flip-back').trigger("click");
		}, 400);
		return false;
	});		
	
	$(".smallGrid").click(function(){
		$('.product').removeClass('large');			
		return false;
	});
  
  $('.colors-large a').click(function(){return false;});
	
	
	$('.product').each(function(i, el){					

		// Lift card and show stats on Mouseover
		$(el).find('.make3D').hover(function(){
				$(this).parent().css('z-index', "20");
				$(this).addClass('animate');
				$(this).find('div.carouselNext, div.carouselPrev').addClass('visible');			
			 }, function(){
				$(this).removeClass('animate');			
				$(this).parent().css('z-index', "1");
				$(this).find('div.carouselNext, div.carouselPrev').removeClass('visible');
		});	
		
		// Flip card to the back side
		$(el).find('.view_gallery').click(function(){	
			
			$(el).find('div.carouselNext, div.carouselPrev').removeClass('visible');
			$(el).find('.make3D').addClass('flip-10');			
			setTimeout(function(){					
			$(el).find('.make3D').removeClass('flip-10').addClass('flip90').find('div.shadow').show().fadeTo( 80 , 1, function(){
					$(el).find('.product-front, .product-front div.shadow').hide();															
				});
			}, 50);
			
			setTimeout(function(){
				$(el).find('.make3D').removeClass('flip90').addClass('flip190');
				$(el).find('.product-back').show().find('div.shadow').show().fadeTo( 90 , 0);
				setTimeout(function(){				
					$(el).find('.make3D').removeClass('flip190').addClass('flip180').find('div.shadow').hide();						
					setTimeout(function(){
						$(el).find('.make3D').css('transition', '100ms ease-out');			
						$(el).find('.cx, .cy').addClass('s1');
						setTimeout(function(){$(el).find('.cx, .cy').addClass('s2');}, 100);
						setTimeout(function(){$(el).find('.cx, .cy').addClass('s3');}, 200);				
						$(el).find('div.carouselNext, div.carouselPrev').addClass('visible');				
					}, 100);
				}, 100);			
			}, 150);			
		});			
		
		// Flip card back to the front side
		$(el).find('.flip-back').click(function(){		
			
			$(el).find('.make3D').removeClass('flip180').addClass('flip190');
			setTimeout(function(){
				$(el).find('.make3D').removeClass('flip190').addClass('flip90');
		
				$(el).find('.product-back div.shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
					$(el).find('.product-back, .product-back div.shadow').hide();
					$(el).find('.product-front, .product-front div.shadow').show();
				});
			}, 50);
			
			setTimeout(function(){
				$(el).find('.make3D').removeClass('flip90').addClass('flip-10');
				$(el).find('.product-front div.shadow').show().fadeTo( 100 , 0);
				setTimeout(function(){						
					$(el).find('.product-front div.shadow').hide();
					$(el).find('.make3D').removeClass('flip-10').css('transition', '100ms ease-out');		
					$(el).find('.cx, .cy').removeClass('s1 s2 s3');			
				}, 100);			
			}, 150);			
			
		});				
	
		makeCarousel(el);
	});
	
	/* ----  Image Gallery Carousel   ---- */
	function makeCarousel(el){
	
		
		var carousel = $(el).find('.carousel ul');
		var carouselSlideWidth = 315;
		var carouselWidth = 0;	
		var isAnimating = false;
		var currSlide = 0;
		$(carousel).attr('rel', currSlide);
		
		// building the width of the casousel
		$(carousel).find('li').each(function(){
			carouselWidth += carouselSlideWidth;
		});
		$(carousel).css('width', carouselWidth);
		
		// Load Next Image
		$(el).find('div.carouselNext').on('click', function(){
			var currentLeft = Math.abs(parseInt($(carousel).css("left")));
			var newLeft = currentLeft + carouselSlideWidth;
			if(newLeft == carouselWidth || isAnimating === true){return;}
			$(carousel).css({'left': "-" + newLeft + "px",
								   "transition": "300ms ease-out"
								 });
			isAnimating = true;
			currSlide++;
			$(carousel).attr('rel', currSlide);
			setTimeout(function(){isAnimating = false;}, 300);			
		});
		
		// Load Previous Image
		$(el).find('div.carouselPrev').on('click', function(){
			var currentLeft = Math.abs(parseInt($(carousel).css("left")));
			var newLeft = currentLeft - carouselSlideWidth;
			if(newLeft < 0  || isAnimating === true){return;}
			$(carousel).css({'left': "-" + newLeft + "px",
								   "transition": "300ms ease-out"
								 });
			isAnimating = true;
			currSlide--;
			$(carousel).attr('rel', currSlide);
			setTimeout(function(){isAnimating = false;}, 300);						
		});
	}
	
	$('.sizes a span, .categories a span').each(function(i, el){
		$(el).append('<span class="x"></span><span class="y"></span>');
		
		$(el).parent().on('click', function(){
			if($(this).hasClass('checked')){				
				$(el).find('.y').removeClass('animate');	
				setTimeout(function(){
					$(el).find('.x').removeClass('animate');							
				}, 50);	
				$(this).removeClass('checked');
				return false;
			}
			
			$(el).find('.x').addClass('animate');		
			setTimeout(function(){
				$(el).find('.y').addClass('animate');
			}, 100);	
			$(this).addClass('checked');
			return false;
		});
	});
});
    </script>



  
  

  <script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>
</body>

</html>