@extends('admin.layouts.app')

@section('title', 'Property - Edit')

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
	            	<a href="/admin/properties" class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 block relative w-max mb-10 border border-blue hover:border-transparent rounded">Show All Properties</a>

	            	<!-- Category Form Start -->
                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Update {{ $property->name }}
                            </div>
                            <div class="p-3">
                                <form class="w-full" action="/admin/properties/edit/{{ $property->id }}" method="post" enctype="multipart/form-data">
                                	@method('patch')
                                   <!-- Uploaded Properties picture -->
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
                                   <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
								        <img class="w-36 object-cover h-36 rounded-full border-4 border-white" src="{{ Storage::url('app/public/uploads/property/images/'.$fileName) }}">
								    </div>
                                   @include('admin.property.form')

                                    <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-800 rounded">Update Properties</button>
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
		$("#properties").addClass('bg-white');

			// Prevent jQuery UI dialog from blocking focusin
			$(document).on('focusin', function(e) {
			  if ($(e.target).closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
			    e.stopImmediatePropagation();
			  }
			});
	</script>
@endsection
