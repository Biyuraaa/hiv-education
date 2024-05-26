<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Blog;
use App\Models\Comment;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $users = User::all();
            $blogs = Blog::all();
            $comments = Comment::all();
            $recentBlogs = Blog::latest()->take(5)->get();

            return view('dashboard.index', compact('users', 'blogs', 'comments', 'recentBlogs'));
        } else {
            return view('welcome');
        }
    }
}
