<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class CategoriesForShopServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('shop', 'App\Providers\ViewComposers\ShopComposer');
    }
}
