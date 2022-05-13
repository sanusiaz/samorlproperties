<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function index()
    {
    	$allCategories = Category::all();

    	return view("admin.category.index", [
    		'categories' => $allCategories
    	]);
    }

    public function create()
    {
    	return view("admin.category.create");
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|max:20|min:3',
            'description' => 'required|max:255'
    	]);

    	// check if category exists
    	if ( Category::where(['name' => $request->name])->first() === null ) {
    		Category::create([
    			'name' => $request->name,
                'description' => $request->description
    		]);

    		return redirect(route('admin_category'))->with('success', 'Category Has Been Created Successfully');
    	}
    	else {
    		// category exists
    		return back()->with('error', 'Category Name Exists. Please a Unique Name');
    	}
    }

    public function edit(Category $category)
    {
    	return view('admin.category.edit', [
    		'category' => $category,
    	]);
    }

    public function update( Category $category, Request $request )
    {
    	$this->validate($request, [
    		'name' => 'required|max:20|min:3',
            'description' => 'required|max:255'
    	]);

    	Category::where("id", $category->id)->update([
    		'name' => $request->name,
            'description' => $request->description
    	]);
    	return back()->with('success', 'Category Has Been Updated Successfully');

    }

    public function destroy(Category $category) 
    {
    	$category->destroy($category->id);
    	return redirect(route('admin_category'))->with('success', 'Category Has Been Deleted Successfully');

    }
}
