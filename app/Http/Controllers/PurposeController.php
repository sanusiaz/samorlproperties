<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;

class PurposeController extends Controller
{
    public function show( $purpose_name ) 
    {
    	// get all properties via purpose i.e sale, rent e.t.c
    	$properties = Property::where('purpose', $purpose_name)->paginate(20);

    	return view('listings.purpose.index', [
    		'properties' => $properties,
    		'purpose' => $purpose_name,
    		'categories' => Category::all()
    	]);
    }
}
