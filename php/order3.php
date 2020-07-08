<?php
// you have already learned about session
session_start();

if(isset($_SESSION['login'])) {
	
	//echo"<script language='javascript'>";
//echo "alert('Welcome' )";
//echo"</script>";

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
	  
    if (isset($_POST['search'])){ 
	
		if(!empty($_POST['query'])){
        $query = $_POST['query'];
	 
        //$query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        //$query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
        $sql = 'SELECT * FROM product WHERE product_name LIKE "%'.$query.'%" OR composition LIKE "%'.$query.'%" OR product_usage LIKE "%'.$query.'%"';
		$res = mysqli_query($conn, $sql);
		
   
	}else{
		
		$sql = "SELECT * FROM product";
       
		$res = mysqli_query($conn, $sql);
	}}
	elseif (isset($_POST['filter'])){ 
	
	if(!empty($_POST['price_range'])){
// Loop to store and display values of individual checked checkbox.
		foreach($_POST['price_range'] as $selected){
		
        //$sql = "SELECT * FROM product";
       $sql = 'SELECT * FROM product WHERE product_price  BETWEEN 0 AND '.$selected;
		$res = mysqli_query($conn, $sql);
		
   
	}}
	else{
		
		$sql = "SELECT * FROM product";
       
		$res = mysqli_query($conn, $sql);
	}}
	else{
		
		$sql = "SELECT * FROM product";
       
		$res = mysqli_query($conn, $sql);
	}
	

if(isset($_POST['addtocart']))
{

 $item = $_POST['item'];
    foreach($item as  $value)
    {array_push($_SESSION['cart'],$value);
      
    }
	
	$del = $_POST['remove'];
    foreach($del as  $value)
    {array_push($_SESSION['remove'],$value);
      
    }
	foreach($_SESSION['remove'] as $rem)
	{
      $key = array_search($rem, $_SESSION['cart']);
	
	  //echo"$key";
	  unset($_SESSION['cart'][$key]);
	  $keyy = array_search($rem, $_SESSION['remove']);
	
	  //echo"$key";
	  unset($_SESSION['remove'][$keyy]);
	  	  
	}
	
	$size=sizeof($_SESSION['cart']);
	
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
<link href="..\css\order.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<style>
</style>
</head>
<body>
<nav>

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
	<h3>SELECTED ITEMS</h3>
    <div id="cart">
    	<span class="empty"><?php echo $size." Items In Cart";?></span>       
    </div>
   
    
  <h3>Price Range</h3>
    <div class="checklist categories">
    	<form name="price_filter" method="post" action="#">
        <input type="checkbox" name="price_range[]" value="100" >Rs. 0 -  Rs.100<br><br>
         <input type="checkbox" name="price_range[]" value="500"> upto Rs.500<br><br>
         <input type="checkbox" name="price_range[]" value="1000">upto Rs.1000 <br><br>
		 <input type="checkbox" name="price_range[]" value="5000">upto Rs.5000<br><br>
		 <input type="submit" name="filter" value="Apply Filter" style="font-family:Verdana, sans-serif;font-weight:bold;font-size:14 pt;color:black;background-color:white;border:2px solid #000000;padding:1px;height:30px;width:100px;"/>

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
	   <form  action="#" method="POST">
    <input type="text" name="query" style="font-family:Verdana, sans-serif;font-weight:bold;font-size:14 pt;height:35px; width:300px; border:none; border-bottom: 2px solid grey; background-color:#ffffff;"/>
    <input type="submit" name="search" value="Search" style="font-family:Verdana, sans-serif;font-weight:bold;font-size:14 pt;color:black;background-color:white;border:2px solid #000000;padding:1px;height:30px;width:100px;"/>
 <a href="cart.php" style="font-family:Verdana, sans-serif;font-weight:bold;font-size:14 pt;color:black;;border:2px solid #000000;padding:5px;height:30px;width:120px;"> CheckOut</a> 
</form>
     
</div>
<div id="grid">
<div class="gap">
<?php
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
echo'  <div class="product">';
echo'    	<div class="info-large">';
     echo'   	<h4>'.$row['product_name'].'</h4>';
            
             
           echo' <div class="price-big">';
            	echo'<b>'.$row['product_price'].'</b>';
echo'</div>';
             
            echo'<h3>COMPOSITION</h3>';
            echo'<div class="sku">';
                echo'<span>'.$row['composition'].'</span></>';
            echo'</div>';

    
            
           echo'<button class="add-cart-large" onclick="additem1()"> Select</button>';                          
                         
        echo'</div>';
        echo'<div class="make3D">';
            echo'<div class="product-front">';
                echo'<div class="shadow"></div>';
                echo'<img src="data:image;base64,'.base64_encode($row['product_image']). 'alt="medicine">';
                echo'<div class="image_overlay"></div>';
                echo'<div class="add_to_cart">Select</div>';
                echo'<div class="view_gallery">View gallery</div>';                
                echo'<div class="stats">';        	
                    echo'<div class="stats-container">';
                        echo'<span class="product_price">'.$row['product_price'].'</span>';
                        echo'<span class="product_name">'.$row['product_name'].'</span>';
						echo'<br><span class="product_id">'.$row['pharmacy_id'].'</span>';						
                        echo'<p>'.$row['composition'].'</p>';                                            
                        
                        echo'<div class="product-options">';
                        echo'<strong>Usage</strong>';
                        echo'<span>'.$row['product_usage'].'</span>';
                        
                    echo'</div>';                       
                    echo'</div>';                         
                echo'</div>';
            echo'</div>';
            
            echo'<div class="product-back">';
                echo'<div class="shadow"></div>';
                echo'<div class="carousel">';
                    echo'<ul class="carousel-container">';
                        echo'<li><img src="data:image;base64,'.base64_encode($row['product_image']). 'alt="medicine">';
                        echo'<li><div class="infont">';
                          echo'<br>           <h3><center>SIDE EFFECTS</center></h3><br>';
echo'<span>'.$row['side_effect'].'</span>';
                        
                    echo'</div>';
echo'</li>';
           echo'<li><div class="infont">';
                          echo'<br>           <h3><center>DIRECTION FOR USE</center></h3><br>';
                        echo'<span>'.$row['direction'].'</span>';
                        
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
	var i=1;var j=1
	$('.add-cart-large').each(function(i, el){
		$(el).click(function(){
			var carousel = $(this).parent().parent().find(".carousel-container");
			var img = carousel.find('img').eq(carousel.attr("rel"))[0];						
			var position = $(img).offset();	
			var productName = $(this).parent().find('h4').get(0).innerHTML;				
			var pricediff = $(this).parent().find('b').get(0).innerHTML;
			
			$("body").append('<div class="floating-cart"></div>');		
			var cart = $('div.floating-cart');		
			$("<img src='"+img.src+"' class='floating-image-large' />").appendTo(cart);
			
			$(cart).css({'top' : position.top + 'px', "left" : position.left + 'px'}).fadeIn("slow").addClass('moveToCart');		
			setTimeout(function(){$("body").addClass("MakeFloatingCart");}, 800);
			
			setTimeout(function(){
			$('div.floating-cart').remove();
			$("body").removeClass("MakeFloatingCart");


			var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='"+img.src+"' alt='' /></div><span>"+productName+"</span><strong>"+pricediff+"</strong><div class='cart-item-border'></div><div class='delete-item'></div></div>";			
            var iteem='<input type="hidden" name="item[]" id="h" value="'+productName+'">';
			$("#cart .empty").hide();			
			$("#cart").append(cartItem);
			$("#foorm").append(iteem);
			$("#checkout").fadeIn(500);
			
			
			$("#cart .cart-item").last()
				.addClass("flash")
				.find(".delete-item").click(function(){
					$(this).parent().fadeOut(300, function(){
						var revitem='<input type="hidden" name="remove[]" id="h" value="'+productName+'">';
						$("#foorm").append(revitem);
						$(this).remove();
						if($("#cart .cart-item").size() == 0){
							$("#cart .empty").fadeIn(500);
							$("#checkout").fadeOut(500);
						}
					})
				});
				j++;
 		    setTimeout(function(){
				$("#cart .cart-item").last().removeClass("flash");
			}, 10 );
			
		}, 1000);
			
			
		});
	})
	
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
	var i=1;
	$('.add_to_cart').click(function(){
		var productCard = $(this).parent();
		var position = productCard.offset();
		var productImage = $(productCard).find('img').get(0).src;
		var productName = $(productCard).find('.product_name').get(0).innerHTML;				
        var pricediff = $(productCard).find('.product_price').get(0).innerHTML;
	    
		function checkout(a,b)
		{
		}
		//alert("hello "+productName+ pricediff);
		$("body").append('<div class="floating-cart"></div>');		
		var cart = $('div.floating-cart');		
		productCard.clone().appendTo(cart);
		$(cart).css({'top' : position.top + 'px', "left" : position.left + 'px'}).fadeIn("slow").addClass('moveToCart');		
		setTimeout(function(){$("body").addClass("MakeFloatingCart");}, 800);
		setTimeout(function(){
			$('div.floating-cart').remove();
			$("body").removeClass("MakeFloatingCart");
			
			
			
			var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='"+productImage+"' alt='' /></div><span>"+productName+"</span><strong>"+pricediff+"</strong><div class='cart-item-border'></div><div class='delete-item'></div></div>";			
            var iteem='<input type="hidden" id="h" name="item[]" value="'+productName+'">';
			$("#cart .empty").hide();			
			$("#cart").append(cartItem);
			$("#foorm").append(iteem);
			$("#checkout").fadeIn(500);
			i++;
			$("#cart .cart-item").last()
				.addClass("flash")
				.find(".delete-item").click(function(){
					
					//alert("hello "+productName+ pricediff);
				
					$(this).parent().fadeOut(300, function(){
						var revitem='<input type="hidden" name="remove[]" id="h" value="'+productName+'">';
						$("#foorm").append(revitem);
						$(this).remove();
						
						if($("#cart .cart-item").size() == 0){
							$("#cart .empty").fadeIn(500);
							$("#checkout").fadeOut(500);
						}
					})
				});
 		    setTimeout(function()
			{
				$("#cart .cart-item").last().removeClass("flash");
			}, 10 );
			
		}, 1000);
	
	});
});
    </script>



  
  

  <script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>
</body>

</html>