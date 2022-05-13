@extends('layouts.app')

@section('title', 'All - Cities')


@section('products_meta_tags')
    <meta name="description" content="Show Properties On City" />
    
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Samorl Properties Cities">
    <meta itemprop="description" content="Check Out Properties In All Cities In Nigeria">
    <meta itemprop="image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg">
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Samorl Properties">
    <meta name="twitter:title" content="Samorl Properties Cities">
    <meta property="twitter:url" content="https://properties.samorl.com.ng/cities" />
    <meta name="twitter:description" content="Check Out Properties In All Cities In Nigeria">
    <meta name="twitter:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Samorl Properties Cities" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://properties.samorl.com.ng/cities" />
    <meta property="og:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg" />
    <meta property="og:description" content="Check Out Properties In All Cities In Nigeria" />
    <meta property="og:site_name" content="Samorl Properties" />

@endsection



@section('content')

	<div class="flex flex-col items-center align-middle justify-center w-full h-52 text-center bg-cover bg-center short_banner relative"
		style="background-image: url('{{ asset('images/full-screen-2.png') }}'); background-repeat: no-repeat;">
		<span class="font-bold uppercase text-white text-2xl md:text-4xl block w-full az_custom_front tracking-wide break-words z-50 pb-12 capitalize" >All Cities</span>

		<div class="rounded-lg bg-gray-100 p-4 md:p-5 lg:w-10/12 w-11/12 block mt-8 absolute top-28 z-50">

			@include('include.top_nav_search')
		</div>
	</div>

	<!-- Start Main -->
	<main class="p-0 m-0 mb-0 mt-10 mb-10 px-4 md:px-7 lg:px-20 relative overflow-hidden">
		<!-- Main Property -->
		<div id="main_property" class="block relative pt-16 md:pt-4 mt-36 md:mt-5 px-0 px-0 sm:px-3 lg:px-8">
			<!-- Property main view -->
			<div class="p-5 md:p-10 bg-white rounded block relative overflow-hidden">
				@if ( $cities !== null && $cities->count() > 0 )
    				<div class="grid grid-cols-1 gap-5 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
    				    @foreach($cities as $city)
                            <a href="{{ url('/listings/city/'. $city->state . '/' . $city->city_name ) }}" class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
    
                                <img src="{{ Storage::url('app/public/uploads/cities/images/'.$city->file_name) }}" alt="" class="w-full h-36">
                                <div class="flex justify-center -mt-8">
                                    <img src="{{ Storage::url('app/public/uploads/cities/images/'.$city->file_name) }}" alt="" class="rounded-full border-solid border-white border-2 -mt-3 h-28 w-28">
                                </div>
                                <div class="text-center px-3 pb-6 pt-2">
                                    <h3 class="text-black text-lg font-semibold bold font-sans">{{ $city->city_name }}</h3>
                                </div>
                                <div class="flex justify-center pb-3 text-grey-dark">
                                    <div class="text-center mr-3 pr-3">
                                        <h2>{{ $city->property->count() }}</h2>
                                        <span>Properties</span>
                                    </div>
                                </div>
                            </a>
                       @endforeach
                   </div>
                {{ $cities->links() }}
	            @else
                	<h2 class="flex items-center justify-center h-60 text-gray-900 font-semibold text-2xl" style="font-family: 'Poppins'; font-weight: 400;">No Cities Found</h2>
                @endif
				
			</div>
		</div>

		<!-- related Ads Start -->
		@include('include.related_ads')
		<!-- related Ads end -->
	</main>
	<!-- End Main -->

@endsection