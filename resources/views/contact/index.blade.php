@extends('layouts.app')

@section('title', 'Contact Us')

@section('products_meta_tags')
    <meta name="description" content="Contact samorl properties Tel: 07064948303  Email: samorlcomp@yahoo.com">
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Samorl Properties">
    <meta name="twitter:title" content="Contact Us">
    <meta property="twitter:url" content="https://properties.samorl.com.ng/contact-us" />
    <meta name="twitter:description" content="Contact samorl properties Tel: 07064948303  Email: samorlcomp@yahoo.com">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg">
    
    
    <!-- Open Graph data -->
    <meta property="og:title" content="Contact Samorl Properties. Tel: 07064948303" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://properties.samorl.com.ng/contact-us" />
    <meta property="og:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg" />
    <meta property="og:description" content="Contact samorl properties Tel: 07064948303  Email: samorlcomp@yahoo.com" />
    <meta property="og:site_name" content="Samorl Properties - Contact Us" />
@endsection

@section('content')
	<div class="flex flex-col items-center align-middle justify-center w-full h-52 text-center bg-cover bg-center short_banner relative"
		style="background-image: url('{{ asset('images/full-screen-2.png') }}'); background-repeat: no-repeat;">
		<span class="font-bold uppercase text-white text-2xl md:text-4xl block w-full az_custom_front tracking-wide break-words z-50 pb-12 capitalize" >Contact Us</span>

		<div class="rounded-lg bg-gray-100 p-4 md:p-5 lg:w-10/12 w-11/12 block mt-8 absolute top-28 z-50">

			@include('include.top_nav_search')
		</div>
	</div>

	<!-- Start Main -->
	<main class="p-0 m-0 mb-0 mt-10 mb-10 px-4 md:px-7 lg:px-20 relative overflow-hidden">

		<!-- Main Property -->
		<div id="main_property" class="block relative pt-16 md:pt-4 mt-40 md:mt-5 px-0 sm:px-3 lg:px-8">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-5">
				<form action="{{ route('contact') }}" method="POST" class="w-full block relative">
					<span class="text-left p-2 px-0 pl-3 pb-3 font-semibold text-lg block relative w-full">Drop a message</span>
					<div class="flex flex-wrap mb-6 w-full">
						<!-- Customers Name -->
					    <div class="w-full px-3 mb-6 md:mb-0">
					        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="name">Name</label>
					        <input class="appearance-none block w-full bg-gray-100 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="name" type="text" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
					        @error('name')
					             <p class="text-red-500 text-xs italic">{{ $message }}</p>
					        @enderror
					    </div>

						<!-- Customers Email -->
					    <div class="w-full px-3 mb-6 md:mb-0">
					        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="email">Email</label>
					        <input class="appearance-none block w-full bg-gray-100 text-gray-700 border @error('email') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="email" type="email" placeholder="Enter Your Working Email Address" name="email" value="{{ old('email') }}">
					        @error('email')
					             <p class="text-red-500 text-xs italic">{{ $message }}</p>
					        @enderror
					    </div>

					    <!-- Category Description -->
					    <div class="w-full px-3 mb-6 md:mb-0">
					        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="message">Message</label>

					        <textarea class="appearance-none block w-full bg-gray-100 text-gray-700 border @error('message') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" name="message" id="message" cols="10" rows="4">{{ old('message') }}</textarea>
					        @error('message')
					             <p class="text-red-500 text-xs italic">{{ $message }}</p>
					        @enderror
					    </div>
						<div class="w-full px-3 mb-6 md:mb-0 mt-1 relative overflow-hidden">
							<button type="submit" class="p-2 px-4 rounded bg-green-700 hover:bg-green-600 text-sm text-white font-semibold">Submit</button>
						</div>
					</div>
					@csrf
				</form>
				
				<div class="col-span-1">
					<!-- Google Maps -->
					<div class="mapouter">
					    <div class="gmap_canvas">
					        <iframe style="width: 100%; height: 100%;" id="gmap_canvas" src="https://maps.google.com/maps?q=samorl%20nigeria%20limited&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
					            
					        </iframe>
					        <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
					   </div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- End Main -->
@endsection