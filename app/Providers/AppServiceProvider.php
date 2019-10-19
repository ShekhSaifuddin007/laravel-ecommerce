<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer(['front.master', 'front.includes.hero-section', 'front.includes.header', 'front.includes.mini-cart'], function($view) {
            $view->with('categories', Category::latest()->where('publication_status', 1)->get());
            $view->with('cartProducts', Cart::content());
        });
    }
}
