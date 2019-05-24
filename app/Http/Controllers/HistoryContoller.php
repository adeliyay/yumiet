<?php

namespace App\Http\Controllers;

use DB;
use App\Transaction;
use App\History;
use App\menu;
use App\order;
use App\package;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReController;
use Illuminate\Http\Request;

class HistoryContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function transactionEdit($user_id,$transaction_id)
    {
        $user = Order::where('user_id', $user_id)->get();        
      $transaction = Transaction::where('id', $transaction_id)->get();
      dd($transaction);
      return view('historydetail',compact('user','transaction'));
    }
    public function paymentStore(Request $request, $id)
    {
        $this->validate($request,[
            'payment' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $payment = $request->file('payment');
        $slug = str_slug($request->name);
        $transaction =Transaction::find($id);
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
        return redirect()->route('history.index');
    }

    public function history($user_id)
    {
        $user_id = Auth::user()->id;  
      return view('history', compact('user_id','transaction_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
