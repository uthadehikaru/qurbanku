<?php

namespace App\Filament\Resources\AnimalResource\Widgets;

use App\Models\Animal;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AnimalStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total', Animal::count()),
            Stat::make('Tersedia', Animal::where('status', 'available')->count()),
            Stat::make('Terjual', Animal::where('status', 'sold')->count()),
        ];
    }
}
