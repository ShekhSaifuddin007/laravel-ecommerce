<?php

namespace App\Providers;

use App\Models\Category;
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
        view()->composer(['front.master', 'front.includes.hero-section', 'front.includes.header', 'front.includes.mini-cart'], function($view) {
            $view->with('categories', Category::latest()->where('publication_status', 1)->get());
            $view->with('cartProducts', Cart::content());
        });
    }
}
