# Laravel 5.5+ Linkr Client

This package allows to generate short links with Linkr server.


## Installation

You can install this package via composer. Laravel 5.5+ auto discovers the service provider.

    composer require bnbwebexpertise/laravel-linkr


## Configuration

You can customize this package behavior by publishing the configuration file :

    php artisan vendor:publish --provider='Bnb\Laravel\Linkr\LinkrServiceProvider'

Settings can be changed using `.env` files :

```
LINKR_URL=https://my.linkr.server.com
LINKR_KEY=YourLinkrApiKey
LINKR_PROXY_CONFIG_KEY=services.proxy.http
LINKR_PROXY_USER_CONFIG_KEY=services.proxy.http_user
LINKR_PROXY_PASSWORD_CONFIG_KEY=services.proxy.http_password
```


## Usage

```php

//
//
// Via app()

$linkr = app('linker');

$link = $linkr->shorten(...);

$link = $linkr->details(...);

$linkr->delete(...);

//
//
// Via Facade

$link = Linkr::shorten(...);

$link = Linkr::details(...);

Linkr::delete(...);

```

See [Linkr page](https://github.com/bnbwebexpertise/linkr-php-client) for API details.
