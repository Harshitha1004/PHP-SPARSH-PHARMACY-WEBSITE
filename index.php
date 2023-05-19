<!DOCTYPE html>
<?php 
include "LOGIN FINAL/login.php";
session_start();
if(!isset($_SESSION["sess_user"])){
	//header("location:index.php");
} 

	?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Vvveb">
	<!-- base href="/app/public/themes/default/" -->
	<base href="">
	<link rel="icon" href="../../favicon.ico">

	<title>SPARSH : YOUR PHARMACY</title>
	<!--<h2>Welcome, <?=$_SESSION['sess_user'];?>!</h2>-->

<!-- Bootstrap core CSS -->
<!--<link href="assets/css/bootstrap.css" rel="stylesheet"> -->

<!-- Custom CSS -->
<link href="assets/css/styles.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/animate-custom.css" rel="stylesheet"> 
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

	<!-- Bootstrap core CSS -->
	<link href="css/style.css" rel="stylesheet">
	<!-- link href="css/bootstrap.css" rel="stylesheet"-->
	<!-- link href="css/stylesheet.css" rel="stylesheet"-->

	<SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
/* slider.js */
$.fn.startSlider = function(){
	var simgderDIV=this;
	var img=simgderDIV.find("img");
	
	simgderDIV.css({overflow:"auto"});
	img.css({position:'absolute'});
	img.hide().first().show().addClass("active");
	
	var iterateTickerElement = function() {
		setInterval(function(){
			var next = $("img.active").next();
			$("img.active").hide("slide",{direction:'left'},2000);
			$("img.active").removeClass("active");
			if(next.length == 0) next = $("img").first();
			next.addClass("active");
			next.show("slide",{direction:'right'},1000);
		},2000);
	}	
	iterateTickerElement();
}
</script>
<script>
/* slider.js */
$.fn.startSliding = function(){
	var simgderDIV=this;
	var img=simgderDIV.find("img");
	
	simgderDIV.css({overflow:"auto"});
	img.css({position:'absolute'});
	img.hide().first().show().addClass("active");
	
	var iterateTickerElement = function() {
		setInterval(function(){
			var next = $("img.active").next();
			$("img.active").hide("slide",{direction:'left'},2000);
			$("img.active").removeClass("active");
			if(next.length == 0) next = $("img").first();
			next.addClass("active");
			next.show("slide",{direction:'right'},1000);
		},2000);
	}	
	iterateTickerElement();
}
</script>
</head>



