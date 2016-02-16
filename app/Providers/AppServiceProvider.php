<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\UserInterface',
            'App\Services\UserService'
        );

        $this->app->bind(
            'App\Contracts\TypeService',
            'App\Services\TypeInterface'
        );

        $this->app->bind(
            'App\Contracts\ProductService',
            'App\Services\ProductInterface'
        );

        $this->app->bind(
            'App\Contracts\MediaService',
            'App\Services\MediaInterface'
        );


    }
}
