<!-- Latest properties -->
@if ( $latestProperty->count() > 0 )
<div class="mt-0 mb-0">
	<div class="text-center bg-green-900 p-2 pb-3 md:p-5 md:pb-3">
		<span class="text-white ld:text-3xl md:text-2xl text-xl block font-semibold">Latest Properties</span>
		<span class="p-1 md:p-3 pt-2 md:pt-3 relative block text-white text-sm lg:text-lg">Find Houses, Flats, Land and Commercial Properties in Nigeria. Nigeria's largest selection of properties</span>
	</div>

	<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 xl:gap:10 sm:gap-5 md:gap-7 px-5 sm:px-6 md:px-10 lg:px-15 xl:px-20 py-5 bg-white">
		<!-- Properties Card -->
		@foreach( $latestProperty as $property )
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
	<div class="@if ( $latestProperty->count() >= 6 ) pb-10 @else pb-0 @endif px-20 pt-5 block relative overflow-hidden bg-white">
		@if ( $latestProperty->count() >= 6 )
			<a href="{{ url('listings/property/latest') }}" class=" bg-green-600 text-white text-sm w-max p-3 px-5 rounded hover:bg-green-900">Show More</a>
		@endif
	</div>
</div>
@endif