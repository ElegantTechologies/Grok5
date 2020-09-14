<?php

namespace ElegantTechnologies\Grok5\Facades;

use Illuminate\Support\Facades\Facade;

class Grok5 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'grok5';
    }
}
