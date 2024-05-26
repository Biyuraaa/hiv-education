<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function penyebab()
    {
        return view('pages.penyebab');
    }
    public function gejala()
    {
        return view('pages.gejala');
    }
    public function pencegahan()
    {
        return view('pages.pencegahan');
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('pages.blogs.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('pages.blogs.show', compact('blog'));
    }
}
