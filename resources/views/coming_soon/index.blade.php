@extends('layouts.app')

@section('title', 'Coming-Soon')
@php 
	$category = \App\Models\Category::class;
	$category = new $category;
	$categories = $category::all();
@endphp

@section('products_meta_tags')
    <meta name="description" content="Samorl Properties for sale, to rent...." />
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Samorl Properties">
    <meta name="twitter:title" content="Propeties for sale, to rent ....">
    <meta property="twitter:url" content="https://properties.samorl.com.ng/coming-soon" />
    <meta name="twitter:description" content="Samorl Properties for sale, to rent....">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg">
    
    
    <!-- Open Graph data -->
    <meta property="og:title" content="Propeties for sale, to rent ...." />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://properties.samorl.com.ng/coming-soon" />
    <meta property="og:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg" />
    <meta property="og:description" content="Samorl Properties for sale, to rent...." />
    <meta property="og:site_name" content="Samorl Properties" />

@endsection


@section('content')

	<div class="flex flex-col items-center align-middle justify-center w-full h-52 text-center bg-cover bg-center short_banner relative"
		style="background-image: url('{{ asset('images/full-screen-2.png') }}'); background-repeat: no-repeat;">
		<span class="font-bold uppercase text-white text-2xl md:text-4xl block w-full az_custom_front tracking-wide break-words z-50 pb-12 capitalize" >Coming-Soon</span>

		<div class="rounded-lg bg-gray-100 p-4 md:p-5 lg:w-10/12 w-11/12 block mt-8 absolute top-28 z-50">

			@include('include.top_nav_search')
		</div>
	</div>

	<!-- Start Main -->
	<main class="p-0 m-0 mb-0 mt-10 mb-10 px-4 md:px-7 lg:px-20 relative overflow-hidden">
		<!-- Main Property -->
		<div id="main_property" class="block relative pt-16 md:pt-4 mt-40 md:mt-5 px-0 sm:px-3 lg:px-8">
			<!-- Property main view -->
			<div class="p-5 md:p-10 bg-white rounded block relative overflow-hidden flex justify-center items-center flex-col">
				<p class="text-sm md:text-lg font-semibold">Our Developer Are Woking On It. Please Check Back Later</p>
				<a href="/" class="block p-2 bg-gray-600 text-white text-sm w-max rounded hover:bg-gray-500 my-2">Visit Home Page</a>
			</div>
		</div>
	</main>
	<!-- End Main -->
@endsection