<?php

namespace App\Providers;

use App\ProductType;
use App\Service;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('header', function ($view) {
            $product_type = ProductType::all();
            $view->with('product_type',$product_type);
        });
        view()->composer('header', function ($view) {
            $service = Service::all();
            $view->with('service',$service);
        });
        view()->composer('footer', function ($view) {
            $service = Service::paginate(5);
            $view->with('service',$service);
        });
    }
    public function register()
    {
        //
    }
}