<body>
<div class="page-container">

	<div id="top-nav" class="bg-light smaller-font-size text-muted">
		<nav class="navbar-expand-md container px-3">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button> 

		  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<!--<a class="nav-link text-muted" href="#"><i class="la la-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-muted" href="#"><i class="la la-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Shopping Cart</span></a>
			  </li>
			  <li class="nav-item">

				<a class="nav-link text-muted" href="#"><i class="la la-share"></i> <span class="hidden-xs hidden-sm hidden-md">Checkout</span></a>
			  </li>-->
			</ul>
			
			<ul class="navbar-nav float-right" data-component-currency>
			  <li class="nav-item dropdown float-right">
				<!--<a class="nav-link dropdown-toggle text-muted" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-dollar"></i>&ensp;USD</a>-->
				
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
				
			  </li>

			  <li class="nav-item dropdown float-right" data-component-language>
				<!--<a class="nav-link dropdown-toggle text-muted" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-flag"></i>&ensp;EN</a>-->
				
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
			  </li>
			</ul>
		  </div>
		  
		</nav>
	</div>		

	<header class="container mt-5">
		
	  <div class="row">
		  
		<div class="col-md-3">
			<img src="images/logo1.jpg" width="300" height="150">
				<!-- img src="img/logo.png"--> 
				<!--<h2 class="text-dark"><i class="text-secondary la la-plug"></i><span>SPARSH : YOUR PHARMACY</span></h1>
				<small class="text-dark">electronics shopping mall</small>
				
			</a>-->
		</div>

		<div class="col-md-5">
		   
		   <form class="">
	
				<div class="input-group input-group-lg mb-3" id="search-box" data-component-category>
				  <!--<input type="text" class="form-control default-font-size" placeholder="Search product" aria-label="Search product"> 

					<select class="custom-select input-group-append form-control-lg no-border-x default-font-size">
					
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					  </select>   --->
				  
				  <div class="input-group-append">
					<!--  <button class="btn btn-primary" type="button"><i class="la la-search"></i></button>-->
				  </div>
				</div>
			</form>
			
		</div>

		<div class="col-md-4">
			
			<div class="dropdown float-right" id="mini-cart" data-component-cart>
			 <!-- <a class="btn btn-link dropdown-toggle bg-faded p-0 chevron-big" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="la la-shopping-cart d-inline-block" style="font-size:42px"><span class="cart-items" data-total_items>0</span></i>&ensp; <div class="d-inline-block text-dark"><span class="small d-block text-left">Your cart</span><span class="font-weight-bold" data-total>$0.00</span></div>
			  </a>-->

			  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
	
	
						<!--  <table class="table table-sm table-striped">
									<tbody><tr>
							  <td class="text-center"> <a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=40"><img src="http://opencart3100.givan.ro/image/cache/catalog/demo/iphone_1-47x47.jpg" alt="iPhone" title="iPhone" class="img-thumbnail"></a> </td>
							  <td class="text-left"><a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=40">iPhone</a>
											</td>
							  <td class="text-right">x 1</td>
							  <td class="text-right">$123.20</td>
							  <td class="text-center"><button type="button" onclick="cart.remove('1');" data-toggle="tooltip" title="" class="btn btn-danger btn-sm" data-original-title="Remove"><i class="la la-times"></i></button></td>
							</tr>
									<tr>
							  <td class="text-center"> <a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=43"><img src="http://opencart3100.givan.ro/image/cache/catalog/demo/macbook_1-47x47.jpg" alt="MacBook" title="MacBook" class="img-thumbnail"></a> </td>
							  <td class="text-left"><a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=43">MacBook</a>
											</td>
							  <td class="text-right">x 1</td>
							  <td class="text-right">$602.00</td>
							  <td class="text-center"><button type="button" onclick="cart.remove('2');" data-toggle="tooltip" title="" class="btn btn-danger btn-sm" data-original-title="Remove"><i class="la la-times"></i></button></td>
							</tr>
									<tr>
							  <td class="text-center"> <a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=30"><img src="http://opencart3100.givan.ro/image/cache/catalog/demo/canon_eos_5d_1-47x47.jpg" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-thumbnail"></a> </td>
							  <td class="text-left"><a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=30">Canon EOS 5D</a>
											<br>
								- <small>Select Red</small>                         </td>
							  <td class="text-right">x 1</td>
							  <td class="text-right">$98.00</td>
							  <td class="text-center"><button type="button" onclick="cart.remove('3');" data-toggle="tooltip" title="" class="btn btn-danger btn-sm" data-original-title="Remove"><i class="la la-times"></i></button></td>
							</tr>
						  </tbody></table>

						  <div>
							<table class="table table-sm table-bordered">
										<tbody><tr>
								<td class="text-right"><strong>Sub-Total</strong></td>
								<td class="text-right">$681.00</td>
							  </tr>
										<tr>
								<td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
								<td class="text-right">$6.00</td>
							  </tr>
										<tr>
								<td class="text-right"><strong>VAT (20%)</strong></td>
								<td class="text-right">$136.20</td>
							  </tr>
										<tr>
								<td class="text-right"><strong>Total</strong></td>
								<td class="text-right">$823.20</td>
							  </tr>
									  </tbody></table>
							<p class="text-right"><a href="http://opencart3100.givan.ro/index.php?route=checkout/cart&amp;language=en-gb"><strong><i class="la la-shopping-cart"></i> View Cart</strong></a>&nbsp;&nbsp;&nbsp;<a href="http://opencart3100.givan.ro/index.php?route=checkout/checkout&amp;language=en-gb"><strong><i class="la la-share"></i> Checkout</strong></a></p>
						  </div>
	
	
			  </div>-->
			</div>
				<br>
				<br>
				<br>
			<div class="dropdown float-right" id="mini-user" data-component-user>
			  <a  href=""  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="la la-user d-inline-block" style="font-size:42px"></i>&ensp; 
			<!-- class="btn btn-link dropdown-toggle bg-faded p-0 chevron-big"-->
				
					


<?php

