<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Illuminate\Support\Number;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class OrderSates extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Order', Order::where('status', 'new')->count()),
            Stat::make('Order Processing', Order::where('status', 'processing')->count()),
            Stat::make('Order Shipped', Order::where('status', 'shipped')->count()),
            Stat::make(
                'Average price',
                Number::currency(Order::avg('grand_total') ?? 0, 'ETH')
            ),
        ];
    }
}
