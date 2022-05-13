@if ( isset($cities) && count($cities['city']) > 0 )
<!-- Top Cities -->
<div class="md:px-20 px-2 sm:px-5 py-2 bg-white">
	<div class="text-xl md:text-2xl az_border_bottom w-max relative pb-4 pt-3 mb-2 md:pb-4 md:pt-10 md:mb-5"> Browse Top Cities</div>

</div>
<div class="bg-green-900 lg:px-20 md:px-5 px-5 py-5 md:py-10">
    
    <div class="grid md:grid-cols-3 grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-8 md:gap-5 lg:gap-10">
	<!-- card Contents -->
	@foreach( $cities['city'] as $city )
	<div class="az_image_card h-52 ld:h-72 overflow-hidden relative">
		<a href="{{ url('/listings/state/'. $city->state) }}">
			<div class="image h-full bg-cover bg-blend-overlay w-full" style="background-image: url({{ Storage::url('app/public/uploads/cities/images/' . $city->file_name); }}); background-position: center center;"></div>
			<div class="content absolute bottom-0 w-full py-5 pb-5 left-0 px-3">
				<h3 class="title text-white font-bold text-xl">{{ $city->state }}</h3>
				<div class="counter text-lg text-white font-semibold">{{ $city->property->count() }} Ads Posted</div>
			</div>
		</a>
	</div>
	@endforeach
</div>
    <a href="{{ url('/cities') }}" class="p-2 py-3 bg-green-500 font-semibold text-sm rounded mt-3 hover:bg-green-400 block relative w-max">Show all cities</a>
</div>
@endif