<?php

namespace Amol\LaravelChart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class LaravelChart extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Amol\LaravelChart\LaravelChart::class;
    }
}
