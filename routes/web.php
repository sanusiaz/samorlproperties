<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\LatestController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminCitiesController;
use App\Http\Controllers\Admin\SettingsController;
// use App\Http\Controllers\Admin\LoginController;
// use App\Http\Middleware\AdminMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Sitemap Route
Route::get('/sitemap', [SitemapController::class, 'index']);



// robots.txt route

// Home Get Route
Route::get('/', function () {
	return redirect('/home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/listings/property/featured', [FeaturedController::class, 'index']);
Route::get('/listings/property/latest', [LatestController::class, 'index']);
Route::get('/listings/property/{property}', [PropertiesController::class, 'show']);
Route::get('listings/category/{category_name}', [CategoryController::class, 'show']);
Route::get('listings/type/{type_name}', [TypeController::class, 'show']);
Route::get('listings/city/{state}/{city_name}', [CitiesController::class, 'show']);
Route::get('listings/state/{state}', [CitiesController::class, 'showState']);


Route::get('listings/purpose/{purpose_name}', [PurposeController::class, 'show']);
Route::view('/privacy-policy', 'privacy.index')->name('privacy_policy');
Route::view('/cookies-policy', 'cookies.policy.index')->name('cookies_policy');
// Route::view('/terms-and-conditions', 'terms_and_conditions.index')->name('terms');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'send']);
Route::view('/coming-soon', 'coming_soon.index')->name('comming.soon');

Route::post('/logout', [LogoutController::class, 'logout']);

// Search Route
Route::post('/search', [SearchController::class, 'searchRequest'])->name('search');
Route::get('/search/{category}/{purpose}/{location}/{price_max}/{price_min}', [SearchController::class, 'search'])->name('search.main.request');

Route::post('/search/top', [SearchController::class, 'topSearchRequest'])->name('search.top');
Route::get('/search/{category}/{purpose}/{location}', [SearchController::class, 'topSearch'])->name('search.top.request');


// users / Agents controller

// ENd Users Agents Controller



// ADMIN ROUTE
Route::get('/admin', function (){
	return redirect(route('admin_login'));
});

Route::get('/admin', function (){
   // redirect to admin login page
   return redirect('/admin/login');
});
Route::get('/admin/login', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login', [\App\Http\Controllers\Admin\LoginController::class, 'login']);
Route::get('/admin/403', function () {
	return view('admin.403');
})->name('admin_403');

Route::group(['middleware' => 'adminMiddleware'], function () {
	Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin_home');

	Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('admin_category');
	Route::get('/admin/category/create', [AdminCategoryController::class, 'create']);
	Route::post('/admin/category/create', [AdminCategoryController::class, 'store']);
	Route::get('/admin/category/update/{category}', [AdminCategoryController::class, 'edit'])->name('admin_update_category');
	Route::patch('/admin/category/update/{category}', [AdminCategoryController::class, 'update']);
	Route::delete('/admin/category/delete/{category}', [AdminCategoryController::class, 'destroy'])->name('admin_delete_category');

	Route::get('admin/cities', [AdminCitiesController::class, 'index'])->name('admin.cities');
	Route::get('admin/cities/create', [AdminCitiesController::class, 'create'])->name('admin.create');
	Route::post('admin/cities/create', [AdminCitiesController::class, 'store']);

	Route::get('admin/properties', [PropertiesController::class, 'admin_index'])->name('admin.properties');
	Route::get('admin/properties/create', [PropertiesController::class, 'create']);
	Route::post('admin/properties/create', [PropertiesController::class, 'store']);
	Route::get('admin/properties/edit/{property}', [PropertiesController::class, 'edit'])->name('admin.property.edit');
	Route::patch('admin/properties/edit/{property}', [PropertiesController::class, 'update']);
	Route::delete('admin/properties/delete/{property}', [PropertiesController::class, 'destroy'])->name('admin.property.delete');
	
	Route::get('/cities', [CitiesController::class, 'index'])->name('list.cities');

	Route::get('/admin/settings', [SettingsController::class, 'edit']);
	Route::patch('/admin/settings/{users}', [SettingsController::class, 'update']);
});
