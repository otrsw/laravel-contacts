<?php

namespace Otrsw\LaravelContacts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Otrsw\LaravelContacts\LaravelContacts
 */
class LaravelContacts extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Otrsw\LaravelContacts\LaravelContacts::class;
    }
}
