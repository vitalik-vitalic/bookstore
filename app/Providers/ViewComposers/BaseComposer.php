<?php

namespace App\Providers\ViewComposers;

use App\Product;
use Illuminate\Contracts\View\View;
use App\Catalog;
use App\MenuTitles;
use App\Information;
use App\Extras;
use DB;

class BaseComposer
{
    public function compose(View $view){

        /*Categories items*/
        $categories = Catalog::orderBy('name')->get();
        /*Main menu items*/
        $menus = MenuTitles::orderBy('id')->where('name', '!=' , 'Blog')->get();
        /*Information items*/
        $information = Information::orderBy('id')->get();
        /*Extras items*/
        $extras = Extras::orderBy('id')->get();

        $arr_obj = \App::make('App\Libs\Cook')->cook_arr();
        $arr_obj = \App::make('App\Libs\DealOfTheDayCheck')->DealOfTheDayCheck($arr_obj);

        $view->with('result', $categories)
             ->with('menus', $menus)
             ->with('information', $information)
             ->with('extras', $extras)
             ->with('arr_obj', $arr_obj);
    }
}
