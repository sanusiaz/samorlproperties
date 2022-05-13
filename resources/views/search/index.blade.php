@extends('layouts.app')

@section('title', 'Search - Top Search')


@section('content')

	<div class="flex flex-col items-center align-middle justify-center w-full h-52 text-center bg-cover bg-center short_banner relative"
		style="background-image: url('{{ asset('images/full-screen-2.png') }}'); background-repeat: no-repeat;">
		<span class="font-bold uppercase text-white text-2xl md:text-4xl block w-full az_custom_front tracking-wide break-words z-50 pb-12 capitalize" >Search Results</span>

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
				@if ( $properties !== null && $properties->count() > 0 )
					@foreach ($properties as $property)
					
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

	                	<a href="/listings/property/{{ $property->id }}" class="shadow rounded border border-gray-300 p-2 py-5 flex flex-col sm:flex-row mb-8 hover:shadow-xl items-center">
	                		<img src="{{ Storage::url('app/public/uploads/property/images/' . $fileName) }}" class="w-60 shadow-lg border rounded border-gray-300 relative h-max max-h-60 object-contain">
	                		<div class="ml-5">
	                			<span class="block py-3 pt-5 text-gray-400 capitalize text-xs">{{ $property->type }}</span>
	                			<div class="text-xl font-bold capitalize">{{ $property->name }}</div>

	                			<div class="text-gray-500 text-sm">Size / Weight: {{ $property->size }}  |  City: {{ $property->city->city_name }}  |  Town: {{ $property->town }}</div>
	                			<div class="text-gray-500 text-sm py-5"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ ucwords($property->location) }}</div>
	                			<div class="text-gray-500 text-sm p-0"> {{ ucwords($property->description) }}</div>
	                		</div>
	                	</a>
	                @endforeach

	                {{ $properties->links() }}
	            @else
                	<h2 class="flex items-center justify-center h-60 text-gray-900 font-semibold text-2xl" style="font-family: 'Poppins'; font-weight: 400;">No Results Found</h2>
                @endif
				
			</div>
		</div>

		<!-- related Ads Start -->
		@include('include.related_ads')
		<!-- related Ads end -->
	</main>
	<!-- End Main -->

@endsection