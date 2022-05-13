<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;

class TypeController extends Controller
{
    public function show($type_name)
    {
        $categories = Category::all();
    	
    	$propertiesOnType = Property::where('type', $type_name)->paginate(20);

		return view('listings.type.index', [
			'properties' => $propertiesOnType,
            'categories' => $categories,
			'type' => $type_name
		]);

    	if ( $propertiesOnType->count() > 0 ) {
    		// properties exists in property table with matching type name
    		
    	}
    	else {
    		// return 414
    		dd('No Cars Properties Found In Database');
    	}
    }
}
