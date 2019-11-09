<?php

namespace AhmetBedir\LaravelEstPos\Facades;

use Illuminate\Support\Facades\Facade;

class EstPos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'estpos';
    }
}
