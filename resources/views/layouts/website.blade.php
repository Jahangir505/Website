
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Aviato E-Commerce Template">
    <meta name="author" content="Themefisher.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Airspace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('contents/website')}}/img/favicon.png" />
    <link rel="stylesheet" href="{{asset('contents/website')}}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/plugins/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/plugins/animate-css/animate.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/plugins/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/plugins/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/style.css">
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
    <script src="{{asset('contents/website')}}/js/sweetalert.min.js"></script>
  </head>
  <body id="body">
  <header class="navigation">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<!-- header Nav Start -->
  				<nav class="navbar">
  					<div class="container-fluid">
  						<!-- Brand and toggle get grouped for better mobile display -->
  						<div class="navbar-header">
  							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
  							<span class="sr-only">Toggle navigation</span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  							</button>
  							<a class="navbar-brand" href="{{url('/')}}">
  								<img src="{{asset('contents/website')}}/images/logo.png" alt="Logo">
  							</a>
  						</div>
  						<!-- Collect the nav links, forms, and other content for toggling -->
  						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  							<ul class="nav navbar-nav navbar-right">
  								<li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('about')}}">About Us</a></li>
                  <li><a href="{{url('portfolio')}}">Portfolio</a></li>
  								<li><a href="{{url('service')}}">Service</a></li>
                  <li><a href="{{url('blog')}}">Blog</a></li>
  								<li><a href="{{url('contact')}}">Contact</a></li>
  							</ul>
  							</div><!-- /.navbar-collapse -->
  							</div><!-- /.container-fluid -->
  						</nav>
  					</div>
  				</div>
  			</div>
  			</header><!-- header close -->
          @yield('content')
        <footer class="footer">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="footer-manu">
        					<ul>
        						<li><a href="#">About Us</a></li>
        						<li><a href="#">Contact us</a></li>
        						<li><a href="#">How it works</a></li>
        						<li><a href="#">Support</a></li>
        						<li><a href="#">Terms</a></li>
        					</ul>
        				</div>
        				<p class="copyright">Copyright 2018 &copy; Design & Developed by <a href="http://www.themefisher.com">themefisher.com</a>. All rights reserved.
        					<br>
        					Get More <a href="#" target="_blank">Free Bootstrap Templates</a>
        				</p>
                @php
                  $social=App\SocialMedia::find(1);
                @endphp
                <ul class="footer_social">
                    <li><a href="{{$social->sm_facebook}}" target="_blank"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="{{$social->sm_twitter}}"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="{{$social->sm_linkedin}}"><i class="ion-social-linkedin-outline"></i></a></li>
                </ul>
        			</div>
        		</div>
        	</div>
        </footer>
            <script src="{{asset('contents/website')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
            <script src="{{asset('contents/website')}}/plugins/slick-carousel/slick/slick.min.js"></script>
            <script src="{{asset('contents/website')}}/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
            <script src="{{asset('contents/website')}}/plugins/mixitup/dist/mixitup.min.js"></script>
            <script src="{{asset('contents/website')}}/plugins/SyoTimer/build/jquery.syotimer.min.js"></script>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
            <script src="{{asset('contents/website')}}/plugins/google-map/map.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
            <script src="{{asset('contents/website')}}/js/script.js"></script>
          </body>
        </html>
