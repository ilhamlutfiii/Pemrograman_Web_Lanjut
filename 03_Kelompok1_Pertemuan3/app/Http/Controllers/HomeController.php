<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
    s

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }

    public function product()
    {
        return view('product');
    }
    
    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
}