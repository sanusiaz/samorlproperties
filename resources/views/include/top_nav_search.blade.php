<!-- Advance Search Form -->
<form class="p-0 m-0 outline-none block py-3" action="{{ route('search.top') }}" method="post">
	<section class="w-full grid grid-cols-1 md:grid-cols-4 gap-5">
		<!-- Location -->
		<select class="p-2 lg:p-4 border border-gray-300 bg-gray-100 rounded @error('location') border-red-600 @enderror" data-taxonomy="rtcl_location" data-parent="0" name="location">
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
		<select class="p-2 lg:p-4 border border-gray-300 bg-gray-100 rounded rtcl-category-search @error('category') border-red-600 @enderror" data-taxonomy="rtcl_category" data-parent="0" name="category">
				<option value="-1">Select a category</option>
			@foreach( $categories as $category )
				<option value="{{ str_replace(' ', '-', $category->name) }}">{{ ucwords($category->name) }}</option>
			@endforeach
		</select>
		@endif

		<!-- Purpose DropDown -->
		<select class="p-2 lg:p-4 py-2 border border-gray-300 bg-gray-100 rounded @error('purpose') border-red-600 @enderror" id="rtcl-search-type-2948021564" name="purpose">
            <option value="">Select purpose</option>
            <option value="sale">For Sale</option>
            <option value="rent">For Rent</option>
            <option value="lease">To Lease</option>
            <option value="let">To Let</option>
        </select>

		<button type="submit" class="bg-green-900 hover:bg-green-700 text-white rounded font-semibold py-2 lg:py-0">Search</button>
	</section>
	@csrf
</form>