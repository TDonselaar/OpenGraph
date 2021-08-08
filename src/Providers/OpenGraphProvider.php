<?php

namespace tdonselaar\OpenGraph\Providers;

use Illuminate\Support\ServiceProvider;

class OpenGraphProvider extends ServiceProvider
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
        $this->app->bind('OpenGraph', function () {
            return new \tdonselaar\OpenGraph\OpenGraph();
        });
    }
}
