<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\City;
use App\Models\Category;

class CitiesController extends Controller
{
    public function index()
    {
        // list all cities
        return view('listings.city.index', [
            'cities' => City::orderBy('id', 'desc')->paginate(8),
            'categories' => Category::all(),
            'properties' => Property::all()
        ]);
    }
    
    
    public function show($state, $city_name)
    {
    	// get properties from property table where state and city name metches
    	$cityId = City::where([
    		'state' => $state,
    		'city_name' => $city_name
    	])->firstOrFail()->id;

    	$properties = Property::where('city_id', $cityId)->get();
    	

    	return view('listings.state.city', [
    		'properties' => $properties,
    		'state' => $state,
    		'city_name' => $city_name,
            'categories' => Category::all()
    	]);
    }

    public function showState($state) 
    {
    	$city = City::where('state', $state)->get();

    	if ( City::where('state', $state)->firstOrFail()->id !== "" && $city !== null ) {
    		$allProperties = [];
    		foreach ( $city as $city ) {
    			$properties =  Property::where('city_id', $city->id)->get();
    			foreach ( $properties as $property ) {
    				array_push($allProperties, $property);
    			}
    		}

    		$collection = \Illuminate\Support\Collection::class;
    		$collections = new $collection($allProperties);

	    	$cities = City::where('state', $state)->limit(40)->get();

    	}
    	return view('listings.state.index', [
    		'state' => $state,
    		'cities' => $cities,
    		'properties' => $collections,
            'categories' => Category::all()
    	]);
    }
}
