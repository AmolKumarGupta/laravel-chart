<?php 
    use Illuminate\Support\Str;
    
    $id = (string) Str::slug($chart->name, '_');
    $width = $chart->size['width'];
    $height = $chart->size['height'];
?>

@once
    <script 
        src="https://cdn.jsdelivr.net/npm/chart.js@4.5/dist/chart.umd.min.js" 
        integrity="sha256-SERKgtTty1vsDxll+qzd4Y2cF9swY9BCq62i9wXJ9Uo=" crossorigin="anonymous"
    ></script>

    <script 
        src="https://cdn.jsdelivr.net/npm/luxon@2.5.2/build/global/luxon.min.js" 
        integrity="sha256-QZJcnzP3YanJB9X6rGZ/u4IdwDFYOQgk/GHlbchxLxU=" crossorigin="anonymous"
    ></script>

    <script 
        src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.3/dist/chartjs-adapter-luxon.umd.min.js" 
        integrity="sha256-qk+I9RaF57Ium9VLcn0ZYWjuhbjOXOCCwBl+xnaXa1s=" crossorigin="anonymous"
    ></script>
@endonce

<canvas id="{{ $id }}" width="{{ $width }}" height="{{ $height }}">
    <script>
        (function () {
            "use strict"
            const eleId = @js($id);

            const init = function () {
                const element = document.querySelector(`#${eleId}`);

                const data = {
                    type: @js($chart->type),
                    data: @js($chart->data),
                    options: @js((object) $chart->options),
                    <?php // plugins: @js($chart->plugins) ?>
                };

                new Chart(element, data);
            }

            if (document.readyState !== 'loading') {
                init();
            } else {
                document.addEventListener("DOMContentLoaded", init);
            }
        })();
    </script>
</canvas>