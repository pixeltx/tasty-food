<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        // Fetch all galleries
        $galleries = Gallery::latest()->get(); // Fetch the latest galleries

        $carousel = Gallery::latest()->take(5)->get(); // Fetch the latest 5 galleries for the carousel

        return view('gallery', compact('galleries', 'carousel'));
    }
}
