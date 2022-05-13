<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use App\Models\City;

class SitemapController extends Controller
{
    
    public function index() {
        return response()
            ->view('sitemap.index', [
                'Categories' => Category::all(),
                'Properties' => Property::all(),
                'Cities' => City::all()
            ])
            ->header('Content-Type', 'text/xml');
    }
}
