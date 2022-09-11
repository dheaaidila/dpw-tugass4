<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Gaia Website Template | collections :: w3layouts</title>
		<link href="{{('public')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="{{url('public')}}/js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="{{('public')}}/css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   		 <!-- webfonts -->
   		 <link href='http://fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
   		 <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
   		 <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
   		  <!-- webfonts -->
	</head>
	<body>
		<!-- container -->
		<!-- header -->
		<div class="header">
			<!-- top-header -->
			<!-- /top-header -->
			<!-- bottom-header -->
			<div class="bottom-header">
				<div class="container">
					<div class="bottom-header-left">
						<p>The Finest Genuine Leather meet with Ingenious  Craftsmen Shoes </p>
					</div>
					<div class="logo">
						<a href="index.html"><img src="{{('public')}}/images/logo-6.png" title="gaia" /></a>
					</div>
					<div class="bottom-header-left">
						<p>Grab it fast! Affordable and high quality shoes only in this shop! </p>
					</div>

				</div>
			</div>
			<!-- /bottom-header -->
		</div>
		<!-- header -->
		<!--- top-nav -->
		<div class="top-nav">
			<div class="container">
				<span class="menu"> </span>
				<ul>
                    <li><a href="/home">Home<span> </span></a></li>
					<li class="active"><a href="/collection">Collections<span> </span></a></li>
					<li><a href="/about">About Us<span> </span></a></li>
					<li><a href="/contact">Contact Us<span> </span></a></li>
				</ul>
			</div>
		</div>
		<!--- top-nav -->
		<!-- script-for-nav -->
		<script>
			$(document).ready(function(){
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle(500);
				});
			});
		</script>
		<!-- /script-for-nav -->
		<!-- bottom-grids -->
		<div class="bottom-grids collections">
			<div class="container">
				<h1>Our Collections</h1>
				<div class="col-md-9 bottom-grids-left">
					<div class="f-products">
						<h2>Featured Products</h2>
							<!----sreen-gallery-cursual---->
						<div class="sreen-gallery-cursual">
							 <!-- requried-jsfiles-for owl -->
							<link href="{{('public')}}/css/owl.carousel.css" rel="stylesheet">
							    <script src="{{url('public')}}/js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 3,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  false,
									        pagination : false,
									      });
									    });
									   </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo" class="owl-carousel text-center">
					                <div class="item">
					                	<div onclick="location.href='/single_page';" class="product-grid">
											<div class="product-pic">
												<img src="{{('public')}}/images/p1.jpg" title="Elliot Boots" />
											</div>
											<div class="product-pic-info">
												<h3><a href="#">Elliot Boots Officetrail</a></h3>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rp 455.000,00</span>
													</div>

													<div class="product-pic-info-cart">
														<a class="p-btn" href="#">Buy now</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
					                </div>
					                 <div class="item">
					                	<div onclick="location.href='/single_page';" class="product-grid">
											<div class="product-pic">
												<img src="{{('public')}}/images/p2.jpg" title="Elliot Boots" />
											</div>
											<div class="product-pic-info">
												<h3><a href="#">Elliot Boots Alsimpleins</a></h3>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rp 285.000,00</span>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="#">Buy now</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
					                </div>
					                 <div class="item">
					                	<div onclick="location.href='/single_page';" class="product-grid">
											<div class="product-pic">
												<img src="{{('public')}}/images/p3.jpg" title="Elliot Boots" />
											</div>
											<div class="product-pic-info">
												<h3><a href="#">Elliot Boots Crocowboy</a></h3>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rp 480.000,00</span>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="#">Buy now</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
					                </div>
					                 <div class="item">
					                	<div onclick="location.href='/single_page';" class="product-grid">
											<div class="product-pic">
												<img src="{{('public')}}/images/p1.jpg" title="Elliot Boots" />
											</div>
											<div class="product-pic-info">
												<h3><a href="#">Elliot Boots Officetraile</a></h3>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rp 455.000,00</span>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="#">Buy now</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
					                </div>
					                 <div class="item">
					                	<div onclick="location.href='/single_page';" class="product-grid">
											<div class="product-pic">
												<img src="{{('public')}}/images/p3.jpg" title="Elliot Boots" />
											</div>
											<div class="product-pic-info">
												<h3><a href="#">Elliot Boots Crowcowboy</a></h3>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rp 480.000,00</span>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="#">Buy now</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
					                </div>
				              </div>
						<!--//sreen-gallery-cursual---->

					</div>
				</div>
				<div class="d-products f-products">
						<h2>Discounts</h2>
							<!----sreen-gallery-cursual---->
						<div class="sreen-gallery-cursual">
							 <!-- requried-jsfiles-for owl -->
							<link href="{{('public')}}/css/owl.carousel.css" rel="stylesheet">
							    <script src="{{url('public')}}/js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo1").owlCarousel({
									        items : 3,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  false,
									        pagination : false,
									      });
									    });
									   </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo1" class="owl-carousel text-center">
					                <div class="item">
					                	<div onclick="location.href='/single_page';" class="product-grid">
											<div class="product-pic">
												<img src="{{('public')}}/images/p4.jpg" title="Elliot Boots" />
											</div>
											<div class="product-pic-info">
												<h3><a href="#">Elliot Boots Blerians</a></h3>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rp 385.000,00</span>
														<label> </label>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="#">Buy Now</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
					                </div>
					                 <div class="item">
					                	<div onclick="location.href='/single_page';" class="product-grid">
											<div class="product-pic">
												<img src="{{('public')}}/images/p5.jpg" title="Elliot Boots" />
											</div>
											<div class="product-pic-info">
												<h3><a href="#">Elliot Boots Starlike</a></h3>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rp 245.000,00</span>
														<label> </label>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="#">Buy Now</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
					                </div>
					                 <div class="item">
					                	<div onclick="location.href='/single_page';" class="product-grid">
											<div class="product-pic">
												<img src="{{('public')}}/images/p6.jpg" title="Elliot Boots" />
											</div>
											<div class="product-pic-info">
												<h3><a href="#">Elliot Boots Starlike </a></h3>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rp 245.000,00</span>
														<label> </label>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="#">Buy Now</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
					                </div>
					                 <div class="item">
					                	<div onclick="location.href='/single_page';" class="product-grid">
											<div class="product-pic">
												<img src="{{('public')}}/images/p1.jpg" title="Elliot Boots" />
											</div>
											<div class="product-pic-info">
												<h3><a href="#">Elliot Boots Officetraile</a></h3>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rp 385.000,00</span>
														<label> </label>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="#">Buy Now</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
					                </div>
					                 <div class="item">
					                	<div onclick="location.href='/single_page';" class="product-grid">
											<div class="product-pic">
												<img src="{{('public')}}/images/p4.jpg" title="Elliot Boots" />
											</div>
											<div class="product-pic-info">
												<h3><a href="#">Elliot Boots Blerians</a></h3>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rp 385.000,00</span>
														<label> </label>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="#">Buy Now</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
					                </div>
				              </div>
						<!--//sreen-gallery-cursual---->

					</div>
				</div>
				</div>
				<div class="col-md-3 bottom-grids-right">
					<h2>Exclusive Offers</h2>
					<p>Sign Up for Our Newsletter and get the exclusive offers directly into your inbox.</p>
					<form>
						<input type="text" class="text" value="Type your email address ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type your email address ...';}">
						<input type="submit" value="" />
					</form>
					<div class="shhiping text-center">
						<h2>Free Shipping</h2>
						<a onclick="location.href='/single_page';"  href="#"><img src="{{('public')}}/images/offer-pic.png" title="$250" /></a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- bottom-grids -->
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<!-- social-icons -->
				<div class="social-icons text-center">
					<ul>
						<li><a href="#"><span class="facebook"> </span></a></li>
						<li><a href="#"><span class="twitter"> </span></a></li>
						<li><a href="#"><span class="gpluse"> </span></a></li>
						<li><a href="#"><span class="pin"> </span></a></li>
						<li><a href="#"><span class="ens"> </span></a></li>
						<li><a href="#"><span class="you"> </span></a></li>
					</ul>
				</div>
				<!-- social-icons -->
				<!-- footer-bottom -->
				<div class="footer-bottom">
					<div class="footer-bottom-left">
						<p>GAIA inc &#169; 2014 All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts | <a href="#">Site Map</a></p>
					</div>
					<div class="footer-bottom-right">
						<ul>
							<li><span class="visa"> </span></li>
							<li><span class="master"> </span></li>
							<li><span class="paypla"> </span></li>
							<li><span class="ami"> </span></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
					<!-- footer-bottom -->
				</div>
			</div>
		</div>
		<!-- footer -->
		<!-- container -->
	</body>
</html>

