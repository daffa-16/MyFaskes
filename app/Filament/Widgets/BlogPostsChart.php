<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Tren Perkembangan Faskes';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Team MyFaskes created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
