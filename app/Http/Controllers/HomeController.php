<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){

        if(Auth::user()->hasrole('staff')){
            return view('staff.dashboard');
        }
        elseif(Auth::user()->hasrole('customer')){
            return view('customer.dashboard');
        }
        elseif(Auth::user()->hasrole('admin')){
            return view('admin.dashboard');
        }
    }
}
