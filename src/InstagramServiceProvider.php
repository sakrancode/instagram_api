<?php

namespace Sakrancode\InstagramApi;

use Illuminate\Support\ServiceProvider;

class InstagramServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        // $this->app->make('Sakrancode\InstagramApi\Http\Controllers\ApiController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'sakrancode.instagram-api');
        $this->mergeConfigFrom(__DIR__.'/config/instagram.php', 'sakrancode.instagram-api');
        /**
         * Publish config using This command :
         * vendor:publish --provider="JohnDoe\BlogPackage\BlogPackageServiceProvider" --tag="config"
         * @return void
         */
        #
        if ($this->app->runningInConsole()) {
            $this->publishes([
              __DIR__.'/config/instagram.php' => config_path('instagram.php'),
            ], 'config');
        }
    }
}
