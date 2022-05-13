<header class="bg-nav">
    <div class="flex justify-between">
        <div class="p-1 mx-3 inline-flex items-center">
            <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
            <h1 class="text-white p-2">
                Samorl Properties Admin - Panel
            </h1>
        </div>
        <div class="p-1 flex flex-row items-center">
            <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full cursor-pointer" src="{{ asset('images/profile_avatar.png') }}" alt="Avatar">
            <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">{{ ucfirst(auth()->user()->name) }}</a>
            <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r mt-10">
                <ul class="list-reset mt-10 top-2">
                  <li><a href="/admin/settings" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                  <li><hr class="border-t mx-2 border-grey-ligght"></li>
                  <li>
                        <form action="/logout" method="post" class="outline-none w-full">
                            <button class="no-underline px-4 py-2 block text-black hover:bg-grey-light w-full text-left" type="submit">Logout</button>
                            @csrf
                        </form>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</header>
@if ( session()->has('error') )
<div class="bg-red-300 mb-2 border border-red-300 text-red-dark px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Error!</strong>
    <span class="block sm:inline">{{ session('error') }}</span>
    <span class="absolute top-0 top-0 right-0 px-4 py-3">
      <svg id="exit" class="fill-current h-6 w-6 text-red" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"></path></svg>
    </span>
</div>
@endif

@if ( session()->has('success') )
<div class="bg-green-300 mb-2 border border-green-300 text-green-600 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline">{{ session('success') }}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg id="exit" class="fill-current h-6 w-6 text-green" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"></path></svg>
    </span>
</div>
@endif

<script type="text/javascript">
	$("[role] #exit").click(function (){
		$(this).parent().parent().fadeOut('fast');
	});
</script>