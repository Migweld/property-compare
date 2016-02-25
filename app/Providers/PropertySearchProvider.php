<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PropertySearch;

class PropertySearchProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\Contracts\PropertyCompareContract', function(){

            return new PropertySearch();

        });
    }


    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides()
    {
        return ['App\Services\Contracts\PropertyCompareContract'];
    }
}
