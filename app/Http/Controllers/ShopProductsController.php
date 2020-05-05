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

        $catalogItem = Catalog::where('id',$id)->first();
        $tempArray = array();

        if($catalogItem->parent_id !== 0){
            $products = Product::where('catalog_id',$id)->paginate(9);
        }else{
            $catalogItems = Catalog::where('parent_id',$id)->get();

            foreach ($catalogItems as $item){
                array_push($tempArray,$item->id);
            }

            $products = Product::whereIn('catalog_id', $tempArray)->paginate(9);
        }

        return view('shop', compact('products'));
    }

}


