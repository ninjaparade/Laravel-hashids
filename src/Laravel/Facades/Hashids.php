<?php

namespace Ninjaparade\Hasids\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Hashids extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'ninjaparade.hashids';
    }
}
