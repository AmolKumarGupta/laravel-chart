<?php

namespace Amol\LaravelChart;

use Illuminate\Contracts\View\View;

class LaravelChart
{
    public string $type = 'line';

    /**
     * @var array<string, mixed>
     */
    public array $data = [
        'labels' => [],
        'datasets' => [],
    ];

    /**
     * @var array<string, mixed>
     */
    public array $options = [];

    /**
     * @var array<string, mixed>
     */
    public array $size = ['width' => null, 'height' => null];

    /**
     * @var array<string, mixed>
     */
    public array $plugins = [];

    public function __construct(public string $name = '') {}

    public function make(string $name): self
    {
        return new self($name);
    }

    public function type(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function data(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @param  array<string, mixed>  $options
     */
    public function options(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function size(mixed $width = null, mixed $height = null): self
    {
        $this->size = ['width' => $width, 'height' => $height];

        return $this;
    }

    /**
     * @param  array<string, mixed>  $plugins
     */
    public function plugins(array $plugins): self
    {
        $this->plugins = $plugins;

        return $this;
    }

    public function render(): View
    {
        /** @var view-string $view */
        $view = 'laravel-chart::chart';

        return view($view, ['chart' => $this]);
    }
}
