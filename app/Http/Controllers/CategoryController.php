<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    public function show($category_name)
    {
    	$category = Category::where('name', $category_name)->first();

    	$properties = Property::where('category_id', $category->id)->paginate(20);
    	$properties = ( $category !== null && $properties !== null ) ? $properties : null ;
        // dd($properties);
    	return view('listings.category.index', [
    		'category' => $category,
    		'properties' => $properties,
            'categories' => Category::all()
    	]);
    }
}
