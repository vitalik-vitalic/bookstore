<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use function foo\func;

class ShopProductsController extends Controller
{
    //
    public function index($id = null)
    {

        /*количество записей на странице*/
        $recInPage = 0;
        if(isset($_COOKIE['rec_in_page'])){
            $recInPage = (int)$_COOKIE['rec_in_page'];
        }else{
            $recInPage = 9;
        }

        $catalogItem = Catalog::where('id',$id)->first();
        $tempArray = array();

        if($catalogItem->parent_id !== 0){
            $products = Product::where('catalog_id',$id)->paginate($recInPage);
        }else{
            $catalogItems = Catalog::where('parent_id',$id)->get();

            foreach ($catalogItems as $item){
                array_push($tempArray,$item->id);
            }

            $products = Product::whereIn('catalog_id', $tempArray)->paginate($recInPage);
        }

        return view('shop', compact('products'));
    }

}


