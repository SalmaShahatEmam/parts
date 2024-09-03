<?php

namespace App\Http\Controllers\Site;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('site.blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $other_blogs = Blog::where('slug', '!=', $slug)->take(3)->get();
        return view('site.blogs.show', compact('blog', 'other_blogs'));
    }
}
