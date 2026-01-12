
## Installation

```sh
composer require amol/laravel-chart
```

## Sample

```php
<?php 
    $chart = \Amol\LaravelChart\Facades\LaravelChart::make('My Chart')
        // ->type('line')
        ->type('bar')
        ->data([
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
            'datasets' => [
                [
                    'label' => 'INR',
                    'data' => [10, 44, 8, 20, 34, 88, 99, 199]
                ],
                [
                    'label' => 'USD',
                    'data' => [20, 34, 88, 10, 44, 8, 100, 8]
                ],
            ]
        ])
        ->size(height: '200', width: 400);
?>

<div>
    <x-laravel-chart-component :chart="$chart" />
</div>
```