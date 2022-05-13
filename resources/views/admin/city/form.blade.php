<div class="flex flex-wrap -mx-3 mb-6">
    <!-- Cities Name -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="name">Name</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="name" type="text" placeholder="Enter City Name" name="name" value="{{ $cities->file_name ?? old('name') }}">
        @error('name')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- State -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="state">State <small class="lowercase">(i.e lagos, Ogun e.t.c)</small></label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('state') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="state" type="text" placeholder="Enter City State i.e Ogun / Lagos" name="state" value="{{ $cities->state ?? old('state') }}">
        @error('state')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Country -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="country">Country</label>
        <select id="country" name="country" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('country') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">
        	<option readonly value="">Select Country</option>
        	<option value="nigeria">Nigeria</option>
        	<option value="south-africa">South Africa</option>
        	<option value="ghana">Ghana</option>
        	<option value="usa">USA</option>
        </select>
        @error('country')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="file">City Pics</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('file') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="file" type="file" placeholder="Select City Pics" name="file" >
        @error('file')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
</div>
@csrf