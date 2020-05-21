<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use Illuminate\Support\Facades\DB;
use function foo\func;

class ShopProductsController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

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

        /*Сортировка по ценовому диапазону*/
        $sliderRange = '';
        if(isset($_COOKIE['sliderRange'])){
            $sliderRange = json_decode($_COOKIE['sliderRange']);
        }else{
            $tempArray = array('from' => 0, 'to' => 700);
            $sliderRange = json_encode($tempArray);
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
        /*$products = Product::all();
        */

        /*$products = Product::where('catalog_id',$id)
            ->orderBy($orderByNameValue, $orderByDirectionValue)
            ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
            ->paginate($recInPage);

        foreach ($input as $key => $value) {
            $i++;
            // ->where('field_1', red_1); // Desired output
            $listing->where("where(field_{$i},".$value."_1)");
        }

        dd($products);*/

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
                    $orderByNameValue = 'newprice';
                    $orderByDirectionValue = 'asc';
                    break;
                case "High->Low":
                    $orderByNameValue = 'newprice';
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
            /*$products = Product::where('catalog_id',$id)
                        ->orderBy($orderByNameValue, $orderByDirectionValue)
                        ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
                        ->paginate($recInPage);*/
            $products = DB::table('deal_of_the_days')->select('*')
                ->rightJoin('products', 'deal_of_the_days.product_id', '=', 'products.id')
                ->where('catalog_id',$id)
                ->addSelect(DB::raw('if(discount is not null  and (finaldate>NOW()), ROUND((price / (1 + (discount / 100))),2), ROUND(price,2)) as newprice'))
                ->where(DB::raw('if(discount is not null  and (finaldate>NOW()), ROUND((price / (1 + (discount / 100))),2), ROUND(price,2))'), '>', $sliderRange->from)
                ->where(DB::raw('if(discount is not null  and (finaldate>NOW()), ROUND((price / (1 + (discount / 100))),2), ROUND(price,2))'), '<', $sliderRange->to)
                ->orderBy($orderByNameValue, $orderByDirectionValue)->paginate($recInPage);
        }else{
            $catalogItems = Catalog::where('parent_id',$id)->get();

            foreach ($catalogItems as $item){
                array_push($tempArray,$item->id);
            }

            /*$products = Product::whereIn('catalog_id', $tempArray)
                        ->orderBy($orderByNameValue, $orderByDirectionValue)
                        ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
                        ->paginate($recInPage);*/

            $products = DB::table('deal_of_the_days')->select('*')
                ->rightJoin('products', 'deal_of_the_days.product_id', '=', 'products.id')
                ->whereIn('catalog_id', $tempArray)
                ->addSelect(DB::raw('if(discount is not null  and (finaldate>NOW()), ROUND((price / (1 + (discount / 100))),2), ROUND(price,2)) as newprice'))
                ->where(DB::raw('if(discount is not null  and (finaldate>NOW()), ROUND((price / (1 + (discount / 100))),2), ROUND(price,2))'), '>', $sliderRange->from)
                ->where(DB::raw('if(discount is not null  and (finaldate>NOW()), ROUND((price / (1 + (discount / 100))),2), ROUND(price,2))'), '<', $sliderRange->to)
                ->orderBy($orderByNameValue, $orderByDirectionValue)->paginate($recInPage);

        }

        $products = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($products);
        //dd($products);
        return view('shop', compact('products'));
    }

}


