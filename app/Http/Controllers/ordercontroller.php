<?php

namespace App\Http\Controllers;

use App\order;
use App\User;
use App\Menu;
use App\Http\Controllers\Auth;
use App\Http\Controllers\ReController;
use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function ordered(Request $request){
        $this->validate($request, [
            'goals' => 'required',
            'time' => 'required',
            'start' => 'required',
            'end' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $order = new order();
        $order->goals = $request->goals;
        $order->time = $request->time;
        $order->start = $request->start;
        $order->end = $request->end;
        $order->gender = $request->gender;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->save();
        if($order->goals=="Regular"){
            $menus = menu::all();
            return view('menu.re', compact('menus'));
        }
        elseif($order->goals=="Weight Loss"){
            $menus = menu::all();
            return view('menu.wl', compact('menus'));
        }
        elseif($order->goals=="Muscle Building"){
            $menus = menu::all();
            return view('menu.mb', compact('menus'));
        }
        elseif($order->goals=="Special Needs"){
            $menus = menu::all();
            return view('menu.sn', compact('menus'));
        }
    }
}
