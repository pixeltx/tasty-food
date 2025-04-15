<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the newest 5 blogs
        $blogs = Blog::latest()->take(5)->get();
        
        // Fetch all Galleries
        $galleries = Gallery::all();

        return view('index', compact('blogs', 'galleries'));
    }
}
