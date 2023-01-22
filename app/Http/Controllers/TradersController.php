<?php

namespace App\Http\Controllers;

use App\CopyTrader;
use App\Mail\AdminCopyTrader;
use App\Traders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TradersController extends Controller
{
    public function traders()
    {
        $traders = Traders::all();
        return view('dashboard.traders', compact('traders'));
    }

    public function copyTrader(Request $request)
    {
        if (auth()->user()->balance < 1){
            return redirect()->back()->with('declined', "You do not have sufficient balance for this operation");
        }
        $trader = new CopyTrader();
        $trader->trader_id = $request->trader_id;
        $trader->user_id = Auth::id();
        $trader->save();
        Mail::to('admin@tradesexecution.com')->send(new AdminCopyTrader($trader));
        return redirect()->back()->with('success', "Trader Copied Successfully");

    }

}
