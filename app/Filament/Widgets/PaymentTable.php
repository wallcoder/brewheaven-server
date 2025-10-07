<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\RichEditor\TextColor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;


class PaymentTable extends TableWidget
{
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Payment::query())
            ->columns([
                TextColumn::make('order.user.email')->label('Email'),
                TextColumn::make('order.user.name')->label('Name'),
                TextColumn::make('order.order_no'),
                TextColumn::make('amount'),
                TextColumn::make('status'),
                TextColumn::make('paid_at'),
                TextColumn::make('created_at')
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
