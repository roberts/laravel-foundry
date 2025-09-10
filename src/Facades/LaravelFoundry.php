<?php

namespace Roberts\LaravelFoundry\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Roberts\LaravelFoundry\LaravelFoundry
 */
class LaravelFoundry extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Roberts\LaravelFoundry\LaravelFoundry::class;
    }
}
