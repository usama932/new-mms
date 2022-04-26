<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function suggest_product(){
        $products = Product::with('user','images')->latest()->get();

        return view('customer.orders.suggest_product',compact('products'));
    }
    public function market_price(){
        return view('customer.orders.market_price');

    }
    public function purchase_history(){
        return view('customer.orders.purchase_history');
    }
    public function product_detail(Request $request, $id){
        $products = Product::where('id',$id)->with('user','images')->first();
        return view('customer.orders.product_detail',compact('products'));
    }
}
