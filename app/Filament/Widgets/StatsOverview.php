<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
             Stat::make('Fasilitas Kesehatan Terdaftar', '10k+'),
            Stat::make('Kepuasan Pengguna', '90%'),
            Stat::make('Wilayah Terjangkau', '34'),
        ];
    }
}
