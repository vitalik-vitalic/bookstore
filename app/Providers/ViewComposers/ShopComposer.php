<?php


namespace App\Providers\ViewComposers;

use App\Product;
use Illuminate\Contracts\View\View;
use App\Catalog;

class ShopComposer
{
    public function compose(View $view){

        /*Categories items*/
        $categories = Catalog::orderBy('name')->get();
        $tempArray2 = array();

        foreach ($categories as $category) {

            $isCatalogWithoutSubfolders = true;
            foreach ($categories as $two){
                if($category->id == $two->parent_id){
                    $isCatalogWithoutSubfolders = false;
                }
            }

                if($isCatalogWithoutSubfolders){
                    $productsTotal = Product::where('catalog_id', $category->id)->count();
                    array_push($tempArray2,array($category->name => $productsTotal));
                }else{
                    $tempArray = array();
                    $catalogItems = Catalog::where('parent_id',$category->id)->get();

                    foreach ($catalogItems as $item){
                        array_push($tempArray,$item->id);
                    }

                    $productsTotal = Product::whereIn('catalog_id', $tempArray)->count();

                    array_push($tempArray2,array($category->name => $productsTotal));

                }
        }

        $publisher = Product::select('publisher')->distinct()->orderBy('publisher', 'asc')->get();
        $productsAll = Product::all();
        $tempArray3 = array();

        foreach ($publisher as $itemOne) {

            $counter = 0;
            foreach ($productsAll as $itemTwo) {

                if($itemOne->publisher == $itemTwo->publisher){
                    $counter += 1;
                }
            }
            array_push($tempArray3,array($itemOne->publisher => $counter));
        }

        //dd($tempArray3);

         $view->with('categories', $categories)
              ->with('publisher', $publisher)
              ->with('productsTotal', $tempArray2)
              ->with('publishersTotal', $tempArray3);
    }
}
