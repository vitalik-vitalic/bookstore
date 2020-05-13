<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use function foo\func;

class ShopProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $orderByNameValue = '';
        $orderByDirectionValue = '';

        if(isset($_COOKIE['sortSelect'])){
            switch ($_COOKIE['sortSelect']){
                case "A-Z":
                    $orderByNameValue = 'name';
                    $orderByDirectionValue = 'asc';
                    break;
                case "Z-A":
                    $orderByNameValue = 'name';
                    $orderByDirectionValue = 'desc';
                    break;
                case "Low->High":
                    $orderByNameValue = 'price';
                    $orderByDirectionValue = 'asc';
                    break;
                case "High->Low":
                    $orderByNameValue = 'price';
                    $orderByDirectionValue = 'desc';
                    break;
                case "HighestRating":
                    $orderByNameValue = 'rating';
                    $orderByDirectionValue = 'desc';
                    break;
                case "LowestRating":
                    $orderByNameValue = 'rating';
                    $orderByDirectionValue = 'asc';
                    break;
                default:
                    $orderByNameValue = 'name';
                    $orderByDirectionValue = 'asc';
            }

        }else{
            $orderByNameValue = 'name';
            $orderByDirectionValue = 'asc';
        }


        if($isCatalogWithoutSubfolders){
            $products = Product::where('catalog_id',$id)->orderBy($orderByNameValue, $orderByDirectionValue)->paginate($recInPage);
        }else{
            $catalogItems = Catalog::where('parent_id',$id)->get();

            foreach ($catalogItems as $item){
                array_push($tempArray,$item->id);
            }

            $products = Product::whereIn('catalog_id', $tempArray)->orderBy($orderByNameValue, $orderByDirectionValue)->paginate($recInPage);
        }

        return view('shop', compact('products'));
    }

}


