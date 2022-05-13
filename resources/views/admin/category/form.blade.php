<div class="flex flex-wrap -mx-3 mb-6">
	<!-- Category Name -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="name">Name</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="name" type="text" placeholder="Category Name" name="name" value="{{ $category->name ?? old('name') }}">
        @error('name')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Category Description -->
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="description">Description</label>

        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('description') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" name="description" id="description" cols="10" rows="4">{{ $category->description ?? old('description') }}</textarea>
        @error('description')
             <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
</div>
@csrf