<?php

namespace Jhmilan\SqualoLaravel;

use Services\SqualoRemoraService;

class SqualoLaravelServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/squalo.php' => config_path('squalo.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('SqualoLaravel', function ($app) {
            return new SqualoRemoraService();
        });
    }
}