if (isset($_SESSION['sess_user']) == true){ ?>

<div class="d-inline-block text-dark" data-if="login">

<span class="font-weight-bold">Welcome, <?=$_SESSION['sess_user'];?>!</span><br>
		
	<a href="LOGIN FINAL/logout.php"><span class="font-weight-bold">Logout</span>
				</div>
		
			  </a>


        <?php } 

        else { ?>
            
<span class="small d-block text-left" >My account</span>

				<a href="LOGIN FINAL/index.php">	<span class="font-weight-bold">Login/Register</span></a><br>

    <?php }?>





			 <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="#">Register</a>
				<a class="dropdown-item" href="#">Login</a>
			  </div>-->
			</div>
			
		</div>
	  
	  </div>

	
      <nav class="navbar navbar-light bg-white  rounded navbar-expand-md mt-4">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       

       <div class="collapse navbar-collapse" id="containerNavbar">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown categories-dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>Book Tests & Checkups<i class="la la-angle-down float-right"></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="https://cutt.ly/Qvu36NL"> Lab Test </a>
                <a class="dropdown-item" href="https://cutt.ly/6vu8sXY">Doctor Appointment</a>
              </div>
            </li>



            <li class="nav-item active">
              <a class="nav-link" href="DIABETIC SHOPPING CART2/index.php">Diabetes<span class="sr-only">(current)</span></a>
              <a onclick="document.location.href=''" ></a>
            </li>

<li class="nav-item active">
              <a class="nav-link" href="EYEWEAR SHOPPING CART2/index.php">Eyewear<span class="sr-only">(current)</span></a>
            </li>
			<!--<li class="nav-item dropdown dropdown--canvas dropdown--canvas--left dropdown--canvas--sm">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					Eyewear
				</a>
				<<div class="dropdown-menu">
					Hello!
				</div> 
			</li> -->

            <li class="nav-item">
              <a class="nav-link" href="FITNESS SHOPPING CART2/index.php">Fitness</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="PERSONAL CARE CART2/index.php">Personal Care</a>
            </li>

            <!--<li class="nav-item">
              <a class="nav-link" href="#">Mom and Baby</a>
            </li>-->
<li class="nav-item active">
              <a class="nav-link" href="#">About Us<span class="sr-only">(current)</span></a>
            </li>
           <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="#">FAQ</a>
                <a class="dropdown-item" href="#">Our Story</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="#section2">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>


    </header>
    
    

    <!--
    	<div id="slider" class="carousel slide slider">
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
			  <div class="">
				<div class="carousel-caption d-none d-md-block text-left container">
				   <div class="caption-text float-left col-md-4">
					  <h1 class="font-weight-bold">iMac Pro 2.</h1>
					  <p class="font-weight-normal pb-4">Mobile ready, outstanding performance<br/> with gorgeous display</p>
					  <p><a class="btn btn-md btn-outline-primary font-weight-bold px-5 py-2" href="#" role="button">Buy now &ensp; <i class="la la-arrow-right"></i></a></p>
				  </div>
				 <img src="img/ipad.png" class="float-right col-md-8">
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <img class="second-slide bg-light" alt="Second slide">
			  <div class="">
				<div class="carousel-caption d-none d-md-block container">
				  <h1>Another example headline.</h1>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <img class="third-slide bg-light" alt="Third slide">
			  <div class="">
				<div class="carousel-caption d-none d-md-block text-right container">
				  <h1>One more for good measure.</h1>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
				</div>
			  </div>
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
-->


<div id="slider-div">
	<img src="images/disc2.jpg" height="550" width="1300">
	<img src="images/doc.jpg" height="550" width="1300">
	<img src="images/Heart.jpg" height="550" width="1300">
	<!--<img src="capsules.jpg" height="550" width="1200">-->
	
