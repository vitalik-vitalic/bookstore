<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;
use Auth;
use App\User;

class ProductDetailsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    //
    public function getIndex($id = null){

        $productDetail = Product::where('id',$id)->first();
        $productDetail = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($productDetail);

        $relatedProducts = Product::where('catalog_id',$productDetail->catalog_id)->whereNotIn('id', [$id])->take(7)->get();
        $relatedProducts = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($relatedProducts);

        $productReviews = Review::where('product_id',$id)->get();

        $allUsers = User::select('id','avatar')->get();

        return view('product-details', compact('productDetail','relatedProducts', 'productReviews', 'allUsers'));
    }

    public function postReview($id = null){

        $userId = 0;
        if(isset(Auth::user()->id) && (Auth::user()->id != null)){
            $userId = Auth::user()->id;
        }

        $feedback = Review::create([
            'user_id' => $userId,
            'product_id' => $id,
            'message' => $_POST['message'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'website' => $_POST['website'],
            'rating' => $_POST['rating'],
        ]);

        $feedback->save();

        unset($_POST['X-CSRF-TOKEN']);

        return response()->json('Ok');
    }
}
