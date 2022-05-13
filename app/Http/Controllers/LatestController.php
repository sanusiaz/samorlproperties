<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;

class LatestController extends Controller
{
	public function index() 
	{
    	// select reatured categories based on views
    	$latestProperty = Property::where('views', '<', 5)->orderBy('views', 'asc')->paginate(20);
    	return view('listings.property.latest', [
    		'LatestProperty' => $latestProperty,
    		'categories' => Category::all()
    	]);
    }
}
