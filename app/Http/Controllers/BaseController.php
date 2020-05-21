<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\DealOfTheDay;
use DB;
use Carbon\Carbon;
use App\Catalog;
use App\Orders;

class BaseController extends Controller
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

        $latestProducts = Product::orderBy('id', 'desc')->take(2)->get();

        $booksForChildrens = Product::whereIn('catalog_id', function($query){
            $query->select('id')
                ->from(with(new Catalog)->getTable())
                ->whereIn('parent_id', ['6']);
        })->orderBy('id', 'desc')->take(6)->get();

        $booksForChildrens = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($booksForChildrens);


        $booksComputerLiterature = Product::whereIn('catalog_id', function($query){
            $query->select('id')
                ->from(with(new Catalog)->getTable())
                ->whereIn('parent_id', ['2']);
        })->orderBy('id', 'desc')->take(10)->get();

        $booksComputerLiterature = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($booksComputerLiterature);

        $newArrivals = Product::orderBy('id', 'desc')->take(10)->get();

        $newArrivals = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($newArrivals);

        $booksArtAndCulture = Product::whereIn('catalog_id', function($query){
            $query->select('id')
                ->from(with(new Catalog)->getTable())
                ->whereIn('parent_id', ['7']);
        })->orderBy('id', 'desc')->take(8)->get();

        $booksArtAndCulture = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($booksArtAndCulture);

        $dealOfTheDayProducts = DB::table('deal_of_the_days')
                                    ->where('deal_of_the_days.status','LIKE', '%active%')
                                    ->where('finaldate','>=', Carbon::now('Europe/Minsk'))
                                    ->join('products', 'products.id', '=', 'deal_of_the_days.product_id')
                                    ->get();


        $tempArray = array();
        $orders = Orders::select('body')->get()->each(function($item, $value) use(&$tempArray){

            $pieces = explode(",", $item->body);
            $piecesLength = count($pieces);

            for((int)$i = 0; $i<$piecesLength-1; $i++){
                $m = explode(":", $pieces[$i]);
                array_push($tempArray,$m[0] );
            }
        });

        $arrayCountValues = array_count_values($tempArray);
        arsort($arrayCountValues);
        $output = array_slice($arrayCountValues, 0, 6, true);
        //dd($output);
        $bestSailingProductsIds = array_keys($output);
        //dd($bestSailingProductsIds);
        $bestSailingProducts = Product::whereIn('id', $bestSailingProductsIds)->get();

        $bestSailingProductsOutput = array();
        foreach ($bestSailingProductsIds as $key => $value){
            foreach ($bestSailingProducts as $product){
                if($value == $product->id){
                    array_push($bestSailingProductsOutput,$product);
                }
            }
        }

        //dd($bestSailingProductsOutput);
        $bestSailingProductsOutput = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($bestSailingProductsOutput);


        return view('index', compact('latestProducts',
                                                'dealOfTheDayProducts',
                                                'booksForChildrens',
                                                'booksArtAndCulture',
                                                'newArrivals',
                                                'booksComputerLiterature',
                                                'bestSailingProductsOutput'));
    }
}
