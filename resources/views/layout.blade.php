<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Divisima</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//db.onlinewebfonts.com/c/85c583c654c4faa6ea8d7b7592ba2b3e?family=AIV2" rel="stylesheet" type="text/css"/>


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}"/>
	<!-- <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}"/> 
		 -->	
	<link rel="stylesheet" href="{{ asset('css/css/flaticon.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="{{ asset('img/logo.png') }}" alt="">
						</a>
					</div>
					<!--div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Поиск товара ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div-->
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="#">Главная страница</a></li>
					<li><a href="#">Для парня / отца</a></li>
					<li><a href="#">Для девушки / мамы</a></li>
					<li><a href="#">для новорожденного</a></li>
					
					<!--li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="./product.html">Product Page</a></li>
							<li><a href="./category.html">Category Page</a></li>
							<li><a href="./categorynew.html">Cart Page</a></li>
							<li><a href="./checkout.html">Checkout Page</a></li>
							<li><a href="./contact.html">Contact Page</a></li>
						</ul>
					</li>
					<li><a href="#">Blog</a></li-->
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->
	@yield('content')	
	<!-- Footer section -->
	<section class="footer-section">
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links text-center">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<!-- <a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a> -->
					<!-- <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a> -->
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<!-- <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a> -->
				</div>
				<p class="text-white text-center mt-5">Copyright ©<script>document.write(new Date().getFullYear());</script>2020 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
	<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	@yield('js')
	</body>
</html>
