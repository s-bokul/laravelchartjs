<?php

namespace SBokul\LaravelChartJs;

class GraphHandler
{

    public static function generateGraph($name, $type, $size, $labels, $dataSet, $options)
    {
        $chart = app()->chartjs
            ->name($name)
            ->type($type)
            ->size($size)
            ->labels($labels)
            ->datasets($dataSet)
            ->options($options);
        return view('chart-template::viewer', compact('chart'));
    }
}