<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Str;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $env = Str::contains(config('app.url'), 'staging')
            ? 'staging'
            : config('app.env');

        return [
            Stat::make('Active Users', User::count()),
            Stat::make('Environment', Str::title($env)),
            Stat::make('Logged in as', auth()->user()->email),
        ];
    }
}
