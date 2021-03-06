<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | ExploreSurabaya</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>08563220118</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> explore@surabaya.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i>ExploreSurabaya</a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i>@exploresurabaya</a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i>ExploreSurabaya</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/Logosparkling.jpg" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="<?php echo site_url('admin/user/login');?>"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Daftar Wisata<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
								<li><a href="#">Museum</a></li> 
								<li><a href="#">Taman</a></li> 
								<li><a href="blog.html">Wisata Alam</a></li> 
								<li><a href="blog.html">Wahana Rekreasi</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="blog.html">Event<i></i></a>
                                    <ul role="menu" class="sub-menu">
                                                                <!--li><a href="blog.html">Blog List</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>-->
                                    </ul>
                                </li> 
								
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
                                                    <input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Explore</span>Surabaya</h1>
									<h2>Jembatan Suramadu</h2>
                                                                        <p>Surabaya, Indonesia<p> 
									<button type="button" class="btn btn-default get">More</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/Jembatan-Suramadu.jpg" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Explore</span>Surabaya</h1>
									<h2>Kebun Binatang Surabaya</h2>
                                                                        <p>Surabaya, Indonesia<p> 
									<button type="button" class="btn btn-default get">More</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/Kebun-Binatang-Surabaya.jpg" class="img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Explore</span>Surabaya</h1>
									<h2>Monumen Kapal Selam</h2>
                                                                        <p>Surabaya, Indonesia<p> 
									<button type="button" class="btn btn-default get">More</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/Monumen-Kapal-Selam.jpg" class="img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="brands_products"><!--brands_products-->
							<h2>Location</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right"></span>Surabaya Pusat</a></li>
									<li><a href="#"> <span class="pull-right"></span>Surabaya Utara</a></li>
									<li><a href="#"> <span class="pull-right"></span>Surabaya Selatan</a></li>
									<li><a href="#"> <span class="pull-right">(1)</span>Surabaya Barat</a></li>
									<li><a href="#"> <span class="pull-right">(2)</span>Surabaya Timur</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="5000" data-slider-max="500000" data-slider-step="10000" data-slider-value="[250,650]" id="sl2" ><br />
								 <b class="pull-left">Rp. 5.000,00</b> <b class="pull-right">Rp. 500.000,00</b>
							</div>
						</div><!--/price-range-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Feature Place</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/Ciputra-Waterpark1.jpg" alt="" />
											<p>Ciputra Waterpark</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<p>Ciputra Waterpark</p>
                                                                                                <p>Ciputra Waterpark merupakan salah satu wisata Air yang ada di Surabaya Barat </p>
												<a href="#" class="btn btn-default add-to-cart"><i></i>More</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/Ciputra-Waterpark1.jpg" alt="" />
											<p>Ciputra Waterpark</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<p>Ciputra Waterpark</p>
                                                                                                <p>Ciputra Waterpark merupakan salah satu wisata Air yang ada di Surabaya Barat </p>
												<a href="#" class="btn btn-default add-to-cart"><i></i>More</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/Ciputra-Waterpark1.jpg" alt="" />
											<p>Ciputra Waterpark</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<p>Ciputra Waterpark</p>
                                                                                                <p>Ciputra Waterpark merupakan salah satu wisata Air yang ada di Surabaya Barat </p>
												<a href="#" class="btn btn-default add-to-cart"><i></i>More</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/Ciputra-Waterpark1.jpg" alt="" />
											<p>Ciputra Waterpark</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<p>Ciputra Waterpark</p>
                                                                                                <p>Ciputra Waterpark merupakan salah satu wisata Air yang ada di Surabaya Barat </p>
												<a href="#" class="btn btn-default add-to-cart"><i></i>More</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/Ciputra-Waterpark1.jpg" alt="" />
											<p>Ciputra Waterpark</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<p>Ciputra Waterpark</p>
                                                                                                <p>Ciputra Waterpark merupakan salah satu wisata Air yang ada di Surabaya Barat </p>
												<a href="#" class="btn btn-default add-to-cart"><i></i>More</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/Ciputra-Waterpark1.jpg" alt="" />
											<p>Ciputra Waterpark</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<p>Ciputra Waterpark</p>
                                                                                                <p>Ciputra Waterpark merupakan salah satu wisata Air yang ada di Surabaya Barat </p>
												<a href="#" class="btn btn-default add-to-cart"><i></i>More</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
						
					</div><!--features_place-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended place</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/Kebun-Binatang-Surabaya.jpg" alt="" />
													<p>Kebun Binatang Surabaya </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/Kebun-Binatang-Surabaya.jpg" alt="" />
													<p>Kebun Binatang Surabaya </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/Kebun-Binatang-Surabaya.jpg" alt="" />
													<p>Kebun Binatang Surabaya </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/Kebun-Binatang-Surabaya.jpg" alt="" />
													<p>Kebun Binatang Surabaya </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/Kebun-Binatang-Surabaya.jpg" alt="" />
													<p>Kebun Binatang Surabaya </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/Kebun-Binatang-Surabaya.jpg" alt="" />
													<p>Kebun Binatang Surabaya </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-star"></i>Rating</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			
		</div>
		
		<div class="footer-widget">
			
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 Explore Surabaya </p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.wildanradista.com">Wildan Radista W.</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>