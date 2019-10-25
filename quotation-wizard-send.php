<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="GniPower - Home Security Systems">
	
	<title>GniPower - Home Security Systems </title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/elegant_font/elegant_font.min.css" rel="stylesheet">
	<link href="css/fontello/css/fontello.min.css" rel="stylesheet">
	<link href="css/magnific-popup.min.css" rel="stylesheet">

	<!-- LayerSlider stylesheet -->
	<link href="layerslider/css/layerslider.css" rel="stylesheet">
	
	<!-- SPECIFIC CSS -->
	<link href="css/skins/square/grey.css" rel="stylesheet">

</head>

<body>

	<div id="preloader">
		<div class="sk-spinner sk-spinner-wave">
			<div class="sk-rect1"></div>
			<div class="sk-rect2"></div>
			<div class="sk-rect3"></div>
			<div class="sk-rect4"></div>
			<div class="sk-rect5"></div>
		</div>
	</div><!-- End Preload -->

	<div class="layer"></div><!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
	<header>
		<div id="top_line">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 hidden-xs">
						<span id="tag_line">"Experts since 1998"</span>
					</div>
					<div class="col-sm-8">
						<ul id="top_links">
							<li><a href="tel:855-448-0584" id="phone_top">855-448-0584</a><span id="opening">Mon - Sat 8.00/18.00</span></li>
							
						</ul>
					</div>
				</div><!-- End row -->
			</div><!-- End container-->
		</div><!-- End top line-->

		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div id="logo">
						<a href="index.html"><img src="img/logo.png" width="190" height="44" alt="Home Alarms" data-retina="true"></a>
					</div>
				</div>
				<nav class="col-xs-9">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
					<div class="main-menu">
						<div id="header_menu">
							<img src="img/logo.png" width="190" height="44" alt="Home Alarms" data-retina="true">
						</div>
						<a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);" class="show-submenu">Home Security<i class="icon-down-open-mini"></i></a>
								<ul>
                                	<li><a href="Home-Security.html">Home Security</a></li>
                                    
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);" class="show-submenu">Cameras <i class="icon-down-open-mini"></i></a>
								<ul>
									<li><a href="Security-Cameras.html">Security Cameras</a></li>
									
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);" class="show-submenu">Home Automation <i class="icon-down-open-mini"></i></a>
								<ul>
									<li><a href="Home-Automation.html">Home Automation</a></li>
									
								</ul>
							</li>
						
                            <li class="submenu">
								<a href="javascript:void(0);" class="show-submenu">Products <i class="icon-down-open-mini"></i></a>
								<ul>
									<li><a href="shop.html">Products list</a></li>
									<li><a href="cart.html">Products cart</a></li>
									<li><a href="checkout.html">Products checkout</a></li>
								</ul>
							</li>
							
							<li><a href="contacts.html">How to Buy</a></li>

						</ul>
						
					</div><!-- End main-menu -->
				</nav>
			</div>
		</div><!-- container -->
	</header><!-- End Header -->
	

	<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/subheader_in_2.jpg" data-natural-width="1400" data-natural-height="350">
		<div id="sub_content_in">
			<div class="container">
				<h1>Talk to an expert</h1>
				<p>"Your smart home is just one call away"</p>
			</div>
		</div>
	</section><!-- End section -->
	
    <main>  
        <div class="container margin_60">
			<div class="row">
				<div class="col-md-4">
					<div class="box_quote">
						<h3><strong>Calculate NOW</strong> your Quote!</h3>
						<p class="lead">Answer these questions in less than a minute.</p>
						<p><strong>Advantages of calculating</strong> an Online Quote:<a href="tel:855-448-0584" id="phone_top">855-448-0584</a></p>
						<ul>
							<li><i class="icon_check_alt2"></i>Easier</li>
							<li><i class="icon_check_alt2"></i>Faster</li>
							<li><i class="icon_check_alt2"></i>Without obligation</li>
							<li><i class="icon_check_alt2"></i>30% Price off</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8">
                
                <!--  This code will execute when form method is set to POST  -->
