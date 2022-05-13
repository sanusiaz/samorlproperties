<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function edit()
    {
    	$usersProfile = User::where('email', auth()->user()->email)->first();
    	return view('admin.settings.edit', [
    		'user' => $usersProfile
    	]);
    }

    public function update(Request $request, $userId)
    {
    	$this->validate($request, [
    		'name' => 'required|max:255',
    		'email' => 'email|required',
    		'old_password' => '',
    		'new_password' => ''
    	]);
    	$user = User::where('id', $userId)->first();

    	if ( $request->old_password !== null && $request->new_password !== null ) {
	    	// check if users old-password matches 
	    	if ( Hash::check($request->old_password, $user->password) ) {
	    		// update users profile
	    		$user->update([
	    			'name' => $request->name,
	    			'password' => Hash::make($request->new_password)
	    		]);
	    		return back()->with('success', 'Profile Has Been Updated Successfully');
	    	}
	    	else {
	    		return back()->with('error', 'Password Does Not Match');
	    	}
    	}
    	else {
    		// update only the username / name
    		$user->update([
    			'name' => $request->name
    		]);
	    	return back()->with('success', 'Name Has Been Changed Succesfully');
    	}

    }
}
