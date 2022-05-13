@extends('admin.layouts.app')

@section('title', 'Property - Lists')

@section('contents')
	<div class="mx-auto bg-grey-400">
	    <!--Screen-->
	    <div class="min-h-screen flex flex-col">
	        <!--Header Section Starts Here-->
	        @include('admin.layouts.header')
	        <!--/Header-->

	        <div class="flex flex-1">
	        	@include('admin.layouts.sidenav')
	            <!--Main-->
	            <main class="bg-white-300 flex-1 p-3 overflow-hidden pt-10">
	            	<a href="/admin/properties/create" class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 block relative w-max mb-10 border border-blue hover:border-transparent rounded">Add New Property</a>

                    <!-- Lists Of All Cities -->
                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2 relative">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Property Lists
                            </div>

                            @if ( $properties->count() > 0 )
                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
                                                
                               @foreach($properties as $property)
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
                                    <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">

                                        <img src="{{ Storage::url('app/public/uploads/property/images/'.$fileName) }}" alt="Propeties Image" class="w-60 shadow-lg border rounded border-gray-300 relative h-max max-h-60 object-contain m-auto mt-2">
                                        <div class="text-center px-3 pb-6 pt-2">
                                            <h3 class="text-black text-xl font-bold font-sans pt-2 block relative w-full overflow-ellipsis whitespace-nowrap overflow-hidden" title="{{ $property->name }}">{{ strtoupper($property->name) }}</h3>
                                            <h3 class="text-black text-lg font-medium font-sans text-left py-3 whitespace-nowrap overflow-ellipsis overflow-hidden w-full">{{ ucfirst($property->description) }}</h3>
                                            <h3 class="text-gray-700 text-sm font-semibold bold font-sans text-left">Price: <span class="text-green-700 text-lg">₦{{ number_format($property->price) }}</span> ({{ $property->plan }})</h3>
                                            <h3 class="text-gray-700 text-sm font-semibold bold font-sans text-left">City: {{ $property->city->city_name }}</h3>
                                            <h3 class="text-gray-700 text-sm font-semibold bold font-sans text-left">Category: {{ $property->category->name }}</h3>
                                            <h3 class="text-gray-700 text-sm font-semibold bold font-sans text-left">For {{ $property->purpose }} ({{ $property->type }})</h3>

                                            <div class="block relative flex overflow-hidden mt-3 p-0">
                                                <a href="{{ url('/listings/property/' . $property->id) }}" target="_blank" class="bg-blue-700 cursor-pointer rounded p-1 mx-1 ml-0 text-white">
                                                    <i class="fas fa-eye"></i></a>
                                                <a href="{{ route('admin.property.edit', ['property' => $property]) }}" class="bg-blue-700 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-edit"></i></a>

                                                <form action="{{ route('admin.property.delete', ['property' => $property]) }}" method="post">
                                                    @method('delete')
                                                    <button type="submit" class="bg-blue-700 cursor-pointer rounded p-1 mx-1 text-red-500"><i class="fas fa-trash"></i></button>
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                        <div class="flex justify-center pb-3 text-grey-dark p-6">
                                            <div class="text-center mr-3 pr-3">
                                                <h2>{{ $property->views }}</h2>
                                                <span>Views</span>
                                            </div>
                                        </div>
                                    </div>
                               @endforeach
                            </div>
                            @else
                            <span class="text-center flex align-center items-center justify-center h-44">No Cities Found</span>
                            @endif
                        </div>
                    </div>	            	
	            </main>
	        </div>
			@include('admin.layouts.footer')
	    </div>
	</div>

	<script type="text/javascript">
		$("#properties").addClass('bg-white');
	</script>
@endsection
