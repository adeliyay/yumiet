<?php

namespace App\Http\Controllers;

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
    public function chooseorder(Request $request){
        $this->validate($request, [
            'package' => 'required'
        ]);
        $transaction = new Transaction();
        $transaction->order_id = $request->orderId;
        $transaction->package = $request->package;
    	$transaction->save();
    	return view('konfirmasi');
	}
}
