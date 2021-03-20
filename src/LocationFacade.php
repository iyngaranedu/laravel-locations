<?php

namespace Iyngaran\Location;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iyngaran\Location\Location
 */
class LocationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-locations';
    }
}
