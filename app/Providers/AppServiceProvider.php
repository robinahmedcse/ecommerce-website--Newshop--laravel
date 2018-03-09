<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\SubCategory;
use BD;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
             View::composer('frontEnd.includes.header-bottom',function($view){
              $publishedCategories=Category::where('publicationStatus',1)->get();
            $view->with('publishedCategories',$publishedCategories);
        });
        
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
