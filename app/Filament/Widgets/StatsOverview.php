<?php

namespace App\Filament\Widgets;

use App\Models\Item;
use App\Models\Payment;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {

        $items = Item::count();
        $users = User::count();

        $revenue = Payment::where('status', 'success')->sum('amount');
        return [
            Stat::make('Items', $items),
            Stat::make('Users', $users),
            Stat::make('Revenue', $revenue)
        ];
    }
}
