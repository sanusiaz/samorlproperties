@extends('admin.layouts.app')

@section('title', 'City - Lists')

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
	            	<a href="/admin/cities/create" class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 block relative w-max mb-10 border border-blue hover:border-transparent rounded">Add New City</a>

                    <!-- Lists Of All Cities -->
                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2 relative">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Cities Lists
                            </div>

                            @if ( $cities->count() > 0 )
                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
                                                
                               @foreach($cities as $city)
                                    <a href="{{ url('/listings/city/'. $city->state . '/' . $city->city_name ) }}" class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">

                                        <img src="{{ Storage::url('app/public/uploads/cities/images/'.$city->file_name) }}" alt="" class="w-full h-36">
                                        <div class="flex justify-center -mt-8">
                                            <img src="{{ Storage::url('app/public/uploads/cities/images/'.$city->file_name) }}" alt="" class="rounded-full border-solid border-white border-2 -mt-3 h-28 w-28">
                                        </div>
                                        <div class="text-center px-3 pb-6 pt-2">
                                            <h3 class="text-black text-lg font-semibold bold font-sans">{{ $city->city_name }}</h3>
                                        </div>
                                        <div class="flex justify-center pb-3 text-grey-dark">
                                            <div class="text-center mr-3 pr-3">
                                                <h2>{{ $city->property->count() }}</h2>
                                                <span>Properties</span>
                                            </div>
                                        </div>
                                    </a>
                               @endforeach

                            </div>
                            <div class="p-2">{{ $cities->links() }}</div>
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
		$("#cities").addClass('bg-white');
	</script>
@endsection
