<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = menu::all();
        return view('admin.menu', compact('menus'));
    }
}
