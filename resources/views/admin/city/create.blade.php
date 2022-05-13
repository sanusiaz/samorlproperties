@extends('admin.layouts.app')

@section('title', 'City - Create')

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
	            	<a href="/admin/cities" class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 block relative w-max mb-10 border border-blue hover:border-transparent rounded">Show All Cities</a>

	            	<!-- Category Form Start -->
                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Add New City
                            </div>
                            <div class="p-3">
                                <form class="w-full" action="/admin/cities/create" method="post" enctype="multipart/form-data">
                                   @include('admin.city.form')
                                    <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-800 rounded">Create New City</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Category Form End -->
	            </main>
	        </div>
			@include('admin.layouts.footer')
	    </div>
	</div>
	<script type="text/javascript">
		$("#cities").addClass('bg-white');
	</script>
@endsection
