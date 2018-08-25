<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Type_Products;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*view()->composer('header',function($view){
            $loai_sp = Type_Products::all();
            $view()->with('loai_sp',$loai_sp);
        });*/
        view()->composer('header',function($view){
            $type_product = Type_Products::all();
            $view->with('type_product',$type_product);
        });
        view()->composer('pages/loai_sanpham',function($view){
            $type_products = Type_Products::all();
            $view->with('type_products',$type_products);
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
