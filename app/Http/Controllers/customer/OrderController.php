<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function suggest_product(){
        $products = Product::latest()->get();

        return view('customer.orders.suggest_product',compact('products'));
    }
    public function market_price(){
        return view('customer.orders.market_price');

    }
    public function purchase_history(){
        return view('customer.orders.purchase_history');
    }
}
