<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="name">Title</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="name" type="text" placeholder="Property Title" name="name" value="{{ $property->name ?? old('name') }}">
        @error('name')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="price">Price</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('price') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="price" type="number" placeholder="Property Price" name="price" value="{{ $property->price ?? old('price') }}">
        @error('price')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Category -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="category">Category</label>
    @if ( $categories->count() > 0 )
        <select id="category" name="category" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('category') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
            <option readonly value="">Select Category</option>
        @foreach ( $categories as $category )
            <option value="{{ $category->id }}" @if( isset($property) && $property->category->name === $category->name ) selected @endif>{{ $category->name }}</option>
        @endforeach
        </select>
        @error('category')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    @else 
    <h2>No Categories</h2>
    @endif
    </div>


    <!-- City -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="city">City</label>
    @if ( $cities->count() > 0 )
        <select id="city" name="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('city') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
            <option readonly value="">Select City</option>
        @foreach ( $cities as $city )
            <option value="{{ $city->id }}" @if( isset($property) && $property->city->city_name === $city->city_name ) selected @endif>{{ $city->city_name }}</option>
        @endforeach
        </select>
        @error('city')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    @else 
    <h2>No Cities</h2>
    @endif
    </div>


    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="country">Country</label>
        <select id="country" name="country" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('country') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
        	<option readonly value="" disabled="">Select Country</option>
        	<option value="nigeria" readonly="" @if( isset($property) && $property->city->country === 'nigeria' ) selected @endif>Nigeria</option>
        	<option value="south-africa" readonly="" @if( isset($property) && $property->city->country === 'south-africa' ) selected @endif>South Africa</option>
        	<option value="ghana" readonly="" @if( isset($property) && $property->city->country === 'ghana' ) selected @endif>Ghana</option>
        	<option value="usa" readonly="" @if( isset($property) && $property->city->country === 'usa' ) selected @endif>USA</option>
        </select>
        @error('country')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>


    <!-- Type -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="type">Type</label>
        <select id="type" name="type" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('type') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
            <option readonly value="">Select Type</option>
            <option value="cars" @if( isset($property) && $property->type === 'cars' ) selected @endif>Cars</option>
            <option value="houses" @if( isset($property) && $property->type === 'houses' ) selected @endif>Houses</option>
            <option value="lands" @if( isset($property) && $property->type === 'lands' ) selected @endif>Lands</option>
            <option value="flats" @if( isset($property) && $property->type === 'flats' ) selected @endif>Flats/Appartment</option>
            <option value="commercial" @if( isset($property) && $property->type === 'commercial' ) selected @endif>Commercial</option>
        </select>
        @error('type')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Purpose -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="purpose">Purpose</label>
        <select id="purpose" name="purpose" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('purpose') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
            <option readonly value="">Select Purpose</option>
            <option value="sale" @if( isset($property) && $property->purpose === 'sale' ) selected @endif>For Sale</option>
            <option value="rent" @if( isset($property) && $property->purpose === 'rent' ) selected @endif>For Rent</option>
            <option value="let" @if( isset($property) && $property->purpose === 'let' ) selected @endif>Short Let</option>
            <option value="lease" @if( isset($property) && $property->purpose === 'lease' ) selected @endif>To Lease</option>
        </select>
        @error('purpose')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Description -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="description">Description</label>
        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('description') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" name="description" id="description" cols="10" rows="3">{{ $property->description ?? old('description') }}</textarea>
         @error('description')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>


    <!-- Plan -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="plan">Plan</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('plan') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="plan" type="text" placeholder="Enter Plan I.e Fixed, Negotiable" name="plan" value="{{ $property->plan ?? old('plan') }}">
        @error('plan')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- State -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="state">State</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('state') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="state" type="text" placeholder="Enter State" name="state" value="{{ $property->state ?? old('state') }}">
        @error('state')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Town -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="town">Town</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('town') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="town" type="text" placeholder="Enter Town" name="town" value="{{ $property->town ?? old('town') }}">
        @error('town')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Size -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="size">Size / Weight / Type</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('size') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="size" type="text" placeholder="Enter Property Size" name="size" value="{{ $property->size ?? old('size') }}">
        @error('size')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Phone Number -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="phone">Phone Number</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('phone') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="phone" type="text" placeholder="Seller's Working Phone Number" name="phone" value="{{ $property->phone ?? old('phone') }}">
        @error('phone')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Location -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="phone">Location</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('location') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="location" type="text" placeholder="Seller's Location" name="location" value="{{ $property->location ?? old('location') }}">
        @error('location')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Senders Email Address -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="phone">Email Address</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('email') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="email" type="text" placeholder="Enter Working Emal Address" name="email" value="{{ $property->email ?? old('email') }}">
        @error('email')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        @if ( !isset($property) )
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="file">City Pics</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('file') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="file" type="file" placeholder="Select City Pics" name="file[]" multiple>
        @error('file')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
        @endif
        @if ( isset($property) )
            @php
                $data = @unserialize($property->file_name);
                if ($property->file_name === 'b:0;' || $data !== false) {
                    // multiple uploads
                    $fileName = count($data) . " Images Exists";
                    
                } 
                else {
                    // single image upload
                    $fileName = "Selected Pics ". $property->file_name;
                }
        
               
            @endphp
            {{ $fileName }}
        @endif
    </div>
</div>
@csrf