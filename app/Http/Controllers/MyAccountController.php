<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use Auth;
use App\BillingAddress;

class MyAccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function getIndex(){


        $allUserOrders = Orders::where('user_id', Auth::user()->id)->get();
        $billingAddress = BillingAddress::where('user_id', Auth::user()->id)->get();
        //dd($billingAddress);
        return view('my-account', compact('allUserOrders', 'billingAddress'));
    }
}
