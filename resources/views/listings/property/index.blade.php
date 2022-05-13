@extends('layouts.app')

@php
    $data = @unserialize($property->file_name);
    if ($property->file_name === 'b:0;' || $data !== false) {
        $multipleUploads = true;
        // multiple uploads
        $fileName = $data[0]['fullFileName'];
        $allPicsFileName = $data;
    } else {
        // single image upload
        $multipleUploads = false;
        $fileName = $property->file_name;
    }

   
@endphp
@section('products_meta_tags')
    <meta name="description" content="{{ $property->description }}">
    
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Check Out {{ $property->name }}">
    <meta itemprop="description" content="{{ $property->description }}">
    <meta itemprop="image" content="https://properties.samorl.com.ng/storage/app/public/uploads/property/images/{{ $fileName }}">
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Samorl Properties">
    <meta name="twitter:title" content="Check Out {{ $property->name }}">
    <meta name="twitter:description" content="{{ $property->description }}">
    <meta property="twitter:url" content="https://properties.samorl.com.ng/listings/property/{{ $property->id }}" />
    <meta name="twitter:image" content="https://properties.samorl.com.ng/storage/app/public/uploads/property/images/{{ $fileName }}">
    <meta name="twitter:data1" content="₦ {{ number_format($property->price) }}">
    <meta name="twitter:label1" content="Price">
    <meta name="twitter:data2" content="{{ ucfirst($property->state) }}">
    <meta name="twitter:label2" content="State">
    
    <!-- Open Graph data -->
    <meta property="og:title" content="Check Out {{ $property->name }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://properties.samorl.com.ng/listings/property/{{ $property->id }}" />
    <meta property="og:image" content="https://properties.samorl.com.ng/storage/app/public/uploads/property/images/{{ $fileName }}" />
    <meta property="og:description" content="{{ $property->description }}" />
    <meta property="og:site_name" content="Samorl Properties" />
    <meta property="og:price:amount" content="₦ {{ number_format($property->price) }} " />
    <meta property="og:price:currency" content="NGN" /> 

@endsection


