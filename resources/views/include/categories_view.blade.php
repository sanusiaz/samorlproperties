<!-- Category Views -->
@if ( $categories !== null && $categories->count() > 0 )
	<div class="grid grid-cols-1 md:grid-cols-4 md:gap-8 lg:gap-10 px-5 px-5 sm:px-15 md:px-15 lg:px-20 py-2 lg:py-4 gap-5">
		@foreach( $categories as $category )
		<a href="{{ url('/listings/category/' . $category->name) }}" class="bg-white rounded p-2 px-2 lg:p-3 lg:py-4 border border-gray-300 shadow hover:shadow-lg az_card_hover max-h-56 overflow-hidden">
			<span class="text-green-600 text-center block w-full font-bold text-lg pt-5 capitalize">{{ $category->name }}</span>
			<small class="text-gray-500 block w-full text-center">({{ $category->property->count() }}) Properties</small>
			<small class="text-gray-800 block w-full text-center py-3 pb-4 text-lg md:text-sm lg:text-lg">{{ ucfirst($category->description) }}</small>
		</a>
		@endforeach
	</div>
@endif