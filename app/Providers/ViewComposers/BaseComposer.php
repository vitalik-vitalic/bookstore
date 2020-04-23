<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Catalog;

class BaseComposer
{
    public function compose(View $view){
        $categories = Catalog::orderBy('name')->get();
        $view->with('result', $categories);
    }
}
