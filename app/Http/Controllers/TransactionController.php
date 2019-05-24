<?php

namespace App\Http\Controllers;

use DB;
use App\Transaction;
use App\menu;
use App\order;
use App\package;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReController;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function StoreTransaction(Request $request){
        $user_id = Auth::user()->id;
        $order = order::all();
        $orders = DB::table('orders')
          ->where('user_id',$user_id)
          ->get();
        $order_id = $orders->pluck('id');
        $order_id = $order_id->first();
        $transaction = new transaction();
        $transaction->order_id=$order_id;
        $transaction->save();
        //dd($transaction->order_id);
        return view('history', compact('transaction'));
    }
}
