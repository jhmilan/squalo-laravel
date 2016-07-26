<?php

namespace Jhmilan\SqualoLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class SqualoLaravel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'SqualoLaravel';
    }
}
