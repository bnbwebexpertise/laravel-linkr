<?php

namespace Bnb\Laravel\Linkr\Facades;

use Bnb\Linkr\ShortUrl;
use Illuminate\Support\Facades\Facade;

/**
 * @method static ShortUrl short(string $message)
 * @method static ShortUrl info(string $alias)
 * @method static void delete(string $alias)
 *
 * @see \Bnb\Linkr\Client
 */
class Linkr extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'linkr';
    }
}
