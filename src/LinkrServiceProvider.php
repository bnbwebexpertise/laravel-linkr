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
            $client = new LinkrClient(config('linkr.url'), config('linkr.key'), max(3, intval(config('linkr.length'))));
            $proxy = config(config('linkr.proxy.url_key'));
            $proxyUser = config(config('linkr.proxy.user_key'));
            $proxyPassword = config(config('linkr.proxy.password_key'));

            if ( ! empty($proxy)) {
                LinkrClient::setHttpProxy($proxy, $proxyUser, $proxyPassword);
            }

            return $client;
        });
    }
}
