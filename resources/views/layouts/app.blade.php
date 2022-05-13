<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="property, houses,lands,cars, lands for sale, plot of lands, rent lands,properties for sale,properties to rent">
    <meta name="google-site-verification" content="eJB1O-z19tkn3-6ku37VF7WtoToB8QFtRNybh1uIXac" />
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">
    
    @yield('products_meta_tags')
    <!-- Css -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/azeez_icons/azeez_icons/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/azeez_icons/azeez_icons/css/icons-size.css') }}">
	<title>Samorl Property | @yield('title', '')</title>

	<!-- js -->
	<script type="text/javascript"  src="{{ asset('js/jquery.js') }}"></script>
</head>
<body class="bg-gray-200">
	<!-- Custom Loader -->
	<div class="loader w-full left right-0 left-0 h-full fixed top-0 bg-white flex items-center justify-center align-middle" style="z-index: 2147483647;">
		<img src="{{ asset('images/loading.gif') }}">
	</div>
	<!-- End Custom Loader -->

	<div class="overflow-hidden">
	@include('layouts.header')
		
	</div>
	@yield('content')
	<div class="overflow-hidden">
		@include('layouts.footer')
	</div>
</body>
</html>