</div>
<script>
$("#slider-div").startSlider();
</script>

		<!--<div class="container mb-4">
			<div class="row">
				<div class="col-md-4 banner p">
					<a href="">
						<img class="img-fluid" src="http://xezpro.nicoletthemes.com/image/cache/catalog/banner2-cr-390x180.png" alt="">
					</a>
				</div>
				
				<div class="col-md-4 banner">
					<a href="">
						<img class="img-fluid" src="http://xezpro.nicoletthemes.com/image/cache/catalog/banner2-cr-390x180.png" alt="">
					</a>
				</div>
				<div class="col-md-4 banner">
					<a href="">
						<img class="img-fluid" src="http://xezpro.nicoletthemes.com/image/cache/catalog/banner3-cr-390x180.png" alt="">
					</a>
					<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
				</div>
			</div>
		</div>  -->
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br> 
    <div class="container products-tab-carousel">

		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Most used</a>
		  </div>
		  
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


		<section class="container products clearfix" data-component-products="limit:4 page:0 id:1679,807,786,1597" data-products='{"1": "Mac pro", "2":"Ipod"}'>

			<div class="owl-carousel owl-theme">

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/pro360.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Pro360 Classic Nutrition RPowder-Chocolate Flavour</a>
						</h3>
						
						<span class="description" data-product-description>
							Family Nutrition
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>295</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>221.25</span>
							</div>
						</div>						

						
						
						<div class="btngroup">
						 <!-- <a type="button" class="btn btn-sm btn-secondary" title="Add to Cart" href="" data-product-cart-url data-vvveb-action="addCart" data-product_id=40>
							  <i class="la la-shopping-cart"></i> Add to cart
						  </a>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->
						</div>
						
						
					<!--</article> product--> 
					
				</div> 
                         
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/honitus.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Dabur Honitus Herbal Cough Remedy Syrup 100ml</a>
						</h3>
						
						<span class="description" data-product-description>
							Nutrition
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>90.00</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>85.00</span>
							</div>
						</div>						

						<div class="btngroup">
						 <!-- <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->

						</div>
						
					</article><!-- product -->
					
				</div> <!-- col-md -->

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/Vision Express 12053 Gold Gold Aviator Sunglasses 1s.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Vision Express 12053 Gold Gold Aviator Sunglasses 1s
</a>
						</h3>
						
						<span class="description" data-product-description>
							Sunglasses
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>1500</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>1499.25</span>
							</div>
						</div>						

						
						<div class="btngroup">
						 <!-- <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/LIVER CARE.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Himalaya Wellness</a>
						</h3>
						
						<span class="description" data-product-description>
							Liver Care 
						</span>
						<br>
						<br>
						<br>
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>150.00</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>130.50</span>
							</div>
						</div>						

						
						<div class="btngroup">
						<!--  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/NutrActive Ashwagandha Powder 150 gm.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>NutrActive Ashwagandha Powder 150 gm</a>
						</h3>
						
						<span class="description" data-product-description>
							Fitness
						</span>
						
					
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>425.00</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>319.20</span>
							</div>
						</div>						

						
						<div class="btngroup">
						  <!--<button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/Nestle.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Nestle Nan Pro 2(6 months+) Powder 400 gm (Refill Pack)</a>
						</h3>
						
						<span class="description" data-product-description>
							Mother's Care
						</span>
						
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>Rs.650.00</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>Rs.605.00</span>
							</div>
						</div>						

						
						<div class="btngroup">
						<!--  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->

						</div>				

												
						
					</article><!-- product -->
					
				</div> <!-- col-md -->


			</div><!-- row -->
		</section> <!-- products -->

		  
		  </div>
		  
		 <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		  
		  </div>
		  
		  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
		  
		  </div> 
		</div>
    
    </div>		



	
<!--<div id="s">
	<img src="Pink Bordered World Cancer Day Social Media Graphic.png" height="550" width="1200">
	<img src="MentalHealth2.png" height="550" width="1200">
	<img src="Mentalhealth3.png" height="550" width="1200">
	<img src="MentalHealth4.png" height="550" width="1200">
	
</div>

<script>
$("#s").startSliding();
</script>  -->
<div id="portfolio" name="portfolio">
  <div class="container">
    <div class="row">
      <center><h2>Critical Health Issues</center></h2>
      <hr>
      <div class="col-lg-8 col-lg-offset-2 centered">
        <p class="large">Information about critical health issues, their prevention and cure.</p>
      </div>
    </div>
 <div class="container">
      <div class="row"> 
        
        
        <div class="col-md-4 ">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="images/mentalhealthfinal.jpg" alt="" height="300" width="700">
              <figcaption>
                <h5>Mental Health</h5>
                <a data-toggle="modal" href="https://www.google.com/" class="btn btn-default">More Details</a> </figcaption>
              
            </figure>
     
          </div>
       
        </div> 
        
      <!--  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio01-preview.jpg" alt=""></p>
                <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An everti maiorum detracto mea. </p> 
              </div> 
            </div>
          
          </div>
        
        </div>-->
  
        
        
        <div class="col-md-4">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="images/cancer2.jpg" alt="" height="300" width="700">
              <figcaption>
                <h5>Cancer</h5>
                <a data-toggle="modal"  class="btn btn-default">More Details</a> </figcaption>
             
            </figure>
        
          </div>
          
        </div>
        <br>
        <br>
        
        
        <div class="col-md-4">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="images/heartproblems.jpg" alt="" height="300" width="700">
              <figcaption>
                <h5>Heart Problems</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
          
            </figure>
      
          </div>
    
        </div>
      </div>
 
      
     
    <!--  <div class="row">
        <div class="col-md-4 ">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="lungproblems.jpg" alt="" height="250" width="300">
              <figcaption>
                <h5>Lung Problems</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
       
            </figure>
         
          </div>
         
        </div> -->
         
 
 <!--       <div class="col-md-4">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio05.jpg" alt="">
              <figcaption>
                <h5>Cookies</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
            
            </figure>
       
          </div>
   
        </div>
        
        
       <div class="col-md-4">
          <div class="grid overlay">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio06.jpg" alt="">
              <figcaption>
                <h5>Cake</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
           
            </figure>
      
          </div>
     
        </div> 
   
      </div>

    </div>

  </div>
