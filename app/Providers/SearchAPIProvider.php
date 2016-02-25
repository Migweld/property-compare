<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ZooplaSearch;

class SearchAPIProvider extends ServiceProvider
{
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
        $this->app->bind('App\Services\Contracts\SearchAPIContract', function(){

            return new ZooplaSearch();

        });
    }

    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides()
    {
        return ['App\Services\Contracts\SearchAPIContract'];
    }
}
