<?php

namespace App\Providers;

use App\Measurement;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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

        View()->composer('*', function($view){
            $measurement= Measurement::all();

            $view->with(compact('measurement'));
        });
    }
}
