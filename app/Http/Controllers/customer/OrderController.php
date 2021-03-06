<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use DB;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Response;
use Session;
use Stripe;
use Validator,Redirect;
use App\Models\{Country,State,City};

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
        $orders = Order::where('user_id',auth()->user()->id)->latest()->get();

        return view('customer.orders.purchase_history',compact('orders'));
    }
    public function product_detail(Request $request, $id){
        $r_product = Product::latest()->take(4)->get();
        $products = Product::where('id',$id)->with('user','images')->first();
        return view('customer.orders.product_detail',compact('products','r_product'));
    }
    public function checkout(Request $request, $id){
        $countries = Country::where('name','united states')->get(["name","id"]);
        $products = Product::where('id',$id)->with('user','images')->first();
        return view('customer.orders.checkout',compact('products','countries'));
    }
    public function stripe()
    {
        return view('customer.orders.payment');
    }
    public function order_store(Request $request, $id)
    {
        $products = Product::where('id',$id)->with('user','images')->first();
        $r = str_replace("$", " ", $request->total);
        Order::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'phone' =>  $request->phone,
            'status' => 'Pending',
            'description' => $request->description,
            'total' => $r,
            'user_id' => auth()->user()->first_name.''.auth()->user()->last_name,
            'product_id' => $request->product_id
        ]);
        return view('customer.orders.payment',compact('products'));

    }

    public function stripePost(Request $request)
    {

        // $key = getenv('STRIPE_SECRET');
        // $stripe = new Stripe\Stripe($key);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => 100* 100,
                "currency" => "usd",
                "source" =>  $request->stripeToken,
                "description" => "This payment is tested purpose "
        ]);

        Session::flash('success', 'Payment successful!');

        return redirect()->route('purchase_history');
    }
    public function order_delete($id){

        $order = Order::where('id',$id)->first();
        $order->delete();
        return redirect()->route('purchase_history');

    }
    public function getDownload($image)
    {
        $link = base64_decode($image);

        $file = public_path($link);
        return Response::download($file);
    }

}

