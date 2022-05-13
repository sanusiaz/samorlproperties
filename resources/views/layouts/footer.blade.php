<footer>
	<div class="footer-top-area md:py-10 lg:px-20 md:px-10 px-5 py-10" style="background-color: #031811;">
		<div class="grid grid-cols-1 md:grid-cols-4 gap-2 text-sm">
			<ul id="menu-footer" class="menu">
				<li id="menu-item-8651" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8651"><a href="/">Home listings</a></li>
				<li id="menu-item-6408" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6408 hidden">
					<a href="https://listproperty.ng/how-to-promote/">How to Promote</a></li>
				<li id="menu-item-8652" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8652 hidden"><a href="#">List your Property</a></li>
				<li id="menu-item-5868" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-5868"><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
				<li id="menu-item-5870" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5870 hidden"><a href="{{ url('/terms-and-conditions') }}">Terms and Conditions</a></li>
				<li id="menu-item-19948" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19948"><a href="{{ url('/cookies-policy') }}">Cookies Policy</a></li>
				<li id="menu-item-5869" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5869"><a href="{{ url('contact-us') }}">Contact us</a></li>
			</ul>
			<ul id="menu-information" class="menu">
				<li id="menu-item-5871" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5871"><a href="{{ url('/listings/purpose/sale') }}">Property For Sale</a></li>
				<li id="menu-item-5872" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5872"><a href="{{ url('/listings/purpose/rent') }}">Property To Rent</a></li>
				<li id="menu-item-5873" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5873"><a href="{{ url('/listings/purpose/lease') }}">Property To Lease</a></li>
				<li id="menu-item-5874" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5874"><a href="{{ url('/listings/purpose/let') }}">Short-Let</a></li>
			</ul>
			<ul id="menu-property-categories" class="menu">
				<li id="menu-item-5884" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5884"><a href="{{ url('listings/type/commercial') }}">Commercial Property</a></li>
				<li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23"><a href="{{ url('listings/type/flats') }}">Flats / Apartments</a></li>
				<li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24"><a href="{{ url('listings/type/houses') }}">Houses</a></li>
				<li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20"><a href="{{ url('listings/type/lands') }}">Plots &amp; Lands</a></li>
				<li id="menu-item-22941" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22941 hidden"><a href="https://listproperty.ng/stores/">Agents</a></li>
			</ul>
			<div id="classima_about-3" class="widget widget_classima_about">
				<p class="des">Nigeria Property Portal with Properties For sale, To rent and Lease. Find Houses, Flats, Land and Commercial Properties in Nigeria. Nigeria's largest selection of properties.</p>
				<ul class="socials inline-flex pt-3 pl-0 w-full hidden">
					<li class="facebook"><a href="https://www.facebook.com/listpropertynigeria/" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a></li>
					<li class="twitter"><a href="https://twitter.com/ListNigeria" target="_blank"><i class="fab fa-fw fa-twitter"></i></a></li>
					<li class="instagram"><a href="https://www.instagram.com/listpropertynigeria/" target="_blank"><i class="fab fa-fw fa-instagram"></i></a></li>
					<li class="youtube"><a href="https://www.youtube.com/channel/UCC_CrSEd1UIhBrK5kgkjf2w" target="_blank"><i class="fab fa-fw fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-bottom-area bg-green-900 text-xs lg:text-sm text-center px-2 md:px-3 md:py-5 lg:py-4 py-3" style="background-color: #244036;">
		<p>Nigerian Properties from Estate Agents, Private Landlords and Developers. Find Houses, Flats, Land and Commercial Properties in Nigeria - {{ ucfirst($_ENV['APP_NAME']) }} Market. &nbsp;<span class="block relative">&#169; Copyright {{ $_ENV['APP_NAME'] }} 2021</span></p>
	</div>
</footer>
<script type="text/javascript"  src="{{ asset('js/main.js') }}"></script>