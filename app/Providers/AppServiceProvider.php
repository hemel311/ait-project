<?php

namespace App\Providers;

use App\Models\admin\course\category\Category;
use Illuminate\Support\ServiceProvider;

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
        view()->composer(['front.layout.header.menu.mainmenu'],function ($view){
           $view->with('categories',Category::where('status',1)->get());
        });
    }
}
