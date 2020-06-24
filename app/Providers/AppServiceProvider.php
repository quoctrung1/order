<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\AboutInterface;
use App\Repositories\Repos\AboutRepository;
use App\Repositories\Interfaces\ProductInterface;
use App\Repositories\Repos\ProductRepository;
use App\Repositories\Interfaces\ProductDetailInterface;
use App\Repositories\Repos\ProductDetailRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Dang ky cac Repositories va Interfaces 
        $this->app->bind(
            AboutInterface::class,
            AboutRepository::class
        );
        $this->app->bind(
            ProductInterface::class,
            ProductRepository::class
        );
        $this->app->bind(
            ProductDetailInterface::class,
            ProductDetailRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
