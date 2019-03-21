<?php

namespace Bnb\Laravel\Linkr;

use Bnb\Linkr\Client as LinkrClient;
use Illuminate\Support\ServiceProvider;

class LinkrServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/linkr.php' => config_path('linkr.php')
        ], 'config');
    }


    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/linkr.php', 'linkr');

        $this->app->singleton('linkr', function () {
            return new LinkrClient(config('linkr.url'), config('linkr.key'));
        });
    }
}