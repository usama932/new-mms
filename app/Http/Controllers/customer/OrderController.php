<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Session;
use Stripe;

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
    public function checkout(Request $request, $id){
        $products = Product::where('id',$id)->with('user','images')->first();
        return view('customer.orders.checkout',compact('products'));
    }
    public function stripe()
    {
        return view('customer.orders.payment');
    }
    public function order_store(Request $request){
        return view('customer.orders.payment');

    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose phpcodingstuff.com"
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
