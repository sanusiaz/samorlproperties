@extends('admin.layouts.app')

@section('title', 'Dashboard')

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
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="{{ route('admin.properties') }}" class="no-underline text-white text-2xl">
                                    {{ $total_property }}
                                </a>
                                <a href="{{ route('admin.properties') }}" class="no-underline text-white text-lg">
                                    Total Properties
                                </a>
                            </div>
                        </div>

                        <div class="shadow-lg bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="{{ route('admin_category') }}" class="no-underline text-white text-2xl">
                                    {{ $total_category }}
                                </a>
                                <a href="{{ route('admin_category') }}" class="no-underline text-white text-lg">
                                    Total Categories
                                </a>
                            </div>
                        </div>

                        <div class="shadow-lg bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="{{ route('admin.cities') }}" class="no-underline text-white text-2xl">
                                    {{ $total_cities }}
                                </a>
                                <a href="{{ route('admin.cities') }}" class="no-underline text-white text-lg">
                                    Total Cities
                                </a>
                            </div>
                        </div>

                        <div class="shadow-lg bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    ₦{{ $properties_cost }}
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Properties Cost
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /Stats Row Ends Here -->

                    <!-- Card Sextion Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                        <!-- card -->

                        <!-- Lists Of All Trending Properties -->
                        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2 relative my-10">
                            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                    <b class="text-lg text-left"> Latest Properties</b>
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

                                            <img src="{{ Storage::url('app/public/uploads/property/images/'.$fileName) }}" alt="" class="w-60 shadow-lg border rounded border-gray-300 relative h-max max-h-60 object-contain m-auto mt-2">
                                            <div class="text-center px-3 pb-6 pt-2">
                                                <h3 class="text-black text-xl font-bold font-sans pt-2 block relative w-full overflow-ellipsis whitespace-nowrap overflow-hidden" title="{{ $property->name }}">{{ strtoupper($property->name) }}</h3>
                                                <h3 class="text-black text-lg font-medium font-sans text-left py-3 overflow-ellipsis overflow-hidden whitespace-nowrap">{{ ucfirst($property->description) }}</h3>
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
                                <div class="p-2">{{ $properties->links() }} </div>
                                @else
                                <span class="text-center flex align-center items-center justify-center h-44">No Cities Found</span>
                                @endif
                            </div>
                        </div>      
                        <!-- /card -->



                    </div>
                    <!-- /Cards Section Ends Here -->

                    <!-- Top Categories -->
                    @if ( $categories->count() > 0 )
                    <div class="p-3">
                        <h2 class="text-lg text-black font-semibold mb-3 mt-5">Top Categories</h2>
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
                                        <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
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
                    <!-- End To Categories -->

                 
                   <!-- Top Cities -->
                    @if ( $cities->count() > 0 )
                    <div class="mt-10 p-3">
                        <h2 class="text-left font-semibold text-black relative block text-lg my-5">Top Cities</h2>
                        <div class="rounded shadow-lg border">
                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-1 mt-2 lg:mx-0 md:mx-2 justify-between w-full">
                               @foreach($cities as $city)
                                <div class="rounded rounded-t-lg overflow-hidden shadow-lg max-w-xs my-3">
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
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                    @else
                    <span class="text-center flex align-center items-center justify-center h-44">No Cities Found</span>
                    @endif
                   <!-- End Top Cities -->
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
       @include('admin.layouts.footer')
        <!--/footer-->
    </div>
</div>
	<script type="text/javascript">
		$("#dashboard").addClass('bg-white');
	</script>
@endsection
