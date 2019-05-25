<?php

namespace App\Http\Controllers;

use App\review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reviews = review::all();
        return view('home',compact('reviews'));
    }
    public function home()
    {
        return view('home');
    }
    
}
