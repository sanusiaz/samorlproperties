@extends('admin.layouts.app')

@section('title', '403 - Permission Required')

@section('contents')
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
  <div class="w-full max-w-lg">
    <div class="leading-loose">
      <div class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
        <p class="text-gray-800 font-medium text-center text-xl font-bold">403 - Permission Required</p>
         <a href="{{ route('admin_login') }}" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded ml-24" type="submit">Take Me Back To Login Page</a>
      </div>

    </div>
  </div>
</div>
@endsection
