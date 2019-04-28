<?php

namespace App\Http\Controllers;

use App\order;
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
        return view('menu.re');
    }
}