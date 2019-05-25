<?php

namespace App\Http\Controllers;

use DB;
use App\Transaction;
use App\menu;
use App\order;
use App\package;
use App\User;
use Carbon\Carbon;
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
        $order_id = $order_id->last();
        $transaction = new transaction();
        $transaction->order_id=$order_id;
        $transaction->save();
        //dd($transaction->order_id);
        return redirect('history/'.$user_id);
    }
    public function history($user_id)
    {
        $user_id = Auth::user()->id;  
        $order = order::all();
        $orders = DB::table('orders')
          ->where('user_id',$user_id)
          ->get();
        $unverified = DB::table('transactions')
          -> join('orders', 'orders.id','=','transactions.order_id' )
          -> where('is_verified','0')
          -> select('transactions.id','transactions.payment', 'orders.goals', 'orders.time', 'orders.days', 'orders.package','orders.start')
          -> get();
   
        $progress = DB::table('transactions')
          -> join('orders', 'transactions.order_id', '=', 'orders.id')
          -> where('is_verified','1')
          -> where('status','0')
          -> get();
        $finish = DB::table('transactions')
          -> join('orders', 'transactions.order_id', '=', 'orders.id')
          -> where('is_verified','1')
          -> where('status','1')
          -> get();
        //   $now = Carbon::now()->format('d/m/20y');
        //   $now2 = Carbon::now()->format('d');
        //   $now3 = $now2+5;
          
        // if($now3 == "25/05/2019"){$test=1;}
      return view('history', compact('unverified','progress','finish'));
    }
    public function transactionEdit($transaction_id)
    {      
        $transaction = DB::table('transactions')
          ->where('id',$transaction_id)
          ->pluck('id');
        $order = DB::table('orders')
          ->where('id',$transaction)
          ->get();
      return view('historydetail',compact('user','transaction', 'order'));
    }
    public function paymentStore(Request $request, $transaction_id)
    {
        $user_id = Auth::user()->id;
        $this->validate($request,[
            'payment' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $payment = $request->file('payment');
        $slug = str_slug($request->name);
        $transaction =Transaction::find($transaction_id);
        if(isset($payment))
        {
            $currentDate = Carbon::now()->toDateString();
            $paymentname = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $payment->getClientOriginalExtension();
            if(!file_exists('uploads/menu'))
            {
                mkdir('uploads/menu', 0777 , true);
            }
            $payment->move('uploads/menu',$paymentname);
        }else {
            $paymentname = 'default.png';
        }
        $transaction->payment = $paymentname;
        $transaction->save();
        return redirect('history/'.$user_id);
    }
    public function Received($id)
    {
        $transaction = Transaction::find($id);
        $transaction->status = "1";
        $transaction->save();
        return redirect()->back();
    }
}
