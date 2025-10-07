<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\RichEditor\TextColor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;


class OrderTable extends TableWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(fn(): Builder => Order::query())->heading('Recent Orders')
            ->columns([
                TextColumn::make('user.name'),
                TextColumn::make('order_no'),
                TextColumn::make('type'),
                TextColumn::make('status'),
                TextColumn::make('total_amount'),
                TextColumn::make('created_at')->dateTime()

            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
