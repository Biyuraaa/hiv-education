<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function penyebab()
    {
        return view('penyebab');
    }
    public function gejala()
    {
        return view('gejala');
    }
    public function pencegahan()
    {
        return view('pencegahan');
    }
}
