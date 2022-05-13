@extends('layouts.app')

@section('title', 'Property - Latest')

@section('products_meta_tags')
    <meta name="description" content="Samorl Latest Properties">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Latest Samorl Properties">
    <meta itemprop="description" content="Check Out Latest Properties on Samorl Properties">
    <meta itemprop="image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg">
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Samorl Properties">
    <meta name="twitter:title" content="Latest Properties">
    <meta property="twitter:url" content="https://properties.samorl.com.ng/listings/property/latest" />
    <meta name="twitter:description" content="Check Out Latest Properties on Samorl Properties">
    <meta name="twitter:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Latest Properties" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://properties.samorl.com.ng/listings/property/latest" />
    <meta property="og:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg" />
    <meta property="og:description" content="Check Out Latest Properties on Samorl Properties" />
    <meta property="og:site_name" content="Samorl Properties" />

@endsection

@section('content')

	<div class="flex flex-col items-center align-middle justify-center w-full h-52 text-center bg-cover bg-center short_banner relative"
		style="background-image: url('{{ asset('images/full-screen-2.png') }}'); background-repeat: no-repeat;">
		<span class="font-bold uppercase text-white text-2xl md:text-4xl block w-full az_custom_front tracking-wide break-words z-50 pb-12 capitalize" >Latest Properties</span>

		<div class="rounded-lg bg-gray-100 p-4 md:p-5 lg:w-10/12 w-11/12 block mt-8 absolute top-28 z-50">

			@include('include.top_nav_search')
		</div>
	</div>

	<!-- Start Main -->
	<main class="p-0 m-0 mb-0 mt-10 mb-10 px-4 md:px-7 lg:px-20 relative overflow-hidden">
		<!-- Main Property -->
		<div id="main_property" class="block relative pt-16 md:pt-4 mt-40 md:mt-5 px-0 sm:px-3 lg:px-8">
			<!-- Property main view -->
			<div class="p-5 md:p-10 bg-white rounded block relative overflow-hidden">
				@if ( $LatestProperty->count() > 0 )
				<span class="font-semibold text-left block relative text-xl"> Latest Properties </span>
				<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 px-0 py-5 bg-white pb-2">
					<!-- Properties Card -->
					@foreach( $LatestProperty as $property )
					    @php

                            $data = @unserialize($property->file_name);
                            if ($property->file_name === 'b:0;' || $data !== false) {
                                // multiple uploads
                                $fileName = $data[0]['fullFileName'];
                            } else {
                                // single image upload
                                $fileName = $property->file_name;
                            }
                        
                           
                        @endphp
					<div class="az_card_hover border border-gray-300 shadow hover:shadow-lg overflow-hidden">
						<a href="/listings/property/{{ $property->id }}">
							
							<div class="image block relative h-60 m-auto mt-2">
            					<img class="w-60 border rounded border-gray-300 relative h-max max-h-60 object-contain shadow-lg m-auto" src="{{ Storage::url('app/public/uploads/property/images/'.$fileName) }}" alt="">
            				</div>

							<div class="p-5">
								<div class="price text-xl text-green-900 font-bold">₦{{ number_format($property->price) }} <span class="text-sm capitalize font-semibold text-gray-500">({{ $property->plan }})</span></div>
								<span class="py-2 pb-1 text-gray-600 block relative capitalize">{{ $property->type }}</span>
								<span class="py-2 pb-1 text-gray-600 block relative capitalize">{{ $property->size }}</span>
								<span class="text-green-900 text-lg font-semibold tracking-wide uppercase">{{ $property->name }}</span>
							</div>

							<ul class="p-5 pt-0">
								<li class="text-gray-600">
									<i class="fa fa-fw fa-map-marker mr-2" aria-hidden="true"></i>{{ $property->city->city_name }}
								</li>
								<li class="text-gray-600"><i class="fa fa-fw fa-eye mr-2" aria-hidden="true"></i>{{ $property->views }} Views</li>
							</ul>
						</a>
					</div>
					@endforeach
				</div>
				{{ $LatestProperty->links() }}
				@else
					<h2 class="flex items-center justify-center h-60 text-gray-900 font-semibold text-2xl" style="font-family: 'Poppins'; font-weight: 400;">No Properties Found</h2>
				@endif
			</div>
		</div>
	</main>
	<!-- End Main -->
@endsection