<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function link_account(){
        return view("customer.linkaccount");
    }
    public function consultant(){
        return view("customer.consultant");
    }
}