<?php
if(isset($_POST['firstname_quote']))
{
$firstname_quote = $_POST['firstname_quote'];
$lastname_quote = $_POST['lastname_quote'];
echo "<h2>

Hello,";
echo " $firstname_quote ".$lastname_quote ; 
} 
?>
   <br>We Are Live Call Us:
     <a href="tel:855-448-0584"> 855-448-0584</a>
     
     </h2>     
          
     <h2>
          
          
           
				</div>
			</div><!-- End row -->
        </div><!-- End container -->
        
 		
 <div class="row11">
    <div id="fragment" class="item-right11">
        
     
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


		
		
					<div class="col-md-6">
					    <center>
				
					<a class="mobileHide" href="tel:855-448-0584">	<h3><font color="white"><b>Professional installation and $0 activation</b></font></h3></a>
						<a class="mobileShow" href="tel:855-448-0584">	<h5><font color="white"><b>Professional installation and $0 activation</b></font></h5></a>
			
						</center>
					</div>
					
					<div class="col-md-6">
					<center>    
			
					<a href="tel:855-448-0584">	<h3><img src="https://gnipower.com/img/svg_icons/incoming-call.svg" alt="Call Now" width="45" height="35"><font color="white"><b>Call: 855-448-0584</b></font></h3></a>
				
	</center>				    
					    
					    
					  
						
					</div>
      <span id="close" onclick="this.parentElement.style.display='none';">X</span>
      
    </div>
  </div>
 <link rel="stylesheet" href="my.css">       
        
        
        
        
        
	</main><!-- End main -->
	
 
	<footer>
		<div class="container">
			<div class="row ">
				<div class="col-md-4 col-sm-8">
					<img src="img/logo-footer.png" width="190" height="44" alt="Home Alarms" data-retina="true" id="logo_footer">
					<p>GniPower is a smart home security system  in North America. GniPower delivers smart home system, professional installation and as well as 24/7 customer care and monitoring. intelligent products and services.</p>
				</div>
				<div class="col-md-3 col-md-offset-1 col-sm-4">
					<h3>Discover</h3>
					<ul>
					    <li><a href="/contacts.html">How To Buy</a></li>
						<li><a href="#0">FAQ</a></li>
						<li><a href="#0">Quotation</a></li>
						<li><a href="#0">Contacts</a></li>
						<li><a href="#0">Shop</a></li>
						<li><a href="#0">Terms and condition</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-12" id="contact_bg">
					<h3>Contacts</h3>
					<ul id="contact_details_footer">
						
						<li id="phone_footer"><a href="tel:855-448-0584">855-448-0584</a>
						<li id="address_footer">  <a href="tel:855-448-0584">24/7 customer care</a></li>
						
						<li id="email_footer"><a href="#0">gnipower.com@gmail.com</a></li>
					</ul>
				</div>
			</div><!-- End row -->	
			<div id="social_footer">
				<ul>
					<li><a href="#0"><i class="icon-facebook"></i></a></li>
					<li><a href="#0"><i class="icon-twitter"></i></a></li>
					<li><a href="#0"><i class="icon-google"></i></a></li>
					<li><a href="#0"><i class="icon-vimeo"></i></a></li>
				</ul>
			</div>
		</div><!-- End container -->
		<div id="copy">
			<div class="container">
				<a href="https://gnipower.com" target="_blank">Copyright © 2019 GniPower, Inc. All rights reserved.</a>
			</div>
		</div><!-- End copy -->
	</footer><!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Terms and conditions</h4>
		  </div>
		  <div class="modal-body">
			<h5>Ei aliquip regione</h5>
			<p>Lorem ipsum dolor sit amet, nibh omnium in eum, ne per omittam eligendi efficiantur. Eos at mundi dolorem, ad cum omnes utroque fastidii, est fastidii apeirian ea. Ne duo diceret partiendo voluptatum, vel at iudico civibus. Purto erant aliquando ex eos, at vel odio modo. In mel tollit reprehendunt, ut usu praesent posidonium cotidieque. Clita assentior maiestatis sea in, at electram voluptaria mel. Tale nusquam adipisci ad mel, partem civibus no vix, sea no accusata dignissim.</p>
			<h5>Altera vocibus eleifend</h5>
			<p>No dico agam error qui, adhuc dicat argumentum sit in. Munere virtute ea ius. Mei an graeco repudiandae disputationi, ex per animal invidunt, probo civibus ne duo. Mea ad officiis temporibus, vim ne idque probatus phaedrum, elit delectus indoctum te has. No sea reprimique necessitatibus, ut usu quas falli.</p>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Common scripts -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>

	<!-- LayerSlider script files -->
	<script src="layerslider/js/greensock.js"></script>
	<script src="layerslider/js/layerslider.transitions.js"></script>
	<script src="layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
	<script src="js/slider_func.js"></script>
	
	<!-- Specific scripts -->
	<script src="js/jquery.validate.js"></script>
	<script src="js/jquery.stepy.min.js"></script>
	<script src="js/quotation-validate.js"></script>

</body>


</html>