</div>  

		<div class="container mb-5">
			<div class="row">
				<div class="col-md-4 banner p">
					<a href="">
						<img class="img-fluid" src="http://xezpro.nicoletthemes.com/image/cache/catalog/banner1-cr-390x180.png" alt="">
					</a>
				</div>
				<div class="col-md-4 banner">
					<a href="">
						<img class="img-fluid" src="http://xezpro.nicoletthemes.com/image/cache/catalog/banner2-cr-390x180.png" alt="">
					</a>
				</div>
				<div class="col-md-4 banner">
					<a href="">
						<img class="img-fluid" src="http://xezpro.nicoletthemes.com/image/cache/catalog/banner3-cr-390x180.png" alt="">
					</a>
					<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br> 
				</div>
			</div>
		</div>

<!--<br><br><br><br><br><br>
<br><br><br><br><br><br> -->
<!--
<section id="parallax_1" class="module parallax white mb-3">
<div>
<div class="container">
<h3>Parallax call to action</h3> <p>Kale chips wolf banh mi, Tumblr polaroid Truffaut semiotics Echo Park<br> listicle sustainable meditation cold-pressed deep v twee keytar</p> <a href="/index.php?route=product/category&amp;path=20" class="btn btn-default">Buy now!</a> </div>
</div> 
</section>
-->


    <div class="container products-tab-carousel">

		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Most popular</a>
			<!--<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Popular products</a>
			<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Bestseller products</a>-->
		  </div>
		  
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


		<section class="container products clearfix" data-component-products="limit:4 page:0 id:1679,807,786,1597">

			<div class="owl-carousel owl-theme">

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/Dettol Soap - Intense Cool 75 gm.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Dettol Soap - Intense Cool 75 gm </a>
						</h3>
						
						<span class="description" data-product-description>
							Personal Care
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>27.6</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>35.5</span>
							</div>
						</div>						

						<div class="btngroup">
						<!--  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->

						</div>
						
					</article><!-- product -->
					
				</div> <!-- col-md -->

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/Sri Sri Tattva Body Butter 150 gm.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Sri Sri Tattva Body Butter 150 gm</a>
						</h3>
						
						<span class="description" data-product-description>
							Personal Care
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>315</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>237.5</span>
							</div>
						</div>						

						
						<div class="btngroup">
						 <!-- <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/Lotus Herbals Cherry Lip Therapy SPF 15 4 gm.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Lotus Herbals Cherry Lip Therapy SPF </a>
						</h3>
						
						<span class="description" data-product-description>
							Personal Care
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>200.00</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>157.50</span>
							</div>
						</div>						

						
						<div class="btngroup">
						<!--  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/sugarfreenatura.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Sugar Free Natura Low Calorie Sweetener </a>
						</h3>
						
						<span class="description" data-product-description>
							Diabetes
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>300</span>
							</div>
						</div>						

						
						<div class="btngroup">
						<!--  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="images/Lacto Calamine Oil Balance for Oily Skin Daily Face Care Lotion 60 ml.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Lacto Calamine Daily Face Care Lotion </a>
						</h3>
						
						<span class="description" data-product-description>
							Personal Care
						</span>

						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>134.5</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>Rs.</span> <span data-product-price>115.2</span>
							</div>
						</div>						

						
						<div class="btngroup">
						  <!--<button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>-->

						</div>


						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/6.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						
						<div class="btngroup">
						  <!--<button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>-->
						</div>
						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->


			</div><!-- row -->
		</section> <!-- products -->

		  
		 <!-- </div>
		  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		  
		  </div>
		  
		  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
		  
		  </div>
		</div>
    
    </div>		


    </div>

	<footer class="bg-faded text-muted py-5 mt-5">
	  <div class="container">
		<div class="row">
				  <div class="col-sm-3">
			  <h5>Information</h5>
			  <ul class="list-unstyled">
				  <li><a href="#">About Us</a></li>
				  <li><a href="#">Delivery Information</a></li>
				  <li><a href="#">Privacy Policy</a></li>
				  <li><a href="#">Terms &amp; Conditions</a></li>
			  </ul>
			</div>
				<div class="col-sm-3">
			<h5>Customer Service</h5>
			<ul class="list-unstyled">
			  <li><a href="#">Contact Us</a></li>
			  <li><a href="#">Returns</a></li>
			  <li><a href="#">Site Map</a></li>
			</ul>
		  </div>
		  <div class="col-sm-3">
			<h5>Extras</h5>
			<ul class="list-unstyled">
			  <li><a href="#">Brands</a></li>
			  <li><a href="#">Gift Certificates</a></li>
			  <li><a href="#">Affiliate</a></li>
			  <li><a href="#">Specials</a></li>
			</ul>
		  </div>
		  <div class="col-sm-3">
			<h5>My Account</h5>
			<ul class="list-unstyled">
			  <li><a href="#">My Account</a></li>
			  <li><a href="#">Order History</a></li>
			  <li><a href="#">Wish List</a></li>
			  <li><a href="#">Newsletter</a></li>
			</ul>
		  </div>
		</div>
			<p class="float-right">
			  <a href="#">Back to top</a>
			</p>
	  </div>
	</footer>
