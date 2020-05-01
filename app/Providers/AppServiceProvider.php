<?php

namespace App\Providers;

use GuzzleHttp\Client;
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
        // Utiliza el patron de diseño singleton
        $this->app->singleton('GuzzleHttp\Client', function ()
        {
            return new Client([
        // Base URI is used with relative requests
                'base_uri' => 'http://localhost:8085',
        // You can set any number of default request options.

            ]);
            # code...
        });
        //
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
