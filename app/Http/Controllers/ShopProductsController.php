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
        $catalogAll = Catalog::all();

        $isCatalogWithoutSubfolders = true;
        foreach($catalogAll as $item){
            if($catalogItem->id == $item->parent_id){
                $isCatalogWithoutSubfolders = false;
            }
        }

        $tempArray = array();

        if($isCatalogWithoutSubfolders){
            $products = Product::where('catalog_id',$id)->paginate($recInPage);
        }else{
            $catalogItems = Catalog::where('parent_id',$id)->get();

            foreach ($catalogItems as $item){
                array_push($tempArray,$item->id);
            }

            $products = Product::whereIn('catalog_id', $tempArray)->paginate($recInPage);
            //dd($products);
        }

        return view('shop', compact('products'));
    }

}


