<?php

namespace App\Http\Controllers;

use App\order;
use App\User;
use App\Menu;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReController;
use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function ordered(Request $request){
        $this->validate($request, [
            'goals' => 'required',
            'time' => 'required',
            'start' => 'required',
            'days' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $order = new order();
        $order->user_id=Auth::id();
        $order->goals = $request->goals;
        $order->time = $request->time;
        $order->start = $request->start;
        $order->days = $request->days;
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
    public function admin (){
        $orders = order::with('user')->paginate();;
        return view('admin.order.index', compact('orders'));
    }
}
