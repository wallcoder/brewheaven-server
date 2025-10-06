<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    Select::make('user_id')
                        ->relationship('user', 'name')
                        ->required(),

                    TextInput::make('order_no')->placeholder("Enter Order Number")
                        ->required(),
                    Select::make('type')
                        ->options(['pickup' => 'Pickup', 'delivery' => 'Delivery'])
                        ->required(),
                    Select::make('status')
                        ->options([
                            'pending' => 'Pending',
                            'processing' => 'Processing',
                            'completed' => 'Completed',
                            'cancelled' => 'Cancelled',
                            'refunded' => 'Refunded',
                        ])
                        ->default('pending')
                        ->required(),
                    TextInput::make('total_amount')->placeholder('Enter Total Amount')
                        ->required()
                        ->numeric(),
                    Textarea::make('shipping_address')->placeholder('Enter Shipping Address')
                        ->required()
                        ->columnSpanFull(),
                    Textarea::make('billing_address')->placeholder("Enter Billing Address")
                        ->required()
                        ->columnSpanFull(),

                ])->columnSpanFull()->columns(3)

            ]);
    }
}
