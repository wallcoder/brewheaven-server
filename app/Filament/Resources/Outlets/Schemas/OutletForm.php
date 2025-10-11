<?php

namespace App\Filament\Resources\Outlets\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class OutletForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    TextInput::make('name')
                        ->required(),
                    TextInput::make('address')
                        ->required(),
                    TextInput::make('coordinate')
                        ->required(),
                    TimePicker::make('open_time')
                        ->required(),
                    TimePicker::make('close_time')
                        ->required(),
                    TextInput::make('phone')
                        ->tel()
                        ->required(),
                ])->columnSpanFull()->columns(3)

            ]);
    }
}
