<?php

namespace Faisal50x\LaravelJob\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Faisal50x\LaravelJob\LaravelJob
 */
class LaravelJob extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-job';
    }
}
