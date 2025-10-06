<?php

namespace App\Filament\Resources\Orders\Schemas;

use App\Models\Order;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class OrderInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    TextEntry::make('user_id')
                        ->numeric(),
                    TextEntry::make('order_no'),
                    TextEntry::make('type')
                        ->badge(),
                    TextEntry::make('status')
                        ->badge(),
                    TextEntry::make('total_amount')
                        ->numeric(),
                    TextEntry::make('shipping_address')
                        ->columnSpanFull(),
                    TextEntry::make('billing_address')
                        ->columnSpanFull(),
                    TextEntry::make('deleted_at')
                        ->dateTime()
                        ->visible(fn(Order $record): bool => $record->trashed()),
                    TextEntry::make('created_at')
                        ->dateTime()
                        ->placeholder('-'),
                    TextEntry::make('updated_at')
                        ->dateTime()
                        ->placeholder('-'),

                ])->columnSpanFull()->columns(2)

            ]);
    }
}
