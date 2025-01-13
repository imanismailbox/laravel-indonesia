<?php

namespace Itix\LaravelIndonesia\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Itix\LaravelIndonesia\LaravelIndonesia
 */
class LaravelIndonesia extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Itix\LaravelIndonesia\LaravelIndonesia::class;
    }
}
