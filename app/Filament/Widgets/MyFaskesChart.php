<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class MyFaskesChart extends ChartWidget
{
    protected static ?string $heading = 'Perkembangan Penggunaan Layanan Kesehatan';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Team MyFaskes Created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
