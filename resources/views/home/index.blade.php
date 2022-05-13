@extends('layouts.app')

@section('products_meta_tags')
    <meta name="description" content="Samorl Properties for sale, to rent...." />
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Samorl Properties">
    <meta name="twitter:title" content="Propeties for sale, to rent ....">
    <meta property="twitter:url" content="https://properties.samorl.com.ng" />
    <meta name="twitter:description" content="Get Verified and featured property at fixed / negotiable price">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg">
    
    
    <!-- Open Graph data -->
    <meta property="og:title" content="Propeties for sale, to rent ...." />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://properties.samorl.com.ng" />
    <meta property="og:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg" />
    <meta property="og:description" content="Get Verified and featured property at fixed / negotiable price" />
    <meta property="og:site_name" content="Samorl Properties" />
@endsection
@section('title', 'Home')

@section('content')

	<div class="flex flex-col items-center align-middle justify-center w-full h-screen text-center bg-cover bg-center pt-5 md:pt-0"
		style="background-image: url('{{ asset('images/full-screen.webp') }}'); background-repeat: no-repeat;">
		<span class="font-bold text-lg md:text-2xl text-green-700 block w-full mt-8 md:mt-0 pt-5 md:pt-32 lg:pt-0">Search For Diffrent Properties.</span>

		<div class="rounded-lg bg-gray-100 p-5 w-11/12 md:w-8/12 block relative mt-0 md:mt-8 p-2 sm:p-1 md:p-3">

			<!-- Advance Search Form -->
			<form class="p-0 m-0 outline-none block relative" action="{{ route('search') }}" method="POST">
				<section class="w-full grid grid-cols-1 lg:grid-cols-3 gap-5">
					<!-- Location -->
					<select class="p-2 py-2 lg:p-4 lg:py-4 border border-gray-300 bg-gray-100 rounded @error('location') border-red-600 @enderror" data-taxonomy="rtcl_location" data-parent="0" name="location">
						<option value="">Select a location</option>
						<option value="abeokuta">Abeokuta</option>
						<option value="abia">Abia</option>
						<option value="abuja-fct">Abuja - FCT</option>
						<option value="adamawa">Adamawa</option>
						<option value="akwa-ibom">Akwa Ibom</option>
						<option value="anambra">Anambra</option>
						<option value="bauchi">Bauchi</option>
						<option value="bayelsa">Bayelsa</option>
						<option value="benue">Benue</option>
						<option value="borno">Borno</option>
						<option value="cross-river">Cross River</option>
						<option value="delta">Delta</option>
						<option value="ebonyi">Ebonyi</option>
						<option value="edo">Edo</option>
						<option value="ekiti">Ekiti</option>
						<option value="enugu">Enugu</option>
						<option value="gombe">Gombe</option>
						<option value="imo">Imo</option>
						<option value="jigawa">Jigawa</option>
						<option value="kaduna">Kaduna</option>
						<option value="kano">Kano</option>
						<option value="katsina">Katsina</option>
						<option value="kebbi">Kebbi</option>
						<option value="kogi">Kogi</option>
						<option value="kwara">Kwara</option>
						<option value="lagos">Lagos</option>
						<option value="maiduguri">Maiduguri</option>
						<option value="nasarawa">Nasarawa</option>
						<option value="niger">Niger</option>
						<option value="ogun">Ogun</option>
						<option value="ondo">Ondo</option>
						<option value="osun">Osun</option>
						<option value="oyo">Oyo</option>
						<option value="plateau">Plateau</option>
						<option value="port-harcourt-2">Port Harcourt</option>
						<option value="rivers">Rivers</option>
						<option value="sokoto">Sokoto</option>
						<option value="taraba">Taraba</option>
						<option value="warri">Warri</option>
						<option value="yobe">Yobe</option>
						<option value="zamfara">Zamfara</option>
					</select>

					<!--  Category Select -->
					@if ( $categories && $categories->count() > 0 )
					<select class="p-4 py-2 border border-gray-300 bg-gray-100 rounded rtcl-category-search @error('category') border-red-600 @enderror" data-taxonomy="rtcl_category" data-parent="0" name="category">
							<option value="">Select a category</option>
						@foreach( $categories as $category )
							<option value="{{ str_replace(' ', '-', $category->name) }}">{{ ucwords($category->name) }}</option>
						@endforeach
					</select>
					@endif

					<!-- Type DropDown -->
					<select class="p-4 py-2 border border-gray-300 bg-gray-100 rounded @error('purpose') border-red-600 @enderror" id="rtcl-search-type-2948021564" name="purpose">
                      	<option value="">Select purpose</option>
			            <option value="sale">For Sale</option>
			            <option value="rent">For Rent</option>
			            <option value="lease">To Lease</option>
			            <option value="let">To Let</option>
                    </select>

				</section>

				<section class="grid sm:grid-cols-1 lg:grid-cols-3 gap-5 mt-5">
					<input type="text" class="p-4 py-2 border border-gray-300 bg-gray-100 text-black rounded @error('price_max') border-red-600 @enderror" name="price_min" placeholder="Price Range Min">
					<input type="text" class="p-4 py-2 border border-gray-300 bg-gray-100 text-black rounded @error('price_min') border-red-600 @enderror" name="price_max" placeholder="Price Range Max">
					<button type="submit" class="bg-green-900 hover:bg-green-700 text-white rounded font-semibold py-2">Search</button>
				</section>

				@csrf
			</form>
		</div>
		<div class="text-white font-semibold text-center w-full lg:w-8/12 bg-red-700 block relative mt-6 sm:text-sm text-xs p-1 py-2 sm:p-2 lg:p-2 lg:py-4  lg:rounded mb-20">
			Click here to find out how to promote your property ads to help get them seen by more people, and generate more replies
		</div>
	</div>

	<!-- Start Main -->
	<main class="p-0 m-0 mb-0 mt-10">
		
		@include('include.categories_view')

		@include('include.featured_properties')
		@include('include.latest_properties')
		@include('include.top_state')
	</main>
	<!-- End Main -->

	<script type="text/javascript">
		$('#home').addClass('border-b-2 border-green-700');
	</script>
@endsection