<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Property;
use Illuminate\Support\Str;


class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    /**
     * Display a listing for admin properties
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {
        return view('admin.property.index', [
            'cities'        => City::all(),
            'categories'    => Category::all(), 
            'properties'    => Property::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property.create', [
            'cities'        => City::all(),
            'categories'    => Category::all(), 
            'properties'    => Property::orderBy('id', 'desc')->get()
        ]);
    }

    public function show( Property $property ) 
    {
        $relatedProperty = Property::RelatedAds(1);

        $totalViews = $property->views;

        // update no of view by incrementing it by 1
        $property->update([
            'views' => $totalViews + 1
        ]);

        return view('listings.property.index', [
            'property' => $property,
            'relatedProperty' => $relatedProperty,
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|max:255|min:3',
            'price'         => 'required|integer',
            'category'      => 'required',
            'city'          => 'required',
            'country'       => 'required',
            'type'          => 'required',
            'purpose'       => 'required',
            'description'   => 'required',
            'plan'          => 'required',
            'file'          => 'required',
            'state'         => 'required|max:50',
            'town'          => 'required|max:100',
            'phone'         => 'required|max:11|min:4',
            'location'      => 'required|max:255',
            'email'         => 'email|required|max:255'
        ]);

        $uploadedFileDetails = [];
        // loop through all files that has been uploaded
        foreach ( $request->file('file') as $file ) {
            
            $fileName = Str::random(10) . uniqid('', true);
            
            if ( $file !== null ) {
                $imageType = explode('/', $file->getMimeType())[0];
                $fileType = strtolower(explode('/', $file->getMimeType())[1]);
    
                // check if file is an image
                if ( $imageType === 'image' ) {
    
                    // check if an error occurred in uploading file
                    if ( $file->getError() < 1 ) {
    
                        // check if file size is valid
                        if ( $file->getSize() < ( 1024 * 1000 * 10 ) ) {
                            // check if file name exists in database
                            if (  Property::where('file_name', $fileName)->first() !== null && 
                                (Property::where('file_name', $fileName)->first()->file_name === $fileName ) ) {
                                $fileName = Str::random(10) . uniqid('', true);
                            }
                        
                            if ( $file->storeAs('public/uploads/property/images/', $fileName.'.'.$fileType) ) {
                                // file has been uploaded successfully
                                array_push($uploadedFileDetails,  [
                                    'fullFileName'  => $fileName.'.'.$fileType
                                ]);

                            }
                            else {
                                return back()->with('error', 'Internal Error Occurred In Uploading Pics');
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
        
        // insert all records into database
        if ( count($uploadedFileDetails) === count($request->file('file')) ) {
            // images has been verified now we insert all records into database
            Property::create([
                'name'          => $request->name,
                'description'   => $request->description,
                'type'          => $request->type,
                'price'         => $request->price,
                'plan'          => $request->plan,
                'category_id'   => $request->category,
                'city_id'       => $request->city,
                'purpose'       => $request->purpose,
                'file_name'     => ( count($request->file('file')) > 1  ) ? serialize($uploadedFileDetails) : $uploadedFileDetails[0]['fullFileName'] ,
                'views'         => 0,
                'phone'         => $request->phone,
                'location'      => $request->location,
                'email'         => $request->email,
                'size'          => $request->size,
                'town'          => $request->town,
                'state'         => $request->state
            ]);
    
            return back()->with('success', 'Property Has Been Created Successfully');
        }
        else {
            return back()->with('error', 'Cannot Insert Images Into Database, Please Check All Images');
        }
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('admin.property.edit', [
            'property'      => $property,
            'categories'    => Category::all(), 
            'cities'        => City::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $this->validate($request, [
            'name'          => 'required|max:255|min:3',
            'price'         => 'required|integer',
            'category'      => 'required',
            'city'          => 'required',
            'country'       => 'required',
            'type'          => 'required',
            'purpose'       => 'required',
            'description'   => 'required',
            'plan'          => 'required',
            'state'         => 'required|max:50',
            'town'          => 'required|max:100',
            'phone'         => 'required|max:11|min:4',
            'location'      => 'required|max:255',
            'email'         => 'email|required|max:255'
        ]);

        $update =  $property->update([
            'name'          => $request->name,
            'description'   => $request->description,
            'type'          => $request->type,
            'price'         => $request->price,
            'plan'          => $request->plan,
            'category_id'   => $request->category,
            'city_id'       => $request->city,
            'purpose'       => $request->purpose,
            'phone'         => $request->phone,
            'location'      => $request->location,
            'email'         => $request->email,
            'size'          => $request->size,
            'town'          => $request->town,
            'state'         => $request->state
        ]);

        if ( $update ) {
            return back()->with('success', 'Propeties Has Been Updated Successfully');
        }
        else {
            return back()->with('error', 'An Error Occurred In Updating Propeties');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->destroy($property->id);
        return redirect(route('admin.properties'))->with('success', "Properties Has Been Deleted Successfully");
    }
}
