<?php

namespace Magarrent\FaviconGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Magarrent\FaviconGenerator\FaviconGenerator
 */
class FaviconGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Magarrent\FaviconGenerator\FaviconGenerator::class;
    }
}
