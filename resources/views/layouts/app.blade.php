<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>BEM FT UBAYA</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('bemft_assets/images/fav-icon/icon.png') }}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('bemft_assets/css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('bemft_assets/css/responsive.css') }}">

	</head>

	<body>
		<div class="main-page-wrapper">

			{{-- Loading Transition --}}
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			<header class="header-two">
				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<div class="logo float-left">
                                <a href="{{ route('beranda') }}"><img src="{{ asset('bemft_assets/images/logo/logo.png') }}" alt=""></a>
                            </div>
                            
                            {{-- MENU WRAPPER --}}
                                @include('layouts.navbar')
                            {{-- END OF MENU WRAPPER --}}
                        </div> 
                    </div> 
                </div> 
            </header>

			
            @yield('content')

            <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ asset('bemft_assets/vendor/jquery.2.2.3.min.js') }}"></script>
		<!-- Popper js -->
		<script src="{{ asset('bemft_assets/vendor/popper.js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('bemft_assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<!-- Camera Slider -->
		<script src='{{ asset('bemft_assets/vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }}'></script>
	    <script src='{{ asset('bemft_assets/vendor/Camera-master/scripts/jquery.easing.1.3.js') }}'></script> 
	    <script src='{{ asset('bemft_assets/vendor/Camera-master/scripts/camera.min.js') }}'></script>
	    <!-- menu  -->
		<script src="{{ asset('bemft_assets/vendor/menu/src/js/jquery.slimmenu.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('bemft_assets/vendor/WOW-master/dist/wow.min.js') }}"></script>
		<!-- owl.carousel -->
		<script src="{{ asset('bemft_assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!-- js count to -->
		<script src="{{ asset('bemft_assets/vendor/jquery.appear.js') }}"></script>
		<script src="{{ asset('bemft_assets/vendor/jquery.countTo.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('bemft_assets/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
		<!-- Language Stitcher -->
		<script src="{{ asset('bemft_assets/vendor/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
		<!-- Google map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU"></script>
		<script src="{{ asset('bemft_assets/vendor/sanzzy-map/dist/snazzy-info-window.min.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ asset('bemft_assets/js/theme.js') }}"></script>
		<script src="{{ asset('bemft_assets/js/map-script.js') }}"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>