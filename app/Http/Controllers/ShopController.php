<?php

namespace App\Http\Controllers;

use App\DealOfTheDay;
use App\Http\Requests\SearchRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ShopController extends Controller
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
    public function getIndex(){

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

        /*$products = DB::table('deal_of_the_days')->select('*')
            ->rightJoin('products', 'deal_of_the_days.product_id', '=', 'products.id')
            ->addSelect(DB::raw('(products.price / (1 + (deal_of_the_days.discount / 100))) as newprice'))
            ->whereRaw("(products.price / (1 + (deal_of_the_days.discount / 100)))>$sliderRange->from")
            ->whereRaw("(products.price / (1 + (deal_of_the_days.discount / 100)))<$sliderRange->to")
            ->orderBy('name', 'asc')->paginate($recInPage);*//*
            ->where('(newprice - price)', '>=', 1)*/
            /*->whereBetween('newprice', [$sliderRange->from, $sliderRange->to])*/;/*
            ->selectRaw('(price + discount) as newprice')
            ->orderBy('name', 'asc')->paginate($recInPage);;*/

        /*if(isset($_COOKIE['sortSelect'])){
            switch ($_COOKIE['sortSelect']){
                case "A-Z":
                    $products = DB::table('products')
                                ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
                                ->orderBy('name', 'asc')->paginate($recInPage);
                    break;
                case "Z-A":
                    $products = DB::table('products')
                                ->orderBy('name', 'desc')
                                ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
                                ->paginate($recInPage);
                    break;
                case "Low->High":
                    $products = DB::table('products')
                                ->orderBy('price', 'asc')
                                ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
                                ->paginate($recInPage);
                    break;
                case "High->Low":
                    $products = DB::table('products')
                                ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
                                ->orderBy('price', 'desc')->paginate($recInPage);
                    break;
                case "HighestRating":
                    $products = DB::table('products')
                                ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
                                ->orderBy('rating', 'desc')->paginate($recInPage);
                    break;
                case "LowestRating":
                    $products = DB::table('products')
                                ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
                                ->orderBy('rating', 'asc')->paginate($recInPage);
                    break;
                default:
                    $products = DB::table('products')
                                ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
                                ->paginate($recInPage);
            }

        }else{
            $products = DB::table('products')
                        ->whereBetween('price', [$sliderRange->from, $sliderRange->to])
                        ->paginate($recInPage);
        }*/

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

        $products = DB::table('deal_of_the_days')->select('*')
            ->rightJoin('products', 'deal_of_the_days.product_id', '=', 'products.id')
            ->addSelect(DB::raw('if(discount is not null  and (finaldate>NOW()), ROUND((price / (1 + (discount / 100))),2), ROUND(price,2)) as newprice'))
            ->where(DB::raw('if(discount is not null  and (finaldate>NOW()), ROUND((price / (1 + (discount / 100))),2), ROUND(price,2))'), '>', $sliderRange->from)
            ->where(DB::raw('if(discount is not null  and (finaldate>NOW()), ROUND((price / (1 + (discount / 100))),2), ROUND(price,2))'), '<', $sliderRange->to)
            ->orderBy($orderByNameValue, $orderByDirectionValue)->paginate($recInPage);

        $products = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($products);

        return view('shop', compact('products', 'recInPage'));
    }

    public function searchIndex(){

        /*количество записей на странице*/
        $recInPage = 0;
        if(isset($_COOKIE['rec_in_page'])){
            $recInPage = (int)$_COOKIE['rec_in_page'];
        }else{
            $recInPage = 9;
        }

        if((isset($_GET['searchValue'])) && ($_GET['searchValue'] != null)){
            $products = DB::table('products')->where('name','LIKE','%'.$_GET['searchValue'].'%')->paginate($recInPage);
        }else{
            $products = DB::table('products')->paginate($recInPage);
        }

        return view('shop', compact('products', 'recInPage'));
    }

    public function searchAuthorIndex($authorFullName = null){

        /*количество записей на странице*/
        $recInPage = 0;
        if(isset($_COOKIE['rec_in_page'])){
            $recInPage = (int)$_COOKIE['rec_in_page'];
        }else{
            $recInPage = 9;
        }

        if((isset($authorFullName)) && ($authorFullName != null)){
            $products = DB::table('products')->where('author','LIKE','%'.$authorFullName.'%')->paginate($recInPage);
        }else{
            $products = DB::table('products')->paginate($recInPage);
        }

        return view('shop', compact('products', 'recInPage'));
    }

    public function searchPublisherIndex($publisherName = null){

        /*количество записей на странице*/
        $recInPage = 0;
        if(isset($_COOKIE['rec_in_page'])){
            $recInPage = (int)$_COOKIE['rec_in_page'];
        }else{
            $recInPage = 9;
        }

        if((isset($publisherName)) && ($publisherName != null)){
            $products = DB::table('products')->where('publisher','LIKE','%'.$publisherName.'%')->paginate($recInPage);
        }else{
            $products = DB::table('products')->paginate($recInPage);
        }

        return view('shop', compact('products', 'recInPage'));

    }
}
