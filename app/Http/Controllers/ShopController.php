<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
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

        /*количество записей на странице*/
        $recInPage = 0;
        if(isset($_COOKIE['rec_in_page'])){
            $recInPage = (int)$_COOKIE['rec_in_page'];
        }else{
            $recInPage = 9;
        }

        $products = '';

        if(isset($_COOKIE['sortSelect'])){
            switch ($_COOKIE['sortSelect']){
                case "A-Z":
                    $products = DB::table('products')->orderBy('name', 'asc')->paginate($recInPage);
                    break;
                case "Z-A":
                    $products = DB::table('products')->orderBy('name', 'desc')->paginate($recInPage);
                    break;
                case "Low->High":
                    $products = DB::table('products')->orderBy('price', 'asc')->paginate($recInPage);
                    break;
                case "High->Low":
                    $products = DB::table('products')->orderBy('price', 'desc')->paginate($recInPage);
                    break;
                case "HighestRating":
                    $products = DB::table('products')->orderBy('rating', 'desc')->paginate($recInPage);
                    break;
                case "LowestRating":
                    $products = DB::table('products')->orderBy('rating', 'asc')->paginate($recInPage);
                    break;
                default:
                    $products = DB::table('products')->paginate($recInPage);
            }

        }else{
            $products = DB::table('products')->paginate($recInPage);
        }

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
