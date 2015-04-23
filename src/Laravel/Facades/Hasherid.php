<?php

namespace Ninjaparade\Hasids\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Filesystem extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'ninjaparade.hashids';
    }
}
