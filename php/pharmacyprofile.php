<?php
session_start();
	$conn = mysqli_connect("localhost", "root", "topgear", "project");
	if(mysqli_connect_error())
	{
	
		echo "<p>Error in connection to database.</p>";
		exit();
	}
	if(isset($_SESSION['adminlogin'])) {
	
	//echo"<script language='javascript'>";
//echo "alert('Welcome' )";
//echo"</script>";

}
else{

	header("location: ../html/adminlogin.html");
	}  
	
	  
		if (isset($_POST['accept']))
			{ 
			if(!empty($_POST['pharmacy_id']))
			{
				$query=$_POST['pharmacy_id'];
				$sql1="SELECT * FROM pharmacy WHERE pharmacy_id=".$query;
				$res1=mysqli_query($conn, $sql1);
				if (mysqli_num_rows($res1) > 0) 
				{
					// output data of each row
					while($row = mysqli_fetch_assoc($res1))
						{	
							$sql2="INSERT INTO ver_pharmacy(pharmacy_id,pharmacy_name,pharmacy_email,pharmacy_password,p_address,p_contact,p_store_reg_no,p_lic_no,pharmacy_image) VALUES (".$row['pharmacy_id'].",'".$row['pharmacy_name']."','".$row['pharmacy_email']."','".$row['pharmacy_password']."','".$row['p_address']."','".$row['p_contact']."','".$row['p_store_reg_no']."','".$row['p_lic_no']."','".$row['pharmacy_image']."')";  
							$res2=mysqli_query($conn,$sql2);
							
						}
				} 
				$sql3="DELETE FROM pharmacy WHERE pharmacy_id=".$query;
				$res3=mysqli_query($conn,$sql3);
			}
			$sql = "SELECT * FROM pharmacy";
       
			$res = mysqli_query($conn, $sql);
		
			}
	
		
	
		else if (isset($_POST['reject']))
			{ 
				$query=$_POST['pharmacy_id'];
				$sql3="DELETE FROM pharmacy WHERE pharmacy_id=".$query;
				$res3=mysqli_query($conn,$sql3);
				$sql = "SELECT * FROM pharmacy";
       
				$res = mysqli_query($conn, $sql);
			}
	
		

	
		else
		{
		
		$sql = "SELECT * FROM pharmacy";
       
		$res = mysqli_query($conn, $sql);
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
    <li class="menu-item"><a href="..\html\sitemap.html">Sitemap</a></li>
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
     echo'   	<h4>'.$row['pharmacy_name'].'</h4>';
            

           echo' <div class="price-big">';
            	echo'<b>Rs. '.$row['pharmacy_email'].'</b>';
echo'</div>';
             
            echo'<h3>Specialization:</h3>';
            echo'<div class="sku">';
                echo'<span>'.$row['p_address'].'</span></>';
            echo'</div><br>';

			echo'<div class="product-options">';
            echo'<strong>Contact</strong>';
            echo'<span>'.$row['p_contact'].'</span>';
            echo'</div>'; 
			
           echo'<button class="add-cart-large" onclick="additem1()"><form action="#" method="POST"><input type="hidden" name="pharmacy_id" value="'.$row['pharmacy_id'].'"><input type="submit" value="Select" name="accept" "></form>';                          
           echo'<button class="removecart" onclick="additem1()"><form action="#" method="POST"><input type="hidden" name="pharmacy_id" value="'.$row['pharmacy_id'].'"><input type="submit" value="Remove" name="reject" style="text-decoration:none;border:none;background-color:white;"></form>';                          
              
        echo'</div>';
        echo'<div class="make3D">';
            echo'<div class="product-front">';
                echo'<div class="shadow"></div>';
                echo "<img src='upload/".$row['pharmacy_image']."' alt='img' >";
                echo'<div class="image_overlay"></div>';
                echo'<div class="add_to_cart"><form action="#" method="POST"><input type="hidden" name="pharmacy_id" value="'.$row['pharmacy_id'].'"><input type="submit" value="Accept" name="accept" style="text-decoration:none;border:none;background-color:none;"></form></div>';
                echo'<div class="view_gallery">View Information</div>';  
                echo'<div class="reject"><form action="#" method="POST"><input type="hidden" name="pharmacy_id" value="'.$row['pharmacy_id'].'"><input type="submit" value="Reject" name="reject" style="text-decoration:none;border:none;background-color:none;"></form></div>';
				
                echo'<div class="stats">';        	
                    echo'<div class="stats-container">';
                       
                        echo'<strong>Name</strong><br>';
						echo'<span class="product_name">'.$row['pharmacy_name'].'</span>';
                                                               
                        
                        echo'<div class="product-options">';
                        echo'<strong>Contact</strong>';
                        echo'<span>'.$row['p_contact'].'</span>';
                 
                    echo'</div>';  
					echo'<div class="product-options">';
                        echo'<strong></strong>';
                        
                 
                    echo'</div>';  
                    echo'</div>';                         
                echo'</div>';
            echo'</div>';
          
            echo'<div class="product-back">';
                echo'<div class="shadow"></div>';
                echo'<div class="carousel">';
                    echo'<ul class="carousel-container">';
                        echo "<li><img src='upload/".$row['pharmacy_image']."' alt='img'>";
                        echo'<li><div class="infont">';
                          echo'<br><h3><center>Pharmacy Details</center></h3><br>';
							
							echo'<span>Address: '.$row['p_address'].'</span><br><br>';
							echo'<span>Contact: '.$row['p_contact'].'</span><br><br>';
                    echo'</div>';
echo'</li>';
           echo'<li><div class="infont">';
                          echo'<br>           <h3><center></center>Pharmacy Documents</h3><br><br>';
                        echo'<span>Store Registration : '.$row['p_store_reg_no'].'</span><br><br>';
						echo'<span>Pharmacy License Number: '.$row['p_lic_no'].'</span><br><br>';
						
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