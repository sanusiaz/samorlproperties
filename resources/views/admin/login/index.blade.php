@extends('admin.layouts.app')

@section('title', 'login')
@section('login_class', 'login')

@section('contents')
  <div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
        <form action="{{ route('admin_login') }}" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="POST">
          <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
          <div class="">
            <label class="block text-sm text-gray-00" for="email">Email</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="email" placeholder="Email Address" aria-label="email">
            @error('email')
              <small class="text-red-800">{{ $message }}</small>
            @enderror
          </div>
          <div class="mt-2">
            <label class="block text-sm text-gray-600" for="password">Password</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" placeholder="*******" aria-label="password">
             @error('password')
                <small class="text-red-800">{{ $message }}</small>
              @enderror
          </div>
          <div class="mt-4 items-center justify-between">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Login</button>
          </div>
          @if ( session()->has('error') ) 
            <small class="text-red-700 text-sm block relative p-3 pl-0">{{ session('error') }}</small>
          @endif
          @csrf
        </form>

      </div>
    </div>
  </div>
@endsection
