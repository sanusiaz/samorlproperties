<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Str;

class AdminCitiesController extends Controller
{
    public function index()
    {
    	$allCity = City::where('state', '<>', '')->orderBy('city_name', 'asc')->paginate(8);
    	return view('admin.city.index', [
    		'cities' => $allCity
    	]);
    }

    public function create()
    {
    	return view('admin.city.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|max:255|min:2',
    		'file' => 'required',
    		'country' => 'required|max:255|min:2',
            'state' => 'required'
    	]);

    	$fileName = Str::random(10) . uniqid('', true);

    	if ( $request->file !== null ) {
    		$imageType = explode('/', $request->file('file')->getMimeType())[0];
    		$fileType = strtolower(explode('/', $request->file('file')->getMimeType())[1]);

    		// check if file is an image
    		if ( $imageType === 'image' ) {

    			// check if an error occurred in uploading file
    			if ( $request->file('file')->getError() < 1 ) {

    				// check if file size is valid
    				if ( $request->file('file')->getSize() < ( 1024 * 1000 * 10 ) ) {
    					// check if file name exists in database
    					if (  City::where('file_name', $fileName)->first() !== null && 
    						(City::where('file_name', $fileName)->first()->file_name === $fileName ) ) {
    						$fileName = Str::random(10) . uniqid('', true);
    					}

                        if ( City::where([
                                'state' => $request->state,
                                'city_name' =>$request->name 
                            ])->first() === null ) {

                            $request->state = ucfirst($request->state);
                            $request->city_name = ucfirst($request->city_name);

                            $request->state = str_replace('State', '', $request->state);;
                            $request->city_name = str_replace('City', '', $request->city_name);;

        					if ( $request->file('file')->storeAs('public/uploads/cities/images/', $fileName.'.'.$fileType) ) {
        						// file has been uploaded successfully
        						City::create([
        							'city_name' => $request->name,
        							'country' => $request->country,
                                    'state' => $request->state,
        							'file_name' => $fileName . '.'.$fileType
        						]);

        						return back()->with('success', 'City Has Been Created Successfully');
        					}
        					else {
        						return back()->with('error', 'Internal Error Occurred In Uploading Pics');
        					}
                        }
                        else {
                            return back()->with('error', 'State Ads Exists');
                        }

    				}
    				else {
    					return back()->with('error', 'File Must Not Be More Than 10mb');
    				}
    			}
    			else {
    				return back()->with('error', 'An Error Occurred In Uploading File... Please Try Again Later');
    			}
    		}
    		else {
    			return back()->with('error', 'File Must Be An Image');
    		}
    	}
    	else {
    		return back()->with('error', 'Please Select A File');
    	}
    }

}
