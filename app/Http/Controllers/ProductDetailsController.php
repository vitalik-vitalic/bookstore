<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductDetailsController extends Controller
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
    public function getIndex($id = null){

        $productDetail = Product::where('id',$id)->first();

        return view('product-details', compact('productDetail'));
    }
}
