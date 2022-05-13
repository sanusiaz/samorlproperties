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
	            	<h2 class="text-lg font-bold my-2 py-3">Update Your Profile</h2>
                    <!--  Edit Form Start -->
                    <form action="/admin/settings/{{ $user->id }}" method="post">
                    	@method('patch')
                    	<div class="flex flex-wrap -mx-3 mb-6">
						    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="name">Name</label>
						        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="name" type="text" placeholder="Property Name" name="name" value="{{ $user->name ?? old('name') }}">
						        @error('name')
						             <p class="text-red-500 text-xs italic">{{ $message }}</p>
						        @enderror
						    </div>
						    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="email">Email</label>
						        <input readonly="" class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('email') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white- opacity-60" id="email" type="email" placeholder="Property Price" name="email" value="{{ $user->email ?? old('email') }}">
						        @error('email')
						             <p class="text-red-500 text-xs italic">{{ $message }}</p>
						        @enderror
						    </div>

						    <!-- Old Password -->
						    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="old_password">Old Password</label>
						        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('old_password') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="old_password" type="password" placeholder="Enter Your Old Password" name="old_password">
						        @error('old_password')
						             <p class="text-red-500 text-xs italic">{{ $message }}</p>
						        @enderror
						    </div>

						    <!-- New Password -->
						    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="new_password">New Password</label>
						        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('new_password') border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500" id="new_password" type="password" placeholder="Enter Your New Password" name="new_password">
						        @error('new_password')
						             <p class="text-red-500 text-xs italic">{{ $message }}</p>
						        @enderror
						    </div>
						</div>

						<button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-800 rounded">Update Profile</button>
						@csrf
                    </form>
                    <!--  Edit Form End -->
	            </main>
	        </div>
			@include('admin.layouts.footer')
	    </div>
	</div>

	<script type="text/javascript">
		$("#settings").addClass('bg-white');
	</script>
@endsection
