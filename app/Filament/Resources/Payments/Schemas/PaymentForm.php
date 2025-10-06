<?php

namespace App\Filament\Resources\Payments\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                     Select::make('order_id')
                    ->relationship('order', 'id')
                    ->required(),
                Select::make('method')
                    ->options(['razorpay' => 'Razorpay', 'stripe' => 'Stripe'])
                    ->required(),
                TextInput::make('amount')->placeholder("Enter Amount")
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'success' => 'Success', 'failed' => 'Failed', 'refunded' => 'Refunded'])
                    ->default('pending')
                    ->required(),
                DateTimePicker::make('paid_at')
                    ->required(),
                ])->columnSpanFull()->columns(3)

            ]);
    }
}
