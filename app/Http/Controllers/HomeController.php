<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Role_user;
use App\Models\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){

        $news = News::latest()->get();
        $total_sales = Order::pluck('total')->sum();
        $total_order = Order::count();
        $total_customer = Role_user::where('role_id',3)->count();
        $total_staff = Role_user::where('role_id',2)->count();
        $queries = Query::latest()->take(5)->get();

        $avg_total = Order::pluck('total')->avg();

        $products = Product::with('user','images')->latest()->take(4)->get();

        if(Auth::user()->hasrole('staff')){
            return view('staff.dashboard');
        }
        elseif(Auth::user()->hasrole('customer')){
            $total_order = Order::where('user_id',Auth::user()->id)->count();
            $last_order = Order::where('user_id',Auth::user()->id)->first();
            $total_investment = Order::where('user_id',Auth::user()->id)->pluck('total')->count();
            return view('customer.dashboard',compact('news','products','total_order','last_order','total_investment'));
        }
        elseif(Auth::user()->hasrole('admin')){

            return view('admin.dashboard',compact('total_sales','avg_total','total_order','total_customer','total_staff','products','queries'));
        }
    }
    public function login(){
        return view('auth.login');
    }
    
}
