<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('bemft_assets/images/logo/tab.png') }}">
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
						<div class="bg-wrapper clearfix d-flex justify-content-center align-items-center">
							<div class="logo float-left">
                                <a href="{{ route('beranda') }}"><img src="{{ asset('bemft_assets/images/logo/navbar-1.png') }}" style="max-width:165px; height:auto;" alt=""></a>
                            </div>
                            
                            {{-- MENU WRAPPER --}}
                                @include('layouts.admin_navbar')
                            {{-- END OF MENU WRAPPER --}}
                        </div> 
                    </div> 
                </div> 
            </header>

			
            @yield('content')

			@include('layouts.footer')
            <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>

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









{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
