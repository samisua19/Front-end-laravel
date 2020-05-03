<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\HttpModel;



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
        $this->app->singleton('App\User', function ()
        {
            return new User();
            # code...
        });


        $this->app->singleton('App\HttpModel', function ()
        {
            return new HttpModel();
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
