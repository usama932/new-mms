<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\Product;

class HomeController extends Controller
{

    public function index(){

        $news = News::latest()->get();
        $products = Product::with('user')->get();

        if(Auth::user()->hasrole('staff')){
            return view('staff.dashboard');
        }
        elseif(Auth::user()->hasrole('customer')){

            return view('customer.dashboard',compact('news','products'));
        }
        elseif(Auth::user()->hasrole('admin')){
            return view('admin.dashboard');
        }
    }
    public function login(){
        return view('auth.login');
    }
}
