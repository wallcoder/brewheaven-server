<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    TextInput::make('name')
                        ->required()->placeholder("Enter Name"),
                    TextInput::make('email')
                        ->label('Email address')
                        ->email()
                        ->required(),
                    Select::make('roles')->relationship('roles', 'name')->multiple()->preload(),
                    DateTimePicker::make('email_verified_at'),
                    TextInput::make('password')
                        ->password()
                        ->required(),
                ])->columnSpanFull()->columns(3),

            ]);
    }
}
