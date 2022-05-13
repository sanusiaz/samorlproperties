<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
	public  function __construct()
	{
		// add guest middleware for admin
		$this->middleware(['adminGuestMiddleware']);
	}

    public function index() 
    {
    	return view('admin.login.index');
    }

    public function login(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'email|required',
    		'password' => 'required'
    	]);

    	if ( User::where(['email' => $request->email])->first() !== null ) {
    		// check if users password is correct
    		$hashedUsersPassword =  User::where('email', $request->email)->first()->password;
    		if ( Hash::check($request->password, $hashedUsersPassword) ) {
    			// attempt to log in users
    			auth()->attempt($request->only('email', 'password'));
    			return redirect()->route('admin_home');
    		}
    		else {
    			return back()->with('error', 'Wrong Details Entered');
    		}
    	}
    	else {
    		return back()->with('error', 'Wrong Details Entered');
    	}    	
    }

}
