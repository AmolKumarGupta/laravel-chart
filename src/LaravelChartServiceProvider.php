<?php

namespace Amol\LaravelChart;

use Amol\LaravelChart\Components\Component;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelChartServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-chart')
            ->hasConfigFile()
            ->hasViewComponent('laravel-chart', Component::class)
            ->hasViews('laravel-chart');
    }
}
