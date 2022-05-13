<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Category;
use App\Models\Property;

class HomeController extends Controller
{
    public function index() 
    {
    	$categories         = Category::limit(4)->get();
    	$featuredProperty   = Property::where('views', '>', 5)->orderBy('views', 'asc')->limit(6)->get();
    	$latestProperty     = Property::where('views', '<', 5)->orderBy('id', 'desc')->limit(6)->get();

    	$cities = City::whereNotNull('state')->where('state', '<>', '')->get();
    	// loop through each cities to get proprties

    	$states             = [];
    	$citiesProperties   = [];
    	
    	foreach ( $cities as $city ) {
    	    if ( count($states) <= 9 ) {
	        	$city->state = ucfirst($city->state);
        		$city->state = trim(str_replace('State', '', $city->state));
        		if ( !in_array($city->state, $states) ) {
        			
                    // select only cities_name and state that has a property assign to it
        			if ( Property::where('town', $city->city_name)->first() !== null ) {
        			    $states[]                   = $city->state;
        			    $citiesProperties['city'][] = $city;
        			}
        		}
    	    }
    	
    	}
    	
    	return view('home.index', [
    		'categories'        => $categories,
    		'featuredProperty'  => $featuredProperty,
    		'latestProperty'    => $latestProperty,
    		'cities'            => $citiesProperties
    	]);
    }
}