@section('title', 'Property - ' . $property->name)
@section('content')

	<div class="flex flex-col items-center align-middle justify-center w-full h-52 text-center bg-cover bg-center short_banner relative"
		style="background-image: url('{{ asset('images/full-screen-2.png') }}'); background-repeat: no-repeat;">
		<span class="font-bold uppercase text-white text-2xl md:text-4xl block w-full az_custom_front tracking-wide break-words z-50 pb-12 capitalize" >Search properties for sale, to rent or lease in Nigeria</span>

		<div class="rounded-lg bg-gray-100 p-4 md:p-5 lg:w-10/12 w-11/12 block mt-8 absolute top-28 z-50">

			@include('include.top_nav_search')
		</div>
	</div>

	<!-- Start Main -->
	<main class="p-0 m-0 mb-0 mt-10 mb-10 px-4 md:px-7 lg:px-20 relative overflow-hidden">
		<!-- Main Property -->
		<div id="main_property" class="block relative pt-16 md:pt-4 mt-40 md:mt-5 px-0 sm:px-3 lg:px-8 grid grid-cols-1 lg:grid-cols-7">
			<!-- Property main view -->
			<div class="p-5 lg:p-10 bg-white rounded col-span-1 lg:col-span-5 block relative overflow-hidden">
				<img style="width: 100%;" class="max-w-full p-0 m-auto bg-gray-200 object-contain max-h-72" src="{{ Storage::url('app/public/uploads/property/images/' . $fileName ) }}">

				<div class="flex flex-col lg:flex-row items-center justify-between text-gray-600 my-5 pt-4">
					<span>
						<i class="fa fa-map-marker mr-3 text-green-800" aria-hidden="true"></i>
						{{ $property->city->city_name }}</span>
					<span>
						<span class="bg-green-700 text-sm text-white rounded p-1 px-2">Featured</span>
						<span class="bg-red-700 text-sm text-white rounded p-1 px-2">Popular</span>
					</span>
				</div>

				<div class="bg-green-700 az_polygon_price">
					<span>₦ {{ number_format($property->price) }} <small class="font-normal text-sm">({{ $property->plan }})</small></span>
				</div>

				<div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
					<!-- description -->
					<div class="pt-10 text-gray-800 italic text-lg col-span-2">
						{{ $property->description }}
						
						@if ( $multipleUploads === true )
        					<!--Show Pictures When Multiple Images-->
        					<span class="az_border_bottom relative overflow-hidden pb-2 font-semibold text-xl block pt-5">All Images</span>
        					<div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-10 mb-5 mt-5">
        					    <!--Loop Through all the images uploaded-->
        					    @foreach ( $allPicsFileName as $file )
        					    
        					    <!-- Images Card -->
        					    <img src="{{ Storage::url('app/public/uploads/property/images/' . $file['fullFileName'] ) }}" alt="Properties Images" class="m-auto">
        					    
        					    @endforeach
        					</div>
    					@endif
					</div>
					
					

					<!-- Overview -->
					<div class="p-2 pt-0 relative block overflow-hidden">
						<h2 class="az_border_bottom relative overflow-hidden pb-2 font-semibold text-xl">Overview</h2>

						<ul class="pt-3">
							<li class="pb-1">
								<span class="font-semibold">Category : </span>
								<span class="text-gray-600 pl-3"><a href="{{ url('listings/category/'.$property->category->name) }}">{{ ucfirst($property->category->name) }}</a></span>
							</li>
							<li class="pb-1">
								<span class="font-semibold">State : </span>
								<a href="{{ url('/listings/state/' . $property->state) }}" class="text-gray-600 pl-3 underlined">{{ ucfirst($property->state) }}</a>
							</li>
							<li class="pb-1">
								<span class="font-semibold">City : </span>
								<a href="{{ url('/listings/city/' . $property->state  . '/' . $property->city->city_name) }}" class="text-gray-600 pl-3 underlined">{{ ucfirst($property->city->city_name) }}</a>
							</li>
							<li class="pb-1">
								<span class="font-semibold">Size / Weight/ Type : </span>
								<span class="text-gray-600 pl-3">{{ ucfirst($property->size) }}</span>
							</li>
							<li class="pb-1">
								<span class="font-semibold">Town : </span>
								<span class="text-gray-600 pl-3">{{ ucfirst($property->town) }}</span>
							</li>
						</ul>

						<ul class="border-t border-gray-200 mt-5">
                    		<li class="text-gray-600 border-b border-gray-200 p-3 pl-0"><i class="icon ion-eye mr-2"></i>{{ $property->views }} views</li>
                            <li class="list-group-item sidebar-social border-b border-gray-200 p-2 pl-0 pb-3">
	                			<div class="text-gray-600 pb-1">
	                				<i class="fa fa-fw fa-share-alt mr-2" aria-hidden="true"></i>Share this Ad:
	                			</div>
	                			<div class="flex py-2">
	                			    <!-- Facebook -->
    	                			<a style="background-color: #3b5998;" class="text-white" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" rel="nofollow"><i class="icon ion-social-facebook text-lg text-white"></i></a>
                                    <!-- Twitter -->
    								<a style="background-color: #4970c3;" href="https://twitter.com/intent/tweet?text={{ $property->name }}&amp;url={{ url()->current() }}" target="_blank" rel="nofollow"><i class="icon ion-social-twitter text-lg text-white"></i></a>
                                    <!-- Linkedin -->
    								<a style="background-color: #1178b3;" href="https://www.linkedin.com/shareArticle?url={{ url()->current() }}&amp;title={{ $property->name }}" target="_blank" rel="nofollow"><i class="icon ion-social-linkedin text-lg text-white"></i></a>
    								<!-- Whatsapp -->
    							    <a href="whatsapp://send?text=Someone shared {{ $property->name }} to you. Click / Copy link to view property info {{ url()->current() }}" 
    							        rel="nofollow"
    					                data-action="share/whatsapp/share"
                                        target="_blank">
    							            <img src="{{ asset('images/whatsapp.png') }}" class="text-lg">
    							     </a>
	                			</div>
            				</li>
            			</ul>
					</div>
				</div>
			</div>


			<!-- Property Info -->
			<div class="p-0 rounded col-span-1 md:col-span-2 h-max">
				<div class="bg-white h-max p-3 rounded">
					<h2 class="text-center font-semibold text-xl border-b border-gray-600 pb-3" style="font-family: 'Fira Code';">Seller Information</h2>

					<div class="flex items-center pt-5 relative">
						<i class="fa fa-map-marker mr-3 text-gray-800" aria-hidden="true"></i>
						<span class="text-left block relative overflow-hidden text-gray-600 block relative break-words">{{ ucfirst($property->location) }}</span>
					</div>

					<!-- Contact -->
					<div class="mt-5 relative">
						<a href="tel:{{ ucfirst($property->phone) }}" class="bg-gray-300 p-4 px-5 rounded block overflow-hidden relative">
				            <div class="numbers"><i class="fa fa-phone text-gray-800 mr-2"></i>+234{{ ucfirst($property->phone) }}</div>
				        </a>
				    </div>

				    <!-- Email -->
					<div class="mt-5 relative">
						<a href="mailto:{{ strtolower($property->email) }}" data-email="{{ strtolower($property->email) }}" class="bg-gray-600 hover:bg-green-700 cursor-pointer p-4 px-5 rounded block overflow-hidden relative">
				            <i class="fas fa-envelope mr-2 text-gold-600" aria-hidden="true"></i>
				            Email To Seller
				        </a>
				    </div>
				</div>
			</div>
		</div>

		<!-- related Ads Start -->
		@include('include.related_ads')
		<!-- related Ads end -->
	</main>
	<!-- End Main -->
@endsection