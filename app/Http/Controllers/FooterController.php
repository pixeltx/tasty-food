<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Setting;

class FooterController extends Controller
{
    public function index()
    {
        $location = Location::first();
        $settings = Setting::all()->pluck('value', 'key');
        
        return view('home', compact('location', 'settings'));
    }
}
