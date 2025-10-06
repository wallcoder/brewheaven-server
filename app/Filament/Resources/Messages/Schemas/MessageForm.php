<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                TextInput::make('name')->placeholder('Enter Name')
                    ->required(),
                TextInput::make('email')
                    ->placeholder('')
                    ->label('Email address')
                    ->email()
                    ->required(),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                ])->columns(3)->columnSpanFull()

            ]);
    }
}
