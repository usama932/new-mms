<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function trade()
    {
        return view('customer.trade');
    }
    public function fund_wallet()
    {
        return view('customer.fund_wallet');
    }
}
