<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ContactEvents;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contact.index', [
            'categories' => Category::all()
        ]);
    }

    public function send( Request $request ) {
    	$this->validate($request, [
    		'name' 		=> 'required|max:255',
    		'email'		=> 'required|email',
    		'message' 	=> 'required|max:255'
    	]);

    	$contactInfo = [
    		'email' => $request->email,
    		'name' => $request->name,
    		'message' => $request->message
    	];

        Mail::to("sanusiabdulazeezadebayo1@yahoo.com")->send(new ContactMail($contactInfo));

        return back()->with('success', 'Email Has Been Sent. We will Reply As Soon As Possible');
        
    }
}
