<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;

class FeaturedController extends Controller
{
    public function index()
    {
    	// select reatured categories based on views
    	$featuredProperty = Property::where('views', '>', 5)->orderBy('views', 'asc')->paginate(3);
    	return view('listings.property.featured', [
    		'featuredProperty' => $featuredProperty,
    		'categories' => Category::all()
    	]);
    }
}
