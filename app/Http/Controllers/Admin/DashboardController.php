<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use App\Models\City;

class DashboardController extends Controller
{
    public function index()
    {
    	$totalProperties = Property::count();
    	$totalCategories = Category::count();
    	$totalCities = City::count();
    	$propertiesCost = number_format(Property::sum('price'));

    	return view('admin.dashboard.index', [
    		'properties' 		=> Property::orderBy('id', 'desc')->paginate(4),
    		'categories' 		=> Category::limit(20)->get(),
    		'cities' 			=> City::limit(20)->get(),
    		'total_cities' 		=> $totalCities,
    		'total_property' 	=> $totalProperties,
    		'total_category' 	=> $totalCategories,
    		'properties_cost' 	=> $propertiesCost
    	]);
    }
}
