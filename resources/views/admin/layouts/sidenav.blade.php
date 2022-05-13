<!--Sidebar-->
<aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

    <ul class="list-reset flex flex-col">
        <li id="dashboard" class=" w-full h-full py-3 px-2 border-b border-light-border">
            <a href="/admin/dashboard" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                Dashboard
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li id="categories" class="w-full h-full py-3 px-2 border-b border-light-border">
            <a href="/admin/category" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-wpforms float-left mx-2"></i>
                Categories
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li id="cities" class="w-full h-full py-3 px-2 border-b border-light-border">
            <a href="/admin/cities" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-wpforms float-left mx-2"></i>
                Cities
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li id="properties" class="w-full h-full py-3 px-2 border-b border-light-border">
            <a href="/admin/properties" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-grip-horizontal float-left mx-2"></i>
                Properties
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li id="settings" class="w-full h-full py-3 px-2 border-b border-light-border">
            <a href="/admin/settings" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fa fa-cogs float-left mx-2"></i>
                Settings
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li id="properties" class="w-full h-full py-3 px-2 border-b border-light-border">
            <form action="/logout" method="post" class="outline-none">
                <button class="font-sans outline-none block relative w-full text-left font-hairline hover:font-normal text-sm text-nav-item no-underline" type="submit"><i class="fas fa-sign-out-alt float-left mx-2"></i>Logout <span><i class="fa fa-angle-right float-right"></i></span></button>
                @csrf
            </form>
        </li>
    </ul>

</aside>
<!--/Sidebar-->