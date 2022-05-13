<div class="sticky" style="z-index: 9999999;">
	<header id="site-header">
		<div class="main-header bg-white p-1">
			<div class="block md:flex justify-between p-2 px-3 md:px-8  lg:px-11 align-middle items-center lg:px-2 xl:m-auto">
				<div class="flex justify-between md:block logo_wrapper"> 
					<span>
						<a class="dark-logo" href="{{ url('/') }}">
							<img src="{{ asset('images/main_full_logo.png') }}" class="w-48 md:w-44 lg:w-52" style="height: 100%; object-fit: contain;" alt="Samorl Property">
						</a>
					</span>

					<!-- Menu -->
					<span id="menu" class="relative pr-4 md:hidden"> <i class="icon ion-android-menu size-24"> </i> </span>
				</div>
				<ul id="nav_links" class="inline-flex hidden md:inline-flex">
					<li class="p-2 md:p-3 text-sm md:text-lg px-2 md:px-5 lg:px-5 lg:p-1 w-max" id="home"><a href="/">Home</a></li>
					<li class="p-2 md:p-3 text-sm md:text-lg lg:px-5 lg:p-1 w-max" id="houses"><a href="/listings/type/houses">Houses</a></li>
					<li class="p-2 md:p-3 text-sm md:text-lg lg:px-5 lg:p-1 w-max"  id="lands"><a href="/listings/type/lands">Lands</a></li>
					<li class="p-2 md:p-3 text-sm md:text-lg lg:px-5 lg:p-1 w-max" id="commercial"><a href="/listings/type/commercial">Commercial</a></li>
					<li class="p-2 md:p-3 text-sm md:text-lg lg:px-5 lg:p-1 w-max" id="cars"><a href="/listings/type/cars">Cars</a></li>
					<li class="p-2 md:p-3 text-sm md:text-lg lg:px-5 lg:p-1 w-max" id="flats"><a href="/listings/type/flats">Flats and Apartments</a></li>
				</ul>

				<div class="p-0 m-0 md:block">
					<a href="" class="p-0 m-0 mr-5 lg:mr-1 hidden"><i class="far fa-comments size-25"></i></a>
					<a title="Login / Register" class="mr-5 hidden" href="#"><i class="far fa-user size-25"></i></a>

					<a href = "{{ route('comming.soon') }}" class="header-btn bg-green-900 rounded-lg text-white py-3 px-2 hidden md:block hover:bg-green-700" href="#"><i class="fas fa-plus mr-2" aria-hidden="true"></i>Become an Agent</a>
				</div>
			</div>

			<div id="phone-header" class="container">
				<!-- logo -->
			</div>
		</div>
	</header>
	@include('include.top_nav')
</div>