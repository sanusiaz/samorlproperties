<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Property;

class SearchController extends Controller
{
	public function search( $category, $purpose, $location, $price_max, $price_min )
	{
		$category = str_replace('-', ' ', $category);
    	$location = str_replace('-', ' ', $location);
    	$purpose = str_replace('-', ' ', $purpose);

		$catId = Category::where(['name' => $category])->firstOrFail()->id;
    	$cityId = City::where('state', $location)->firstOrFail()->id;

    	$properties = Property::where([
    		'category_id' => $catId,
    		'city_id' => $cityId,
    		'purpose' => $purpose
    	])
    	->where('price', '<', $price_max)
    	->where('price', '>', $price_min)->paginate(10);

    	return view('search.index', [
    		'categories' => Category::all(),
    		'properties' => $properties
    	]);
	}

	public function searchRequest( Request $request )
	{

		$this->validate($request, [
    		'location' 		=> 'required|max:255',
    		'category'		=> 'required|max:255',
    		'purpose' 		=> 'required|max:255',
    		'price_max' 	=> 'required',
    		'price_min' 	=> 'required'
    	]);
		
		return redirect(route('search.main.request', [
    		'category' 	=> $request->category,
    		'purpose'	=> $request->purpose,
    		'location' 	=> $request->location,
    		'price_max' => $request->price_max,
    		'price_min' => $request->price_min
    	]));	
	}

	public function topSearchRequest( Request $request ) {
		// validate request
		$this->validate($request, [
    		'location' 		=> 'required|max:255',
    		'category'		=> 'required|max:255',
    		'purpose' 		=> 'required|max:255'
    	]);

    	return redirect(route('search.top.request', [
    		'category' 	=> $request->category,
    		'purpose'	=> $request->purpose,
    		'location' 	=> $request->location
    	]));
	}

    public function topSearch( $category, $purpose, $location )
    {
    	$category = str_replace('-', ' ', $category);
    	$location = str_replace('-', ' ', $location);
    	$purpose = str_replace('-', ' ', $purpose);

    	$catId = Category::where(['name' => $category])->firstOrFail()->id;
    	$cityId = City::where('state', $location)->firstOrFail()->id;

    	$properties = Property::where([
    		'category_id' => $catId,
    		'city_id' => $cityId,
    		'purpose' => $purpose
    	])->paginate(10);

    	return view('search.index', [
    		'categories' => Category::all(),
    		'properties' => $properties
    	]);

    }
}
