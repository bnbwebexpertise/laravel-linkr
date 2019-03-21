<?php

namespace Bnb\Laravel\Linkr\Facades;

use Illuminate\Support\Facades\Facade;

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
