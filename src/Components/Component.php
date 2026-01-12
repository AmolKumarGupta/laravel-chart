<?php

namespace Amol\LaravelChart\Components;

use Amol\LaravelChart\LaravelChart;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component as BaseComponent;

class Component extends BaseComponent
{
    public function __construct(public LaravelChart $chart) {}

    public function render(): View
    {
        return $this->chart->render();
    }
}
