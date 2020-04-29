<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Catalog;
use App\Menu;
use App\Information;
use App\Extras;

class BaseComposer
{
    public function compose(View $view){

        /*Categories items*/
        $categories = Catalog::orderBy('name')->get();
        /*Main menu items*/
        $menus = Menu::orderBy('id')->get();
        /*Information items*/
        $information = Information::orderBy('id')->get();
        /*Extras items*/
        $extras = Extras::orderBy('id')->get();

        $view->with('result', $categories)
             ->with('menus', $menus)
             ->with('information', $information)
             ->with('extras', $extras);
    }
}