</div>   --> 



	<div class="alert alert-light alert-dismissible fade alert-top" role="alert">
	  <div class="container">
		  
		  <div class="message">
			Product was added to cart.
		  </div>
		  
		  
		  <button type="button" class="close"  aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
	  </div>	
	</div>    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script -->
    <script src="js/jquery.min.js"></script>
    <!-- script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script -->
    <script src="js/popper.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script>
		$('.owl-carousel').owlCarousel({
			loop:true,
			navRewind:true,
			margin:10,
			nav:true,
			dots:false,
			navText: ['<i class="la la-angle-left"></i>','<i class="la la-angle-right"></i> '],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})    
    </script>
    <div id="contact" name="contact">
  <div class="container">
    
      <center id="section2"><h2>Get In Touch</h2></center>
      <hr>
    
    </div>
    <div class="row" >
      <div class="col-md-7">
	  <strong>Please give us your feedback or write down your queries!</strong>
      
        <form id="contact" method="post" class="form" action="getintouch.php" role="form">
          <div class="row">
            <div class="col-md-12 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
            </div>
            <div class="col-md-12 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
            </div>
			 <div class="col-md-12 form-group">
              <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>             
              <button class="btn btn-lg pull-left" type="submit">Send Message</button>
            </div>
          </div>
           
        </form>
        <!-- form --> 
      </div>
	  <div class="col-md-5">
	         
       
	  <i class="fa fa-map-marker fa-2x"></i>
        <strong>Sparsh : Your Pharmacy</strong>
		<p>321 , Park Street<br>
          Kolkata-711109</p>
      
      <br/> 
	  <i class="fa fa-envelope-o fa-2x"></i>
        <p>harshitha.pingala@gmail.com</p>
       
       <br/> 
	  <i class="fa fa-phone fa-2x"></i>
        <p> 9163939427 </p>
       
	  </div>
    </div>
    <!-- row --> 
    
  </div>
</div>
<!-- container -->

<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8"> <span class="copyright">Copyright &copy; 2021. Design by Harshitha Pingala</span> </div>
      <div >
        <ul class="list-inline social-buttons">
          <li><a href="https://www.facebook.com/harshitha.pingala"><i class="fa fa-facebook"></i></a> </li>
          <li><a href="https://www.linkedin.com/in/harshitha-pingala-57ab8618b/"><i class="fa fa-linkedin"></i></a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
<script type="text/javascript" src="assets/js/custom-scripts.js"></script>
</body>
</html>

  </body>
</html>





