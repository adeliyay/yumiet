<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class ReController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = menu::all();
        return view('menu.re', compact('menus'));
    }
}