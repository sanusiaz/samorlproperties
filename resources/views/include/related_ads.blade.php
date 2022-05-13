@if ( isset($relatedProperty) && $relatedProperty->count() > 0 )
<!-- Related Ads -->
<div class="block relative block bg-white mt-10 p-0 rounded">
	<span class="font-semibold text-lg border-b border-gray-500 p-3  block relative">Related Properties</span>
	<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-5 xl:gap:10 sm:gap-5 md:gap-7 px-5 sm:px-6 md:px-10 lg:px-15 xl:px-20 py-5 bg-white">
		<!-- Card Contents -->
		@foreach ( $relatedProperty as $relatedProperty )
		 @php

            $data = @unserialize($relatedProperty->file_name);
            if ($relatedProperty->file_name === 'b:0;' || $data !== false) {
                // multiple uploads
                $fileName = $data[0]['fullFileName'];
            } else {
                // single image upload
                $fileName = $relatedProperty->file_name;
            }
        
           
        @endphp
		<a href="{{ url('/listings/property/' . $relatedProperty->id) }}" class="shadow border border-gray-300 p-2 rounded">
			<img src="{{ Storage::url('app/public/uploads/property/images/' . $fileName) }}" class="h-44 object-contain w-full">
			<div class="block relative mt-3 text-sm text-gray-400">{{ $relatedProperty->type }} ({{ $relatedProperty->size }})</div>
			<div class="block font-bold relative mt-3 text-lg overflow-hidden overflow-ellipsis whitespace-nowrap capitalize">
				{{ $relatedProperty->name }}
			</div>
			<div class="flex">
				<span class="text-white text-sm bg-red-800 rounded p-1 px-2 mr-2">Featured</span>
				<span class="text-white text-sm bg-green-800 rounded p-1 px-2"><i class="icon ion-checkmark pr-2"></i>Verified</span>
			</div>

			<div class=""><b>State: </b> {{ $relatedProperty->state }}</div>
			<div class=""><b>Town: </b> {{ $relatedProperty->town }}</div>

			<div class="py-2">
				<span class="text-sm text-gray-400 block"><i class="fa fa-fw fa-map-marker"></i>&nbsp; {{ $relatedProperty->city->city_name }}</span>
				<span class="text-sm text-gray-400 block relative"><i class="fa fa-eye"></i>&nbsp; {{ $relatedProperty->views }} Views</span>
			</div>

			<div class="text-green-900 text-xl font-bold py-2 pb-3">
				₦ {{ number_format($relatedProperty->price) }} <small class="text-xs font-normal">({{ ucfirst($relatedProperty->plan) }})</small>
			</div>

		</a>
		@endforeach
	</div>
</div>
@endif