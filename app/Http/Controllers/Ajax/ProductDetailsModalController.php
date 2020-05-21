<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Product;
use App\Review;
use App\User;
use Illuminate\Http\Request;

class ProductDetailsModalController extends Controller
{
    public function getIndex($id = null){

        $productDetail = Product::where('id',$_POST['id'])->first();
        $productReviews = Review::where('product_id',$_POST['id'])->get();
        /*$relatedProducts = Product::where('catalog_id',$productDetail->catalog_id)->whereNotIn('id', [$id])->take(7)->get();

        $productReviews = Review::where('product_id',$id)->get();

        $allUsers = User::all();*/

        $productDetail = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($productDetail);

        return view('ajax.product-detail-modal', compact('productDetail', 'productReviews'));
        /*return view('product-details', compact('productDetail','relatedProducts', 'productReviews', 'allUsers'));*/
    }
}
