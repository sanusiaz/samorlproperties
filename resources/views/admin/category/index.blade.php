@extends('admin.layouts.app')

@section('title', 'Category - Lists')

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
	            	<a href="/admin/category/create" class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 block relative w-max mb-10 border border-blue hover:border-transparent rounded">Create New Category</a>

	            	<!-- Lists Of All Categories -->
	            	<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2 relative">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Category Lists
                            </div>

                            @if ( $categories->count() > 0 )
                            <div class="p-3">
                                <table class="table-responsive w-full rounded">
                                    <thead>
                                      <tr>
                                        <th class="border w-1/5 px-4 py-2">Category Id</th>
                                        <th class="border w-1/6 px-4 py-2">Category Name</th>
                                        <th class="border w-1/6 px-4 py-2">No Of Properties</th>
                                        <th class="border w-1/6 px-4 py-2">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($categories as $category)
                                       	 <tr>
                                            <td class="border px-4 py-2">{{ $category->id }}</td>
                                            <td class="border px-4 py-2">{{ ucfirst($category->name) }}</td>
                                            <td class="border px-4 py-2">{{ $category->property->count() }}</td>
                                            <td class="border px-4 py-2">
                                                <a href="{{ url('/listings/category', $category->name) }}" target="_blank" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-eye"></i></a>
                                                <a href="{{ route('admin_update_category', ['category' => $category]) }}" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-edit"></i></a>
                                                <!-- Trash Delete Button -->
                                                <form action="{{ route('admin_delete_category', ['category' => $category]) }}" method="post" class="inline">
                                                	@method('delete')
                                                	<button type="submit" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                		<i class="fas fa-trash"></i>
                                                	</button>
                                                	@csrf
                                                </form>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <span class="text-center flex align-center items-center justify-center h-44">No Cateories Found</span>
                            @endif
                        </div>
                    </div>
	            </main>
	        </div>
			@include('admin.layouts.footer')
	    </div>
	</div>

	<script type="text/javascript">
		$("#categories").addClass('bg-white');
	</script>
@endsection
