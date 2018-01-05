<?php

namespace Fixik\VideoDetails;

use Illuminate\Support\ServiceProvider;

class VideoDetailsServiceProvider extends ServiceProvider
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
        // register our controller
        $this->app->singleton(VideoDetails::class, function () {
            return new VideoDetails();
        });
    }
}