<?php

namespace App\Http\Controllers;

use App\Traders;
use Illuminate\Http\Request;

class TradersController extends Controller
{
    public function traders()
    {
        $traders = Traders::all();
        return view('dashboard.traders', compact('traders'));
    }
    
}
