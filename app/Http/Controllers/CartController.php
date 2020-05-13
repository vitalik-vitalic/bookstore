<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
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

        $arr_obj = \App::make('App\Libs\Cook')->cook_arr();
        $val = \App::make('App\Libs\Cook')->cook_value();
        $name = (isset(Auth::user()->name)) ? Auth::user()->name : '';
        $email = (isset(Auth::user()->email)) ? Auth::user()->email : '';
        return view('cart', compact('arr_obj', 'val', 'name', 'email'));
    }

    public function getDelete($id = null)
    {
        \App::make('App\Libs\Cook')->getDelete($id);
        return back();
    }

}
