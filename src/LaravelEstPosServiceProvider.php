<?php

namespace AhmetBedir\LaravelEstPos;

use Illuminate\Support\ServiceProvider;

class LaravelEstPosServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Config file publishes
        $this->publishConfig();
    }

    public function register()
    {
        $this->app->singleton('estpos', function ($app) {
            $configRepository = $app['Illuminate\Config\Repository'];
            return new \AhmetBedir\LaravelEstPos\EstPos($configRepository);
        });

        // Merge Config
        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel-estpos.php',
            'laravel-estpos'
        );
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-estpos.php' => config_path('laravel-estpos.php'),
        ], 'laravel-estpos:config');
    }
}
